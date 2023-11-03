<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Barang;
use App\Models\Carousel;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $dataEvent = Event::first();

        $dataCarousel = Carousel::all();

        $dataBarang = Barang::all();

        // dd($dataEvent);

        return view('dashboard', compact('dataEvent', 'dataCarousel', 'dataBarang'));
    }
}
