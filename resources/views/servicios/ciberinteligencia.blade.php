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
            <img src="{{ asset('img/serv_escudo.webp') }}" height="70px" style="filter: brightness(10);" alt="Servicios esucdo"
                title="Servicios esucdo">
            <h1 class="title-main">{{ __('ciberinteligencia.header_title') }}</h1>
            <p style="text-align:center;">
                {{ __('ciberinteligencia.header_desc') }}
            </p>
        </div>

        <content class="content-limit">
            <div class="caja-serv-inter">
                <div class="menu-serv-inter">
                    <div class="caja-menu-serv">
                        <span class="title-terd">{{ __('ciberinteligencia.title_secound') }}</span>
                        @include('servicios.menu-servicios')
                    </div>
                </div>
                <div class="main-serv-inter">
                    <span class="title-main title-first-serv">{{ __('ciberinteligencia.title_serv') }}</span>
                    <p style="margin-top: 50px;">
                        {{ __('ciberinteligencia.desc_serv') }}
                    </p>

                    <div class="img-serv-inter">
                        <img src="{{ asset('img/' . __('ciberinteligencia.img_csirt') . '.webp') }}" width="90%"
                            style="margin: 50px;" alt="Ciber" title="Ciber">
                    </div>

                    <span class="title-main title-first-serv">{{ __('ciberinteligencia.desc1_serv') }}</span>
                    <p>
                        {{ __('ciberinteligencia.desc2_serv') }}
                    </p>

                    <div class="img-serv-inter">
                        <img src="{{ asset('img/' . __('ciberinteligencia.img_ciber_secc') . '.webp') }}" width="100%"
                            style="margin: 50px 0px;" alt="servicio interno" title="servicio interno">
                    </div>

                    <a href="{{ route('contacto') }}" class="btn-contact"
                        style="margin: auto; margin-top: 100px; transform: scale(1.3);">{{ __('ciberinteligencia.contac') }}</a>
                </div>
            </div>
        </content>
    </div>

@endsection
