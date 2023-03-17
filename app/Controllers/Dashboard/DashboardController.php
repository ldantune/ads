<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;

class DashboardController extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Anúncios recentes',
        ];
        return view('Dashboard/Home/index', $data);
    }
}
