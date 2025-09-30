<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;
use App\Entities\Advert;
use App\Requests\AdvertRequest;
use App\Services\AdvertService;
use App\Services\CategoryService;
use CodeIgniter\Config\Factories;

class AdvertsUserController extends BaseController
{
    private AdvertService $advertService;
    private CategoryService $categoryService;
    private AdvertRequest $advertRequest;

    public function __construct()
    {
        $this->advertService = Factories::class(AdvertService::class);
        $this->categoryService = Factories::class(CategoryService::class);
        $this->advertRequest = Factories::class(AdvertRequest::class);
    }
    public function index()
    {
        return view('Dashboard/Adverts/index');
    }

    public function getUserAdverts()
    {
        if (!$this->request->isAJAX()) {
            return redirect()->back();
        }

        $response = [
            'data' => $this->advertService->getAllAdverts(classBtnActions: 'btn btn-sm btn-outline-secondary')
        ];

        return $this->response->setJSON($response);
    }

    public function getUserAdvert()
    {
        if (!$this->request->isAJAX()) {
            return redirect()->back();
        }

        $advertId = $this->request->getGetPost('id');
        $advert = $this->advertService->getAdvertById($advertId);

        $options = [
            'class' => 'form-control',
            'placeholder' => lang('Categories.label_choose_category'),
            'selected' => !(empty($advert->category_id)) ? $advert->category_id : ""
        ];

        $response = [
            'advert' => $advert,
            'situations' => $this->advertService->getDropdownSituations($advert->situation),
            'categories' => $this->categoryService->getMultinivel('category_id', $options)
        ];

        return $this->response->setJSON($response);
    }

    public function updateUserAdvert()
    {
        $this->advertRequest->validateBeforeSave('advert');
        $advertId = $this->request->getGetPost('id');
        $advert = $this->advertService->getAdvertById($advertId);

        $advert->fill($this->removeSpoofingFromRequest());

        $this->advertService->trySaveAdvert($advert);

        return $this->response->setJSON($this->advertRequest->respondWithMessage(message: lang('App.success_saved')));
    }
}
