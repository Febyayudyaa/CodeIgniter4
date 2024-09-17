<?php

namespace App\Controllers;

use App\Models\BukuModel;
use CodeIgniter\Controller;

class Buku extends Controller
{
    public function index()
    {
        $model = new BukuModel();
        $data['bukus'] = $model->findAll();
        echo view('buku/index', $data);
    }

    public function create()
    {
        $data = [];
        echo view('buku/create', $data);
    }

    public function simpanan()
    {
        $model = new BukuModel();
        $data = [
            'Judul' => $this->request->getPost('Judul'),
            'Penulis' => $this->request->getPost('Penulis'),
            'Penerbit' => $this->request->getPost('Penerbit'),
            'TahunTerbit' => $this->request->getPost('TahunTerbit'),
        ];
        $model->insert($data);
        return redirect()->to('/buku');
    }

    public function update($BukuID)
    {
        $model = new BukuModel();
        $data['buku'] = $model->find($BukuID);
        echo view('buku/update', $data);
    }

    public function edit($BukuID)
    {
        $model = new BukuModel();
        $data = [
            'Judul' => $this->request->getPost('Judul'),
            'Penulis' => $this->request->getPost('Penulis'),
            'Penerbit' => $this->request->getPost('Penerbit'),
            'TahunTerbit' => $this->request->getPost('TahunTerbit'),
        ];
        $model->update($BukuID, $data);
        return redirect()->to('/buku');
    }

    public function hapus($BukuID)
    {
        $model = new BukuModel();
        $model->delete($BukuID);
        return redirect()->to('/buku');
    }
}