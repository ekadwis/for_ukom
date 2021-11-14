<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BarangModel;

class BarangController extends BaseController
{
    protected $BarangModel;

    public function __construct()
    {
        $this->BarangModel = new BarangModel();
    }
    public function index()
    {
        $query = $this->BarangModel->query('SELECT newkodebarang()');
        $kodebarang = $query->getRow();
        foreach ($kodebarang as $newkodebarang);

        $data = [
            'title' => 'Data Barang',
            'result' => $this->BarangModel->paginate(8, 'barang'),
            'pager' => $this->BarangModel->pager,
            'newkodebarang' => $newkodebarang
        ];

        return view('tables/barang', $data);
    }

    public function tambahbarang()
    {
        $query = $this->request->getFile('image');
        if ($query->getError() == 4) {
            $newname = 'default.jpg';
        } else {
            $newname = $query->getRandomName();
            $query->move('img', $newname);
        }

        $data = [
            'id_barang' => $this->request->getVar('id_barang'),
            'nama_barang' => $this->request->getVar('nama_barang'),
            'spesifikasi' => $this->request->getVar('spesifikasi'),
            'lokasi' => $this->request->getVar('lokasi'),
            'kondisi' => $this->request->getVar('kondisi'),
            'jumlah_barang' => $this->request->getVar('jumlah_barang'),
            'sumber_dana' => $this->request->getVar('sumber_dana'),
            'image' =>  $newname
        ];

        $this->BarangModel->insert($data);

        return redirect()->to('/barang');
    }


    public function delete($id = null)
    {
        $this->BarangModel->where(array('id_barang' => $id))->delete();

        return redirect()->to('/barang');
    }

    public function edit($id)
    {
        $result = $this->BarangModel->find($id);

        $data = [
            'title' => 'Edit Form',
            'result' => $result
        ];

        return view('aksi/edit', $data);
    }

    public function save()
    {

        $query = $this->request->getFile('image');

        if ($query->getError() == 4) {
            $newnama = 'default.jpg';
        } else {
            $newnama = $query->getRandomName();
            $query->move('img', $newnama);
        }

        $data = [
            'id_barang' => $this->request->getVar('id_barang'),
            'nama_barang' => $this->request->getVar('nama_barang'),
            'spesifikasi' => $this->request->getVar('spesifikasi'),
            'kondisi' => $this->request->getVar('kondisi'),
            'lokasi' => $this->request->getVar('lokasi'),
            'jumlah_barang' => $this->request->getVar('jumlah_barang'),
            'sumber_dana' => $this->request->getVar('sumber_dana'),
            'image' => $newnama
        ];

        $this->BarangModel->save($data);

        return redirect()->to('/barang');
    }

    public function detail($id)
    {

        $data = [
            'title' => 'Detail',
            'result' => $this->BarangModel->find($id)
        ];

        return view('aksi/detail', $data);
    }
}
