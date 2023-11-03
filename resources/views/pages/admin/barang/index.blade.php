@extends('layouts.app-admin')

@section('title', 'Daftar Barang')

@section('navbar')
    @php
        $isNavbar = true;
    @endphp
@endsection

@section('content')
    <div>
        <a href="{{ route('admin.barang.tambah') }}"
            class="border p-2 border-2 border-merah-muda hover:text-white hover:bg-merah-muda">Tambah Barang</a>
    </div>

    <div class="grid justify-items-center grid-cols-3 mt-20 gap-y-16">
        @foreach ($dataBarang as $data)
        <a href="{{ route('admin.barang.edit', $data->id) }}">
            <div class="w-72">
                <img src="{{ asset('gambar/barang/' . $data->gambar_thumbnail) }}" alt="Placeholder Image"
                    class="w-full h-80 object-cover">
                <div class="">
                    <div class="py-1 text-center font-medium bg-merah-tua text-white text-xl mb-2">{{ $data->nama_barang }}
                    </div>
                    <div>
                        @if (isset($data->diskon_barang))
                            <p class="text-gray-700 font-medium text-center text-base text-[25px] line-through">
                                IDR {{ number_format($data->harga_barang, 0, ',', '.') }}
                            </p>
                        @endif
                        <p class="text-gray-700 font-medium text-center text-base text-[25px] mt-2">
                            @if (isset($data->diskon_barang))
                                IDR {{ number_format($data->harga_barang - $data->diskon_barang, 0, ',', '.') }}
                            @else
                                IDR {{ number_format($data->harga_barang, 0, ',', '.') }}
                            @endif
                        </p>
                    </div>
                </div>
            </div>
        </a>
        @endforeach
    </div>
@endsection
