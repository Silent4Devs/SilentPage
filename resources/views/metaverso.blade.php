@extends('layouts.site')

@section('titulo', 'Metaverso S4B: Ciberseguridad y Realidad Virtual')

@section('metaDesc',
    'Sumérgete en un viaje digital donde ciberseguridad y realidad virtual se
    fusionan para explorar las últimas innovaciones en protección cibernética.')

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
            <h1 class="title-second">¿Listo para embarcarte en esta emocionante aventura en el metaverso de Silent 4
                Business?</h1>
            <p><strong> al metaverso de Silent 4 Business, donde la realidad virtual y la ciberseguridad se fusionan
                    para ofrecerte
                    una experiencia única. Sumérgete en un mundo digital, donde podrás dar un recorrido por nuestro
                    espacio virtual, conocer
                    más acerca de nuestros servicios y explorar las últimas innovaciones en protección
                    cibernética.</strong></p>
            <div style="display:flex; justify-content:center; "></div>
            <a href="https://www.spatial.io/s/Silent-4-Business-Metaverse-640934cccad9bf8793157ca2?share=3130313224200591619"
                target="_blank" class="btn-metaverso">Ingresar al Metaverso</a>
        </div>
    </div>
    <div class="fondo-metaverso" style="background-image: url('img/metaverso/metaverso3.webp');">
        <div class="block-1">
            <span class="title-second">Instrucciones</span>
            <p style="font-size: 24px;">Antes de Iniciar, es importante darte unas breves instrucciones para que tu
                experiencia sea más enriquecedora.</p>
            <p class="meta-instruccion">
                <img src="{{ asset('img/metaverso/paso1.svg') }}" alt="Opción de Avatares"
                    style="float:left;width:36.6px;height:36.6px; padding-right:15px">
                Al ingresar al enlace deberás seleccionar un personaje virtual, selecciona el que más te guste y da clic
                en continuar.
            </p>
        </div>
        <div class="block-2">
            <img src="{{ asset('img/metaverso/metaverso-avatar.webp') }}" alt="Guías interactivas"
                style="width: 199px; height: 326px;">
        </div>
    </div>
    <div class="fondo-metaverso" style="background-image: url('img/metaverso/metaverso4.webp');">
        <div class="block-2">
            <img src="{{ asset('img/metaverso/metaverso-controles.webp') }}" alt="Metaverso" style="width:80%">
        </div>
        <div class="block-1" style="backdrop-filter: blur(5px); background-image: url('img/metaverso/metaverso2.webp');">
            <p class="meta-instruccion" style="margin-top: 63px;">
                <img src="{{ asset('img/metaverso/paso2.svg') }}" alt="Metaverso paso dos"
                    style="float:left;width:36.6px;height:36.6px; padding-right:15px">
                Ingresarás al metaverso y te aparecerá una guía para mostrarte como navegar.
            </p>
            <p style="margin-top: 21px;">En resumen: W, A, S y D: Teclas para moverte en diferentes direcciones.</p>
            <p>SHIFT: Tecla para correr si la combinas con las teclas W, A, S y D.</p>
            <p>SPACE BAR: Tecla para brincar FLECHAS: Teclas para girar la cámara.</p>
            <p>CLIC con mouse: Podrás teletransportarte al lugar seleccionado.</p>
            <p>Números del 1 al 5: Podrás expresarte en el multiverso, aplaudir, saludar, aprobar o bailar.</p>
        </div>
    </div>
    <div class="fondo-metaverso" style="background-image: url('img/metaverso/metaverso5.webp');">
        <div class="block-2" style="color:#FFFFFF;">
            <p class="meta-instruccion">
                <img src="{{ asset('img/metaverso/paso3.svg') }}" alt="metaverso paso tres"
                    style="float:left;width:36.6px;height:36.6px; padding-right:15px">
                Cuando veas a un guía como el de la imagen siguiente, da clic sobre el/ella para que te de información
                valiosa de
                Silent.
            </p>
        </div>
        <div class="block-2">
            <img src="{{ asset('img/metaverso/metaverso-persona.webp') }}" alt="Metaverso usuario"
                style="width: 248px; height: 382px;" class="responsive">
        </div>
    </div>
    <div class="fondo-metaverso" style="background-image: url('img/metaverso/metaverso6.webp');">
        <div class="block-2">
            <img src="{{ asset('img/metaverso/metaverso-ciber.webp') }}" alt="Ciberseguridad" style="width: 80%">
        </div>
        <div style="background-image: url('img/metaverso/metaverso2.webp'); color:#FFFFFF;" class="block-2">
            <p class="meta-instruccion">
                <img src="{{ asset('img/metaverso/paso4.svg') }}" alt="Metaverso paso cuatro"
                    style="float:left;width:36.6px;height:36.6px; padding-right:15px">
                Para reproducir un video o ver de cerca los cuadros de la pared, da clic sobre la lupa que aparece en la
                esquina.
            </p>
        </div>
    </div>
    <div class="fondo-metaverso" style="background-image: url('img/metaverso/metaverso5.webp');">
        <div class="block-2" style="color:#FFFFFF;">
            <p class="meta-instruccion">
                <img src="{{ asset('img/metaverso/paso5.svg') }}" alt="Metaverso paso 5"
                    style="float:left;width:36.6px;height:36.6px; padding-right:15px">
                Por último, podrás escribir en el chat para platicar con otras personas que se encuentren en la sala, no
                olvides ser respetuso.
            </p>
        </div>
        <div class="block-2">
            <img src="{{ asset('img/metaverso/metaverso-chat.webp') }}" alt="Chat" style="width: 80%;">
        </div>
    </div>
    <div class="fondo-metaverso-fin">
        <span class="title-second">¡Ya estás listo para disfrutar del Metaverso de Silent 4 Business!, ingresa dando clic en
            el siguiente
            botón:</span>
        <a href="https://www.spatial.io/s/Silent-4-Business-Metaverse-640934cccad9bf8793157ca2?share=3130313224200591619"
            target="_blank" class="btn-metaverso">Ingresar al Metaverso</a>
    </div>
@endsection
