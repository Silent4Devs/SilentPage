@extends('layouts.site')

@section('titulo', __('ciberinteligencia.title'))

@section('metaDesc', __('ciberinteligencia.meta_desc'))

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
            <img src="{{ asset('img/serv_escudo.webp') }}" height="70px" style="filter: brightness(10);"
                alt="{{ __('ciberinteligencia.serv_escudo_alt') }}" title="{{ __('ciberinteligencia.serv_escudo_title') }}">
            <h1 class="title-main">{{ __('ciberinteligencia.title') }}</h1>
            <p style="text-align:center;">
                {{ __('ciberinteligencia.description') }}
            </p>
        </div>

        <content class="content-limit">
            <div class="caja-serv-inter">
                <div class="menu-serv-inter">
                    <div class="caja-menu-serv">
                        <span class="title-terd">{{ __('ciberinteligencia.services_title') }}</span>
                        @include('servicios.menu-servicios')
                    </div>
                </div>
                <div class="main-serv-inter">
                    <div class="flex-serv">
                        <img src="{{ asset('img/ciber-workers.png') }}" alt="{{ __('ciberinteligencia.img_workers_alt') }}">
                        <div>
                            <span
                                class="title-main title-first-serv ">{{ __('ciberinteligencia.how_to_protect_title') }}</span>
                            <p>
                                {{ __('ciberinteligencia.how_to_protect_description') }}
                            </p>
                        </div>
                    </div>
                    <div class="flex-serv">
                        <img src="{{ asset('img/ciber-person-tec.png') }}"
                            alt="{{ __('ciberinteligencia.img_person_tec_alt') }}">
                        <div>
                            <span
                                class="title-main title-first-serv ">{{ __('ciberinteligencia.what_we_offer_title') }}</span>
                            <p>
                                {{ __('ciberinteligencia.what_we_offer_description_1') }}
                            </p>
                            <p>
                                {{ __('ciberinteligencia.what_we_offer_description_2') }}
                            </p>
                        </div>
                    </div>
                    <div class="box-servs-ciber-rep">
                        <img src="{{ asset('img/ciber-serv-1.png') }}" alt="{{ __('ciberinteligencia.img_serv_1_alt') }}">
                        <img src="{{ asset('img/ciber-serv-2.png') }}" alt="{{ __('ciberinteligencia.img_serv_2_alt') }}">
                        <img src="{{ asset('img/ciber-serv-3.png') }}" alt="{{ __('ciberinteligencia.img_serv_3_alt') }}">
                        <img src="{{ asset('img/ciber-serv-4.png') }}" alt="{{ __('ciberinteligencia.img_serv_4_alt') }}">
                    </div>

                    <p style="font-size: 16px; margin-top: 50px;">
                        {{ __('ciberinteligencia.implementation_description') }}
                    </p>
                    <div class="box-ciber-defens">
                        <img src="{{ asset('img/ciber-defensa-1.svg') }}"
                            alt="{{ __('ciberinteligencia.img_defense_1_alt') }}">
                        <img src="{{ asset('img/ciber-defensa-2.svg') }}"
                            alt="{{ __('ciberinteligencia.img_defense_2_alt') }}">
                        <img src="{{ asset('img/ciber-defensa-3.svg') }}"
                            alt="{{ __('ciberinteligencia.img_defense_3_alt') }}">
                        <img src="{{ asset('img/ciber-defensa-4.svg') }}"
                            alt="{{ __('ciberinteligencia.img_defense_4_alt') }}">
                        <img src="{{ asset('img/ciber-defensa-5.svg') }}"
                            alt="{{ __('ciberinteligencia.img_defense_5_alt') }}">
                    </div>
                </div>
            </div>
        </content>
    </div>


    <div class="micro-servs">
        <div class="content-limit">
            <span class="title-main title-first-serv" style="text-align: center;">
                {{ __('ciberinteligencia.title_main_1') }}
            </span>

            <div class="btns-pestañas-servicios">
                <button onclick="changeContentMicro('pruebas');"
                    class="active">{{ __('ciberinteligencia.pentesting_title') }}</button>
                <button onclick="changeContentMicro('vulnerabilidades');"
                    class="">{{ __('ciberinteligencia.vulnerability_analysis_title') }}</button>
                <button onclick="changeContentMicro('forense');"
                    class="">{{ __('ciberinteligencia.forensic_analysis_title') }}</button>
            </div>

            <div id="pruebas" class="content-microsite active">
                <div class="flex-serv" style="max-width: 1000px; margin: auto;">
                    <div>
                        <span class="title-main title-first-serv ">
                            {{ __('ciberinteligencia.pentesting_title') }}
                        </span>
                        <p>
                            {{ __('ciberinteligencia.pentesting_description') }}
                        </p>
                        <p>
                            {{ __('ciberinteligencia.pentesting_benefits') }}
                        </p>
                        <p>
                            {{ __('ciberinteligencia.pentesting_process') }}
                        </p>
                        <p>
                            {{ __('ciberinteligencia.pentesting_access') }}
                        </p>
                        <p>
                            {{ __('ciberinteligencia.pentesting_report') }}
                        </p>
                    </div>
                    <img src="{{ asset('img/ciber-pruebas.svg') }}" alt="">
                </div>
            </div>

            <div id="vulnerabilidades" class="content-microsite">
                <div class="flex-serv" style="max-width: 1000px; margin: auto;">
                    <div>
                        <span class="title-main title-first-serv ">
                            {{ __('ciberinteligencia.vulnerability_analysis_title') }}
                        </span>
                        <p>
                            {{ __('ciberinteligencia.vulnerability_analysis') }}
                        </p>
                        <p>
                            {{ __('ciberinteligencia.vulnerability_identification') }}
                        </p>
                        <p>
                            {{ __('ciberinteligencia.vulnerability_evaluation') }}
                        </p>
                        <p>
                            {{ __('ciberinteligencia.vulnerability_prioritization') }}
                        </p>
                        <p>
                            {{ __('ciberinteligencia.vulnerability_recommendation') }}
                        </p>
                    </div>
                    <img src="{{ asset('img/ciber-gestion.png') }}" alt="">
                </div>
            </div>

            <div id="forense" class="content-microsite">
                <div class="flex-serv" style="max-width: 1000px; margin: auto;">
                    <div>
                        <span class="title-main title-first-serv ">
                            {{ __('ciberinteligencia.forensic_analysis_title') }}
                        </span>
                        <p>
                            {{ __('ciberinteligencia.forensic_analysis_description') }}
                        </p>
                        <p>
                            {{ __('ciberinteligencia.forensic_process') }}
                        </p>
                        <p>
                            {{ __('ciberinteligencia.forensic_analysis_details') }}
                        </p>
                        <p>
                            {{ __('ciberinteligencia.forensic_report') }}
                        </p>
                    </div>
                    <img src="{{ asset('img/ciber-forense.png') }}" alt="">
                </div>
            </div>

            <div class="box-serv-monitor" style="max-width: 1000px; margin: auto;">
                <img src="{{ asset('img/servs-monitor.png') }}" style="width: 100%;" alt="">
                <div class="serv-monitor-info">
                    <span style="font-size: 40px;">{{ __('ciberinteligencia.monitoring_features') }}</span>
                    <div style="">
                        <p style="margin-top: 40px;">
                            {{ __('ciberinteligencia.monitoring_description') }}
                        </p>
                        <ul>
                            <li>{{ __('ciberinteligencia.monitoring_benefit_1') }}</li>
                            <li>{{ __('ciberinteligencia.monitoring_benefit_2') }}</li>
                            <li>{{ __('ciberinteligencia.monitoring_benefit_3') }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>

    @include('servicios.conoce-productos')

@endsection
