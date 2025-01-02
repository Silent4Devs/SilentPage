@extends('layouts.site')

@section('titulo', __('services_ce.title'))

@section('metaDesc', __('services_ce.meta_desc'))

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
            <h1 class="title-main">{{ __('services_ce.support_title') }}</h1>
            <p style="text-align:center;">
                {{ __('services_ce.support_description') }}
            </p>
        </div>

        <content class="content-limit">
            <div class="caja-serv-inter">
                <div class="menu-serv-inter">
                    <div class="caja-menu-serv">
                        <span class="title-terd">{{ __('services_ce.service') }}</span>
                        @include('servicios.menu-servicios')
                    </div>
                </div>
                <div class="main-serv-inter">
                    <span class="title-main title-first-serv ">{{ __('services_ce.how_we_help_title') }}</span>
                    <div class="flex-serv">
                        <img src="{{ asset('img/consul-docs-table.png') }}" alt="">
                        <div>
                            <p>
                                {{ __('services_ce.consulting_description') }}
                            </p>
                        </div>
                    </div>

                    <div style="margin-top: 50px;">
                        <span class="title-main title-first-serv ">{{ __('services_ce.strategic_axes_title') }}</span>
                        <div>
                            <p>
                                <strong>{{ __('services_ce.international_standards_title') }} </strong>
                                {{ __('services_ce.international_standards_description') }}
                            </p>

                            <p>
                                <strong>{{ __('services_ce.good_practices_title') }}:</strong>
                                {{ __('services_ce.good_practices_description') }}
                            </p>

                            <p>
                                <strong>{{ __('services_ce.information_security_title') }}:</strong>
                                {{ __('services_ce.information_security_description') }}
                            </p>

                            <p>
                                <strong>{{ __('services_ce.governance_framework_title') }}:</strong>
                                {{ __('services_ce.governance_framework_description') }}
                            </p>

                            <p>
                                <strong>{{ __('services_ce.other_services_title') }}:</strong>
                                {{ __('services_ce.other_services_description') }}
                            </p>

                            <p>
                                {{ __('services_ce.other_services_description') }}
                            </p>
                        </div>
                    </div>

                    <div class="flex-serv">
                        <div>
                            <span class="title-main title-first-serv ">{{ __('services_ce.iso_27001_title') }}</span>
                            <p>
                                {{ __('services_ce.iso_27001_description') }}
                            </p>

                            <p>
                                <strong>{{ __('services_ce.iso_27001_risk_management') }}</strong>
                            </p>
                            <p>
                                <strong>{{ __('services_ce.iso_27001_trust') }}</strong>
                            </p>
                            <p>
                                <strong>{{ __('services_ce.iso_27001_continuous_improvement') }}</strong>
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
                <button class="active"
                    onclick="changeContentMicro('gestion');">{{ __('services_ce.gestion_riesgo_title') }}</button>
                <button
                    onclick="changeContentMicro('auditorias');">{{ __('services_ce.auditorias_seguridad_title') }}</button>
                <button
                    onclick="changeContentMicro('continuo');">{{ __('services_ce.continuidad_negocio_title') }}</button>
            </div>

            <div id="gestion" class="content-microsite active">
                <div class="flex-serv" style="max-width: 1000px; margin: auto;">
                    <div>
                        <span class="title-main title-first-serv ">
                            {{ __('services_ce.gestion_riesgo_title') }}
                        </span>
                        <p>
                            {{ __('services_ce.gestion_riesgo_description') }}
                        </p>
                        <p>
                            {{ __('services_ce.gestion_riesgo_benefits_title') }}
                        </p>

                        <ul>
                            <li>
                                <strong>{{ __('services_ce.benefit_minimizar_impacto') }}</strong>
                            </li>
                            <li>
                                <strong>{{ __('services_ce.benefit_mejorar_decisiones') }}</strong>
                            </li>
                            <li>
                                <strong>{{ __('services_ce.benefit_aumentar_resiliencia') }}</strong>
                            </li>
                        </ul>

                    </div>
                    <img src="{{ asset('img/consul-impact.png') }}" alt="">
                </div>
            </div>

            <div id="auditorias" class="content-microsite ">
                <div class="flex-serv" style="max-width: 1000px; margin: auto;">
                    <div>
                        <span class="title-main title-first-serv ">
                            {{ __('services_ce.auditorias_seguridad_title') }}
                        </span>
                        <p>
                            {{ __('services_ce.auditorias_seguridad_description') }}
                        </p>
                        <p>
                            {{ __('services_ce.auditorias_seguridad_benefits_title') }}
                        </p>

                        <ul>
                            <li>{{ __('services_ce.benefit_mejorar_seguridad') }}</li>
                            <li>{{ __('services_ce.benefit_cumplir_normas') }}</li>
                            <li>{{ __('services_ce.benefit_optimizar_recursos') }}</li>
                        </ul>

                    </div>
                    <img src="{{ asset('img/consul-check.png') }}" alt="">
                </div>
            </div>

            <div id="continuo" class="content-microsite ">
                <div class="flex-serv" style="max-width: 1000px; margin: auto;">
                    <div>
                        <p>
                            {{ __('services_ce.continuidad_negocio_description') }}
                        </p>
                        <p>
                            {{ __('services_ce.continuidad_negocio_benefits_title') }}
                        </p>
                        <ul>
                            <li>{{ __('services_ce.benefit_reduccion_riesgos') }}</li>
                            <li>{{ __('services_ce.benefit_ahorro_costos') }}</li>
                            <li>{{ __('services_ce.benefit_cumplimiento_normativo') }}</li>
                        </ul>

                    </div>
                    <img src="{{ asset('img/consul-blocks.png') }}" alt="">
                </div>
            </div>

            <div class="box-serv-monitor" style="max-width: 1000px; margin: auto;">
                <img src="{{ asset('img/servs-monitor.png') }}" style="width: 100%;" alt="">
                <div class="serv-monitor-info">
                    <span style="font-size: 40px;">{{ __('services_ce.caracteristicas_empresa_title') }}</span>
                    <div>
                        <p style="margin-top: 40px;">
                            {{ __('services_ce.caracteristicas_empresa_description') }}
                        </p>
                        <ul>
                            <li>{{ __('services_ce.benefit_mejor_toma_decisiones') }}</li>
                            <li>{{ __('services_ce.benefit_fortalecimiento_seguridad') }}</li>
                            <li>{{ __('services_ce.benefit_reputacion_marca') }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('servicios.conoce-productos')


@endsection
