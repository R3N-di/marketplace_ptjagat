@extends('layouts.aplikasi')

@section('content')
    <div class="grid py-20 justify-items-center w-full">
        <img src="https://picsum.photos/1100/300" alt="">
    </div>

    <div>
        <div class="grid gap-2 justify-items-center mt-10">
            <p class="text-lg font-semibold">Product Popular</p>
            <a href="#" class="border-2 border-merah-tua text-merah-tua px-8 py-1">View All</a>
        </div>
    </div>

    <div class="grid justify-items-center grid-cols-3 mt-20 gap-y-16">
        <div class="w-72">
            <img src="https://via.placeholder.com/150" alt="Placeholder Image" class="w-full h-80 object-cover">
            <div class="">
                <div class="py-1 text-center font-medium bg-merah-tua text-white text-xl mb-2">Susu Etawalin</div>
                <div>
                    <p class="text-gray-700 font-medium text-center text-base text-3xl line-through">
                        IDR 120.000
                    </p>
                    <p class="text-gray-700 font-medium text-center text-base text-3xl">
                        IDR 100.000
                    </p>
                </div>
            </div>
        </div>
        <div class="w-72">
            <img src="https://via.placeholder.com/150" alt="Placeholder Image" class="w-full h-80 object-cover">
            <div class="">
                <div class="py-1 text-center font-medium bg-merah-tua text-white text-xl mb-2">Susu Etawalin</div>
                <div>
                    <p class="text-gray-700 font-medium text-center text-base text-3xl line-through">
                        IDR 120.000
                    </p>
                    <p class="text-gray-700 font-medium text-center text-base text-3xl">
                        IDR 100.000
                    </p>
                </div>
            </div>
        </div>
        <div class="w-72">
            <img src="https://via.placeholder.com/150" alt="Placeholder Image" class="w-full h-80 object-cover">
            <div class="">
                <div class="py-1 text-center font-medium bg-merah-tua text-white text-xl mb-2">Susu Etawalin</div>
                <div>
                    <p class="text-gray-700 font-medium text-center text-base text-3xl line-through">
                        IDR 120.000
                    </p>
                    <p class="text-gray-700 font-medium text-center text-base text-3xl">
                        IDR 100.000
                    </p>
                </div>
            </div>
        </div>
        <div class="w-72">
            <img src="https://via.placeholder.com/150" alt="Placeholder Image" class="w-full h-80 object-cover">
            <div class="">
                <div class="py-1 text-center font-medium bg-merah-tua text-white text-xl mb-2">Susu Etawalin</div>
                <div>
                    <p class="text-gray-700 font-medium text-center text-base text-3xl line-through">
                        IDR 120.000
                    </p>
                    <p class="text-gray-700 font-medium text-center text-base text-3xl">
                        IDR 100.000
                    </p>
                </div>
            </div>
        </div>
    </div>

@endsection
