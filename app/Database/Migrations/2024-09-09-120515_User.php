<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class User extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'UserID'        => [
                'type'          => 'INT',
                'constraint'    => '11',
                'unsigned'      => TRUE,
                'auto_increment'=> TRUE,
            ],
            'Username'  => [
                'type'          => 'VARCHAR',
                'constraint'    => '255',
            ],
            'Password'  => [
                'type'          => 'VARCHAR',
                'constraint'    => '255',
            ],
            'Email'  => [
                'type'          => 'VARCHAR',
                'constraint'    => '255',
            ],
            'NamaLengkap'  => [
                'type'          => 'VARCHAR',
                'constraint'    => '255',
            ],
            'Alamat'  => [
                'type'          => 'TEXT',
            ],
        ]);
        $this->forge->addkey('UserID');
        $this->forge->createTable('User', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('User', TRUE);
    }
}