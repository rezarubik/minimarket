<?php

use App\Customer;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
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
                'nama' => 'Muhammad Reza Pahlevi Y'
            ],
            [
                'nama' => 'Nadiah Tsamara Pratiwi'
            ],
            [
                'nama' => 'Arif Rahman'
            ],
            [
                'nama' => 'Alpri Adityansah'
            ],
            [
                'nama' => 'Muhammad Rafi Nugroho'
            ],
        ];
        Customer::insert($data);
    }
}
