<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; // default false
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'id_supplier' => 'required',
            'nama_product' => 'required',
            'satuan' => 'required|numeric',
            'harga_beli' => 'required|numeric',
            'harga_jual' => 'required|numeric',
            'stok' => 'required|numeric',
        ];
    }
    /**
     * todo Messages
     */
    public function messages()
    {
        return [
            'id_supplier.required' => 'Supplier wajib dipilih!',
            'nama_product.required' => 'Nama produk wajib diisi!',
            'satuan.required' => 'Satuan wajib diisi!',
            'satuan.numeric' => 'Satuan wajib berupa angka',
            'harga_beli.required' => 'Harga beli wajib diisi!',
            'harga_beli.numeric' => 'Harga beli wajib berupa angka!',
            'harga_jual.required' => 'Harga jual wajib diisi!',
            'harga_jual.numeric' => 'Harga jual wajib berupa angka!',
            'stok.required' => 'Stok wajib diisi!',
            'stok.numeric' => 'Stok wajib berupa angka!',
        ];
    }
}
