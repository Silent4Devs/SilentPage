@extends('layouts.site')

@section('content')

@section('titulo', 'Aliados de tu Ciberseguridad | Servicios para tu empresa')

@section('body', 'servicios-body')

<style>
    .title-fondo::before {
        background-image: url('img/portadas/portada_servicios.webp');
    }
</style>

<div>
    <div class="title-fondo">
        <h1>Conoce nuestros servicios</h1>
        <p>Nuestra amplia experiencia en resolver problemas y emergencias nos respalda.</p>
    </div>

    <content class="content-limit">
        <div class="caja-btn-group">
            <a href="{{asset('servicios/soc-noc')}}">
                <img src="img/serv_monitor.webp">
                <p>SOC / NOC</p>
            </a>
            <a href="{{asset('servicios/ciberinteligencia')}}">
                <img src="img/serv_escudo.webp">
                <p>Ciberinteligencia</p>
            </a>
            <a href="{{asset('servicios/consultoria-estrategica')}}">
                <img src="img/serv_global.webp">
                <p>Consultoría <br> Estratégica</p>
            </a>
            <a href="{{asset('servicios/otras-soluciones')}}">
                <img src="img/serv_soluciones.webp">
                <p>Otras <br> soluciones</p>
            </a>
        </div>
        <p class="text-prin-serv" style="margin-top: 60px; font-size: 18px;">
            Debido a la creciente incidencia de robo de información y demás ciberataques, las compañías intentan estar
            preparadas para hacer frente y disminuir los riegos a los que se exponen diariamente. Conoce que servicios
            podemos ofrecerle a tu organización para proteger su información.
        </p>
    </content>
</div>

@endsection
