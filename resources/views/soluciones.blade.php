@extends('layouts.site')

@section('titulo', __('soluciones.title'))

@section('metaDesc', __('soluciones.meta_desc'))

@section('body', 'soluciones-body')

@section('head')
    <style>
        .title-fondo::before {
            background-image: url('{{ asset('img/portadas/portada_soluciones.webp') }}');
        }
    </style>
@endsection

@section('content')
    <div>
        <div class="title-fondo">
            <h1 class="title-main">{{ __('soluciones.header_title') }}</h1>
            <p>
                {{ __('soluciones.header_desc') }}
            </p>
        </div>

        <content class="content-limit">
            <div class="caja-soluciones">
                <div id="salud" class="solucion">
                    <img src="{{ asset('img/sol-salud.webp') }}" class="img-solucion">
                    <p>
                        {{ __('soluciones.soluciones.salud.description') }}
                    </p>
                </div>
                <div id="financiera" class="solucion">
                    <img src="{{ asset('img/sol-financiera.webp') }}" class="img-solucion" title="Solución FINANCIERA"
                        alt="Solución FINANCIERA">
                    <p>
                        {{ __('soluciones.soluciones.financiera.description') }}
                    </p>
                </div>
                <div id="manofactura" class="solucion">
                    <img src="{{ asset('img/sol-manufactura.webp') }}" class="img-solucion" title="Solución MANOFACTURA"
                        alt="Solución MANOFACTURA">
                    <p>
                        {{ __('soluciones.soluciones.manofactura.description') }}
                    </p>
                </div>
                <div id="energia" class="solucion">
                    <img src="{{ asset('img/sol-energia.webp') }}" class="img-solucion"
                        title="Solución ENERGÉTICA Y RECURSOS" alt="Solución ENERGÉTICA Y RECURSOS">
                    <p>
                        {{ __('soluciones.soluciones.energia.description') }}
                    </p>
                </div>
                <div id="agro" class="solucion">
                    <img src="{{ asset('img/sol-agro.webp') }}" class="img-solucion" title="Solución AGROINDUSTRIAL"
                        alt="Solución AGROINDUSTRIAL">
                    <p>
                        {{ __('soluciones.soluciones.agro.description') }}
                    </p>
                </div>
                <div id="academia" class="solucion">
                    <img src="{{ asset('img/sol-academia.webp') }}" class="img-solucion" title="Solución ACADEMICA"
                        alt="Solución ACADEMICA">
                    <p>
                        {{ __('soluciones.soluciones.academia.description') }}
                    </p>
                </div>
            </div>
        </content>

    </div>

@endsection
