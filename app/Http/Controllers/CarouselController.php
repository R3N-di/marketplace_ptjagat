<?php

namespace App\Http\Controllers;

use App\Models\Carousel;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class CarouselController extends Controller
{
    public function index(){
        $dataCarousel = Carousel::all();

        return view('pages.admin.carousel.index', compact('dataCarousel'));
    }

    public function store(Request $request){

        // dd($request->file('carousel_gambar'));

         // Dapatkan file gambar dari request
         $daftarGambar = $request->file('carousel_gambar');

         foreach($daftarGambar as $gambar){
             // Generate nama unik untuk file gambar
             $namaFile = time() . '_' . $gambar->getClientOriginalName();

             $gambar->move('gambar/carousel', $namaFile);

             // Simpan nama file gambar ke dalam table
             $dataEvent = new Carousel;
             $dataEvent->id = Str::uuid();
             $dataEvent->gambar = $namaFile;
             $dataEvent->save();
         }

         return redirect()->back()->with('success', 'Gambar berhasil diunggah.');
    }

    public function destroy($id){
        // dd($id);

        $data = Carousel::find($id);

        // bagian hapus gambar dari direktori
        $path = public_path('gambar/carousel/' . $data->gambar);
        if(File::exists($path)){
            File::delete($path);
        }

        $data->delete();

        return redirect()->back()->with('success', 'Gambar berhasil dihapus.');
    }
}
