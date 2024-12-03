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
            <h1 class="title-main">{{ __('services_ce.header') }}</h1>
            <p style="text-align:center;">
                {{ __('services_ce.header_desc') }}
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
                    <span class="title-main title-first-serv">{{ __('services_ce.header') }}</span>
                    <p style="margin-top: 50px;">
                        {{ __('services_ce.header_desc1') }}
                    </p>

                    <div class="img-serv-inter">
                        <img src="{{ asset('img/consul.webp') }}" width="60%" style="margin: 50px 20%;" alt="Consultoria"
                            title="Consultoria">
                    </div>

                    <a href="{{ route('contacto') }}" class="btn-contact"
                        style="margin: auto; margin-top: 100px; transform: scale(1.3);">{{ __('nav.contacto') }}</a>
                </div>
            </div>
        </content>
    </div>

@endsection
