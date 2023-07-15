<!doctype html>
<html lang="es">
<title>@yield('title', 'Aliados de tu Ciberseguridad | Servicios para tu empresa')</title>

<head>
    @include('layouts.complementos.head')
</head>

<body>

    <header>
        @include('layouts.complementos.header')
    </header>

    <main class="">

        <div>
            @yield('content')
        </div>

    </main>

    @include('layouts.complementos.footer')

</body>

</html>
