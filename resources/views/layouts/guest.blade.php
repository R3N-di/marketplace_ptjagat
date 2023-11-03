<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="">

        <div class="flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-white">
            <div class="border-b-2 border-[#7f7f7f]/50 w-full flex items-center justify-center p-4">
                <x-product-title-guest/>
            </div>

            {{-- Content --}}
            <div class="w-full flex flex-col gap-8 sm:max-w-md mt-6 px-6 bg-white overflow-y-auto h-screen sm:rounded-lg">
                <div class="text-2xl font-poppins font-semibold text-center">
                    {{ $title }}
                </div>

                <div>
                    {{ $slot }}
                </div>
            </div>

            {{-- footer --}}
            <div class="border-t-2 border-[#7f7f7f]/50 w-full h-[28rem]">
                <x-footer/>
            </div>
        </div>
    </body>
</html>
