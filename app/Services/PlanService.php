<?php

namespace App\Services;

use App\Models\PlanModel;
use App\Entities\Plan;
use CodeIgniter\Config\Factories;

class PlanService
{

  private $planModel;
  private $gerencianetService;

  public function __construct()
  {
    $this->planModel = Factories::models(PlanModel::class);
    $this->gerencianetService = Factories::class(GerencianetService::class);
  }

  public function getAll()
  {
    $plans = $this->planModel->findAll();

    $data = [];

    foreach ($plans as $plan) {

      $btnEdit = form_button(
        [
          'data-id' => $plan->id,
          'id' => 'updatePlanBtn',
          'class' => 'btn btn-primary btn-sm'
        ],
        lang('App.btn_edit')
      );

      $btnArchive = form_button(
        [
          'data-id' => $plan->id,
          'id' => 'archivePlanBtn',
          'class' => 'btn btn-info btn-sm'
        ],
        lang('App.btn_archive')
      );

      $data[] = [
        'code' => $plan->plan_id,
        'name' => $plan->name,
        'is_highlighted' => $plan->isHighlighted(),
        'details' => $plan->details(),
        'actions' => $btnEdit . ' ' . $btnArchive
      ];
    }

    return $data;
  }

  public function getAllArchived()
  {
    $plans = $this->planModel->onlyDeleted()->findAll();

    $data = [];

    foreach ($plans as $plan) {

      $btnRecover = form_button(
        [
          'data-id' => $plan->id,
          'id' => 'recoverPlanBtn',
          'class' => 'btn btn-primary btn-sm'
        ],
        lang('App.btn_recover')
      );

      $btnDelete = form_button(
        [
          'data-id' => $plan->id,
          'id' => 'deletePlanBtn',
          'class' => 'btn btn-danger btn-sm'
        ],
        lang('App.btn_delete')
      );

      $data[] = [
        'code' => $plan->plan_id,
        'name' => $plan->name,
        'is_highlighted' => $plan->isHighlighted(),
        'details' => $plan->details(),
        'actions' => $btnRecover . ' ' . $btnDelete
      ];
    }

    return $data;
  }

  public function getRecorrences(string $recorrence = null): string
  {
    $options = [];
    $selected = [];

    $options = [
      ''                      => lang('Plans.label_recorrence'),
      Plan::OPTION_MONTHLY    => lang('Plans.text_monthly'),
      Plan::OPTION_QUARTERLY  => lang('Plans.text_quarterly'),
      Plan::OPTION_SEMESTER   => lang('Plans.text_semester'),
      Plan::OPTION_YEARLY     => lang('Plans.text_yearly'),
    ];

    //Estou criando um plano?
    if (is_null($recorrence)) {
      return form_dropdown('recorrence', $options, $selected, ['class' => 'form-control']);
    }

    //Estamos efetivamente editando um plano....
    $selected[] = match ($recorrence) {
      Plan::OPTION_MONTHLY    => Plan::OPTION_MONTHLY,
      Plan::OPTION_QUARTERLY  => Plan::OPTION_QUARTERLY,
      Plan::OPTION_SEMESTER   => Plan::OPTION_SEMESTER,
      Plan::OPTION_YEARLY     => Plan::OPTION_YEARLY,
      default => throw new \InvalidArgumentException("Unsupported {$recorrence}")
    };

    return form_dropdown('recorrence', $options, $selected, ['class' => 'form-control']);
  }

  public function trySavePlan(Plan $plan, bool $protect = true)
  {
    try {

      $this->createOrUpdateOnGerencianet($plan);

      if ($plan->hasChanged()) {
        if($plan->is_highlighted == 1){
          $plan->is_highlighted = true;
        }
        $this->planModel->protect($protect)->save($plan);
      }
    } catch (\Exception $e) {
      log_message('error', '[ERROR] {exception}', ['exception' => $e->getMessage()]);
      die($e->getMessage());
    }
  }

  public function getPlanById(int $id, bool $withDeleted = false)
  {
    $plan = $this->planModel->withDeleted($withDeleted)->find($id);

    if (is_null($plan)) {
      throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound('Plan not found');
    }

    return $plan;
  }

  public function tryArchivePlan(int $id)
  {
    try {

      $plan = $this->getPlanById($id);

      $this->planModel->delete($plan->id);

    } catch (\Exception $e) {
      log_message('error', '[ERROR] {exception}', ['exception' => $e->getMessage()]);
      die($e->getMessage());
    }
  }

  public function tryRecover(int $id)
  {
    try {

      $plan = $this->getPlanById($id, withDeleted: true);

      $plan->recover();

      $this->planModel->protect(false)->save($plan);

    } catch (\Exception $e) {
      log_message('error', '[ERROR] {exception}', ['exception' => $e->getMessage()]);
      die($e->getMessage());
    }
  }

  public function tryDelete(int $id){
    try {

      $plan = $this->getPlanById($id, withDeleted: true);

      $this->gerencianetService->deletePlan($plan->plan_id);

      $this->planModel->delete($plan->id, purge: true);

    } catch (\Exception $e) {

      log_message('error', '[ERROR] {exception}', ['exception' => $e->getMessage()]);
      die($e->getMessage());
      
    }
  }

  private function createOrUpdateOnGerencianet(Plan $plan)
  {
    if(empty($plan->id)){
      return $this->gerencianetService->createPlan($plan);
    }

    if($plan->hasChanged('name')){
      return $this->gerencianetService->updatePlan($plan);
    }
  }
}
