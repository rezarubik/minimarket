<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $primaryKey = 'id_product';
    protected $fillable = ['nama_barang', 'satuan', 'harga_beli', 'total_pembelian', 'harga_jual', 'stok'];
}
