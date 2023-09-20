@extends('layouts.site')

@section('titulo', 'Servicios de ciberseguridad para empresas')

@section('metaDesc',
    'Conoce nuestros servicios de ciberseguridad. Servicios administrados de SOC/NOC, Consultoría
    estratégica y Cyber Threat Intelligence. ¡Protege tu organización!')

@section('body', 'servicios-body')

@section('content')

    <style>
        .title-fondo::before {
            background-image: url('img/portadas/portada_servicios.webp');
        }
    </style>

    <div>
        <div class="title-fondo">
            <h1 class="title-main">Conoce nuestros servicios</h1>
            <p>Nuestra amplia experiencia en resolver problemas y emergencias nos respalda.</p>
        </div>

        <content class="content-limit">
            <div class="caja-btn-group">
                <a href="{{ asset('servicios/soc-noc') }}">
                    <img src="img/serv_monitor.webp" title="Sección SOC -NOC" alt="Sección SOC -NOC">
                    <p>SOC / NOC</p>
                </a>
                <a href="{{ asset('servicios/ciberinteligencia') }}">
                    <img src="img/serv_escudo.webp" title="Sección Ciberinteligencia" alt="Sección Ciberinteligencia">
                    <p>Ciberinteligencia</p>
                </a>
                <a href="{{ asset('servicios/consultoria-estrategica') }}">
                    <img src="img/serv_global.webp" title="Sección Consultoría estratégica"
                        alt="Sección Consultoría estratégica">
                    <p>Consultoría <br> Estratégica</p>
                </a>
                <a href="{{ asset('servicios/otras-soluciones') }}">
                    <img src="img/serv_soluciones.webp" title="Sección Otras soluciones" alt="Sección Otras soluciones">
                    <p>Cyber Threat <br> Intelligence (CTI)</p>
                </a>
            </div>
            <p class="text-prin-serv" style="margin-top: 60px; font-size: 18px;">
                Debido a la creciente incidencia de robo de información y demás ciberataques, las compañías intentan estar
                preparadas para hacer frente y disminuir los riegos a los que se exponen diariamente. Conoce que servicios
                podemos ofrecerle a tu organización para proteger su información.
            </p>
        </content>
    </div>

@endsection
