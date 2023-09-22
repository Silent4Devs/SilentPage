@extends('layouts.site')

@section('titulo', 'Ciberinteligencia Estratégica | Protegiendo tu Negocio')

@section('metaDesc',
    'Descubre cómo nuestra ciberinteligencia estratégica puede ayudarte a anticipar amenazas, proteger tus
    activos digitales y tomar decisiones informadas.')

@section('body', 'serv-inter-body')

@section('content')

    <style>
        .title-fondo::before {
            background-image: url('{{ asset('img/portadas/portada_servicios_inter.webp') }}');
        }
    </style>

    <div>
        <div class="title-fondo">
            <img src="{{ asset('img/serv_escudo.webp') }}" height="70px" style="filter: brightness(10);" alt="Servicios esucdo"
                title="Servicios esucdo">
            <h1 class="title-main">Ciberinteligencia</h1>
            <p style="text-align:center;">
                Es la adquisición y el análisis de información para identificar, rastrear y predecir las capacidades,
                intenciones y actividades cibernéticas que apoyen la toma de decisiones
            </p>
        </div>

        <content class="content-limit">
            <div class="caja-serv-inter">
                <div class="menu-serv-inter">
                    <div class="caja-menu-serv">
                        <span class="title-terd">Servicios</span>
                        @include('servicios.menu-servicios')
                    </div>
                </div>
                <div class="main-serv-inter">
                    <span class="title-main title-first-serv">¿Qué hace el servicio de ciberinteligencia?</span>
                    <p style="margin-top: 50px;">
                        El servicio de ciberinteligencia engloba/implementa estrategias proactivas y cognitivas de
                        prevención, detección e investigación de riesgos de seguridad, vigilancia del ciberespacio e
                        incorporación de herramientas de inteligencia artificial, y machine learning.
                    </p>

                    <div class="img-serv-inter">
                        <img src="{{ asset('img/csirt.webp') }}" width="90%" style="margin: 50px;" alt="Ciber"
                            title="Ciber">
                    </div>

                    <span class="title-main title-first-serv">El Equipo Especial Tiger Team se encarga de:</span>
                    <p>
                        Realizar pruebas de penetración y análisis de vulnerabilidades en sistemas informáticos y
                        redes
                        empresariales, para identificar posibles puntos débiles en la seguridad y tomar medidas
                        preventivas
                        antes de que ocurran incidentes. Gracias a su experiencia y conocimientos especializados, el
                        equipo
                        puede detectar vulnerabilidades en sistemas y aplicaciones, evaluar el riesgo de posibles
                        ataques y
                        proporcionar recomendaciones para mejorar la seguridad. Además, también pueden ayudar a
                        desarrollar
                        planes de contingencia y respuesta ante incidentes de seguridad, para minimizar el impacto
                        de
                        posibles ataques y garantizar la continuidad del negocio.
                    </p>

                    <div class="img-serv-inter">
                        <img src="{{ asset('img/ciber_secc.webp') }}" width="100%" style="margin: 50px 0px;"
                            alt="servicio interno" title="servicio interno">
                    </div>

                    <a href="{{ route('contacto') }}" class="btn-contact"
                        style="margin: auto; margin-top: 100px; transform: scale(1.3);">Contáctanos</a>
                </div>
            </div>
        </content>
    </div>

@endsection
