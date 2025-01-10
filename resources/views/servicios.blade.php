@extends('layouts.site')

@section('titulo', __('servicios.title'))

@section('metaDesc', __('servicios.meta_desc'))

@section('body', 'servicios-body')

@section('head')
    <style>
        .title-fondo::before {
            background-image: url('{{ asset('img/portadas/portada_servicios.webp') }}');
        }
    </style>
@endsection

@section('content')
    <div>
        <div class="title-fondo">
            <h1 class="title-main">{{ __('servicios.title') }}</h1>
            <p>{{ __('servicios.desc') }}</p>
        </div>

        <content class="content-limit">
            <div class="caja-btn-group">
                <a href="{{ route('servicios/soc-noc') }}">
                    <img src="{{ asset('img/serv_monitor.webp') }}" title="Sección SOC -NOC" alt="Sección SOC -NOC">
                    <p>{{ __('servicios.cards.card1') }}</p>
                </a>
                <a href="{{ route('servicios/ciberinteligencia') }}">
                    <img src="{{ asset('img/serv_escudo.webp') }}" title="Sección Ciberinteligencia"
                        alt="Sección Ciberinteligencia">
                    <p>{{ __('servicios.cards.card2') }}</p>
                </a>
                <a href="{{ route('servicios/consultoria-estrategica') }}">
                    <img src="{{ asset('img/serv_global.webp') }}" title="Sección Consultoría estratégica"
                        alt="Sección Consultoría estratégica">
                    <p>{{ __('servicios.cards.card3.title1') }} <br> {{ __('servicios.cards.card3.title2') }}</p>
                </a>
                <a href="{{ route('servicios/otras-soluciones') }}">
                    <img src="{{ asset('img/serv_soluciones.webp') }}" title="Sección Otras soluciones"
                        alt="Sección Otras soluciones">
                    <p>{{ __('welcome.soluciones_tecno') }}</p>
                </a>
            </div>
            <p class="text-prin-serv" style="margin-top: 60px; font-size: 18px;">
                {{ __('servicios.desc_2') }}
            </p>

            {{-- <hr style="margin: 100px 0px;">
            @include('servicios.conoce-productos') --}}
        </content>
    </div>


@endsection
