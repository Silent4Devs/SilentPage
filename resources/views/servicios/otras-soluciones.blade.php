@extends('layouts.site')

@section('content')

@section('titulo', 'Aliados de tu Ciberseguridad | Servicios para tu empresa')

@section('body', 'serv-inter-body')

<style>
    .title-fondo::before{
        background-image: url('../img/portadas/portada_servicios_inter.webp');
    }
</style>

<div>
    <div class="title-fondo">
        <img src="{{asset('img/serv_soluciones.webp')}}" height="70px" style="filter: brightness(10);">
        <h1>Cyber Threat Intelligence (CTI)</h1>
        <p style="text-align:center;">
            Identifica a tiempo las amenazas a las que se encuentra expuesta tu organización
        </p>
    </div>

    <content class="content-limit">
        <div class="caja-serv-inter">
            <div class="menu-serv-inter">
                <div class="caja-menu-serv">
                    <h3> Servicios</h3>
                    <ul>
                        <li><a href="{{asset('servicios/soc-noc')}}">SOC / NOC</a></li>
                        <li><a href="{{asset('servicios/ciberinteligencia')}}">Ciberinteligencia</a></li>
                        <li><a href="{{asset('servicios/consultoria-estrategica')}}">Consultoría Estratégica</a></li>
                        <li><a href="{{asset('servicios/otras-soluciones')}}" class="active">Cyber Threat Intelligence (CTI)</a></li>
                    </ul>
                </div>
            </div>
            <div class="main-serv-inter">
                <h1 class="title-first-serv">Es momento de ser vigilantes</h1>
                <p style="margin-top: 50px;">
                    Nuestro servicio CTI te brindará la información de valor con la que podrás tomar decisiones críticas en beneficio de la seguridad de tu organización.
                </p>

                <h3 style="margin-top: 50px; text-align: center;">¿Qué incluye?</h3>

                <div class="img-serv-inter">
                    <img src="{{asset('img/no_protected.webp')}}" width="60%" style="margin: 10px 20%;">
                </div>

                <a href="contacto" class="btn-contact" style="margin: auto; margin-top: 100px; transform: scale(1.3);">Contáctanos</a>
            </div>
        </div>
    </content>
</div>

@endsection
