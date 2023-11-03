<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BarangRequest extends FormRequest
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
            'nama_barang' => 'required|max:255',
            'qty_barang' => 'required|integer',
            'gambar_thumbnail' => 'image|mimes:jpeg,png,jpg,gif',
            'harga_barang' => 'required|integer',
            'diskon_barang' => 'nullable|integer',
        ];
    }

    // untuk menambah pesan khusus
    public function messages(){
        return [
            'nama_barang.required' => 'Nama barang wajib diisi.',
            'nama_barang.max' => 'Nama barang tidak boleh lebih dari 255 karakter.',
            'jumlah_barang.required' => 'Jumlah barang wajib diisi.',
            'jumlah_barang.integer' => 'Jumlah barang harus berupa angka.',
            'gambar_thumbnail.image' => 'File yang diunggah harus berupa gambar.',
            'gambar_thumbnail.mimes' => 'Format gambar yang diizinkan: jpeg, png, jpg, gif.',
            'harga_barang.required' => 'Harga barang wajib diisi.',
            'harga_barang.integer' => 'Harga barang harus berupa angka.',
            'diskon_barang.integer' => 'Diskon barang harus berupa angka.',
        ];
    }
}
