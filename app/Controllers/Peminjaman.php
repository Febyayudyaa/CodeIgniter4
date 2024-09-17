<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\PeminjamanModel;

class Peminjaman extends Controller
{
    public function index()
    {
        $model = new PeminjamanModel();
        $data['peminjamans'] = $model->getPeminjaman(); // Panggil method getPeminjaman
        return view('peminjaman/index', $data);
    }

    public function tambah()
    {
        return view('peminjaman/create');
    }

    public function penyimpanan()
    {
        $model = new PeminjamanModel();
    
        // Jika TanggalPeminjaman tidak diisi, gunakan tanggal sekarang
        $tanggalPinjam = $this->request->getPost('TanggalPeminjaman') ?? date('Y-m-d');
    
        $data = [
            'UserID' => $this->request->getPost('UserID'),
            'BukuID' => $this->request->getPost('BukuID'),
            'TanggalPeminjaman' => $tanggalPinjam,
        ];
    
        $model->insert($data);
        return redirect()->to('/peminjaman');
    }
    

    public function edit($PeminjamanID)
    {
        $model = new PeminjamanModel();
        $data['peminjaman'] = $model->find($PeminjamanID);
        return view('peminjaman/edit', $data);
    }

    public function update($PeminjamanID)
    {
        $model = new PeminjamanModel();
    
        // Jika TanggalPeminjaman tidak diisi, gunakan tanggal sekarang
        $tanggalPinjam = $this->request->getPost('TanggalPeminjaman') ?? date('Y-m-d');
    
        $data = [
            'UserID' => $this->request->getPost('UserID'),
            'BukuID' => $this->request->getPost('BukuID'),
            'TanggalPeminjaman' => $tanggalPinjam,
        ];
    
        $model->insert($data, $PeminjamanID);
        return redirect()->to('/peminjaman');
    }



    public function delete($PeminjamanID)
    {
        $model = new PeminjamanModel();
        $model->delete($PeminjamanID);
        return redirect()->to('/peminjaman');
    }
}
