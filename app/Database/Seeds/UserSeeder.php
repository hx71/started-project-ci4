<?php

namespace App\Database\Seeds;

use App\Models\Level;
use App\Models\Users;
use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $level = [
            [
                'kode' => 'A',
                'nama_level' => 'Admin',
            ],
            [
                'kode' => 'U',
                'nama_level' => 'User',
            ],
        ];

        $db = new Level();
        foreach ($level as $v) {
            $db->insert([
                'kode' => $v['kode'],
                'nama_level' => $v['nama_level'],
            ]);
        };

        $user = [
            [
                'name' => 'Admin',
                'username' => 'admin',
                'level' => 'A',
                'password' => password_hash('123', PASSWORD_BCRYPT),
            ],
        ];

        $db1 = new Users();
        foreach ($user as $v) {
            $db1->insert([
                'level' => $v['level'],
                'name' => $v['name'],
                'username' => $v['username'],
                'password' => $v['password'],
            ]);
        };
    }
}
