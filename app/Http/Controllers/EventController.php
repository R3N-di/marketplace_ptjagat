<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\EventRequest;
use Illuminate\Support\Facades\File;


class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Event::first();

        // dd($data);

        return \view('pages.admin.event.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EventRequest $request)
    {
        // Dapatkan file gambar dari request
        $gambar = $request->file('event_gambar');

        // Generate nama unik untuk file gambar
        $namaFile = time() . '_' . $gambar->getClientOriginalName();
        // dd($namaFile);

        $gambar->move('gambar/event', $namaFile);

        // Simpan nama file gambar ke dalam table
        $dataEvent = new Event;
        $dataEvent->id = Str::uuid();
        $dataEvent->gambar = $namaFile;
        $dataEvent->save();

        return redirect()->back()->with('success', 'Gambar berhasil diunggah.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Event::find($id);

        // Hapus gambar dari direktori
        $path = public_path('gambar/event/' . $data->gambar);
        // dd(File::exists($path));
        if (File::exists($path)) {
            File::delete($path);
        }

        $data->delete();

        // dd($id);
        return redirect()->back()->with('success', 'Gambar berhasil dihapus.');
    }
}
