@extends('layouts.site')

@section('titulo', __('contacto.title'))

@section('metaDesc', __('contacto.meta_desc'))

@section('body', 'contacto-body')

@section('content')
    <div>
        <div style="margin-top: 50px;">
            @livewire('contacto-comercial-form-component')
        </div>


        {{-- <div class="desplazador">
            <div class="desplazable">
                @livewire('contacto-comercial-form-component')
            </div>
            <div class="desplazable">
                <content class="content-limit">
                    <div class="card">
                        <h1 class="title-second">{{ __('contacto.title') }}</h1>
                        <p class="parrafo-psolinf">
                            {{ __('contacto.desc') }}
                        </p>

                        <span class="title-five"> {{ __('contacto.elig') }}</span>

                        <div class="caja-flex">
                            <div class="contact-item">
                                <button class="card" onclick="desplazar(0)">
                                    <i class="material-symbols-outlined">headset_mic</i>
                                </button>
                                <p><strong> General </strong></p>
                                <p class="mobile-none-mini">
                                    {{ __('contacto.general') }}
                                </p>
                            </div>
                            <div class="contact-item">
                                <button class="card" onclick="desplazar(-200)">
                                    <i class="material-symbols-outlined">school</i>
                                </button>
                                <p><strong> {{ __('contacto.cursos') }} </strong></p>
                                <p class="mobile-none-mini">
                                    {{ __('contacto.cursos_desc') }}
                                </p>
                            </div>
                            <div class="solo-mobile-mini" style="margin-top: 30px; color: #2567AE;">
                                <p>
                                    <strong>1.</strong> {{ __('contacto.desc1') }}
                                </p>
                                <p>
                                    <strong>2.</strong> {{ __('contacto.desc2') }}
                                </p>
                            </div>
                        </div>
                    </div>
                </content>
            </div>
            <div class="desplazable">
                
                @livewire('contacto-curso-capacitacion-form-component')
            </div>
        </div> --}}
    </div>

@endsection

@section('scripts')
    <script src="{{ asset('js/contacto.js') }}"></script>
@endsection
