@extends('layouts.site')

@section('content')

@section('titulo', 'Aliados de tu Ciberseguridad | Servicios para tu empresa')

@section('body', 'productos-body')

<style>
    .title-fondo::before {
        background-image: url('img/portadas/portada_productos.webp');
    }
</style>

<div>
    <div class="title-fondo">
        <h1>Nuestros productos</h1>
        <p>
            Desarrollamos soluciones enfocadas en que tu organización pueda alcanzar la eficiencia, agilidad,
            flexibilidad y escalabilidad que necesita para competir en la era digital.
        </p>
    </div>

    <div class="blue-compu">
        <content class="content-limit">
            <div class="caja-flex" style="align-items: center;">
                <img src="img/logo_silent.webp">
                <p>
                    <font style="font-size: 24px;">Somos Silent4Business </font> A través de un equipo especializado,
                    ser un referente confiable en materia de investigación, asistencia y difusión en actividades de
                    atención y respuesta a incidentes de seguridad. A través de un equipo especializado, ser un
                    referente confiable en materia de investigación.
                </p>
            </div>
        </content>
    </div>

    <h2 class="title-produ">Productos S4B</h2>

    <div class="productos">
        <content class="content-limit">
            <div class="producto no-visible">
                <div class="info-product info-izq">
                    <div class="caja-flex">
                        <p>
                            Nuestra plataforma está especializada en el monitoreo y protección del ciberespacio para
                            las diversas industrias en México, ayudando a identificar las amenazas que pudieran
                            causar afectaciones económicas, reputacionales y operacionales en cualquier
                            organización.
                        </p>
                    </div>
                    <div class="caja-flex">
                        <p> Deep Threat Analysis (Cyberintelligence) </p>
                        <i class="material-symbols-outlined">gpp_maybe</i>
                    </div>
                    <div class="caja-flex">
                        <p>
                            IOCs mundiales <br>
                            IOCs regionales <br>
                            Análisis y detección entre fuentes de <br>
                            inteligencia e IOCs
                        </p>
                        <i class="material-symbols-outlined">problem</i>
                    </div>
                    <div class="caja-flex">
                        <p> Brand Protection </p>
                        <i class="material-symbols-outlined">other_admission</i>
                    </div>
                    <div class="caja-flex">
                        <p>
                            Rougue Apps <br>
                            Certificados SSL <br>
                            Phishing <br>
                            Defacements/Hacktivismo <br>
                            Correos <br>
                            Archivos <br>
                            Credenciales comprometidas <br>
                            Cyber Threat Alert <br>
                            Vulnerabilidades <br>
                            Notificaciones tecnología Notificaciones industria
                        </p>
                        <i class="material-symbols-outlined">bug_report</i>
                    </div>
                </div>
                <div class="img-product">
                    <img src="img/product_1.webp">
                    <hr>
                </div>
                <div class="info-product info-der">
                </div>
            </div>

            <div class="producto no-visible">
                <div class="info-product info-izq">

                </div>
                <div class="img-product">
                    <img src="img/product_2.webp">
                    <hr>
                </div>
                <div class="info-product info-der">
                    <div class="caja-flex">
                        <p>
                            Nuestro SGN provee la capacidad de resguardar, generar, revisar, gestionar y automatizar
                            la documentación y procesos requeridos en el ciclo de vida de mejores prácticas y
                            estándares internacionales.
                        </p>
                    </div>
                    <div class="caja-flex">
                        <i class="material-symbols-outlined">overview</i>
                        <p> Documenta tus procesos </p>
                    </div>
                    <div class="caja-flex">
                        <i class="material-symbols-outlined">screen_search_desktop</i>
                        <p> Monitorea el Sistema de Gestión</p>
                    </div>
                    <div class="caja-flex">
                        <i class="material-symbols-outlined">problem</i>
                        <p> Determina y evalúa riesgos </p>
                    </div>
                    <div class="caja-flex">
                        <i class="material-symbols-outlined">feed</i>
                        <p> Registra y controla información relevante </p>
                    </div>
                    <div class="br-space">
                        <br><br><br><br><br><br><br><br><br><br>
                    </div>
                </div>
            </div>

            <div class="producto no-visible">
                <div class="info-product info-izq">

                </div>
                <div class="img-product">
                    <img src="img/product_3.webp">
                    <hr>
                </div>
                <div class="info-product info-der">
                    <div class="caja-flex">
                        <p>
                            Nuestro Software CLMS (Contract Lifecycle Management Software) está diseñado para una
                            gestión contractual integral, totalmente transparente. Funciona a través de una
                            plataforma web con un modelo SaaS (Software as a Service) que permite sistematizar los
                            procesos contractuales, abarcando el ciclo de vida de los contratos en su totalidad.
                            Mejora la eficiencia, colaboración, trazabilidad y calidad en los procesos de generación
                            de contratos.
                        </p>
                    </div>
                    <div class="caja-flex">
                        <i class="material-symbols-outlined">event</i>
                        <p> Controla los hitos y fechas clave </p>
                    </div>
                    <div class="caja-flex">
                        <i class="material-symbols-outlined">screen_search_desktop</i>
                        <p> Monitorea los contratos en sus diferentes fases</p>
                    </div>
                    <div class="caja-flex">
                        <i class="material-symbols-outlined">document_scanner</i>
                        <p> Centraliza la información de contratos </p>
                    </div>
                    <div class="caja-flex">
                        <i class="material-symbols-outlined">other_admission</i>
                        <p> Obtén reportes y niveles de servicio </p>
                    </div>
                    <div class="caja-flex">
                        <i class="material-symbols-outlined">inventory</i>
                        <p> Agiliza los procesos de aprobación </p>
                    </div>
                    <div class="br-space">
                        <br><br><br><br><br>
                    </div>
                </div>
            </div>

            <div class="producto no-visible">
                <div class="info-product info-izq">
                    <div class="caja-flex">
                        <p>
                            Nuestro Learning Management System (LMS) está basado en el modelo SaaS para la creación
                            de cursos empresariales en formato digital. De esta forma, tus colaboradores podrán
                            capacitarse de forma presencial o remota.
                        </p>
                    </div>
                    <div class="caja-flex">
                        <p> Gestiona tus cursos </p>
                        <i class="material-symbols-outlined">play_lesson</i>
                    </div>
                    <div class="caja-flex">
                        <p> Plataforma personalizable</p>
                        <i class="material-symbols-outlined">flowsheet</i>
                    </div>
                    <div class="caja-flex">
                        <p> Seguimiento de plan de educación </p>
                        <i class="material-symbols-outlined">school</i>
                    </div>
                    <div class="caja-flex">
                        <p> Reportes y estadísticas detalladas </p>
                        <i class="material-symbols-outlined">dashboard_customize</i>
                    </div>
                </div>
                <div class="img-product">
                    <img src="img/product_4.webp" style="transform: scale(0.8);">
                    <hr>
                </div>
                <div class="info-product info-der">

                </div>
            </div>
        </content>
    </div>
</div>

@endsection
