@extends('layouts.site')

@section('titulo', 'S4B CERT | Seguridad Informática de Vanguardia')

@section('metaDesc',
    'Nuestro Computer Emergency Response Team (CERT) está listo para prevenir y responder a los
    incidentes de seguridad informática que acechan a tu organización.')

@section('body', 'cert-body')

@section('head')
    <style>
        .title-fondo::before {
            background-image: url('{{ asset('img/portadas/portada_cert.webp') }}');
        }
    </style>
@endsection

@section('content')
    <div>
        <div class="title-fondo">
            <h1 class="title-main">S4B CERT</h1>
            <p>Asistencia técnica especializada a nuestros clientes y a las organizaciones.</p>
        </div>

        <div class="blue-compu">
            <content class="content-limit">
                <p>
                    <strong style="font-size: 24px;"> CERT: </strong> Computer Emergency Response Team. Es un equipo de
                    especialistas responsable del desarrollo de medidas preventivas y reactivas ante incidencias de
                    seguridad informática.
                </p>
            </content>
        </div>

        <div class="caja-flex mision-vision-cert">

            <div class="cert-valor cert-mision">
                <div class="cert-text">
                    <h2 class="title-five">Misión</h2>
                    <p>
                        Proveer servicios especializados de atención y respuesta a incidentes de seguridad, a través de
                        mejora continua de nuestros procesos y alianzas con otras organizaciones para contribuir a un
                        entorno digital para nuestros clientes.
                    </p>
                </div>
                <div class="cert-icon">
                    <img src="{{ asset('img/cert_vision.webp') }}" alt="Misión CERT" title="Misión CERT">
                    <h2 class="title-five">Misión</h2>
                </div>
            </div>
            <div class="cert-valor cert-vision">
                <div class="cert-icon">
                    <img src="{{ asset('img/cert_vision.webp') }}" alt="Visión CERT" title="Visión CERT">
                    <h2 class="title-five">Visión</h2>
                </div>
                <div class="cert-text">
                    <h2 class="title-five">Visión</h2>
                    <p>
                        A través de un equipo especializado, ser un frente confiable en materia de investigación,
                        asistencia y difusión en actividades de atención y respuesta a incidentes de seguridad.
                    </p>
                </div>
            </div>
        </div>

        <h2 class="title-main objetivos-cert">Objetivos de un CERT</span>
            <div class="caja-flex obetivos-cert">
                <div class="activ-cert">
                    <p class="first-p">
                        <strong>Impulsar actividades de concientización</strong> en el manejo de información, riesgos,
                        así como implementación de políticas de seguridad de la información.
                    </p>
                    <p class="second-p">
                        <strong>Proporcionar asistencia técnica </strong>
                        especializada a nuestros clientes y a las organizaciones en general, en la atención de amenazas y/o
                        incidentes de seguridad.
                    </p>
                </div>
                <div class="herra-cert">
                    <p class="first-p">
                        <strong>Crear herramientas de divulgación</strong> como alertas tempranas, alertas y comunicados, a
                        nuestros clientes y organizaciones en general que permitan prevenir, avisar y atender una posible
                        amenaza y/o incidente de seguridad.
                    </p>
                    <p class="second-p">
                        <strong>Construir y mantener alianzas estratégicas</strong> con organismos nacionales y
                        internacionales así como instituciones públicas y privadas, para consolidar mecanismos de materia
                        mutua en seguridad de la información.
                    </p>
                </div>
            </div>

            <img src="{{ asset('img/servicio_cert.webp') }}" class="servicio-img no-visible" alt="Servicios del CERT"
                title="Servicios del CERT">

            <hr style="width: 500px; border-color:#fff; margin-top:80px;">

            <h2 class="title-second title-somm">Somos miembros</h2>

            <img src="{{ asset('img/first.webp') }}" class="first-img no-visible" alt="CERT certificado por FIST"
                title="CERT certificado por FIST">

            <content class="content-limit">
                <p class="parrafo-soes no-visible">
                    Foro de Equipos de Seguridad y Respuesta a Incidentes: Intercambio de información y la cooperación
                    en
                    temas de interés mutuo, como nuevas vulnerabilidades o ataques de gran alcance, especialmente en el
                    sistema central, como los servidores DNS o Internet como una infraestructura crítica en sí misma.
                </p>
            </content>

            <hr style="width: 500px; border-color:#fff; margin-top:80px;">

            <h2 class="title-second title-somm">Traffic Light Protocol (TLP)</h2>

            <content class="content-limit">
                <p class="parrafo-soes no-visible">
                    <strong>El TLP </strong> se creó para facilitar un mayor intercambio de información
                    potencialmente
                    confidencial y una colaboración más eficaz. El intercambio de información ocurre desde una
                    fuente de
                    información hacia uno o más destinatarios . TLP es un conjunto de cuatro etiquetas que se
                    utilizan para
                    indicar los límites de uso compartido que deben aplicar los destinatarios. FIRST solo considera
                    válidas
                    las etiquetas enumeradas en esta norma.
                </p>

                <img src="{{ asset('img/estandares.webp') }}" class="estandares-img no-visible" alt="Esquema TLP"
                    title="Esquema TLP">

                <hr style="width: 500px; border-color:#fff; margin-top:80px;">

                <a href="{{ route('contacto') }}" class="btn-contact-cert">Contáctanos</a>

            </content>
    </div>

@endsection
