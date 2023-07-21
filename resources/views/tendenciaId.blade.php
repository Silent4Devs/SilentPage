@extends('layouts.site')

@section('content')

@section('titulo', 'Aliados de tu Ciberseguridad | Servicios para tu empresa')

<div id="inicio" class="medios-body">
    <div>
        <content class="content-limit">
            <h3>{{ $post->post_title }}</h3>
            <div class="noticias no-visible">
                <div class="column-noticias caja-noticias-med">
                    <div class="card noticiaid">
                        <img src={{$post->thumbnail}}>
                        <div class="info-noticia">
                            <small>{{$post->post_date}}</small><br><br>
                            <h3>{!! $post->post_content !!}</h3>
                        </div>
                    </div>
                </div>
                <br style="clear: both;">
            </div>
        </content>
        <div class="modales-tendencias"></div>
    </div>
</div>

@endsection
