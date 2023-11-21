<!doctype html>
<html lang="es">
<title>@yield('titulo', 'Aliados de tu Ciberseguridad | Servicios para tu empresa.')</title>

<head>
    @include('layouts.complementos.head')
    @livewireStyles
</head>

<body id="inicio" class="@yield('body')">

    <header>
        @include('layouts.complementos.header')
    </header>

    <main class="">

        <div>
            @yield('content')
        </div>

    </main>

    @include('layouts.complementos.footer')

    <script>
        var aiBot = new AiBot({
            embedId: '5uFdLzTdqmcq',
            remoteBaseUrl: 'https://humanchat.net/',
            version: '1.5.10'
        });
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <script src="{{ asset('js/animaciones.js') }}"></script>

    @livewireScripts

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <x-livewire-alert::scripts />

    @yield('scripts')

    <script type="text/javascript" data-cfasync="false" src="https://humanchat.net/build/js/hb_latest.js?v=1.5.10"
        crossorigin="anonymous"></script>
</body>

</html>
