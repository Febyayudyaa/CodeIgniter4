<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\HTTP\ResponseInterface;

class User extends BaseController
{
    public function index()
    {
        $model = new UserModel();
        $data['users'] = $model->findAll();
        return view('user/index', $data);
    }
    public function create()
    {
       echo view('user/create');
    }
    public function tambah()
    {
        $model = new UserModel();
        $data = [
            'Username' => $this->request->getPost('Username'),
            'Password' => md5($this->request->getPost('Password')),
            'Email' => $this->request->getPost('Email'),
            'NamaLengkap' => $this->request->getPost('NamaLengkap'),
            'Alamat' => $this->request->getPost('Alamat'),
        ];
        $model->insert($data);
        return redirect()->to('/user');
    }
    public function update($UserID)
    {   
        $model = new UserModel();
        $data['user'] = $model->find($UserID);
        return view('user/update', $data);
    }
    public function edit($UserID)
    {
        $model = new UserModel();
        
        $user = $model->find($UserID);

        
        $data = [
            'Username' => $this->request->getPost('Username'),
            'Email' => $this->request->getPost('Email'),
            'NamaLengkap' => $this->request->getPost('NamaLengkap'),
            'Alamat' => $this->request->getPost('Alamat'),
        ];

        // Ambil password baru dari input
        $newPassword = $this->request->getPost('Password');

        // Cek apakah password diubah
        if (!empty($newPassword)) {
            // Jika password diubah, enkripsi kembali
            $data['Password'] = md5($newPassword);
        } else {
            // Jika password tidak diubah, gunakan password lama
            $data['Password'] = $user['Password'];
        }

        // Update data di database
        $model->update($UserID, $data);

        // Redirect setelah update berhasil
        return redirect()->to('/user');
    }

    public function hapus($UserID)
    {
        $model = new UserModel();
        $model->delete($UserID
    );
        return redirect()->to('/user');
    }


}
