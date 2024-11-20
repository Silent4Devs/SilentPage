@extends('layouts.site')

@section('titulo', 'Servicios SOC/NOC | Protección y Monitoreo 24/7')

@section('metaDesc',
    'Nuestros servicios administrados de SOC/NOC trabajan en conjunto para mantener tu negocio seguro y
    operativo 24/7. ¡Descubre cómo protegemos tu empresa!')

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
            <img src="{{ asset('img/serv_monitor.webp') }}" height="70px" style="filter: brightness(10);" alt="Monitoreo"
                title="Monitoreo">
            <h1 class="title-main">SOC / NOC</h1>
            <p style="text-align:center;">
                Creados para proteger los elementos más importantes de una Institución pública o privada, la información
                y su gente, teniendo como objetivo principal, Monitorear los Sistemas de Seguridad para así tenerlos
                lejos de amenazas o riesgos innecesarios.
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
                    <span class="title-main title-first-serv ">¿SOC y NOC qué son y cómo te podemos ayudar?</span>
                    <p style="margin-top: 50px;">
                        Los Centros de Operaciones de Ciberseguridad (SOC) y los Centros de Operaciones de Redes (NOC)
                        juegan roles importantes en asegurar y optimizar la infraestructura de TI de las organizaciones.
                        Aunque ambos centros trabajan para el buen funcionamiento de las empresas, sus funciones y objetivos
                        son diferentes.
                    </p>
                    <img src="" alt="">

                    <div class="flex-serv">
                        <img src="" alt="">
                        <div>
                            <span class="title-main title-first-serv ">
                                Con nuestro servicio de SOC, las empresas pueden esperar:
                            </span>
                            <p>
                                <strong>· Seguridad administrada de soluciones de multi-marca:</strong> Conjunto de
                                soluciones que incluye
                                una supervisión continua, detección y respuesta
                            </p>
                            <p>
                                <strong>· Correlación híbrida: </strong> Esta técnica permite la detección de actividad
                                sospechosa y anómala
                                al combinar datos de diversas fuentes para identificar patrones de amenaza.
                            </p>
                            <p>
                                <strong>· Soporte especializado:</strong> Los analistas del SOC proporcionan soporte técnico
                                experto en
                                soluciones de seguridad, ayudando a resolver problemas complejos de manera eficiente.
                            </p>
                            <p>
                                <strong>· Reportes de seguridad: </strong> Informes detallados sobre el estado de la
                                seguridad y las amenazas
                                detectadas ayudan a las organizaciones a comprender mejor su postura de seguridad y a tomar
                                decisiones informadas.
                            </p>
                            <p>
                                En esencia, el SOC brinda a las empresas una capa adicional de protección, asegurando que
                                las amenazas sean detectadas y gestionadas antes de que puedan causar daños significativos.
                            </p>
                            <img src="" alt="" style="width: 100%;">
                        </div>
                    </div>

                    <div class="flex-serv">
                        <img src="" alt="">
                        <div>
                            <span class="title-main title-first-serv ">
                                Las funciones clave de nuestro servicio de NOC incluyen:
                            </span>

                            <p>
                                <strong>· Mapeo de redes:</strong> Crear y mantener un mapa detallado de la infraestructura
                                de red,
                                identificando todos los componentes y conexiones.
                            </p>
                            <p>
                                <strong>· Aprovisionamiento de infraestructura:</strong> Gestionar la instalación,
                                configuración y
                                mantenimiento de equipos de red y servicios relacionados.
                            </p>
                            <p>
                                <strong>· Monitoreo de rendimiento:</strong> Supervisar constantemente el rendimiento de la
                                red para
                                identificar y resolver problemas antes de que afecten a los usuarios finales.
                            </p>
                            <p>
                                <strong>· Monitoreo de aplicaciones:</strong> Asegurarse de que las aplicaciones críticas
                                funcionen
                                correctamente y respondan a las necesidades de los usuarios.
                            </p>
                            <p>
                                <strong>· Informes de monitoreo:</strong> Proporcionar informes detallados sobre el estado
                                de la red y su
                                rendimiento, permitiendo a las organizaciones tomar decisiones basadas en datos precisos.
                            </p>
                            <p>
                                El NOC garantiza que la infraestructura de red esté operativa y funcione a niveles óptimos,
                                permitiendo a la empresa mantener su productividad y eficiencia.
                            </p>

                            <img src="" alt="" style="width: 100%;">
                        </div>
                    </div>

                    <div class="flex-serv">
                        <img src="" alt="">
                        <div>
                            <span class="title-main title-first-serv ">
                                Características para que tu empresa esté más segura y conectada
                            </span>

                            <p>

                                <strong>Contar con un SOC/NOC es crucial para mantener la seguridad y operatividad de su
                                    infraestructura
                                    de TI de tu empresa:</strong>
                            </p>

                            <p>

                                <strong>· Seguridad integral: </strong>Mientras el NOC se asegura de que la red funcione
                                correctamente, el SOC protege contra amenazas externas e internas. Juntos, brindan una
                                cobertura
                                completa de la infraestructura de TI.
                            </p>

                            <p>

                                <strong>· Respuesta rápida a incidentes:</strong> Con un NOC, cualquier problema de red se
                                identifica y resuelve rápidamente. Con un SOC, cualquier amenaza de seguridad se detecta y
                                se
                                maneja de manera eficaz. Esta combinación asegura que cualquier problema, ya sea técnico o
                                de
                                seguridad, se gestione con rapidez y precisión.
                            </p>

                            <p>

                                <strong>· Optimización de recursos:</strong> Al tener ambos centros, una organización puede
                                optimizar sus recursos de TI, asegurando que tanto la operatividad como la seguridad se
                                gestionen eficientemente.
                            </p>

                        </div>
                    </div>

                    @include('servicios.conoce-productos')

                </div>
            </div>
        </content>
    </div>



@endsection
