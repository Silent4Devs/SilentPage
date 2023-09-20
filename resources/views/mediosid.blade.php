@extends('layouts.site')

@section('titulo', 'S4B en medios ')

@section('metaDesc',
    'Descubre cómo Silent4Business brilla en los medios, digital y tradicionalmente. Nuestra huella en el
    mundo de la seguridad cibernética.')

@section('body', 'medios-body')

@section('content')

    <div class="wrapper-space">
        <content class="content-limit">
            <div class="card" style="margin-top: 70px;">
                <div>
                    <span class="title-main">{{ $post->post_title }}</span>
                    {!! $post->post_content !!}
                </div>
            </div>
            <div style="margin-top: 15px">
                <a class="btn-contact" href="{{ url('/medios') }}">Regresar</a>
            </div>
        </content>
    </div>

@endsection
