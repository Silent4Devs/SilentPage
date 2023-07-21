@extends('layouts.site')

@section('content')

@section('titulo', 'Aliados de tu Ciberseguridad | Servicios para tu empresa')

<style>
    .title-fondo::before {
        background-image: url('img/portadas/portada_servicios_inter.webp');
    }
</style>

<div id="inicio" class="medios-body">
    <div>
        <div class="title-fondo">
            <h1>Tendencias</h1>
            <p>
                El blog de S4B donde encontrarás la información más relevante en ciberseguridad
            </p>
        </div>


        <content class="content-limit">

            <h2>Tendencias</h2>

            <div class="noticias no-visible">
                <div class="column-noticias caja-noticias-med">
                    @foreach ($posts as $post)
                        <div class="card noticia">
                                <img src={{$post->thumbnail}}>
                            <div class="info-noticia">
                                <small>{{$post->post_date}}</small><br><br>
                                <h3>{{ $post->post_title }}</h3><br><br>
                                <a href={{url("/tendencias/".$post->ID)}}>Leer más</a>
                            </div>
                        </div>
                    @endforeach
                </div>

                <br style="clear: both;">

                <div class="column-posts">
                    <h3 style="color:#2567AE;">Últimos posts</h3>
                    <div class="list-noticias-med">
                        @foreach ($postsRecientes as $postReciente)
                        <div class="caja-flex">
                            <div class="img-posts">
                                <img src={{$postReciente->thumbnail}}>
                            </div>
                            <div>
                                <small>{{$postReciente->post_date}}</small><br>
                                <h4>{{$postReciente->post_title}}...</h4>
                                <a href={{url("/tendencias/".$postReciente->ID)}}>Leer más</a>
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
</div>

@endsection


