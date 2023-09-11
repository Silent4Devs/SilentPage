<footer id="pie-page">
    <div class="footer-btn-top">
        <a href="#inicio"><i class="fa-regular fa-square-caret-up" title="Ir al inicio"></i></a>
    </div>
    <div class="caja-footer" style="align-items: center;">
        <div class="info-footer">
            <img src="{{ asset('img/logo_silent.webp') }}" title="Logo Silent4Business">
            <p>
                <i class="fa-solid fa-location-dot"></i>
                <a href="https://goo.gl/maps/DkTtghVWhaFoBKSLA?coh=178573&entry=tt" target="_blank"> Torre Murano
                    Insurgentes Sur #2453 </a>
            </p>
            <p>
                <i class="fa-solid fa-phone"></i>
                <a href="tel:+525578233000"> 55 7823 3000</a>
            </p>
            <p>
                <i class="fa-regular fa-envelope"></i>
                <a
                    href="mailto:marketing@silent4business.com?Subject=Portal%20S4B%20Contacto">marketing@silent4business.com</a>
            </p>
        </div>

        @livewire('contacto-footer-form-component')

        <div class="menu-footer">
            <span class="title-second">Menú</span>
            <a href="{{ url('servicios') }}">Servicios</a>
            <a href="{{ url('cert') }}">CERT</a>
            <a href="{{ url('medios') }}">Medios</a>
            <a href="{{ url('talento') }}">Aporta tu talento</a>

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
        @2023 Silent4business - Todos los derechos reservados
    </div>
</footer>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script>
    // enviar correo de newsletter
    // $('#form-newsletter').submit(function(e) {
    //     e.preventDefault();
    //     $.ajax({
    //         data: $('#form-newsletter').serialize(),
    //         url: $(this).attr('action'),
    //         type: $(this).attr('method'),
    //         cache: false,
    //         dataType: 'json',
    //         headers: {
    //             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    //         },

    //         beforeSend: function() {
    //             console.log('pre');
    //             $('footer button').addClass('pre');
    //             $('footer button').attr('disabled', 'true');
    //         },
    //         success: function() {
    //             console.log('post');
    //             $('footer button').removeClass('pre');
    //             $('footer button').addClass('post');
    //             $('footer button i').removeClass('fa-circle-notch');
    //             $('footer button i').removeClass('fa-spin');
    //             $('footer button i').addClass('fa-check');
    //             $('footer button').attr('disabled', 'true');
    //             $('footer input').attr('disabled', 'true');
    //         },
    //         error: function() {
    //             console.log('error');
    //             $('footer button').addClass('error');
    //             $('footer button').removeClass('pre');
    //         }
    //     });
    // });

    // animaciones
    let semi_alto = $(window).height() - ($(window).height() / 2.6);

    function animacionScroll() {
        let semi_scroll = $(window).scrollTop() + semi_alto;

        // foreach de no visibles
        let objets_no_visibles = document.querySelectorAll('.no-visible');
        objets_no_visibles.forEach(obj => {
            if (semi_scroll > $(obj).offset().top) {
                $(obj).removeClass('no-visible');
                $(obj).addClass('animandose');
                setTimeout(() => {
                    $('.animandose *').css('transition-delay', '0s');
                    $(obj).removeClass('animandose');
                }, 2000);
            }
        });
    }
    animacionScroll();
    $(window).scroll(function() {
        animacionScroll();
    });

    function menu() {
        $('.menu-mobile').toggleClass('d-none');
    }
    $('.menu-mobile a').click(function() {
        menu();
    });

    function modal(id_modal) {
        $('#' + id_modal).toggleClass('d-none');
    }

    $('.modal').click(function() {
        if (!($('.modal-content').is(':hover'))) {
            $('.modal:hover').toggleClass('d-none');
        }
    });
</script>
