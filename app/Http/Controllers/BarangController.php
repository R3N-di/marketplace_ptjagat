<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\KategoriBarang;
use App\Http\Requests\BarangRequest;
use Illuminate\Support\Facades\File;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataBarang = Barang::all();

        return view('pages.admin.barang.index', compact('dataBarang'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $dataKategori = KategoriBarang::all();

        return \view('pages.admin.barang.tambah', compact('dataKategori'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BarangRequest $request)
    {
        // Dapatkan file gambar dari request
        $gambar = $request->file('gambar_thumbnail');

        // Generate nama unik untuk file gambar
        $namaFile = time() . '_' . $gambar->getClientOriginalName();
        // dd($namaFile);

        $gambar->move('gambar/barang', $namaFile);

        $dataBarang = new Barang;

        $dataBarang->id = Str::uuid();
        $dataBarang->nama_barang = $request->nama_barang;
        $dataBarang->qty_barang = $request->qty_barang;
        $dataBarang->gambar_thumbnail = $namaFile;
        $dataBarang->kategori_barang_id = $request->kategori_barang_id;
        $dataBarang->harga_barang = $request->harga_barang;
        $dataBarang->diskon_barang = $request->diskon_barang;
        $dataBarang->save();

        return redirect()->route('admin.barang')->with('success', 'Berhasil Menambahkan Barang');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $dataKategori = KategoriBarang::all();
        $dataBarang = Barang::find($id);

        return \view('pages.admin.barang.edit', compact('dataKategori', 'dataBarang'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BarangRequest $request, string $id)
    {
        $dataBarang = Barang::find($id);

        $dataBarang->nama_barang = $request->nama_barang;
        $dataBarang->qty_barang = $request->qty_barang;
        $dataBarang->kategori_barang_id = $request->kategori_barang_id;
        $dataBarang->harga_barang = $request->harga_barang;
        $dataBarang->diskon_barang = $request->diskon_barang;

        if($request->file('gambar_thumbnail')){
            $path = public_path('gambar/barang/' . $dataBarang->gambar_thumbnail);

            if (File::exists($path)) {
                File::delete($path);
            }

            // Dapatkan file gambar dari request
            $gambar = $request->file('gambar_thumbnail');

            // Generate nama unik untuk file gambar
            $namaFile = time() . '_' . $gambar->getClientOriginalName();
            // dd($namaFile);

            $gambar->move('gambar/barang', $namaFile);

            $dataBarang->gambar_thumbnail = $namaFile;
        }

        $dataBarang->save();

        return redirect()->route('admin.barang')->with('success', 'Berhasil Mengedit Barang');
        // dd($request->file('gambar_thumbnail'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $dataBarang = Barang::find($id);

        $path = public_path('gambar/barang/' . $dataBarang->gambar_thumbnail);

        if (File::exists($path)) {
            File::delete($path);
        }

        $dataBarang->delete();

        return redirect()->route('admin.barang')->with('success', 'Barang berhasil dihapus.');
    }
}
