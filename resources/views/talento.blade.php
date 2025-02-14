@extends('layouts.site')

@section('titulo', __('talento.titulo'))

@section('metaDesc', __('talento.metaDesc'))

@section('body', 'talento-body')

@section('head')
    <style>
        .title-fondo::before {
            background-image: url('{{ asset('img/portadas/portada_talento.webp') }}');
        }

        input[type="file"]::-webkit-file-upload-button {
            display: none;
            /* Oculta el botón interno en navegadores WebKit */
        }

        input[type="file"]::file-selector-button {
            display: none;
            /* Oculta el botón interno en navegadores modernos */
        }

        input[type="file"] {
            border: 1px solid #ccc;
            padding: 5px;
            border-radius: 5px;
            width: 100%;
            /* Ajusta el ancho como necesites */
            font-size: 14px;
        }
    </style>
@endsection

@section('content')
    <div>
        <div class="title-fondo">
            <h1 class="title-main">{{ __('talento.title_main') }}</h1>
            <p>{{ __('talento.title_info') }}</p>
        </div>

        <contetn class="content-limit">
            <div class="card">
                <h2 class="title-second">{{ __('talento.title_second') }}</h2>

                <p class="parrafo-suec">
                    {{ __('talento.parrafo_suec') }}
                </p>

                <div class="caja-flex" style="justify-content: space-between; margin-top: 50px;">
                    <div class="talento-servicios">
                        <p class="parrafo-nedp">
                            {{ __('talento.parrafo_nedp') }}
                        </p>
                        <div class="caja-flex" style="justify-content: space-between; margin-top: 80px;">
                            <div class="talent-serv">
                                <img src="{{ asset('img/talent_1.webp') }}" title="Crecimiento continuo"
                                    alt="Crecimiento continuo">
                                <p>{{ __('talento.advantages_1') }}</p>
                            </div>
                            <div class="talent-serv">
                                <img src="{{ asset('img/talent_2.webp') }}" title="Vacaciones flexibles"
                                    alt="Vacaciones flexibles">
                                <p>{{ __('talento.advantages_2') }}</p>
                            </div>
                        </div>
                        <div class="caja-flex" style="justify-content: space-between; margin-top: 30px;">
                            <div class="talent-serv">
                                <img src="{{ asset('img/talent_3.webp') }}" title="Eventos de integración"
                                    alt="Eventos de integración">
                                <p>{{ __('talento.advantages_3') }}</p>
                            </div>
                            <div class="talent-serv">
                                <img src="{{ asset('img/talent_4.webp') }}" title="Capacitaciones constantes"
                                    alt="Capacitaciones constantes">
                                <p>{{ __('talento.advantages_4') }}</p>
                            </div>
                        </div>
                        <div style="margin-top: 50px;">
                            <a href="https://www.careers-page.com/silent4business#openings" target="_blanck"
                                class="btn-form-second" style="width: 230px;">{{ __('talento.consultar_vacantes') }}</a>
                        </div>
                    </div>
                    <div class="talento-form">
                        @livewire('talento-form-component')
                    </div>
                </div>
            </div>

            <div class="card d-none" style="margin-top: 35px;">
                <span class="title-second" style="text-align: left;">{{ __('talento.last_vacancy') }}</span>

                <div class="caja-vacantes">
                    <hr>
                    <div class="vacante">
                        <span class="title-five">{{ __('talento.developer') }}</span>
                        <i>{{ __('talento.whole_time') }}</i>
                        <p>
                            {{ __('talento.pentester') }}
                        </p>
                        <p>
                            {{ __('talento.pentester_experience') }}
                        </p>
                    </div>
                    <hr>
                    <div class="vacante">
                        <span class="title-five">{{ __('talento.developer') }}</span>
                        <i>{{ __('talento.whole_time') }}</i>
                        <p>
                            {{ __('talento.pentester') }}
                        </p>
                        <p>
                            {{ __('talento.pentester_experience') }}
                        </p>
                    </div>
                    <hr>
                    <div class="vacante">
                        <span class="title-five">{{ __('talento.developer') }}</span>
                        <i>{{ __('talento.whole_time') }}</i>
                        <p>
                            {{ __('talento.pentester') }}
                        </p>
                        <p>
                            {{ __('talento.pentester_experience') }}
                        </p>
                    </div>
                </div>
            </div>
        </contetn>

    </div>

@endsection
