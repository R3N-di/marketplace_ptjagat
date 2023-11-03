@extends('layouts.app-admin')

@section('title', 'Daftar Kategori Barang')

@section('navbar')
    @php
        $isNavbar = true;
    @endphp
@endsection

@section('content')
    <div>
        <a href="{{ route('admin.kategori.tambah') }}" class="border p-2 border-2 border-merah-muda hover:text-white hover:bg-merah-muda">Tambah Kategori Barang</a>
    </div>

    <div class="mt-8">
        <table id="dataTable" class="display">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>NAMA KATEGORI BARANG</th>
                    <th>OPSI</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i = 1;
                @endphp
                @foreach ($data as $d)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $d->nama_kategori }}</td>
                        <td class="flex gap-2">
                            <a href="{{ route('admin.kategori.edit', $d->id) }}" class="border p-1 border-2 border-merah-muda hover:text-white hover:bg-merah-muda">Edit</a>
                            <form action="{{ route('admin.kategori.delete.act', $d->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="border p-1 border-2 border-merah-muda hover:text-white hover:bg-merah-muda" onclick="return confirm('Yakin Ingin Menghapus Data')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
