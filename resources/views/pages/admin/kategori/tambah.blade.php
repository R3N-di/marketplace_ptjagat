
@extends('layouts.app-admin')

@section('title', 'Tambah Kategori Barang')

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
        <form action="{{ route('admin.kategori.tambah.act') }}" method="POST">
            @csrf
            <div>
                <x-input-label for="nama_kategori" :value="__('Nama Kategori Barang')" />
                <x-text-input id="nama_kategori" class="block mt-1 w-full" type="text" name="nama_kategori" :value="old('nama_kategori')" required
                    autofocus autocomplete="nama_kategori" />
                <x-input-error :messages="$errors->get('nama_kategori')" class="mt-2" />
            </div>

            <div class="mt-4">
                <button type="submit" class="bg-cyan-400 px-2 py-1 rounded hover:bg-cyan-500">Tambah</button>
            </div>
        </form>
    </div>
@endsection
