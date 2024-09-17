<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Buku extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'BukuID'        => [
                'type'          => 'INT',
                'constraint'    => '11',
                'unsigned'      => TRUE,
                'auto_increment'=> TRUE,
            ],
            'Judul'  => [
                'type'          => 'VARCHAR',
                'constraint'    => '255',
            ],
            'Penulis'  => [
                'type'          => 'VARCHAR',
                'constraint'    => '255',
            ],
            'Penerbit'  => [
                'type'          => 'VARCHAR',
                'constraint'    => '255',
            ],
            'TahunTerbit'  => [
                'type'          => 'INT',
                'constraint'    => '11',
            ],
        ]);
        $this->forge->addkey('BukuID');
        $this->forge->createTable('Buku', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('Buku', TRUE);
    }
}