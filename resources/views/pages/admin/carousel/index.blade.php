@extends('layouts.app-admin')

@section('title', 'Daftar Carousel')

@section('navbar')
    @php
        $isNavbar = true;
    @endphp
@endsection

@section('content')
    <div>
        <form action="{{ route('admin.carousel.tambah.act') }}" method="POST" class="flex" enctype="multipart/form-data">
            @csrf
            <div>
                <input type="file" name="carousel_gambar[]" multiple required>
                <x-input-error :messages="$errors->get('carousel_gambar')" class="mt-2" />
            </div>
            <div>
                <button type="submit"
                    class="border p-2 border-2 border-merah-muda hover:text-white hover:bg-merah-muda">Tambah Gambar
                    Carousel</button>
            </div>
        </form>
    </div>

    <div class="flex flex-col gap-8 mt-4">
        @foreach ($dataCarousel as $data)
            <div class="border border-2 p-4">
                <form action="{{ route('admin.carousel.delete.act', $data->id) }}" method="POST" class="mb-4">
                    @csrf
                    @method('DELETE')

                    <button type='submit'
                        class="border p-2 border-2 border-merah-muda hover:text-white hover:bg-merah-muda w-full" onclick="return confirm('Yakin Ingin Data Ini?')">Hapus</button>

                </form>
                <img src="{{ asset('gambar/carousel/' . $data->gambar) }}" alt="">
            </div>
        @endforeach
    </div>
@endsection
