<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>EBLIETHOS</title>
        {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.0.0/flowbite.min.css"  rel="stylesheet" /> --}}
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>

    <body>
        {{-- HERO DAN NAVBAR --}}
        <div>
            @include('layouts.navbar')
        </div>

        <div>
            @yield('content')
        </div>

        <div class="h-screen grid items-end pb-12">
            <x-footer/>
        </div>

        {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.0.0/flowbite.min.js"></script> --}}
    </body>

</html>
