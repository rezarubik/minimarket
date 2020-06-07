<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SupplierRequest extends FormRequest
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
            'nama_supplier' => 'required',
            'alamat_supplier' => 'required',
            'nomor_telepon_supplier' => 'required|numeric',
        ];
    }
    /**
     * todo messages
     */
    public function messages()
    {
        return [
            'nama_supplier.required' => 'Nama Supplier wajib diisi!',
            'alamat_supplier.required' => 'Alamat wajib diisi!',
            'nomor_telepon_supplier.required' => 'Nomor Telepon wajib diisi!',
            'nomor_telepon_supplier.numeric' => 'Nomor Telepon wajib berupa angka!',
        ];
    }
}
