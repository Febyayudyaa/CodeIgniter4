<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelPengembalian extends Model
{
    protected $table            = 'pengembalian';
    protected $primaryKey       = 'PeminjamanID';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['UserID', 'BukuID', 'TanggalPeminjaman', 'TanggalPengembalian'];

    
    public function getPeminjaman()
    {
        return $this->select('pengembalian.*, username as user_name, judul as buku_title')
                    ->join('user', 'user.UserID = pengembalian.UserID')
                    ->join('buku', 'buku.BukuID = pengembalian.BukuID')
                    ->findAll();
    }
}
