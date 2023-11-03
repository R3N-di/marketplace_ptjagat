@extends('layouts.app-admin')

@section('title', 'Event')

@section('navbar')
    @php
        $isNavbar = true;
    @endphp
@endsection

@section('content')
    <div>
        @if ($data)
            <form action="{{ route('admin.event.delete.act', $data->id) }}" method="POST">
                @csrf
                @method('DELETE')

                <button type='submit'
                    class="border p-2 border-2 border-merah-muda hover:text-white hover:bg-merah-muda w-full">Hapus</button>

            </form>
        @else
            <form action="{{ route('admin.event.tambah.act') }}" method="POST" class="flex" enctype="multipart/form-data">
                @csrf
                <div>
                    <input type="file" name="event_gambar">
                    <x-input-error :messages="$errors->get('event_gambar')" class="mt-2" />
                </div>
                <div>
                    <button type="submit"
                        class="border p-2 border-2 border-merah-muda hover:text-white hover:bg-merah-muda">Tambah
                        Event</button>
                </div>
            </form>
        @endif
    </div>

    <div class="mt-8">
        <div class="grid py-12 justify-items-center w-full border border-2">
            @if ($data)
                <img src="{{ asset('gambar/event/' . $data->gambar) }}" style="width:1100px; height: 300px;"
                    alt="Deskripsi Gambar" class="border border-2 border-gray-300">
            @else
                <img src="https://via.placeholder.com/150" style="width:1100px; height: 300px;" alt=""
                    class="border border-2 border-gray-300">
            @endif
        </div>
    @endsection
