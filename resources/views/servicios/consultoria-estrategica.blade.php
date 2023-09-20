@extends('layouts.site')

@section('titulo', 'Consultoría Estratégica | Impulsa el cambio en tu organización')

@section('metaDesc',
    'Nuestra consultoría estratégica te brinda las soluciones necesarias para alcanzar tus metas
    empresariales. Descubre cómo optimizamos tu estrategia.')

@section('body', 'serv-inter-body')

@section('content')

    <style>
        .title-fondo::before {
            background-image: url('../img/portadas/portada_servicios_inter.webp');
        }
    </style>

    <div>
        <div class="title-fondo">
            <img src="{{ asset('img/serv_global.webp') }}" height="70px" style="filter: brightness(10);" alt="servicio global">
            <h1 class="title-main">Consultoría estratégica</h1>
            <p style="text-align:center;">
                Asesoramos a la dirección general de tu empresa en el desarrollo de su estrategia y de su modelo de
                negocio.
            </p>
        </div>

        <content class="content-limit">
            <div class="caja-serv-inter">
                <div class="menu-serv-inter">
                    <div class="caja-menu-serv">
                        <span class="title-terd"> Servicios</span>
                        <ul>
                            <li><a href="{{ asset('servicios/soc-noc') }}">SOC / NOC</a></li>
                            <li><a href="{{ asset('servicios/ciberinteligencia') }}">Ciberinteligencia</a></li>
                            <li><a href="{{ asset('servicios/consultoria-estrategica') }}" class="active">Consultoría
                                    Estratégica</a></li>
                            <li><a href="{{ asset('servicios/otras-soluciones') }}">Cyber Threat Intelligence (CTI)</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="main-serv-inter">
                    <span class="title-main title-first-serv">CONSULTORÍA ESTRATÉGICA</span>
                    <p style="margin-top: 50px;">
                        Acompañamiento y guía en el cumplimiento legal y regulatorio del ciclo de vida de los activos de
                        información de tu organización a nivel nacional e internacional. Una consultoría implica cambios
                        y
                        mejoras dentro de una empresa con la finalidad de optimizar su actividad de algún modo, pero
                        para
                        lograrlos será necesario gestionarla de forma organizada.
                    </p>

                    <div class="img-serv-inter">
                        <img src="{{ asset('img/consul.webp') }}" width="60%" style="margin: 50px 20%;"
                            alt="Consultoria">
                    </div>

                    <a href="contacto" class="btn-contact"
                        style="margin: auto; margin-top: 100px; transform: scale(1.3);">Contáctanos</a>
                </div>
            </div>
        </content>
    </div>

@endsection
