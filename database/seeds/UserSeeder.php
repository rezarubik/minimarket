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
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make(1234),
                'role' => 'admin'
            ],
            [
                'name' => 'Kasir A',
                'email' => 'kasirA@gmail.com',
                'password' => Hash::make(1234),
                'role' => 'kasir'
            ],
            [
                'name' => 'Gudang A',
                'email' => 'gudangA@gmail.com',
                'password' => Hash::make(1234),
                'role' => 'gudang'
            ],
        ];
        User::insert($data);
    }
}
