<?php

namespace App\Models;

use CodeIgniter\Model;

class PeminjamanModel extends Model
{
    protected $table            = 'peminjaman';
    protected $primaryKey       = 'PeminjamanID';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['UserID', 'BukuID', 'TanggalPeminjaman', 'TanggalPengembalian', 'StatusPeminjaman'];
 
    
    public function getPeminjaman()
    {
        return $this->select('peminjaman.*, username as user_name, judul as buku_title')
                    ->join('user', 'user.UserID = peminjaman.UserID')
                    ->join('buku', 'buku.BukuID = peminjaman.BukuID')
                    ->findAll();
    }
}
