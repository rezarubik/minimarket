<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerRequest extends FormRequest
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
            'nama_customer' => 'required'
        ];
    }
    /**
     * todo Messages
     */
    public function messages()
    {
        return [
            'nama_customer.required' => 'Nama Customer wajib diisi!'
        ];
    }
}
