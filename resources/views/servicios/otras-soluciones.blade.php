@extends('layouts.site')

@section('titulo', __('cti.title'))

@section('metaDesc', __('cti.meta_desc'))

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
            <h1 class="title-main">{{ __('cti.header') }}</h1>
            <p style="text-align:center;">
                {{ __('cti.header_desc') }}
            </p>
        </div>

        <content class="content-limit">
            <div class="caja-serv-inter">
                <div class="menu-serv-inter">
                    <div class="caja-menu-serv">
                        <span class="title-terd"> {{ __('cti.servicios') }}</span>
                        @include('servicios.menu-servicios')
                    </div>
                </div>
                <div class="main-serv-inter">
                    <span class="title-main title-first-serv">{{ __('cti.servicios1') }}</span>
                    <p style="margin-top: 50px;">
                        {{ __('cti.servicios2') }}
                    </p>

                    <span class="title-terd" style="margin-top: 50px; text-align: center;">{{ __('cti.servicios3') }}</span>

                    <div class="img-serv-inter">
                        <img src="{{ asset('img/no_protected.webp') }}" width="60%" style="margin: 10px 20%;"
                            alt="protected" title="protected">
                    </div>

                    <a href="{{ route('contacto') }}" class="btn-contact"
                        style="margin: auto; margin-top: 100px; transform: scale(1.3);">{{ __('nav.contacto') }}</a>
                </div>
            </div>
        </content>
    </div>

@endsection
