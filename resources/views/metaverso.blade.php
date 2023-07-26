@extends('layouts.site')

@section('content')

@section('titulo', 'Aliados de tu Ciberseguridad | Servicios para tu empresa')

@section('body', 'metaverso-body')

<style>
    body.metaverso-body{
        background: #2375A6 0% 0%;
    }
    .fondo-metaverso-introduccion{
        background-size:cover;
        background-position:end;
        background-repeat:no-repeat;
        display:flex;
        justify-content:flex-end;
    }
    .fondo-metaverso{
        height: 462px;
        background-size:cover;
        background-position:end;
        background-repeat:no-repeat;
        display:flex;
        flex-direction: row;
        }
    .fondo-metaverso-fin{
        height: 336px;
        background: #2375A6 0% 0%;
        display:flex;
        flex-direction: column;
        align-items: center;
    }
    .fondo-metaverso-introduccion p {
        margin: 5px 82px;
        color:#FFFFFF;
        font-size:18px;
    }
    .fondo-metaverso-introduccion h2 {
    margin: 5px 82px;
    color:#FFFFFF;
    font-size:35px;
    text-align:left;
    }
    .fondo-metaverso p {
        margin: 5px 82px;
        text-align: left;
        color: #FFFFFF;
        }
    .fondo-metaverso h2 {
        margin: 5px 82px;
        text-align: left;
        color: #FFFFFF;
        font-size:35px;
    }
    .meta-instruccion {
        font-size:20px;
    }
    .fondo-metaverso-fin p {
    margin: 5px 82px;
    color:#FFFFFF;
    font-size:18px;
    }
    .fondo-metaverso-fin h2 {
    margin: 5px 82px;
    color:#FFFFFF;
    font-size:35px;
    text-align:center;
    margin-top: 60px;
    }
    .btn-metaverso{
        width: 333px;
        height: 64px;
        margin: 50px 82px;
        background: transparent linear-gradient(180deg, #39CAC6 0%, #00AAB7 100%);
        border-radius:35px;
        color:#FFFFFF;
        text-align: center;
        font-size: 28px;
        display:flex;
        justify-content: center;
        align-items: center;
    }

</style>
<div class="fondo-metaverso-introduccion"  style="height:694px; background-image: url('img/metaverso/metaverso1.webp');">
    <div style="width: 678px; backdrop-filter: blur(5px); background-image: url('img/metaverso/metaverso2.webp'); display:flex;
        flex-direction:column;
        justify-content:center;
        aling-content:center;
        ">
        <h2>¿Listo para embarcarte en esta emocionante aventura en el metaverso de Silent 4 Business?</h2>
        <p>Bienvenido al metaverso de Silent 4 Business, donde la realidad virtual y la ciberseguridad se fusionan para ofrecerte
        una experiencia única. Sumérgete en un mundo digital, donde podrás dar un recorrido por nuestro espacio virtual, conocer
        más acerca de nuestros servicios y explorar las últimas innovaciones en protección cibernética.</p>
        <div style="display:flex; justify-content:center; "></div>
        <a href="https://www.spatial.io/s/Silent-4-Business-Metaverse-640934cccad9bf8793157ca2?share=3130313224200591619" target="_blank" class="btn-metaverso">Ingresar al Metaverso</a>
    </div>
</div>
<div class="fondo-metaverso" style="background-image: url('img/metaverso/metaverso3.webp');">
    <div style="width:50%; display:flex;flex-direction:column; justify-content:center;">
        <h2>Instrucciones</h2>
        <p style="font-size: 24px;">Antes de Iniciar, es importante darte unas breves instrucciones para que tu experiencia sea más enriquecedora.</p>
        <p class="meta-instruccion">
            <img src="{{asset("img/metaverso/paso1.svg")}}" alt="" style="float:left;width:36.6px;height:36.6px; padding-right:15px">
            Al ingresar al enlace deberás seleccionar un personaje virtual, selecciona el que más te guste y da clic en continuar.
        </p>
    </div>
    <div style="width:50%; display:flex; justify-content:center; align-items:center;">
        <img src="{{asset("img/metaverso/metaverso-avatar.webp")}}" alt="" style="width: 199px; height: 326px;">
    </div>
</div>
<div class="fondo-metaverso" style="background-image: url('img/metaverso/metaverso4.webp');">
    <div style="width:50%; display:flex; justify-content:center; align-items:center;">
        <img src="{{asset("img/metaverso/metaverso-controles.webp")}}" alt="" style="width:80%" >
    </div>
    <div style="width:50%; display:flex;flex-direction:column; backdrop-filter: blur(5px); background-image: url('img/metaverso/metaverso2.webp');">
        <p class="meta-instruccion" style="margin-top: 63px;">
            <img src="{{asset("img/metaverso/paso2.svg")}}" alt=""
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
    <div style="width:50%; color:#FFFFFF; display:flex;flex-direction:column; justify-content:center; align-items:center;">
        <p class="meta-instruccion">
            <img src="{{asset("img/metaverso/paso3.svg")}}" alt=""
                style="float:left;width:36.6px;height:36.6px; padding-right:15px">
                Cuando veas a un guía como el de la imagen siguiente, da clic sobre el/ella para que te de información valiosa de
                Silent.
        </p>
    </div>
    <div style="width:50%; display:flex; justify-content:center; align-items:center;" class="responsive">
        <img src="{{asset("img/metaverso/metaverso-persona.webp")}}" alt="" style="width: 248px; height: 382px;" class="responsive">
    </div>
</div>
<div class="fondo-metaverso" style="background-image: url('img/metaverso/metaverso6.webp');">
    <div style="width:50%; display:flex; justify-content:center; align-items:center;">
        <img src="{{asset("img/metaverso/metaverso-ciber.webp")}}" alt="" style="width: 80%">
    </div>
    <div style="background-image: url('img/metaverso/metaverso2.webp'); width:50%; color:#FFFFFF; display:flex;flex-direction:column; justify-content:center; align-items:center;">
        <p class="meta-instruccion">
            <img src="{{asset("img/metaverso/paso4.svg")}}" alt="" style="float:left;width:36.6px;height:36.6px; padding-right:15px">
                Para reproducir un video o ver de cerca los cuadros de la pared, da clic sobre la lupa que aparece en la esquina.
        </p>
    </div>
</div>
<div class="fondo-metaverso" style="background-image: url('img/metaverso/metaverso5.webp');">
    <div
        style="width:50%; color:#FFFFFF; display:flex;flex-direction:column; justify-content:center; align-items:center;">
        <p class="meta-instruccion">
            <img src="{{asset("img/metaverso/paso5.svg")}}" alt=""
                style="float:left;width:36.6px;height:36.6px; padding-right:15px">
                Por último, podrás escribir en el chat para platicar con otras personas que se encuentren en la sala, no olvides ser respetuso.
        </p>
    </div>
    <div style="width:50%; display:flex; justify-content:center; align-items:center;">
        <img src="{{asset("img/metaverso/metaverso-chat.webp")}}" alt="" style="width: 80%;">
    </div>
</div>
<div class="fondo-metaverso-fin">
    <h2>¡Ya estás listo para disfrutar del Metaverso de Silent 4 Business!, ingresa dando clic en el siguiente botón:</h2>
    <a href="https://www.spatial.io/s/Silent-4-Business-Metaverse-640934cccad9bf8793157ca2?share=3130313224200591619" target="_blank" class="btn-metaverso">Ingresar al Metaverso</a>
</div>
@endsection

