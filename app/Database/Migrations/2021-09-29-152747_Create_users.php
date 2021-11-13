<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUsers extends Migration
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
            'user'       => [
                    'type'       => 'VARCHAR',
                    'constraint' => '70',
            ],
            'email'       => [
                    'type'       => 'VARCHAR',
                    'constraint' => '70',
            ],
            'password'       => [
                    'type'       => 'VARCHAR',
                    'constraint' => '225',
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('users');
    }

    public function down()
    {
        $this->forge->dropTable('users');
    }
}
