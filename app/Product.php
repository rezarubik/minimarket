<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $primaryKey = 'id_product';
    protected $fillable = ['id_supplier', 'nama_barang', 'satuan', 'harga_beli', 'total_pembelian', 'harga_jual', 'stok'];

    public function supplier()
    {
        return $this->belongsTo(Supplier::class ,'id_supplier', 'id_supplier');
    }
}
