<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Penyedia extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'alamat' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'bentuk_usaha' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'npwp' => [
                'type' => 'VARCHAR',
                'constraint' => '25',
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'no_hp' => [
                'type' => 'VARCHAR',
                'constraint' => '13',
            ],
            'kab_kota' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'provinsi' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ]
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('penyedia');
    }

    public function down()
    {
        $this->forge->dropTable('penyedia');
    }
}
