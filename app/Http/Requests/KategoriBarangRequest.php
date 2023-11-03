<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class KategoriBarangRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nama_kategori' => 'required|unique:kategori_barang,nama_kategori'
        ];
    }

    // untuk menambah pesan khusus
    public function messages(){
        return [
            'nama_kategori.required' => 'Kolom nama kategori wajib diisi.',
            'nama_kategori.unique' => 'Nama kategori sudah ada. Harap masukan nama kategori yang lain.'
        ];
    }
}
