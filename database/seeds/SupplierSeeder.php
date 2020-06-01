<?php

use App\Supplier;
use Illuminate\Database\Seeder;

class SupplierSeeder extends Seeder
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
                'nama' => 'Starbucks',
                'alamat' => 'Jl. Starbucks',
                'nomor_telepon' => '12315345'
            ],
            [
                'nama' => 'JCO',
                'alamat' => 'Jl. JCO',
                'nomor_telepon' => '12315345'
            ],
            [
                'nama' => 'Fore Coffee',
                'alamat' => 'Jl. Fore Coffee',
                'nomor_telepon' => '12315345'
            ],
            [
                'nama' => 'Kopi Kenangan',
                'alamat' => 'Jl. Kopi Kenangan',
                'nomor_telepon' => '12315345'
            ],
            [
                'nama' => 'KFC',
                'alamat' => 'Jl. KFC',
                'nomor_telepon' => '12315345'
            ],
        ];
        Supplier::insert($data);
    }
}
