<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
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
                'id_supplier' => 1,
                'nama_barang' => 'Vanilla Latte',
                'satuan' => 2,
                'harga_beli' => 50000,
                'total_pembelian' => 100000,
                'harga_jual' => 100000,
                'stok' => 50,
            ],
            [
                'id_supplier' => 1,
                'nama_barang' => 'Caramel Machiato',
                'satuan' => 2,
                'harga_beli' => 63000,
                'total_pembelian' => 126000,
                'harga_jual' => 120000,
                'stok' => 100,
            ],
            [
                'id_supplier' => 2,
                'nama_barang' => 'Dounat 1 dozen',
                'satuan' => 2,
                'harga_beli' => 75000,
                'total_pembelian' => 150000,
                'harga_jual' => 120000,
                'stok' => 50,
            ],
            [
                'id_supplier' => 3,
                'nama_barang' => 'Iced Pecan Caramel Machiato',
                'satuan' => 2,
                'harga_beli' => 29000,
                'total_pembelian' => 58000,
                'harga_jual' => 50000,
                'stok' => 90,
            ],
            [
                'id_supplier' => 4,
                'nama_barang' => 'Ice Susu Masa Depan',
                'satuan' => 2,
                'harga_beli' => 35000,
                'total_pembelian' => 70000,
                'harga_jual' => 45000,
                'stok' => 60,
            ],
            [
                'id_supplier' => 5,
                'nama_barang' => 'Ice Kopi Susu',
                'satuan' => 2,
                'harga_beli' => 23000,
                'total_pembelian' => 46000,
                'harga_jual' => 35000,
                'stok' => 30,
            ]
        ];
        Product::insert($data);
    }
}
