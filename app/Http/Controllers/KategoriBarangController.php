<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\KategoriBarang;
use App\Http\Requests\KategoriBarangRequest;

class KategoriBarangController extends Controller
{
    public function index(){
        $data = KategoriBarang::all();

        return view('pages.admin.kategori.index', compact('data'));
    }

    public function create(){
        return view('pages.admin.kategori.tambah');
    }

    public function store(KategoriBarangRequest $request){
        // dd($request->nama_kategori);

        $dataKategori = new KategoriBarang;
        $dataKategori->id = Str::uuid();
        $dataKategori->nama_kategori = $request->nama_kategori;
        $dataKategori->save();

        return \redirect()->route('admin.kategori')->with('success', 'Berhasil Menambahkan Data Kategori Barang Baru : ' . $request->nama_kategori);

    }

    public function edit($id){
        $data = KategoriBarang::find($id);

        return \view('pages.admin.kategori.edit', compact('data'));
    }

    public function update(KategoriBarangRequest $request, $id){
        $dataKategori = KategoriBarang::find($id);
        $dataKategori->nama_kategori = $request->nama_kategori;
        $dataKategori->save();

        return \redirect()->route('admin.kategori')->with('success', 'Berhasil Mengedit Data Kategori Barang Menjadi : ' . $request->nama_kategori);
    }

    public function destroy($id){
        $data = KategoriBarang::find($id);

        $data->delete();

        return redirect()->route('admin.kategori')->with('success', 'Data berhasil dihapus.');
    }
}
