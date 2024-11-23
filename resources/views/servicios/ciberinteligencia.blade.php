@extends('layouts.site')

@section('titulo', 'Ciberinteligencia Estratégica | Protegiendo tu Negocio')

@section('metaDesc',
    'Descubre cómo nuestra ciberinteligencia estratégica puede ayudarte a anticipar amenazas, proteger tus
    activos digitales y tomar decisiones informadas.')

@section('body', 'serv-inter-body')

@section('head')
    <style>
        .title-fondo::before {
            background-image: url('{{ asset('img/portadas/portada_servicios_inter.webp') }}');
        }
    </style>
@endsection

@section('content')
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
                    <div class="flex-serv">
                        <img src="{{ asset('img/ciber-workers.png') }}" alt="">
                        <div>
                            <span class="title-main title-first-serv ">¿Cómo proteger tu organización con
                                ciberinteligencia?</span>
                            <p>
                                Con el aumento de las ciberamenazas, es crucial contar con herramientas y estrategias que
                                permitan proteger los activos digitales. La ciberinteligencia juega un papel fundamental en
                                este contexto, proporcionando una defensa proactiva y reactiva contra los ciberataques.
                            </p>
                        </div>
                    </div>
                    <div class="flex-serv">
                        <img src="{{ asset('img/ciber-person-tec.png') }}" alt="">
                        <div>
                            <span class="title-main title-first-serv ">¿Qué ofrece nuestro servicio de ciberinteligencia y
                                para qué sirve?</span>
                            <p>
                                La ciberinteligencia es un servicio avanzado que implementa estrategias proactivas para la
                                prevención, detección e investigación de incidentes de seguridad. Este enfoque incluye la
                                vigilancia constante del ciberespacio, utilizando herramientas de inteligencia artificial y
                                machine learning para identificar y mitigar amenazas de manera eficiente. La
                                ciberinteligencia no solo se centra en reaccionar ante incidentes, sino también en
                                anticiparlos y prevenirlos.
                            </p>
                            <p>
                                En Silent4Business, nuestros servicios de ciberinteligencia se desarrollan a través de un
                                equipo especializado conocido como CSIRT (Centro de Respuesta a Incidentes de Seguridad
                                Informática), que incluye:
                            </p>
                        </div>
                    </div>
                    <div class="box-servs-ciber-rep">
                        <img src="{{ asset('img/ciber-serv-1.png') }}" alt="">
                        <img src="{{ asset('img/ciber-serv-2.png') }}" alt="">
                        <img src="{{ asset('img/ciber-serv-3.png') }}" alt="">
                        <img src="{{ asset('img/ciber-serv-4.png') }}" alt="">
                    </div>

                    <p style="font-size: 16px; margin-top: 50px;">
                        Con la implementación de ciberinteligencia, proporcionamos una defensa robusta y adaptada a las
                        necesidades específicas de cada organización. De esta manera, tu empresa podrá:
                    </p>
                    <div class="box-ciber-defens">
                        <img src="{{ asset('img/ciber-defensa-1.svg') }}" alt="">
                        <img src="{{ asset('img/ciber-defensa-2.svg') }}" alt="">
                        <img src="{{ asset('img/ciber-defensa-3.svg') }}" alt="">
                        <img src="{{ asset('img/ciber-defensa-4.svg') }}" alt="">
                        <img src="{{ asset('img/ciber-defensa-5.svg') }}" alt="">
                    </div>
                </div>
            </div>
        </content>
    </div>

    <div class="micro-servs">
        <div class="content-limit">

            <span class="title-main title-first-serv" style="text-align: center;">
                Espera, aún hay más en Ciberinteligencia
            </span>

            <div class="btns-pestañas-servicios">
                <button>Pruebas de penetración</button>
                <button>Análisis de vulnerabilidades</button>
                <button>Análisis forense</button>
            </div>

            <div class="">
                <div class="flex-serv" style="max-width: 1000px; margin: auto;">
                    <div>
                        <span class="title-main title-first-serv ">
                            ¿Has escuchado hablar sobre las pruebas de penetración?
                        </span>
                        <p>
                            Consisten en simular un ciberataque para identificar vulnerabilidades en un sistema informático
                            y corregirlas antes de que puedan ser explotadas por los ciberdelincuentes. Estas pruebas
                            proporcionan una visión detallada de las debilidades de un sistema, permitiendo a las
                            organizaciones tomar medidas preventivas y correctivas.

                        </p>
                        <p>
                            Beneficios de nuestras pruebas de penetración: Planificación y reconocimiento: Identificación de
                            los objetivos y alcance del pentest, así como la recopilación de información relevante.
                        </p>
                        <p>
                            Escaneo: Análisis de la red y los sistemas para identificar posibles puntos de entrada.
                            Obtención de acceso: Intento de explotar vulnerabilidades para acceder a los sistemas.
                        </p>
                        <p>
                            Mantenimiento del acceso: Estimación de la capacidad de los ciberdelincuentes para mantener el
                            acceso a los sistemas comprometidos.
                        </p>
                        <p>
                            Análisis y reporte: Documentación detallada de las vulnerabilidades encontradas y
                            recomendaciones para mitigarlas. Contamos con las siguientes pruebas para poder ayudarte según
                            tus objetivos
                        </p>
                    </div>
                    <img src="{{ asset('img/ciber-pruebas.svg') }}" alt="">
                </div>
            </div>
        </div>
    </div>

@endsection
