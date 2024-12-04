@extends('layouts.site')

@section('titulo', __('metaverso.title'))

@section('metaDesc', __('metaverso.meta_desc'))

@section('body', 'metaverso-body')

@section('content')

    <style>
        body.metaverso-body {
            background: #2375A6 0% 0%;
        }

        .fondo-metaverso-introduccion {
            background-size: cover;
            background-position: end;
            background-repeat: no-repeat;
            display: flex;
            justify-content: flex-end;
        }

        .fondo-metaverso {
            min-height: 462px;
            height: auto;
            background-size: cover;
            background-position: end;
            background-repeat: no-repeat;
            display: flex;
            flex-direction: row;
        }

        .fondo-metaverso-fin {
            min-height: 336px;
            background: #2375A6 0% 0%;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .fondo-metaverso-introduccion p {
            margin: 5px 82px;
            color: #FFFFFF;
            font-size: 19px;
        }

        .fondo-metaverso-introduccion .title-second {
            margin: 5px 82px;
            color: #FFFFFF;
            font-size: 35px;
            text-align: left;
        }

        .fondo-metaverso p {
            margin: 5px 82px;
            text-align: left;
            color: #FFFFFF;
        }

        .fondo-metaverso .title-second {
            margin: 5px 82px;
            text-align: left;
            color: #FFFFFF;
            font-size: 35px;
        }

        .meta-instruccion {
            font-size: 20px;
        }

        .fondo-metaverso-fin p {
            margin: 5px 82px;
            color: #FFFFFF;
            font-size: 18px;
        }

        .fondo-metaverso-fin .title-second {
            margin: 5px 82px;
            color: #FFFFFF;
            font-size: 35px;
            text-align: center;
            margin-top: 60px;
        }

        .btn-metaverso {
            width: 333px;
            height: 64px;
            margin: 50px 82px;
            background: transparent linear-gradient(180deg, #39CAC6 0%, #00AAB7 100%);
            border-radius: 35px;
            color: #FFFFFF;
            text-align: center;
            font-size: 28px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .block-1 {
            width: 50%;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .block-2 {
            width: 50%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        @media(max-width: 750px) {
            .fondo-metaverso-introduccion {
                background-size: cover;
                background-position: end;
                background-repeat: no-repeat;
                display: flex;
                justify-content: center;
            }

            .fondo-metaverso {
                height: auto;
                background-size: cover;
                background-position: end;
                background-repeat: no-repeat;
                display: inline-block;
                flex-direction: row;
            }

            .block-1 {
                width: 100%;
                display: flex;
                flex-direction: column;
                justify-content: center;
            }

            .block-2 {
                width: 100%;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                align-content: center;
            }
        }
    </style>
    <div class="fondo-metaverso-introduccion" style="height:694px; background-image: url('img/metaverso/metaverso1.webp');"
        title="Banner principal Metaverso">
        <div
            style="width: 678px; backdrop-filter: blur(5px);
    background-color:rgba(0,0,0,0.35); display:flex;
        flex-direction:column;
        justify-content:center;
        aling-content:center;
        ">
            <h1 class="title-second">{{__('metaverso.title_1')}}</h1>
            <p><strong>{{__('metaverso.desc_1')}}</strong></p>
            <div style="display:flex; justify-content:center; "></div>
            <a href="https://www.spatial.io/s/Silent-4-Business-Metaverse-640934cccad9bf8793157ca2?share=3130313224200591619"
                target="_blank" class="btn-metaverso">{{__('metaverso.title_button')}}</a>
        </div>
    </div>
    <div class="fondo-metaverso" style="background-image: url('img/metaverso/metaverso3.webp');">
        <div class="block-1">
            <span class="title-second">{{__('metaverso.title_2')}}</span>
            <p style="font-size: 24px;">{{__('metaverso.desc_2.desc_1')}}</p>
            <p class="meta-instruccion">
                <img src="{{ asset('img/metaverso/paso1.svg') }}" alt="Opción de Avatares" title="Opción de Avatares"
                    style="float:left;width:36.6px;height:36.6px; padding-right:15px">
                    {{__('metaverso.desc_2.desc_2')}}
            </p>
        </div>
        <div class="block-2">
            <img src="{{ asset('img/metaverso/metaverso-avatar.webp') }}" alt="Guías interactivas"
                title="Guías interactivas" style="width: 199px; height: 326px;">
        </div>
    </div>
    <div class="fondo-metaverso" style="background-image: url('img/metaverso/metaverso4.webp');">
        <div class="block-2">
            <img src="{{ asset('img/metaverso/metaverso-controles.webp') }}" alt="Metaverso" title="Metaverso"
                style="width:80%">
        </div>
        <div class="block-1" style="backdrop-filter: blur(5px); background-image: url('img/metaverso/metaverso2.webp');">
            <p class="meta-instruccion" style="margin-top: 63px;">
                <img src="{{ asset('img/metaverso/paso2.svg') }}" alt="Metaverso paso dos" title="Metaverso paso dos"
                    style="float:left;width:36.6px;height:36.6px; padding-right:15px">
                    {{__('metaverso.title_3')}}
            </p>
            <p style="margin-top: 21px;">{{__('metaverso.desc_3.step_1')}}</p>
            <p>{{__('metaverso.desc_3.step_2')}}</p>
            <p>{{__('metaverso.desc_3.step_3')}}</p>
            <p>{{__('metaverso.desc_3.step_4')}}</p>
            <p>{{__('metaverso.desc_3.step_5')}}</p>
        </div>
    </div>
    <div class="fondo-metaverso" style="background-image: url('img/metaverso/metaverso5.webp');">
        <div class="block-2" style="color:#FFFFFF;">
            <p class="meta-instruccion">
                <img src="{{ asset('img/metaverso/paso3.svg') }}" alt="metaverso paso tres" title="metaverso paso tres"
                    style="float:left;width:36.6px;height:36.6px; padding-right:15px">
                    {{__('metaverso.title_4')}}
            </p>
        </div>
        <div class="block-2">
            <img src="{{ asset('img/metaverso/metaverso-persona.webp') }}" alt="Metaverso usuario" title="Metaverso usuario"
                style="width: 248px; height: 382px;" class="responsive">
        </div>
    </div>
    <div class="fondo-metaverso" style="background-image: url('img/metaverso/metaverso6.webp');">
        <div class="block-2">
            <img src="{{ asset('img/metaverso/metaverso-ciber.webp') }}" alt="Ciberseguridad" title="Ciberseguridad"
                style="width: 80%">
        </div>
        <div style="background-image: url('img/metaverso/metaverso2.webp'); color:#FFFFFF;" class="block-2">
            <p class="meta-instruccion">
                <img src="{{ asset('img/metaverso/paso4.svg') }}" alt="Metaverso paso cuatro" title="Metaverso paso cuatro"
                    style="float:left;width:36.6px;height:36.6px; padding-right:15px">
                    {{__('metaverso.title_5')}}
            </p>
        </div>
    </div>
    <div class="fondo-metaverso" style="background-image: url('img/metaverso/metaverso5.webp');">
        <div class="block-2" style="color:#FFFFFF;">
            <p class="meta-instruccion">
                <img src="{{ asset('img/metaverso/paso5.svg') }}" alt="Metaverso paso 5" title="Metaverso paso 5"
                    style="float:left;width:36.6px;height:36.6px; padding-right:15px">
                    {{__('metaverso.title_6')}}
            </p>
        </div>
        <div class="block-2">
            <img src="{{ asset('img/metaverso/metaverso-chat.webp') }}" alt="Chat" title="Chat" style="width: 80%;">
        </div>
    </div>
    <div class="fondo-metaverso-fin">
        <span class="title-second">{{__('metaverso.finish')}}</span>
        <a href="https://www.spatial.io/s/Silent-4-Business-Metaverse-640934cccad9bf8793157ca2?share=3130313224200591619"
            target="_blank" class="btn-metaverso">{{__('metaverso.title_button')}}</a>
    </div>
@endsection
