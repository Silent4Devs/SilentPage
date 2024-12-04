@extends('layouts.site')

@section('titulo', __('tendencias.title'))

@section('metaDesc', __('tendencias.meta_desc'))

@section('body', 'medios-body')

@section('head')
    <style>
        .title-fondo::before {
            background-image: url('{{ asset('img/portadas/portada_servicios_inter.webp') }}');
        }
    </style>
@endsection

@section('content')
    <div>
        <div class="title-fondo">
            <h1 class="title-main">{{ __('tendencias.header_title') }}</h1>
            <p>
                {{ __('tendencias.header_desc') }}
            </p>
        </div>


        <content class="content-limit">

            <span class="title-second">{{__('tendencias.title_second')}}</span>

            <div class="noticias --no-visible">
                <div class="column-noticias caja-noticias-med">
                    @foreach ($posts as $post)
                        <div class="card noticia">
                            <img src={{ asset($post->thumbnail) }}>
                            <div class="info-noticia">
                                <small>{{ Carbon\Carbon::parse($post->post_date)->format('d-m-Y') }}</small><br><br>
                                <span class="title-terd">{{ $post->post_title }}</span><br><br>
                                <span>
                                    <a href={{ url('/tendencias/' . $post->ID) }}>{{__('tendencias.more_info')}}</a>
                                </span>
                            </div>
                        </div>
                    @endforeach
                </div>

                <br style="clear: both;">

                <div class="column-posts">
                    <span class="title-terd" style="color:#2567AE;">{{__('tendencias.last_post')}}</span>
                    <div class="list-noticias-med">
                        @foreach ($postsRecientes as $postReciente)
                            <div class="caja-flex">
                                <div class="img-posts">
                                    <img src={{ asset($postReciente->thumbnail) }}>
                                </div>
                                <div>
                                    <small>{{ Carbon\Carbon::parse($post->post_date)->format('d-m-Y') }}</small><br>
                                    <span class="title-for">{{ $postReciente->post_title }}...</span>
                                    <span>
                                        <a href={{ url('/tendencias/' . $postReciente->ID) }}>{{__('tendencias.more_info')}}</a>
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
