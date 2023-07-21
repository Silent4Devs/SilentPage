@extends('layouts.site')

@section('content')

@section('titulo', 'Aliados de tu Ciberseguridad | Servicios para tu empresa')

@section('body', 'contacto-body')

<style>
    .title-fondo::before {
        background-image: url('img/portadas/portada_servicios.png');
    }
</style>

<div>
    <div class="desplazador">
        <div class="desplazable">
            {{-- <content class="content-limit">
                <div class="card">
                    <h2>Contacta con nuestra área comercial</h2>
                    <p class="parrafo-psolinf">
                        En el siguiente formulario puedes solicitar información de los servicios que ofrecemos en
                        S4B.
                    </p>
                    <form id="form-area-comercial" method="POST"
                        action="complementos/mails/mailcontacto-areacom.php">
                        <div class="form-item">
                            <label for="nombre">Nombre <sup>*</sup></label>
                            <input required type="text" name="nombre" id="nombre" maxlength="255">
                        </div>
                        <div class="form-item">
                            <label for="">Correo electrónico <sup>*</sup></label>
                            <input required type="email" name="email" id="email" maxlength="255">
                        </div>
                        <div class="form-item">
                            <label for="">Teléfono <sup>*</sup></label>
                            <input required type="tel" pattern="[0-9]{10,15}" maxlength="15" name="telefono"
                                id="telefono">
                        </div>
                        <div class="form-item">
                            <label for="mensaje">Mensaje</label>
                            <textarea name="mensaje" id="mensaje"></textarea>
                        </div>
                        <div class="form-item caja-flex">
                            <div class="btn-form-second" onclick="desplazar(-100)">Atrás</div>
                            <button class="btn-form">
                                <i class="fa-solid fa-circle-notch fa-spin"></i>
                                Adelante
                            </button>
                        </div>
                    </form>
                    <p class="parrafo-psolinf" style="margin-top: 60px;">
                        <small><i>*Nos pondremos en contacto contigoen menos de 12 horas hábiles.</i></small>
                    </p>
                </div>
            </content> --}}
            @livewire('contacto-comercial-form-component')
        </div>
        <div class="desplazable">
            <content class="content-limit">
                <div class="card">
                    <h2>Contacto</h2>
                    <p class="parrafo-psolinf">
                        Puedes solicitar información de los servicios que ofrecemos en S4B o bien puedes hacer una
                        consulta de algún problema en especifico de seguridad.
                    </p>

                    <h5>Elige la opción que necesites.</h5>

                    <div class="caja-flex">
                        <div class="contact-item">
                            <button class="card" onclick="desplazar(0)">
                                <i class="material-symbols-outlined">headset_mic</i>
                            </button>
                            <p><strong> General </strong></p>
                            <p class="mobile-none-mini">
                                En está opción podrás ponerte en contacto con nuestra área comercial para
                                cotizaciones, dudas, preguntas especificas y consultas en general.
                            </p>
                        </div>
                        <div class="contact-item">
                            <button class="card" onclick="desplazar(-200)">
                                <i class="material-symbols-outlined">school</i>
                            </button>
                            <p><strong> Cursos y capacitaciones </strong></p>
                            <p class="mobile-none-mini">
                                Solicita una visita de Silent 4 Business a tu escuela, ya sea a una capacitación o a
                                realizar alguna ponencia en ciberseguridad.
                            </p>
                        </div>
                        <div class="solo-mobile-mini" style="margin-top: 30px; color: #2567AE;">
                            <p>
                                <strong>1.</strong> En está opción podrás ponerte en contacto con nuestra área
                                comercial para cotizaciones, dudas, preguntas especificas y consultas en general.
                            </p>
                            <p>
                                <strong>2.</strong> Solicita una visita de Silent 4 Business a tu escuela, ya sea a
                                una capacitación o a realizar alguna ponencia en ciberseguridad.
                            </p>
                        </div>
                    </div>
                </div>
            </content>
        </div>
        <div class="desplazable">
            {{-- <contetn class="content-limit">
                <div class="card">
                    <h2>Cursos y capacitaciones</h2>
                    <p class="parrafo-psolinf">
                        En el siguiente formulario puedes solicitar una visita de S4B a tu escuela o empresa. .
                    </p>
                    <form id="form-cursos-capacitaciones" method="POST"
                        action="complementos/mails/mailcontacto-curycap.php">
                        <div class="form-item">
                            <label for="nombre">Nombre <sup>*</sup></label>
                            <input required type="text" name="nombre" id="nombre" maxlength="255">
                        </div>
                        <div class="form-item">
                            <label for="email">Correo electrónico <sup>*</sup></label>
                            <input required type="email" name="email" id="email" maxlength="255">
                        </div>
                        <div class="form-item">
                            <label for="telefono">Teléfono <sup>*</sup></label>
                            <input required type="tel" pattern="[0-9]{10,15}" maxlength="15" name="telefono"
                                id="telefono">
                        </div>
                        <div class="form-item">
                            <label for="organizacion">Escuela o empresa <sup>*</sup></label>
                            <input required type="text" name="organizacion" id="organizacion" maxlength="255">
                        </div>
                        <div class="form-item">
                            <label for="mensaje">Mensaje</label>
                            <textarea name="mensaje" id="mensaje"></textarea>
                        </div>
                        <div class="form-item caja-flex">
                            <div class="btn-form-second" onclick="desplazar(-100)">Atrás</div>
                            <button class="btn-form">
                                <i class="fa-solid fa-circle-notch fa-spin"></i>
                                Adelante
                            </button>
                        </div>
                    </form>
                    <p class="parrafo-psolinf" style="margin-top: 60px;">
                        <small><i>*Nos pondremos en contacto contigo en menos de 12 horas hábiles.</i></small>
                    </p>
                </div>
            </contetn> --}}
            @livewire('contacto-curso-capacitacion-form-component')
        </div>
    </div>
</div>

@endsection

@section('scripts')
<script>
    function desplazar(des_num) {
        $('.desplazable:first-child').css('margin-left', des_num + '%');
    }
    </script>
@endsection
