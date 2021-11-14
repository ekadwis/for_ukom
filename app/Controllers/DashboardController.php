<?php

namespace App\Controllers;

use App\Models\ListBarangModel;
use App\Models\ListUserModel;
use App\Controllers\BaseController;

class DashboardController extends BaseController
{
    protected $ListUserModel;
    protected $ListBarangModel;

    public function __construct()
    {
        $this->ListUserModel = new ListUserModel();
        $this->ListBarangModel = new ListBarangModel();
    }

    public function index()
    {

        $data = [
            'result_barang' => $this->ListBarangModel->findAll(),
            'result_user' => $this->ListUserModel->findAll(),
            'title' => 'Dashboard'
        ];

        return view('dashboard', $data);
    }
}
