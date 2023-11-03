
@extends('layouts.app-admin')

@section('title', 'Edit Kategori Barang')

@section('navbar')
    @php
        $isNavbar = false;
    @endphp
@endsection

@section('content')
    <div>
        <a href="{{ route('admin.kategori') }}" class="border p-2 border-2 border-merah-muda hover:text-white hover:bg-merah-muda">Kembali</a>
    </div>

    <div class="mt-8">
        <form action="{{ route('admin.kategori.edit.act', $data->id) }}" method="POST">
            @csrf
            <div>
                <x-input-label for="nama_kategori" :value="__('Nama Kategori Barang')" />
                <x-text-input id="nama_kategori" class="block mt-1 w-full" type="text" name="nama_kategori" value="{{ $data->nama_kategori }}" required
                    autofocus autocomplete="nama_kategori" />
                <x-input-error :messages="$errors->get('nama_kategori')" class="mt-2" />
            </div>

            <div class="mt-4">
                <button type="submit" class="bg-amber-400 px-2 py-1 rounded hover:bg-amber-500">Edit</button>
            </div>
        </form>
    </div>
@endsection
