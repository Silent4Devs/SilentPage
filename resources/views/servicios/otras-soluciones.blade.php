@extends('layouts.site')

@section('titulo', 'Soluciones Tecnológicas para Proteger tu Organización')

@section('metaDesc',
    'Descubre cómo nuestra Soluciones Tecnológicas identifica y previene las amenazas a las que
    está expuesta tu organización en el ciberespacio.s')

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
            <img src="{{ asset('img/serv_soluciones.webp') }}" height="70px" style="filter: brightness(10);"
                alt="servicio soluciones" title="servicio soluciones">
            <h1 class="title-main">Soluciones Tecnológicas</h1>
            <p style="text-align:center;">
                En Silent4Business, nos especializamos en ofrecer soluciones tecnológicas adaptadas a las necesidades de
                ciberseguridad de tu empresa.
            </p>
        </div>

        <content class="content-limit">
            <div class="caja-serv-inter">
                <div class="menu-serv-inter">
                    <div class="caja-menu-serv">
                        <span class="title-terd"> Servicios</span>
                        @include('servicios.menu-servicios')
                    </div>
                </div>
                <div class="main-serv-inter">
                    <div class="micro-servs">
                        <div class="content-limit">

                            <p class="text-center" style="font-size: 20px;">
                                Nuestro enfoque agnóstico nos permite trabajar con las mejores herramientas disponibles en
                                el mercado, sin estar limitados a una sola marca o proveedor. De esta manera, garantizamos
                                la protección de tu infraestructura digital contra las amenazas cibernéticas más avanzadas.
                            </p>
                            <span style="font-size: 30px;">Estas sólo son algunas de las soluciones que podemos
                                integrar:</span>

                            <div class="btns-pestañas-servicios">
                                <button>Pruebas de penetración</button>
                                <button>Análisis de vulnerabilidades</button>
                                <button>Análisis forense</button>
                            </div>

                            <div class="">
                                <span class="title-main title-first-serv ">
                                    Soluciones Avanzadas en Ciberseguridad
                                </span>

                                <p class="text-center" style="font-size: 20px;">
                                    Las soluciones avanzadas son esenciales para proteger los entornos corporativos frente a
                                    los ataques más complejos y dirigidos. En Silent4Business, ofrecemos un conjunto de
                                    tecnologías diseñadas para salvaguardar la integridad de los datos, optimizar el acceso
                                    a los sistemas y reforzar la seguridad en todos los niveles.
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </content>
    </div>

@endsection
