@extends('layouts.site')

@section('titulo', __('exito.title'))

@section('metaDesc', __('exito.metaDesc'))

@section('body', 'body')

@section('head')
    <style>
        .title-fondo::before {
            background-image: url('{{ asset('img/portadas/portada_exito.webp') }}');
        }
    </style>
@endsection

@section('content')
    <div>
        <div class="title-fondo">
            <h1 class="title-main">{{ __('exito.title_main') }}</h1>
            <p>{{ __('exito.title_slogan') }}</p>
        </div>

        <div id="seguridad-medida" class="caso-exito-complete" style="background-color: #F3F5FF; margin-top: 100px;">
            <content class="content-limit">
                <div class="caso-img" style="background-image: url('img/exito_caso_1.webp');" title="Industria turística">
                </div>
                <div class="caso-info">
                    <h2 class="title-second">{{ __('exito.title_security') }}</h2>
                    <p style="font-size: 24px;">{{ __('exito.title_security_case_1') }}</p>
                    <p style="margin-top: 20px;">
                        {{ __('exito.title_security_case_2_1') }} <br> {{ __('exito.title_security_case_2_2') }}
                    </p>
                    <p>
                        <a href="{{ asset('img/exitos/Caso de éxito_Seguridad a la medida.pdf') }}" target="_blank"
                            class="btn-tend">{{ __('exito.title_read_more') }}</a>
                    </p>
                </div>
            </content>
        </div>

        <div id="cero-extraccion" class="caso-exito-complete no-visible" style="background-color: #f3f3f3;">
            <content class="content-limit">
                <div class="caso-info">
                    <h2 class="title-second">{{ __('exito.title_zero') }}</h2>
                    <p style="font-size: 24px;">{{ __('exito.title_zero_case_1') }}</p>
                    <p style="margin-top: 20px;">
                        {{ __('exito.title_zero_case_2') }}
                    </p>
                    <p>
                        <a href="{{ asset('img/exitos/Caso de éxito_Cero Extracción.pdf') }}" target="_blank"
                            class="btn-tend">{{ __('exito.title_read_more') }}</a>
                    </p>
                </div>
                <div class="caso-img"
                    style="background-image: url('img/exito_caso_2.webp'); border-radius: 0; border-top-left-radius: 20px; border-bottom-left-radius: 20px; border:none; border-right: 60px solid #B8B8B8;"
                    title="Industria minera">
                </div>
            </content>
        </div>

        <div id="proteccion-total" class="caso-exito-complete no-visible" style="background-color: #F3F5FF;">
            <content class="content-limit">
                <div class="caso-img" style="background-image: url('img/exito_caso_3.webp');" title="SENER"></div>
                <div class="caso-info">
                    <h2 class="title-second">{{ __('exito.title_proteccion') }}</h2>
                    <p style="font-size: 24px;">{{ __('exito.title_proteccion_case_1') }}</p>
                    <p style="margin-top: 20px;">
                        {{ __('exito.title_proteccion_case_2') }}
                    </p>
                    <p>
                        <a href="{{ asset('img/exitos/Caso de éxito_Protección Total.pdf') }}" target="_blank"
                            class="btn-tend">{{ __('exito.title_read_more') }}</a>
                    </p>
                </div>
            </content>
        </div>
    </div>

@endsection
