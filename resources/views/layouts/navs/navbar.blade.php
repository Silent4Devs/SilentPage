<div class="fixed-header">
    <content class="content-header">
        <div class="header-caja">
            <a href="{{ url('/') }}">
                <img src="img/logo_silent.png" style="height: 70px;">
            </a>
            <nav class="nav-principal mobile-none">
                <a href="{{ url('servicios') }}">Servicios</a>
                <a href="{{ url('productos') }}">Productos</a>
                <a href="soluciones">Soluciones</a>
                <a href="tendencias">Ciber Blog</a>
                <a href="cert">CERT</a>
                <a href="test" class="d-none">Test de seguridad</a>
            </nav>
        </div>
        <div class="header-caja contact-header mobile-none" style="justify-content: right;">
            <a href="" class="d-none" style="margin-right: 50px;">¿Tuviste un incidente?</a>
            <a href="contacto" class="btn-contact">Contáctanos</a>
        </div>

        <div class="caja-flex solo-mobile" style="gap:20px; align-items: center;">
            <a href="contacto" class="btn-contact solo-mobile">Contáctanos</a>
            <i id="btn-menu-header" class="material-symbols-outlined icon-menu solo-mobile" onclick="menu()">menu</i>
        </div>
    </content>
</div>

<div class="menu-mobile solo-mobile d-none">
    <div class="menu-blanck">
        <nav>
            <a href="{{ url('servicios') }}">Servicios</a>
            <a href="{{ url('productos') }}">Productos</a>
            <a href="soluciones">Soluciones</a>
            <a href="test" class="d-none">Test de seguridad</a>
            <a href="contacto">Contacto</a>
        </nav>
    </div>
    <div class=menu-blue>
        <nav>
            <a href="index#alianzas">Alianzas</a>
            <a href="exito">Casos de éxito</a>
            <a href="talento">Aporta tu talento</a>
            <a href="medios">S4B en medios</a>
            <a href="cert">CERT</a>
            <a href="#pie-page">Newsletter</a>
        </nav>
        <div class="redes-icons">
            <a href="https://www.instagram.com/team.s4b/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
            <a href="https://www.linkedin.com/company/silent4business/mycompany/" target="_blank"><i
                    class="fa-brands fa-linkedin"></i></a>
            <a href="https://twitter.com/silent4business" target="_blank"><i class="fa-brands fa-twitter"></i></a>
            <a href="https://www.youtube.com/@silent4business944" target="_blank"><i
                    class="fa-brands fa-youtube"></i></a>
        </div>
    </div>
</div>
