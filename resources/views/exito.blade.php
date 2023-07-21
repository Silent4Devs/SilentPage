@extends('layouts.site')

@section('content')

@section('titulo', 'Aliados de tu Ciberseguridad | Servicios para tu empresa')

@section('body', 'body')

<style>
    .title-fondo::before {
        background-image: url('img/portadas/portada_exito.webp');
    }
</style>

<div>
    <div class="title-fondo">
        <h1>Casos de éxito</h1>
        <p>En S4B brindamos las mejores soluciones</p>
    </div>

    <div id="seguridad-medida" class="caso-exito-complete" style="background-color: #F3F5FF; margin-top: 100px;">
        <content class="content-limit">
            <div class="caso-img" style="background-image: url('img/exito_caso_1.webp');"></div>
            <div class="caso-info">
                <h2>Seguridad a la medida</h2>
                <p style="font-size: 24px;">Industria turística</p>
                <p style="margin-top: 20px;">
                    La entrega de nuestros servicios está basada en la
                    <br>
                    comunicación continua.
                </p>
                <p>
                    <a href="img/exitos/Caso de éxito_Seguridad a la medida.pdf" target="_blank"
                        class="btn-tend">Leer más</a>
                </p>
            </div>
        </content>
    </div>

    <div id="cero-extraccion" class="caso-exito-complete no-visible" style="background-color: #f3f3f3;">
        <content class="content-limit">
            <div class="caso-info">
                <h2>Cero extracción</h2>
                <p style="font-size: 24px;">Industria minera</p>
                <p style="margin-top: 20px;">
                    Implementamos alertas de amenazas de una forma más
                    rápida para que su estudio fuera inmediato.
                </p>
                <p>
                    <a href="img/exitos/Caso de éxito_Cero Extracción.pdf" target="_blank" class="btn-tend">Leer
                        más</a>
                </p>
            </div>
            <div class="caso-img"
                style="background-image: url('img/exito_caso_2.webp'); border-radius: 0; border-top-left-radius: 20px; border-bottom-left-radius: 20px; border:none; border-right: 60px solid #B8B8B8;">
            </div>
        </content>
    </div>

    <div id="proteccion-total" class="caso-exito-complete no-visible" style="background-color: #F3F5FF;">
        <content class="content-limit">
            <div class="caso-img" style="background-image: url('img/exito_caso_3.webp');"></div>
            <div class="caso-info">
                <h2>Protección total</h2>
                <p style="font-size: 24px;">SENER</p>
                <p style="margin-top: 20px;">
                    Un proyecto multimarca como este, nos exigió la entrega
                    total de nuestras capacidades.
                </p>
                <p>
                    <a href="img/exitos/Caso de éxito_Protección Total.pdf" target="_blank" class="btn-tend">Leer
                        más</a>
                </p>
            </div>
        </content>
    </div>
</div>

@endsection
