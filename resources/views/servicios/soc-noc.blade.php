@extends('layouts.site')

@section('titulo', 'Servicios SOC/NOC | Protección y Monitoreo 24/7')

@section('metaDesc',
    'Nuestros servicios administrados de SOC/NOC trabajan en conjunto para mantener tu negocio seguro y
    operativo 24/7. ¡Descubre cómo protegemos tu empresa!')

@section('body', 'serv-inter-body')

@section('content')

    <style>
        .title-fondo::before {
            background-image: url('../img/portadas/portada_servicios_inter.webp');
        }
    </style>

    <div>
        <div class="title-fondo">
            <img src="{{ asset('img/serv_monitor.webp') }}" height="70px" style="filter: brightness(10);" alt="Monitoreo">
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
                        <ul>
                            <li><a href="{{ asset('servicios/soc-noc') }}" class="active">SOC / NOC</a></li>
                            <li><a href="{{ asset('servicios/ciberinteligencia') }}">Ciberinteligencia</a></li>
                            <li><a href="{{ asset('servicios/consultoria-estrategica') }}">Consultoría Estratégica</a>
                            </li>
                            <li><a href="{{ asset('servicios/otras-soluciones') }}">Cyber Threat Intelligence (CTI)</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="main-serv-inter">
                    <span class="title-main title-first-serv">¿Por qué instalar un SOC?</span>
                    <p style="margin-top: 50px;">
                        Porque brinda a las empresas e instituciones protección, detección temprana, respuesta proactiva
                        y
                        seguimiento ante cualquier amenaza que se presente en la infraestructura corporativa.
                    </p>
                    <p>
                    </p>
                    <ul>
                        <li> Seguridad administrada de soluciones multi-marca. </li>
                        <li> Correlación Híbrida. Detección de actividad sospechosa y anómala. </li>
                        <li> Soporte Especializado de soluciones de seguridad. </li>
                        <li> Reportes de Seguridad.</li>
                    </ul>

                    <div class="img-serv-inter">
                        <img src="{{ asset('img/soc_noc.webp') }}" width="80%" style="margin: 50px 10%;">
                    </div>

                    <span class="title-main title-first-serv">SERVICIOS DE MONITOREO DE INFRAESTRUCTURA (NOC)</span>
                    <p>
                        Nos encargamos del monitoreo proactivo y continuo de la disponibilidad y rendimiento de la
                        infraestructura de nuestros clientes, así como proporcionar, de ser necesario, la
                        infraestructura de
                        red.
                    </p>

                    <ul>
                        <li> Mapeo de redes. </li>
                        <li> Aprovisionamiento de infraestructura de red. </li>
                        <li> Monitoreo de rendimiento. </li>
                        <li> Monitoreo de aplicaciones. </li>
                        <li> Informes de monitoreo.</li>
                    </ul>

                    <span class="title-main title-first-serv" style="margin-top: 50px;">Miembros clave del equipo del Centro
                        de
                        operaciones de seguridad (SOC)</span>

                    <p>
                        En general, los roles principales en un equipo SOC incluyen: <br><br>
                        • El administrador del SOC, que dirige el equipo, supervisa todas las operaciones de
                        seguridad e
                        informa al CISO (director de seguridad de la información) de la organización. <br> <br>
                        • Ingenieros de seguridad, que construyen y administran la arquitectura de seguridad de
                        la
                        organización. Gran parte de este trabajo implica evaluar, probar, recomendar,
                        implementar y mantener
                        herramientas y tecnologías de seguridad. Los ingenieros de seguridad también trabajan
                        con equipos de
                        desarrollo o DevOps/DevSecOps para asegurarse de que la arquitectura de seguridad de la
                        organización
                        incluya ciclos de desarrollo de aplicaciones. <br> <br>
                        • Analistas de seguridad, también llamados investigadores de seguridad o de respuesta
                        ante
                        incidentes, que son esencialmente los primeros en responder a las amenazas o incidentes
                        de seguridad
                        cibernética. Los analistas detectan, investigan y clasifican (priorizan) las amenazas;
                        luego
                        identifican los hosts, puntos finales y usuarios afectados, y toman las medidas
                        apropiadas para
                        mitigar y contener el impacto, la amenaza o el incidente. (En algunas organizaciones,
                        los
                        investigadores y los respondedores de incidentes son roles separados clasificados como
                        analistas de
                        Nivel 1 y Nivel 2, respectivamente). <br> <br>
                        • Los cazadores de amenazas (también llamados analistas de seguridad expertos) se
                        especializan en
                        detectar y contener amenazas avanzadas: nuevas amenazas o variantes de amenazas que
                        logran pasar las
                        defensas automatizadas. El equipo SOC puede incluir otros especialistas, según el tamaño
                        de la
                        organización o la industria en la que opera. Las empresas más grandes pueden incluir un
                        Director de
                        Respuesta a Incidentes, responsable de comunicar y coordinar la respuesta a incidentes.
                        Y algunos
                        SOC incluyen investigadores forenses, que se especializan en recuperar datos (pistas) de
                        dispositivos dañados o comprometidos en un incidente de ciberseguridad.
                    </p>

                    <a href="contacto" class="btn-contact"
                        style="margin: auto; margin-top: 100px; transform: scale(1.3);">Contáctanos</a>
                </div>
            </div>
        </content>
    </div>

@endsection
