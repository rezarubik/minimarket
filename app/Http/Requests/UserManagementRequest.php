<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserManagementRequest extends FormRequest
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
            'nama_user' => 'required',
            'email_user' => 'required|unique:users,email',
            'password' => 'required',
        ];
    }
    /**
     * todo Messgaes
     */
    public function messages()
    {
        return [
            'nama_user.required' => 'Nama User wajib diisi!',
            'email_user.required' => 'Email User wajib diisi!',
            'email_user.unique' => 'Email User wajib unik!',
            'password.required' => 'Password wajib diisi!'
        ];
    }
}
