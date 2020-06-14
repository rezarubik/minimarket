<?php

use App\UserRole;
use Illuminate\Database\Seeder;

class UserRoleSeeder extends Seeder
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
                'role' => 'Admin'
            ],
            [
                'role' => 'Kasir'
            ],
            [
                'role' => 'Gudang'
            ],
        ];
        UserRole::insert($data);
    }
}
