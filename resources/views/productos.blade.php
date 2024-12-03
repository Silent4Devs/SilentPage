@extends('layouts.site')

@section('titulo', __('productos.title'))

@section('metaDesc', __('productos.meta_desc'))

@section('body', 'productos-body')

@section('head')
    <style>
        .title-fondo::before {
            background-image: url('{{ asset('img/portadas/portada_productos.webp') }}');
        }
    </style>
@endsection

@section('content')
    <div>
        <div class="title-fondo">
            <h1 class="title-main">{{ __('productos.header_title') }}</h1>
            <p>
                {{ __('productos.header_desc') }}
            </p>
        </div>

        <div class="blue-compu">
            <content class="content-limit">
                <div class="caja-flex" style="align-items: center;">
                    <img src="{{ asset('img/logo_silent.webp') }}" alt="Logo Silent4business" title="Logo Silent4business">
                    <p>
                        <font style="font-size: 24px;">{{ __('productos.header_weare') }} </font>
                        {{ __('productos.header_weare_desc') }}
                    </p>
                </div>
            </content>
        </div>

        <span class="title-second title-produ">{{ __('productos.products_title') }}</span>

        <div class="productos">
            <content class="content-limit">
                <div class="producto no-visible">
                    <div class="info-product info-izq">
                        <div class="caja-flex">
                            <p>
                                {{ __('productos.product_1.description') }}
                            </p>
                        </div>
                        <div class="caja-flex">
                            <p> Deep Threat Analysis (Cyberintelligence) </p>
                            <i class="material-symbols-outlined">gpp_maybe</i>
                        </div>
                        <div class="caja-flex">
                            <p>
                                {{ __('productos.product_1.features1.one') }}<br>
                                {{ __('productos.product_1.features1.two') }}<br>
                                {{ __('productos.product_1.features1.three') }}
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
                        <img src="{{ asset('img/product_1.webp') }}" title="Producto KAXAN" alt="Producto KAXAN">
                        <hr>
                    </div>
                    <div class="info-product info-der">
                    </div>
                </div>

                <div class="producto no-visible">
                    <div class="info-product info-izq">

                    </div>
                    <div class="img-product">
                        <img src="{{ asset('img/product_2.webp') }}" title="Producto TABANTAJ" alt="Producto TABANTAJ">
                        <hr>
                    </div>
                    <div class="info-product info-der">
                        <div class="caja-flex">
                            <p>
                                {{ __('productos.product_2.description') }}
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
                        <img src="{{ asset('img/product_3.webp') }}" title="Producto KATBOL" alt="Producto KATBOL">
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
                        <img src="{{ asset('img/product_4.webp') }}" style="width: 215px; padding:0px 25px;"
                            title="Producto KAANS" alt="Producto KAANS">
                        <hr>
                    </div>
                    <div class="info-product info-der">

                    </div>
                </div>
            </content>
        </div>
    </div>

@endsection
