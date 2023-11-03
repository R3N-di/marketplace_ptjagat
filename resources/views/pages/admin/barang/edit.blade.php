@extends('layouts.app-admin')

@section('title', 'Tambah Barang')

@section('navbar')
    @php
        $isNavbar = false;
    @endphp
@endsection

@section('content')
    <div class="flex gap-4">
        <a href="{{ route('admin.barang') }}"
            class="border p-2 border-2 border-merah-muda hover:text-white hover:bg-merah-muda">Kembali</a>
        <form action="{{ route('admin.barang.delete.act', $dataBarang->id) }}" method="POST">
            @csrf
            @method('DELETE')

            <button type="submit" class="border p-2 border-2 border-merah-muda hover:text-white hover:bg-merah-muda" onclick="return confirm('Yaki Ingin Menghapus Data Ini?')">Hapus Data Ini</button>
        </form>
    </div>

    <div class="mt-8">
        <form action="{{ route('admin.barang.edit.act', $dataBarang->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mt-4">
                <x-input-label for="nama_barang" :value="__('Nama Barang')" />
                <x-text-input id="nama_barang" class="block mt-1 w-full" type="text" name="nama_barang" value="{{ $dataBarang->nama_barang }}"
                    required autofocus autocomplete="nama_barang" />
                <x-input-error :messages="$errors->get('nama_barang')" class="mt-2" />
            </div>

            <div class="mt-4">
                <x-input-label for="qty_barang" :value="__('Jumlah Barang (quantity)')" />
                <x-text-input id="qty_barang" class="block mt-1 w-full" type="number" name="qty_barang" value="{{ $dataBarang->qty_barang }}"
                    required autofocus autocomplete="qty_barang" min="1" />
                <x-input-error :messages="$errors->get('qty_barang')" class="mt-2" />
            </div>

            <div class="mt-4">
                <x-input-label for="kategori_barang_id" :value="__('Kategori Barang')" />
                <div class="relative">
                    <select name="kategori_barang_id"
                        class="block appearance-none w-full bg-white border border-2 border-[#DEDEDEDE] text-gray-400 py-2 px-4 pr-8 leading-tight focus:outline-none focus:border-blue-500">
                        <option value="">Pilih Opsi</option>
                        @foreach ($dataKategori as $data)
                            <option value="{{ $data->id }}" {{ $dataBarang->kategori_barang_id == $data->id ? 'selected' : ''; }}>{{ $data->nama_kategori }}</option>
                        @endforeach
                    </select>
                </div>
                <x-input-error :messages="$errors->get('kategori_barang_id')" class="mt-2" />
            </div>

            <div class="mt-4">
                <x-input-label for="harga_barang" :value="__('Harga Barang')" />
                <x-text-input id="harga_barang" class="block mt-1 w-full" type="number" name="harga_barang"
                    value="{{ $dataBarang->harga_barang }}" required autofocus autocomplete="harga_barang" min="1"/>
                <x-input-error :messages="$errors->get('harga_barang')" class="mt-2" />
            </div>

            <div class="mt-4">
                <x-input-label for="diskon_barang" :value="__('Diskon Barang')" />
                <x-text-input id="diskon_barang" class="block mt-1 w-full" type="number" name="diskon_barang"
                    value="{{ $dataBarang->diskon_barang }}" autofocus autocomplete="diskon_barang" />
                <x-input-error :messages="$errors->get('diskon_barang')" class="mt-2" min="1"/>
            </div>

            <div class="mt-4">
                <x-input-label for="gambar_thumbnail" :value="__('Gambar Thumbnail')" />
                <input type="file" name="gambar_thumbnail">
                <x-input-error :messages="$errors->get('gambar_thumbnail')" class="mt-2" />
            </div>

            <div class="w-72 mt-4">
                <img src="{{ asset('gambar/barang/' . $dataBarang->gambar_thumbnail) }}" alt="Placeholder Image"
                    class="w-full h-80 object-cover">
            </div>

            <div class="mt-4">
                <button type="submit" class="bg-amber-400 px-2 py-1 rounded hover:bg-amber-500">Edit</button>
            </div>
        </form>
    </div>
@endsection
