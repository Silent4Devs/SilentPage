@extends('layouts.site')

@section('titulo', 'Soluciones integrales en ciberseguridad para tu negocio')

@section('ogTitle', 'Soluciones integrales en ciberseguridad: protege tu empresa')

@section('keywords', 'soluciones en ciberseguridad, firewall, SIEM, DLP, antivirus, EDR, protección perimetral, protección empresarial, servicios personalizados, ciberseguridad integral, seguridad TI, protección avanzada')

@section('metaDesc', 'Descubre nuestras soluciones personalizadas en ciberseguridad. Protección completa para las necesidades únicas de tu empresa.')


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
            <h1 class="title-main"> {{ __('cti.title_page_first') }}</h1>
            <p style="text-align:center;">
                {{ __('cti.nos_especializamos') }}
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
                    <div class="micro-servs" style="margin-top: 0px;">
                        <div class="content-limit">

                            <p class="text-center" style="font-size: 20px;">
                                {{ __('cti.services_approach') }}
                            </p>
                            <span class="text-center" style="font-size: 30px;">
                                {{ __('cti.solutions_title') }}
                            </span>

                            <div class="btns-pestañas-servicios">
                                <button class="active"
                                    onclick="changeContentMicro('soluciones');">{{ __('cti.advanced_security_solutions') }}</button>
                                <button
                                    onclick="changeContentMicro('firewall');">{{ __('cti.firewall_and_antivirus') }}</button>
                                <button onclick="changeContentMicro('siem');">{{ __('cti.siem_title') }}</button>
                            </div>

                            <div id="soluciones" class="content-microsite active">
                                <span class="title-main title-first-serv" style="display: flex; justify-content:center; align-items: center;">
                                    <img src="{{asset('img/icon-security.png')}}" style="height: 45px; margin-right:20px;" alt="icono">
                                    {{ __('cti.advanced_security_solutions') }}
                                </span>

                                <p class="text-center" style="font-size: 20px;">
                                    {{ __('cti.advanced_security_solutions_description') }}
                                </p>

                                <div class="box-solucion-niveles">
                                    <img src="{{ asset('img/solucion-nivel-1.png') }}" alt="">
                                    <div class="info-solucion-nivel">
                                        <strong>{{ __('cti.dlp_solution') }}</strong>
                                        <p>{{ __('cti.dlp_description') }}</p>
                                    </div>
                                </div>
                                <div class="box-solucion-niveles">
                                    <div class="info-solucion-nivel">
                                        <strong>{{ __('cti.sso_solution') }}</strong>
                                        <p>{{ __('cti.sso_description') }}</p>
                                    </div>
                                    <img src="{{ asset('img/solucion-nivel-2.png') }}" alt="">
                                </div>
                                <div class="box-solucion-niveles">
                                    <img src="{{ asset('img/solucion-nivel-3.png') }}" alt="">
                                    <div class="info-solucion-nivel">
                                        <strong>{{ __('cti.iam_solution') }}</strong>
                                        <p>{{ __('cti.iam_description') }}</p>
                                    </div>
                                </div>
                                <div class="box-solucion-niveles">
                                    <div class="info-solucion-nivel">
                                        <strong>{{ __('cti.zero_trust_solution') }}</strong>
                                        <p>{{ __('cti.zero_trust_description') }}</p>
                                    </div>
                                    <img src="{{ asset('img/solucion-nivel-4.png') }}" alt="">
                                </div>
                            </div>

                            <div id="firewall" class="content-microsite">
                                <span class="title-main title-first-serv" style="display: flex; justify-content:center; align-items: center;">
                                    <img src="{{asset('img/icon-fire.png')}}" style="height: 45px; margin-right:20px;" alt="icono">
                                    {{ __('cti.firewall_and_antivirus') }}
                                </span>

                                <p class="text-center" style="font-size: 20px;">
                                    {{ __('cti.firewall_description') }}
                                </p>

                                <div class="box-solucion-niveles">
                                    <img src="{{ asset('img/soluciones-fire-1.png') }}" alt="">
                                    <div class="info-solucion-nivel">
                                        <strong>{{ __('cti.firewall_ips_solution') }}</strong>
                                        <p>{{ __('cti.firewall_ips_description') }}</p>
                                    </div>
                                </div>
                                <div class="box-solucion-niveles">
                                    <div class="info-solucion-nivel">
                                        <strong>{{ __('cti.load_balancer_and_content_filtering') }}</strong>
                                        <p>{{ __('cti.load_balancer_description') }}</p>
                                    </div>
                                    <img src="{{ asset('img/soluciones-fire-2.png') }}" alt="">
                                </div>
                                <div class="box-solucion-niveles">
                                    <img src="{{ asset('img/soluciones-fire-3.png') }}" alt="">
                                    <div class="info-solucion-nivel">
                                        <strong>{{ __('cti.ddos_and_advanced_attack_protection') }}</strong>
                                        <p>{{ __('cti.ddos_description') }}</p>
                                    </div>
                                </div>
                                <div class="box-solucion-niveles">
                                    <div class="info-solucion-nivel">
                                        <strong>{{ __('cti.antivirus_and_mfa') }}</strong>
                                        <p>{{ __('cti.antivirus_description') }}</p>
                                    </div>
                                    <img src="{{ asset('img/soluciones-fire-4.png') }}" alt="">
                                </div>
                            </div>

                            <div id="siem" class="content-microsite">
                                <span class="title-main title-first-serv" style="display: flex; justify-content:center; align-items: center;">
                                    <img src="{{asset('img/icon-dns.png')}}" style="height: 45px; margin-right:20px;" alt="icono">
                                    {{ __('cti.siem_title') }}
                                </span>

                                <p class="text-center" style="font-size: 20px;">
                                    {{ __('cti.siem_description') }}
                                </p>

                                <div class="box-solucion-niveles">
                                    <img src="{{ asset('img/soluciones-siem-1.png') }}" alt="">
                                    <div class="info-solucion-nivel">
                                        <strong>{{ __('cti.waf_and_database_firewall') }}</strong>
                                        <p>{{ __('cti.waf_description') }}</p>
                                    </div>
                                </div>
                                <div class="box-solucion-niveles">
                                    <div class="info-solucion-nivel">
                                        <strong>{{ __('cti.dns_firewall_and_host_ips') }}</strong>
                                        <p>{{ __('cti.dns_description') }}</p>
                                    </div>
                                    <img src="{{ asset('img/soluciones-siem-2.png') }}" alt="">
                                </div>
                                <div class="box-solucion-niveles">
                                    <img src="{{ asset('img/soluciones-siem-3.png') }}" alt="">
                                    <div class="info-solucion-nivel">
                                        <strong>{{ __('cti.siem_solutions') }}</strong>
                                        <p>{{ __('cti.siem_description') }}</p>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </content>
    </div>

    @include('servicios.conoce-productos')

@endsection
