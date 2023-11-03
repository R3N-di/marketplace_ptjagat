<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventRequest extends FormRequest
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
            'event_gambar' => 'required|image|mimes:jpeg,png,jpg,gif',
        ];
    }

    // untuk menambah pesan khusus
    public function messages(){
        return [
            'event_gambar.required' => 'Kolom gambar wajib diisi.',
            'event_gambar.image' => 'File yang diunggah harus berupa gambar.',
            'event_gambar.mimes' => 'Format file yang diizinkan adalah jpeg, png, jpg, atau gif.',
        ];
    }
}
