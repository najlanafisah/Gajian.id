<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreKaryawanRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;  //harus true kalo mau dipake
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name'          => 'required|string|max:225',
            'email'         => 'required|email|unique:users,email',
            'password'      => 'required|string|min:6',
            'jabatan'       => 'required|string|max:225,',
            'gaji_pokok'    => 'required|numeric'
        ];
    }

    //custom message
    public function messages(): array
    {
        return [
            'name.required'         => "Nama wajib diisi",
            'email.required'        => "Email wajib diisi",
            'email.email'           => "Format email tidak valid",
            'email.unique'          => "Email sudah terdaftar",
            'password.required'     => "Password wajib diisi",
            'password.min'          => "Password minimal 6 karakter",
            'jabatan.required'      => "jabatan wajib diisi",
            'gaji_pokok.required'   => "gaji pokok wajib diisi",
        ];
    }
}
