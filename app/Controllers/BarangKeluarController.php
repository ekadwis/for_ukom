<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BarangKeluarModel;

class BarangKeluarController extends BaseController
{
    protected $BarangKeluar;

    public function __construct()
    {
        $this->BarangKeluar = new BarangKeluarModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Barang Keluar',
            'result' => $this->BarangKeluar->paginate(10, 'barang'),
            'pager' => $this->BarangKeluar->pager
        ];

        return view('tables/barangkeluar', $data);
    }
}
