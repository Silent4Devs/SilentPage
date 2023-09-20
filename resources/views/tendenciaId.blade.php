@extends('layouts.site')

@section('titulo', 'Tendencia en Ciberseguridad')

@section('metaDesc',
    'Explora esta tendencia en ciberseguridad y tecnología que está moldeando el futuro.
    Mantente al tanto de las novedades de la mano de nuestros expertos.')

@section('body', 'medios-body')

@section('content')

    <div class="wrapper-space">
        <content class="content-limit">
            <div class="card" style="margin-top: 70px;">
                <div>
                    <h1 class="title-main">{{ $post->post_title }}</h1>
                    {!! $post->post_content !!}
                </div>
            </div>
            <div style="margin-top: 15px">
                <a class="btn-contact" href="{{ url('/tendencias') }}">Regresar</a>
            </div>
        </content>
    </div>

@endsection
