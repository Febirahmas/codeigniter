<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = [
        [
            'name' => 'Administrator',
            'nis' => '',
            'email' => 'Admin@gmail.com',
            'password' => password_hash('pass1234', PASSWORD_BCRYPT),
            'role' => 'admin'
        ],
        [
            'name' => 'Febi Rahma',
            'nis' => 101,
            'email' => 'Fera@gmail.com',
            'password' => password_hash('pass1234', PASSWORD_BCRYPT),
            'role' => 'siswa'
        ]
        ];

        $this->db->table('users')->insertBatch($data);

    }

}
