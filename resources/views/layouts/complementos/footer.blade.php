<footer id="pie-page">
    <div class="footer-btn-top">
        <a href="#inicio"><i class="fa-regular fa-square-caret-up"></i></a>
    </div>
    <div class="caja-footer">
        <div class="info-footer">
            <img src="img/logo_silent.webp">
            <p>
                <i class="fa-solid fa-location-dot"></i>
                Torre Murano Insurgentes Sur #2453
            </p>
            <p>
                <i class="fa-solid fa-phone"></i>
                55 7823 3000
            </p>
            <p>
                <i class="fa-regular fa-envelope"></i>
                marketing@silent4business
            </p>
        </div>
        <div class="correo-footer">
            <h2>Únete a nuestro Newsletter</h2>
            <p>
                Suscríbete para estar informado acerca de nuestros servicios, productos y desarrollos en el mundo de la
                Ciberseguridad
            </p>
            <form id="form-newsletter" method="POST" action="complementos/mails/mailfooter.php">
                <input id="email-newsletter" required type="email" name="email" maxlength="255"
                    placeholder="Dirección de correo">
                <button>
                    <i class="fa-solid fa-circle-notch fa-spin"></i>
                    Envíar
                </button>
            </form>
        </div>
        <div class="menu-footer">
            <h2>Menú</h2>
            <a href="servicios.php">Servicios</a>
            <a href="cert.php">CERT</a>
            <a href="medios.php">Medios</a>
            <a href="talento.php">Aporta tu talento</a>
        </div>
    </div>
    <div class="last-footer">
        @2023 Silent4business - Todos los derechos reservados
    </div>
</footer>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script>
    // enviar correo de newsletter
    $('#form-newsletter').submit(function(e) {
        e.preventDefault();
        $.ajax({
            data: $('#form-newsletter').serialize(),
            url: $(this).attr('action'),
            type: $(this).attr('method'),
            cache: false,
            dataType: 'json',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },

            beforeSend: function() {
                console.log('pre');
                $('footer button').addClass('pre');
                $('footer button').attr('disabled', 'true');
            },
            success: function() {
                console.log('post');
                $('footer button').removeClass('pre');
                $('footer button').addClass('post');
                $('footer button i').removeClass('fa-circle-notch');
                $('footer button i').removeClass('fa-spin');
                $('footer button i').addClass('fa-check');
                $('footer button').attr('disabled', 'true');
                $('footer input').attr('disabled', 'true');
            },
            error: function() {
                console.log('error');
                $('footer button').addClass('error');
                $('footer button').removeClass('pre');
            }
        });
    });

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
