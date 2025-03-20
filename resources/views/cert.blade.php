@extends('layouts.site')

@section('titulo', __('cert.title'))

@section('metaDesc', __('cert.meta_desc'))

@section('body', 'cert-body')

@section('head')
    <style>
        .title-fondo::before {
            background-image: url('{{ asset('img/portadas/portada_cert.webp') }}');
        }
    </style>
@endsection

@section('content')
    <div>
        <div class="title-fondo">
            <h1 class="title-main">S4B CSIRT</h1>
            <p>{{ __('cert.header') }}</p>
        </div>

        <div class="blue-compu">
            <content class="content-limit">
                <p>
                    <strong style="font-size: 24px;"> CSIRT: </strong>
                    {{ __('cert.header_desc') }}
                </p>
            </content>
        </div>

        <div class="caja-flex mision-vision-cert">

            <div class="cert-valor cert-mision">
                <div class="cert-text">
                    <h2 class="title-five">{{ __('cert.mision') }}</h2>
                    <p>
                        {{ __('cert.mision_desc') }}
                    </p>
                </div>
                <div class="cert-icon">
                    <img src="{{ asset('img/cert_vision.webp') }}" alt="Misión CSIRT" title="Misión CSIRT">
                    <h2 class="title-five">{{ __('cert.mision') }}</h2>
                </div>
            </div>
            <div class="cert-valor cert-vision">
                <div class="cert-icon">
                    <img src="{{ asset('img/cert_vision.webp') }}" alt="Visión CSIRT" title="Visión CSIRT">
                    <h2 class="title-five">{{ __('cert.vision') }}</h2>
                </div>
                <div class="cert-text">
                    <h2 class="title-five">{{ __('cert.vision') }}</h2>
                    <p>
                        {{ __('cert.vision_desc') }}
                    </p>
                </div>
            </div>
        </div>

        <h2 class="title-main objetivos-cert">{{ __('cert.objetivo') }}</span>
            <div class="caja-flex obetivos-cert">
                <div class="activ-cert">
                    <p class="first-p">
                        <strong>{{ __('cert.objetivo1_strong') }}</strong> {{ __('cert.objetivo1') }}
                    </p>
                    <p class="second-p">
                        <strong>{{ __('cert.objetivo2_strong') }} </strong>
                        {{ __('cert.objetivo2') }}
                    </p>
                </div>
                <div class="herra-cert">
                    <p class="first-p">
                        <strong>{{ __('cert.objetivo3_strong') }}</strong> {{ __('cert.objetivo3') }}
                    </p>
                    <p class="second-p">
                        <strong>{{ __('cert.objetivo4_strong') }}</strong> {{ __('cert.objetivo4') }}
                    </p>
                </div>
            </div>

            <img src="{{ asset('img/' . __('cert.img_servicios') . '.png') }}" class="servicio-img no-visible"
                alt="Servicios del CSIRT" title="Servicios del CSIRT">

            <hr style="width: 500px; border-color:#fff; margin-top:80px;">

            <h2 class="title-second title-somm">{{ __('cert.miembros') }}</h2>

            <img src="{{ asset('img/first.webp') }}" class="first-img no-visible" alt="CSIRT certificado por FIST"
                title="CERT certificado por FIST">

            <content class="content-limit">
                <p class="parrafo-soes no-visible">
                    {{ __('cert.miembros_desc') }}
                </p>
            </content>

            <hr style="width: 500px; border-color:#fff; margin-top:80px;">

            <h2 class="title-second title-somm">Traffic Light Protocol (TLP)</h2>

            <content class="content-limit">
                <p class="parrafo-soes no-visible">
                    <strong>TLP </strong> {{ __('cert.tlp_desc') }}
                </p>
                </p>

                <img src="{{ asset('img/' . __('cert.img_estandares') . '.webp') }}" class="estandares-img no-visible"
                    alt="Esquema TLP" title="Esquema TLP">

                <hr style="width: 500px; border-color:#fff; margin-top:80px;">

                <a href="{{ route('contacto') }}" class="btn-contact-cert">{{ __('nav.contacto') }}</a>

            </content>
    </div>

@endsection
