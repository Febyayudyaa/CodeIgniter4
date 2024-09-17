<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ModelPengembalian;

class Pengembalian extends Controller
{
    public function index()
    {
        $model = new ModelPengembalian();
        $data['pengembalians'] = $model->getPeminjaman(); 
        return view('pengembalian/index', $data);
    }

    public function tambah()
    {
        
        return view('pengembalian/create');
    }

    public function penyimpanan()
    {
        $model = new ModelPengembalian();
    
        // Jika TanggalPeminjaman tidak diisi, gunakan tanggal sekarang
        $tanggalPengembalian = $this->request->getPost('TanggalPengembalian') ?? date('Y-m-d');
    
        $data = [
            'UserID' => $this->request->getPost('UserID'),
            'BukuID' => $this->request->getPost('BukuID'),
            'TanggalPengembalian' => $tanggalPengembalian,
        ];
    
        $model->insert($data);
        return redirect()->to('/pengembalian');
    }
    

    public function edit($PeminjamanID)
    {
        $model = new ModelPengembalian();
        $data['pengembalian'] = $model->find($PeminjamanID);
        return view('pengembalian/edit', $data);
    }

    public function update($PeminjamanID)
    {
        $model = new ModelPengembalian();
        $tanggalPeminjaman = $this->request->getPost('TanggalPengembalian') ?? date('Y-m-d');
        $data = [
            'UserID' => $this->request->getPost('UserID'),
            'BukuID' => $this->request->getPost('BukuID'),
            'TanggalPengembalian' => $tanggalPeminjaman,
        ];
        $model->update($PeminjamanID, $data);
        return redirect()->to('/pengembalian');
    }

    public function delete($PeminjamanID)
    {
        $model = new ModelPengembalian();
        $model->delete($PeminjamanID);
        return redirect()->to('/pengembalian');
    }

}
