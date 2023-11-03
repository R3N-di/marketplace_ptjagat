@extends('layouts.aplikasi')

@section('content')
    <div class="grid py-20 justify-items-center w-full">
        @if ($dataEvent)
            <img src="{{ asset('gambar/event/' . $dataEvent->gambar) }}" style="width:1100px; height: 300px;"
                alt="Deskripsi Gambar" class="border border-2 border-gray-300">
        @else
            <img src="https://via.placeholder.com/150" style="width:1100px; height: 300px;" alt=""
                class="border border-2 border-gray-300">
        @endif
    </div>

    <div>
        <div class="grid gap-2 justify-items-center mt-10">
            <p class="text-[20px] font-semibold">Product Popular</p>
            <a href="#"
                class="border-2 border-merah-tua text-merah-tua px-8 py-1 hover:text-white hover:bg-merah-tua">View All</a>
        </div>
    </div>

    <div class="grid justify-items-center grid-cols-3 mt-20 gap-y-16">
        @if ($dataBarang->isEmpty())
        @for ($i=1; $i <= 5; $i++)
            <div class="w-72">
                <img src="https://via.placeholder.com/150" alt="Placeholder Image"
                    class="w-full h-80 object-cover">
                <div class="">
                    <div class="py-1 text-center font-medium bg-merah-tua text-white text-xl mb-2">
                        N/A
                    </div>
                    <div>
                            <p class="text-gray-700 font-medium text-center text-base text-[25px] line-through">
                                IDR 100.000
                            </p>
                        <p class="text-gray-700 font-medium text-center text-base text-[25px] mt-2">
                                IDR 90.000
                        </p>
                    </div>
                </div>
            </div>
        @endfor
        @else
            @foreach ($dataBarang as $data)
                <div class="w-72">
                    <img src="{{ asset('gambar/barang/' . $data->gambar_thumbnail) }}" alt="Placeholder Image"
                        class="w-full h-80 object-cover">
                    <div class="">
                        <div class="py-1 text-center font-medium bg-merah-tua text-white text-xl mb-2">
                            {{ $data->nama_barang }}
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
            @endforeach
        @endif
    </div>
@endsection
