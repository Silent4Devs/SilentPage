@extends('layouts.site')

@section('titulo', 'Consultoría Estratégica | Impulsa el cambio en tu organización')

@section('metaDesc',
    'Nuestra consultoría estratégica te brinda las soluciones necesarias para alcanzar tus metas
    empresariales. Descubre cómo optimizamos tu estrategia.')

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
            <img src="{{ asset('img/serv_global.webp') }}" height="70px" style="filter: brightness(10);" alt="servicio global"
                title="servicio global">
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
                        @include('servicios.menu-servicios')
                    </div>
                </div>
                <div class="main-serv-inter">
                    <span class="title-main title-first-serv ">¿Cómo te puede ayudar Silent4Business y que soluciones te
                        ofrecemos?</span>

                    <div class="flex-serv">
                        <img src="{{ asset('img/consul-docs-table.png') }}" alt="">
                        <div>
                            <p>
                                En Silent4Business, entendemos que cada organización es única y enfrenta desafíos
                                específicos. Por eso, buscamos que nuestra consultoría estratégica te acompañe durante todo
                                el proceso de análisis, implementación y, de ser el caso, certificación. Nuestra metodología
                                se basa en la integración de marcos de referencia, normas internacionales y buenas prácticas
                                para garantizar la seguridad y eficiencia de tu organización.
                            </p>
                        </div>
                    </div>

                    <div style="margin-top: 50px;">
                        <span class="title-main title-first-serv ">Nuestro servicio está dividido en los siguientes ejes
                            estratégicos:</span>
                        <div>
                            <p>
                                <strong>Normas internacionales: </strong>

                                Asesoramos en la implementación de estándares reconocidos globalmente, como ISO 27001, para
                                garantizar la seguridad de la información y el cumplimiento normativo.
                            </p>

                            <p>
                                <strong>Buenas prácticas/Gobierno de TI:</strong>

                                Proporcionamos orientación sobre las mejores prácticas en gobernanza de TI, asegurando que
                                tus procesos y tecnologías estén alineados con los objetivos de negocio.
                            </p>

                            <p>
                                <strong>Seguridad de la información: </strong>

                                Implementamos y gestionamos sistemas de seguridad de la información para proteger tus
                                activos digitales contra ciberamenazas.
                            </p>

                            <p>
                                <strong>Marcos de referencia para gobierno: </strong>

                                Ayudamos a establecer estructuras de gobernanza eficaces que faciliten la toma de decisiones
                                estratégicas y operativas.
                            </p>

                            <p>
                                <strong>Otros servicios: </strong>

                                Incluyen análisis de riesgos, análisis de brechas, auditoría normativa, servicios de
                                continuidad de negocio, entre otros.
                            </p>

                            <p>
                                Estos servicios están diseñados para fortalecer la estructura y operatividad de tu
                                organización, permitiendo una gestión eficiente de los riesgos y asegurando la continuidad
                                de las operaciones en caso de incidentes.
                            </p>
                        </div>
                    </div>

                    <div class="flex-serv">
                        <div>
                            <span class="title-main title-first-serv ">¿Qué es la norma ISO 27001 y para qué se
                                utiliza?</span>
                            <p>
                                La norma ISO 27001: 2022 es un estándar internacional que proporciona los requisitos para
                                establecer, implementar, mantener y mejorar un Sistema de Gestión de Seguridad de la
                                Información (SGSI). Esta norma es crucial para garantizar la confidencialidad, integridad y
                                disponibilidad de la información en una organización, protegiendo los datos contra accesos
                                no autorizados y ciberamenazas. Alinear tu empresa a la norma ISO 27001: 2022 te permitirá:
                            </p>

                            <p>
                                <strong>• Gestión efectiva de riesgos: </strong> Identifica y mitiga riesgos de seguridad
                                mediante controles
                                adecuados.
                            </p>
                            <p>
                                <strong>• Confianza fortalecida: </strong> Aumenta la credibilidad con socios y clientes al
                                proteger los
                                activos de manera estructurada.
                            </p>
                            <p>
                                <strong>• Mejora continua: </strong> Facilita la adaptación a nuevas amenazas y el
                                cumplimiento de normativas
                                mediante un marco de mejora constante.
                            </p>
                        </div>
                        <img src="{{ asset('img/consul-iso.png') }}" alt="">
                    </div>
                </div>
            </div>
        </content>
    </div>

    <div class="micro-servs">
        <div class="content-limit">

            <div class="btns-pestañas-servicios">
                <button>Pruebas de penetración</button>
                <button>Análisis de vulnerabilidades</button>
                <button>Análisis forense</button>
            </div>

            <div class="">
                <div class="flex-serv" style="max-width: 1000px; margin: auto;">
                    <div>
                        <span class="title-main title-first-serv ">
                            ¿Cómo estás gestionando el riesgo?
                        </span>
                        <p>
                            La gestión del riesgo es un proceso crítico que ayuda a las organizaciones a identificar,
                            evaluar y mitigar los riesgos que pueden afectar su funcionamiento. La importancia de la gestión
                            del riesgo radica en su capacidad para proteger a las organizaciones de posibles pérdidas
                            financieras, daños a la reputación y perjuicios a los empleados.

                        </p>
                        <p>
                            Nosotros te ayudamos a implementar una gestión efectiva del riesgo, contando con los siguientes
                            beneficios:
                        </p>

                        <ul>
                            <li>
                                <strong>Minimizar el impacto de incidentes:</strong> Reducir la probabilidad y el impacto de
                                eventos adversos
                                mediante la implementación de controles preventivos y correctivos.
                            </li>
                            <li>
                                <strong>Mejorar la toma de decisiones:</strong> Proporcionar información valiosa que ayude a
                                los líderes a
                                tomar decisiones informadas y estratégicas.
                            </li>
                            <li>
                                <strong>Aumentar la resiliencia:</strong> Fortalecer la capacidad de la organización para
                                adaptarse y
                                recuperarse rápidamente de incidentes disruptivos.
                            </li>
                        </ul>

                    </div>
                    <img src="{{ asset('img/consul-impact.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>

@endsection
