@extends('layouts.site')

@section('titulo', ': Cyber Threat Intelligence (CTI) para Proteger tu Organización')

@section('metaDesc',
    'Descubre cómo nuestra Cyber Threat Intelligence (CTI) identifica y previene las amenazas a las que
    está expuesta tu organización en el ciberespacio.s')

@section('body', 'serv-inter-body')

@section('content')

    <style>
        .title-fondo::before {
            background-image: url('../img/portadas/portada_servicios_inter.webp');
        }
    </style>

    <div>
        <div class="title-fondo">
            <img src="{{ asset('img/serv_soluciones.webp') }}" height="70px" style="filter: brightness(10);"
                alt="servicio soluciones">
            <h1 class="title-main">Cyber Threat Intelligence (CTI)</h1>
            <p style="text-align:center;">
                Identifica a tiempo las amenazas a las que se encuentra expuesta tu organización
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
                            <li><a href="{{ asset('servicios/consultoria-estrategica') }}">Consultoría Estratégica</a>
                            </li>
                            <li><a href="{{ asset('servicios/otras-soluciones') }}" class="active">Cyber Threat
                                    Intelligence
                                    (CTI)</a></li>
                        </ul>
                    </div>
                </div>
                <div class="main-serv-inter">
                    <span class="title-main title-first-serv">Es momento de ser vigilantes</span>
                    <p style="margin-top: 50px;">
                        Nuestro servicio CTI te brindará la información de valor con la que podrás tomar decisiones
                        críticas
                        en beneficio de la seguridad de tu organización.
                    </p>

                    <span class="title-terd" style="margin-top: 50px; text-align: center;">¿Qué incluye?</span>

                    <div class="img-serv-inter">
                        <img src="{{ asset('img/no_protected.webp') }}" width="60%" style="margin: 10px 20%;"
                            alt="protected">
                    </div>

                    <a href="contacto" class="btn-contact"
                        style="margin: auto; margin-top: 100px; transform: scale(1.3);">Contáctanos</a>
                </div>
            </div>
        </content>
    </div>

@endsection
