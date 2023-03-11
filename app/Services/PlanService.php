<?php

namespace App\Services;

use App\Models\PlanModel;
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
}
