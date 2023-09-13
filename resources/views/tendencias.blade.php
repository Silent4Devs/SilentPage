@extends('layouts.site')

@section('content')

@section('titulo', 'Aliados de tu Ciberseguridad | Servicios para tu empresa')

@section('body', 'medios-body')

<style>
    .title-fondo::before {
        background-image: url('img/portadas/portada_servicios_inter.webp');
    }
</style>

<div>
    <div class="title-fondo">
        <h1 class="title-main">Tendencias</h1>
        <p>
            El blog de S4B donde encontrarás la información más relevante en ciberseguridad
        </p>
    </div>


    <content class="content-limit">

        <span class="title-second">Tendencias</span>

        <div class="noticias no-visible">
            <div class="column-noticias caja-noticias-med">
                @foreach ($posts as $post)
                    <div class="card noticia">
                        @isset($post->thumbnail)
                        <img src={{ $post->thumbnail }}>
                        @else
                        <img src="{{asset('img/tendencias/ten-med-sin-info.png')}}">
                        @endisset

                        <div class="info-noticia">
                            <small>{{ Carbon\Carbon::parse($post->post_date)->format('d-m-Y') }}</small><br><br>
                            <span class="title-terd">{{ $post->post_title }}</span><br><br>
                            <span>
                                <a href={{ url('/tendencias/' . $post->ID) }}>Leer más</a>
                            </span>
                        </div>
                    </div>
                @endforeach
            </div>

            <br style="clear: both;">

            <div class="column-posts">
                <span class="title-terd" style="color:#2567AE;">Últimos posts</span>
                <div class="list-noticias-med">
                    @foreach ($postsRecientes as $postReciente)
                        <div class="caja-flex">
                            <div class="img-posts">
                                @isset($post->thumbnail)
                                <img src={{ $post->thumbnail }}>
                                @else
                                <img src="{{asset('img/tendencias/ten-med-sin-info.png')}}">
                                @endisset
                            </div>
                            <div>
                                <small>{{ Carbon\Carbon::parse($post->post_date)->format('d-m-Y') }}</small><br>
                                <span class="title-for">{{ $postReciente->post_title }}...</span>
                                <span>
                                    <a href={{ url('/tendencias/' . $postReciente->ID) }}>Leer más</a>
                                </span>
                            </div>
                        </div>
                        <hr>
                    @endforeach
                </div>
            </div>
        </div>
    </content>

    <div class="modales-tendencias"></div>
</div>

@endsection
