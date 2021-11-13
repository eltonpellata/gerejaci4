<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Tb extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'          => [
                    'type'           => 'BIGINT',
                    'constraint'     => 20,
                    'unsigned'       => true,
                    'auto_increment' => true,
            ],
            'nama'       => [
                    'type'       => 'VARCHAR',
                    'constraint' => '225',
            ],
            'jenisklm'       => [
                    'type'       => 'VARCHAR',
                    'constraint' => '225',
            ],
            'tmlahir'       => [
                    'type'       => 'VARCHAR',
                    'constraint' => '225',
            ],
            'tgllahir'       => [
                'type'       => 'DATE',
            ],
            'pekerjaan'       => [
                    'type'       => 'VARCHAR',
                    'constraint' => '225',
            ],
            'tmmeninggal'       => [
                    'type'       => 'VARCHAR',
                    'constraint' => '225',
            ],
            'tglmeninggal'       => [
                    'type'       => 'DATE',
            ],
            'pddk'       => [
                'type'       => 'VARCHAR',
                'constraint' => '225',
        ],
    ]);
    $this->forge->addKey('id', true);
    $this->forge->createTable('data');
    }

    public function down()
    {
        $this->forge->dropTable('data');
    }
}
