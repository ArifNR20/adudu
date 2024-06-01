<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Datawali extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'nik' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'nama' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'alamat' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
            ],
            'pekerjaan' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
            ],

        ]);
        $this->forge->addPrimaryKey('nik');
        $this->forge->createTable('Datawali');
    }

    public function down()
    {
        $this->forge->dropTable('Datawali');
    }

}
