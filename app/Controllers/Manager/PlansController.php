<?php

namespace App\Controllers\Manager;

use App\Controllers\BaseController;
use App\Entities\Plan;
use App\Requests\PlanRequest;
use App\Services\PlanService;
use CodeIgniter\Config\Factories;

class PlansController extends BaseController
{
    private $planService;
    private $planRequest;

    public function __construct()
    {
        $this->planService = Factories::class(PlanService::class);
        $this->planRequest = Factories::class(PlanRequest::class);
    }

    public function index()
    {
        return view('Manager/Plans/index');
    }

    public function archived()
    {
        return view('Manager/Plans/archived');
    }

    public function getAll()
    {
        if (!$this->request->isAJAX()) {
            return redirect()->back();
        }

        $response = [
            'data' => $this->planService->getAll()
        ];

        return $this->response->setJSON($response);
    }

    public function getAllArchived()
    {
        if (!$this->request->isAJAX()) {
            return redirect()->back();
        }

        $response = [
            'data' => $this->planService->getAllArchived()
        ];

        return $this->response->setJSON($response);
    }

    public function getRecorrences()
    {
        if (!$this->request->isAJAX()) {
            return redirect()->back();
        }

        $response = [
            'recorrences' => $this->planService->getRecorrences()
        ];

        return $this->response->setJSON($response);
    }

    public function create()
    {
        $this->planRequest->validateBeforeSave('plan');

        $plan = new Plan($this->removeSpoofingFromRequest());

        $this->planService->trySavePlan($plan);

        return $this->response->setJSON($this->planRequest->respondWithMessage(message: lang('App.success_saved')));
    }

    public function getPlanInfo()
    {
        if (!$this->request->isAJAX()) {
            return redirect()->back();
        }

        $plan = $this->planService->getPlanById($this->request->getGetPost('id'));

        $response = [
            'plan' => $plan,
            'recorrences' => $this->planService->getRecorrences($plan->recorrence)
        ];

        return $this->response->setJSON($response);
    }
    
    public function update()
    {
        $this->planRequest->validateBeforeSave('plan');

        $plan = $this->planService->getPlanById($this->request->getGetPost('id'));

        $plan->fill($this->removeSpoofingFromRequest());

        $this->planService->trySavePlan($plan);

        return $this->response->setJSON($this->planRequest->respondWithMessage(message: lang('App.success_saved')));
    }

    public function archive()
    {
        if (!$this->request->isAJAX()) {
            return redirect()->back();
        }

        $this->planService->tryArchivePlan($this->request->getGetPost('id'));

        return $this->response->setJSON($this->planRequest->respondWithMessage(message: lang('App.success_archived')));
    }

    public function recover()
    {
        if (!$this->request->isAJAX()) {
            return redirect()->back();
        }

        $this->planService->tryRecover($this->request->getGetPost('id'));

        return $this->response->setJSON($this->planRequest->respondWithMessage(message: lang('App.success_recovered')));
    }

    public function delete()
    {
        if (!$this->request->isAJAX()) {
            return redirect()->back();
        }

        $this->planService->tryDelete($this->request->getGetPost('id'));

        return $this->response->setJSON($this->planRequest->respondWithMessage(message: lang('App.success_deleted')));
    }

}
