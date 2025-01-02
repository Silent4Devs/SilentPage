@extends('layouts.site')

@section('titulo', __('soc-noc.title'))

@section('metaDesc', __('soc-noc.meta_desc'))

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
                {{ __('soc-noc.header_desc') }}
            </p>
        </div>

        <content class="content-limit">
            <div class="caja-serv-inter">
                <div class="menu-serv-inter">
                    <div class="caja-menu-serv">
                        <span class="title-terd"> {{ __('soc-noc.title_second') }}</span>
                        @include('servicios.menu-servicios')
                    </div>
                </div>
                <div class="main-serv-inter">
                    <span class="title-main title-first-serv ">{{ __('soc-noc.title_main') }}</span>
                    <p style="margin-top: 50px;">
                        {{ __('soc-noc.intro_paragraph') }}
                    </p>
                    <img src="{{ asset('img/soc-noc-office.png') }}" alt="oficinas" style="width: 100%;">

                    <div class="flex-serv">
                        <img src="{{ asset('img/soc-noc-monitoreo.png') }}" alt="Monitoreo">
                        <div>
                            <span class="title-main title-first-serv ">
                                {{ __('soc-noc.soc_services_title') }}
                            </span>
                            <p>
                                <strong>{{ __('soc-noc.soc_service_1_title') }}</strong>
                                {{ __('soc-noc.soc_service_1_desc') }}
                            </p>
                            <p>
                                <strong>{{ __('soc-noc.soc_service_2_title') }}</strong>
                                {{ __('soc-noc.soc_service_2_desc') }}
                            </p>
                            <p>
                                <strong>{{ __('soc-noc.soc_service_3_title') }}</strong>
                                {{ __('soc-noc.soc_service_3_desc') }}
                            </p>
                            <p>
                                <strong>{{ __('soc-noc.soc_service_4_title') }}</strong>
                                {{ __('soc-noc.soc_service_4_desc') }}
                            </p>
                            <p>
                                {{ __('soc-noc.soc_services_summary') }}
                            </p>
                            <img src="{{ asset('img/soc-noc-funciones.png') }}" alt="" style="width: 100%;">
                        </div>
                    </div>

                    <div class="flex-serv">
                        <img src="{{ asset('img/soc-noc-supervision.png') }}" alt="">
                        <div>
                            <span class="title-main title-first-serv ">
                                {{ __('soc-noc.noc_services_title') }}
                            </span>

                            <p>
                                <strong>{{ __('soc-noc.noc_service_1_title') }}</strong>
                                {{ __('soc-noc.noc_service_1_desc') }}
                            </p>
                            <p>
                                <strong>{{ __('soc-noc.noc_service_2_title') }}</strong>
                                {{ __('soc-noc.noc_service_2_desc') }}
                            </p>
                            <p>
                                <strong>{{ __('soc-noc.noc_service_3_title') }}</strong>
                                {{ __('soc-noc.noc_service_3_desc') }}
                            </p>
                            <p>
                                <strong>{{ __('soc-noc.noc_service_4_title') }}</strong>
                                {{ __('soc-noc.noc_service_4_desc') }}
                            </p>
                            <p>
                                <strong>{{ __('soc-noc.noc_service_5_title') }}</strong>
                                {{ __('soc-noc.noc_service_5_desc') }}
                            </p>
                            <p>
                                {{ __('soc-noc.noc_services_summary') }}
                            </p>

                            <img src="{{ asset('img/soc-noc-beneficios.png') }}" alt="Beneficios soc noc"
                                style="width: 100%;">
                        </div>
                    </div>

                    <div class="flex-serv">
                        <img src="{{ asset('img/soc-noc-work-complete.png') }}" alt="Work">
                        <div>
                            <span class="title-main title-first-serv ">
                                {{ __('soc-noc.features_title') }}
                            </span>

                            <p>
                                <strong>{{ __('soc-noc.features_intro_title') }}</strong>
                                {{ __('soc-noc.features_intro_desc') }}
                            </p>

                            <p>
                                <strong>{{ __('soc-noc.feature_1_title') }}</strong> {{ __('soc-noc.feature_1_desc') }}
                            </p>

                            <p>
                                <strong>{{ __('soc-noc.feature_2_title') }}</strong> {{ __('soc-noc.feature_2_desc') }}
                            </p>

                            <p>
                                <strong>{{ __('soc-noc.feature_3_title') }}</strong> {{ __('soc-noc.feature_3_desc') }}
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </content>
    </div>

    @include('servicios.conoce-productos')


@endsection
