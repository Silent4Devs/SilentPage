<footer id="pie-page">
    <div class="footer-btn-top">
        <a href="#inicio"><i class="fa-regular fa-square-caret-up" title="Ir al inicio"></i></a>
    </div>
    <div class="caja-footer" style="align-items: center;">
        <div class="info-footer">
            <img src="{{ asset('img/logo_silent.webp') }}" alt="Logo Silent4Business" title="Logo Silent4Business">
            <p>
                <i class="fa-solid fa-location-dot" title="Icono locacion"></i>
                <a href="https://goo.gl/maps/DkTtghVWhaFoBKSLA?coh=178573&entry=tt" target="_blank"> Torre Murano
                    Insurgentes Sur #2453 </a>
            </p>
            <p>
                <i class="fa-solid fa-phone" title="Icono telefono"></i>
                <a href="tel:+525578233000"> 55 7823 3000</a>
            </p>
            <p>
                <i class="fa-regular fa-envelope" title="Icono correo"></i>
                <a
                    href="mailto:marketing@silent4business.com?Subject=Portal%20S4B%20Contacto">marketing@silent4business.com</a>
            </p>
            <p>
                <i class="fa-solid fa-file-circle-check" title="Icono términos de privacidad"></i>
                <a href="{{ route('terminos-privacidad') }}" target="_blanck">Aviso de privacidad</a>
            </p>
        </div>

        @livewire('contacto-footer-form-component')

        <div class="menu-footer">
            <span class="title-second">{{ __('nav.menu') }}</span>
            <a href="{{ route('servicios') }}">{{ __('nav.servicios') }}</a>
            <a href="{{ route('cert') }}">{{ __('nav.cert') }}</a>
            <a href="{{ route('medios') }}">{{ __('nav.medios') }}</a>
            <a href="{{ route('talento') }}">{{ __('nav.talento') }}</a>

            <div class="redes-icons caja-flex" style="margin-top: 50px; justify-content:space-between;">
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
    <div class="last-footer">
        {{ __('nav.derechos') }}
    </div>
    <script>
        function loadScript(a) {
            var b = document.getElementsByTagName("head")[0],
                c = document.createElement("script");
            c.type = "text/javascript", c.src = "
            https
                : tracker.metricool.com / resources / be
                .js ",c.onreadystatechange=a,c.onload=a,b.appendChild(c)}loadScript(function(){beTracker.t({hash:"
            5 cafdad3745036f9b60c59c6600102a0 "})});
    </script>
</footer>
