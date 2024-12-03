@extends('layouts.site')

@section('titulo', __('terminos.title'))

@section('metaDesc', __('terminos.meta_desc'))

@section('body', 'terminos-body')

@section('head')
    <style>
        .title-fondo::before {
            background-image: url('{{ asset('img/portadas/portada_talento.webp') }}');
        }
    </style>
@endsection

@section('content')
    <div>
        <contetn class="content-limit">
            <div style="text-align: right;"><i class="material-symbols-outlined btn-regresar"
                    onclick="window.close()">arrow_back_ios_new</i></div>
            <div class="card">
                <h1 class="title-main">{{ __('terminos.title') }}</h1>

                <p>
                    {{ __('terminos.title') }} <br>
                    {{ __('terminos.company_name') }}
                </p>
                <p>
                    {{ __('terminos.contenido.introduccion.paragraphs.parrafo') }}
                </p>
                <p>
                    {{ __('terminos.contenido.introduccion.paragraphs.parrafo2') }}
                </p>
                <p>
                    {{ __('terminos.contenido.tipos_de_datos.paragraphs.parrafo1') }}
                </p>
                <p>
                    {{ __('terminos.contenido.tipos_de_datos.paragraphs.parrafo2') }}

                </p>
                <p>
                    {{ __('terminos.contenido.cookies.paragraphs.parrafo1') }}
                </p>
                <p>
                    {{ __('terminos.contenido.cookies.paragraphs.parrafo2') }}
                </p>
                <p>
                    Microsoft Edge: <a href="https://privacy.microsoft.com/es-ES/windows-10-microsoft-edge-and-privacy;">
                        https://privacy.microsoft.com/es-ES/windows-10-microsoft-edge-and-privacy; </a>
                </p>
                <p>
                    Internet Explorer: <a
                        href="https://support.microsoft.com/es-mx/help/17442/windows-internet-explorer-delete-manage-cookies;">
                        https://support.microsoft.com/es-mx/help/17442/windows-internet-explorer-delete-manage-cookies; </a>

                </p>
                <p>
                    MozillaFirefox: <a
                        href="http://support.mozilla.org/es/kb/Habilitar%20y%20deshabilitar%20cookies?s=deshabilitar+cookies&r=0&e=es&as=s;">
                        http://support.mozilla.org/es/kb/Habilitar%20y%20deshabilitar%20cookies?s=deshabilitar+cookies&r=0&e=es&as=s;
                    </a>
                </p>
                <p>
                    Opera: <a href="http://help.opera.com/Windows/11.50/es-ES/cookies.html;">
                        http://help.opera.com/Windows/11.50/es-ES/cookies.html; </a>
                </p>
                <p>
                    Safari para IPAD, IPHONE Y IPOD TOUCH: <a href="https://support.apple.com">
                        https://support.apple.com/es-es/HT201265; </a>
                </p>
                <p>
                    Safari para MAC: <a href="https://support.apple.com">
                        https://support.apple.com/kb/ph21411?locale=es_MX;</a> y
                </p>
                <p>
                    Chrome: <a href="http://support.google.com/chrome/bin/answer.py?hl=es&answer=95647">
                        http://support.google.com/chrome/bin/answer.py?hl=es&answer=95647 </a>
                </p>
                <p>
                    {{ __('terminos.contenido.otros.paragraphs.parrafo1') }}
                </p>
                <p>
                    {{ __('terminos.contenido.otros.paragraphs.parrafo2') }}
                </p>
                <p>
                    {{ __('terminos.contenido.otros.paragraphs.parrafo3') }}
                </p>
                <p>
                    {{ __('terminos.contenido.otros.paragraphs.parrafo4') }}
                </p>
                <p>
                    {{ __('terminos.contenido.otros.paragraphs.parrafo5') }}
                </p>
                <p>
                    {{ __('terminos.contenido.otros.paragraphs.parrafo6') }}
                </p>
                <p>
                    {{ __('terminos.contenido.otros.paragraphs.parrafo7') }}
                </p>
                <p>
                    {{ __('terminos.contenido.otros.paragraphs.parrafo8') }}
                </p>
                <p>
                    {{ __('terminos.contenido.otros.paragraphs.parrafo9') }}
                    {{ __('terminos.contenido.otros.paragraphs.parrafo10') }}
                    {{ __('terminos.contenido.otros.paragraphs.parrafo11') }}
                    {{ __('terminos.contenido.otros.paragraphs.parrafo12') }}
                </p>
            </div>
        </contetn>

    </div>

@endsection
