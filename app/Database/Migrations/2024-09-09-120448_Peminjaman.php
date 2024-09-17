<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Peminjaman extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'PeminjamanID'        => [
                'type'          => 'INT',
                'constraint'    => '11',
                'unsigned'      => TRUE,
                'auto_increment'=> TRUE,
            ],
            'UserID'  => [
                'type'          => 'INT',
                'constraint'    => '11',
            ],
            'BukuID'  => [
                'type'          => 'INT',
                'constraint'    => '11',
            ],
            'TanggalPeminjaman'  => [
                'type'          => 'DATE',
            ],
            'TanggalPengembalian'  => [
                'type'          => 'DATE',
            ],
            'StatusPeminjaman'  => [
                'type'          => 'VARCHAR',
                'constraint'    => '50',
            ],
        ]);
        $this->forge->addkey('PeminjamanID');
        $this->forge->createTable('Peminjaman', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('Peminjaman', TRUE);
    }
}