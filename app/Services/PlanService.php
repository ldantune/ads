<?php

namespace App\Services;

use App\Models\PlanModel;
use App\Entities\Plan;
use CodeIgniter\Config\Factories;

class PlanService
{

  private $planModel;

  public function __construct()
  {
    $this->planModel = Factories::models(PlanModel::class);
  }

  public function getAllPlans()
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

      //TODO: gerenciar a criação/atulização na gerencianet

      if ($plan->hasChanged()) {
        if($plan->is_highlighted == 1){
          $plan->is_highlighted = true;
        }
        $this->planModel->protect($protect)->save($plan);
      }
    } catch (\Exception $e) {
      //Logar os erros
      //die("Erro ao salvar os dados da categoria");
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
}
