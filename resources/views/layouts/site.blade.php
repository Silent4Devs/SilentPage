<!doctype html>
<html lang="es">
<title>@yield('titulo', 'Aliados de tu Ciberseguridad | Servicios para tu empresa.')</title>

<head>
    @include('layouts.complementos.head')
    @livewireStyles
</head>

@cookieconsentscripts

<body id="inicio" class="@yield('body')">
    @cookieconsentview

    <header>
        @include('layouts.complementos.header')
    </header>

    <main class="">

        <div>
            @yield('content')
        </div>

    </main>

    @include('layouts.complementos.footer')

    <script type="text/javascript" data-cfasync="false" src="https://humanchat.net/build/js/hb_latest.js?v=1.5.10"
        crossorigin="anonymous"></script>

    <script>
        var aiBot = new AiBot({
            embedId: '5uFdLzTdqmcq',
            remoteBaseUrl: 'https://humanchat.net/',
            version: '1.5.10'
        });
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    {{-- <script src="{{ asset('js/animaciones.js') }}"></script> --}}
    <script>
        let semi_alto = $(window).height() - $(window).height() / 2.6;

        function animacionScroll() {
            let semi_scroll = $(window).scrollTop() + semi_alto;
            let objets_no_visibles = document.querySelectorAll(".no-visible");
            objets_no_visibles.forEach((obj) => {
                if (semi_scroll > $(obj).offset().top) {
                    $(obj).removeClass("no-visible");
                    $(obj).addClass("animandose");
                    setTimeout(() => {
                        $(".animandose *").css("transition-delay", "0s");
                        $(obj).removeClass("animandose");
                    }, 2000);
                }
            });
        }
        animacionScroll();
        $(window).scroll(function() {
            animacionScroll();
        });

        function menu() {
            $(".menu-mobile").toggleClass("d-none");
        }
        $(".menu-mobile a").click(function() {
            menu();
        });

        function modal(id_modal) {
            $("#" + id_modal).toggleClass("d-none");
        }
        $(".modal").click(function() {
            if (!$(".modal-content").is(":hover")) {
                $(".modal:hover").toggleClass("d-none");
            }
        });

        function desplazar(des_num) {
            $(".desplazable:first-child").css("margin-left", des_num + "%");
        }
    </script>

    <script>
        function changeContentMicro(id) {
            document.querySelectorAll('.btns-pestañas-servicios button').forEach(btnPestaña => {
                btnPestaña.classList.remove('active');
            });
            document.querySelector('.btns-pestañas-servicios button:hover').classList.add('active');
            document.querySelector('.content-microsite.active').classList.remove('active');
            document.getElementById(id).classList.add('active');
        }
    </script>

    @livewireScripts

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <x-livewire-alert::scripts />

    @yield('scripts')

</body>

</html>
