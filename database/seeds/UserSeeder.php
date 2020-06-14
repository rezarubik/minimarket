<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'id_user_role' => 1,
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make(1234),
                // 'role' => 'admin'
            ],
            [
                'id_user_role' => 2,
                'name' => 'Kasir A',
                'email' => 'kasirA@gmail.com',
                'password' => Hash::make(1234),
                // 'role' => 'kasir'
            ],
            [
                'id_user_role' => 3,
                'name' => 'Gudang A',
                'email' => 'gudangA@gmail.com',
                'password' => Hash::make(1234),
                // 'role' => 'gudang'
            ],
        ];
        User::insert($data);
    }
}
