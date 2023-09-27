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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <script src="{{ asset('js/animaciones.js') }}"></script>

    @livewireScripts

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <x-livewire-alert::scripts />

    @yield('scripts')
</body>

</html>
