<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data=[
            'user' => 'administrator',
            'email' => 'aduuuu@gmail.com',
            'password' => password_hash('12345',PASSWORD_BCRYPT),
        ];
        $this->db->table('users')->insert($data);
    }
}
