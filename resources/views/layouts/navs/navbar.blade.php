<div class="fixed-header">
    <content class="content-header">
        <div class="header-caja">
            <a href="{{ url('/') }}">
                <img src="{{ asset('img/logo_silent.webp') }}" style="height: 70px;" title="Logo Silent4business"
                    alt="Logo Silent4business">
            </a>
            <nav class="nav-principal mobile-none">
                <a href="{{ route('servicios') }}">Servicios</a>
                <a href="{{ route('productos') }}">Productos</a>
                <a href="{{ route('soluciones') }}">Soluciones</a>
                <a href="{{ route('tendencias') }}">Ciber Blog</a>
                <a href="{{ route('cert') }}">CERT</a>
            </nav>
        </div>
        <div class="header-caja contact-header mobile-none" style="justify-content: right;">
            {{-- <a href="" class="" style="margin-right: 50px;">¿Tuviste un incidente?</a> --}}
            <a href="{{ route('contacto') }}" class="btn-contact">Contáctanos</a>
        </div>

        <div class="caja-flex solo-mobile" style="gap:30px; align-items: center;">
            <a href="contacto" class="btn-contact solo-mobile">Contáctanos</a>
            <i id="btn-menu-header" class="material-symbols-outlined icon-menu solo-mobile" onclick="menu()">menu</i>
        </div>
    </content>
</div>

<div class="menu-mobile solo-mobile d-none">
    <div class="menu-blanck">
        <nav>
            <a href="{{ route('servicios') }}">Servicios</a>
            <a href="{{ route('productos') }}">Productos</a>
            <a href="{{ route('soluciones') }}">Soluciones</a>
            <a href="{{ route('tendencias') }}">Ciber Blog</a>
            <a href="{{ route('cert') }}">CERT</a>
        </nav>
    </div>
    <div class=menu-blue>
        <nav>
            <a href="{{ url('/') }}#alianzas">Alianzas</a>
            <a href="{{ route('exito') }}">Casos de éxito</a>
            <a href="{{ route('talento') }}">Aporta tu talento</a>
            <a href="{{ route('medios') }}">S4B en medios</a>
            <a href="{{ route('cert') }}">CERT</a>
            <a href="#pie-page">Newsletter</a>
            <a href="{{ route('metaverso') }}">Metaverso</a>
        </nav>
        <div class="redes">
            <a href="https://www.instagram.com/team.s4b/" target="_blank"><i class="fa-brands fa-instagram"
                    title="Instragram"></i></a>
            <a href="https://www.linkedin.com/company/silent4business/mycompany/" target="_blank"><i
                    class="fa-brands fa-linkedin" title="-Linkedin"></i></a>
            <a href="https://twitter.com/silent4business" target="_blank"><i class="fa-brands fa-x-twitter"
                    title="x"></i></a>
            <a href="https://www.youtube.com/@silent4business944" target="_blank"><i class="fa-brands fa-youtube"
                    title="Youtube"></i></a>
        </div>
    </div>
</div>
