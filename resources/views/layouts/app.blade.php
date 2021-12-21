<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    @livewireStyles

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>

<body class="font-sans antialiased">
    <x-jet-banner />

    <div class="min-h-screen bg-gray-100">
        @livewire('navigation-menu')

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div>

    @stack('modals')

    {{-- Aqui es donde todas las vistas <x-app-layout> cogen como plantilla --}}
    @livewireScripts

    {{-- Footer para todas las paginas que tengan esta plantilla --}}
    <footer class="bg-gray-700 flex flex-wrap items-center justify-between py-10 m-auto">
        <div class="container mx-auto flex flex-col flex-wrap items-center justify-between">
            <ul class="flex mx-auto text-white text-center">
                <li class=" cursor-not-allowed p-2 cursor-pointer hover:underline">Terms & Conditions</li>
                <li class="cursor-not-allowed p-2 cursor-pointer hover:underline">Privacy</li>
                <li class="cursor-not-allowed p-2 cursor-pointer hover:underline">Cookies</li>
            </ul>
            <ul class="flex mx-auto text-white text-center">
                <li class="p-2 cursor-pointer">
                    <a target="_blank" href="https://www.youtube.com/channel/UCF2RXqvcFXuOMxFBllm74zA">     
                        <img class="" src="{{ asset('img/home/yt.jpeg') }}" width="25" height="25" />
                    </a>
                </li>
                <li class="p-2 cursor-pointer">
                    <a target="_blank" href="https://www.instagram.com/storecars_palencia/">     
                        <img class="" src="{{ asset('img/home/insta.png') }}" width="25" height="25" />
                    </a>
                </li>
                <li class="p-2 cursor-pointer">
                    <a target="_blank" href="https://twitter.com/Alberto46744796">     
                        <img class="" src="{{ asset('img/home/twitter.png') }}" width="25" height="25" />
                    </a>
                </li>
            </ul>
            <div class="flex mx-auto text-white text-center">
                Copyright StoreCars © 2021
            </div>
        </div>
    </footer>

</body>

</html>
