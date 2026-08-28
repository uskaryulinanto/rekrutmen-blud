<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class DashboardController extends BaseController
{
    public function index()
    {
        $user = auth()->user();

        $data = [
            'title' => 'Dashboard Pelamar',
            'user'  => $user,
        ];

        return view('dashboard/index', $data);
    }
}
