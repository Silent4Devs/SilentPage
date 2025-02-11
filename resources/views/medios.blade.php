@extends('layouts.site')

@section('titulo', __('medios.title'))

@section('metaDesc', __('medios.meta_desc'))

@section('body', 'medios-body')

@section('head')
    <style>
        .title-fondo::before {
            background-image: url('{{ asset('img/portadas/portada_medios.webp') }}');
        }
    </style>
@endsection

@section('content')
    <div>
        <div class="title-fondo">
            <h1 class="title-main">{{__('medios.header_title')}}</h1>
            <p>{{__('medios.header_desc')}}</p>
        </div>

        <span class="title-second">{{__('medios.title_second')}}</span>

        <content class="content-limit caja-carrusel">
            <div class="arrow-carrusel-izq" onclick="document.querySelector('.carrusel-infinito').scrollBy({left: -400});">
                <i class="material-symbols-outlined">arrow_back_ios</i>
            </div>

            <div class="carrusel-infinito">
                <div class="item-carrusel">
                    <iframe src="https://www.youtube.com/embed/PrzLJe_McxQ" title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
                    <div class="info-carrusel">
                        <span class="title-six">{{__('medios.news.new1.title')}} <small> {{__('medios.news.new1.title_2')}} </small></span>
                        <p>
                            {{__('medios.news.new1.desc')}}
                        </p>
                    </div>
                </div>

                <div class="item-carrusel">
                    <iframe src="https://www.youtube.com/embed/FUqSChUdLVk" title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
                    <div class="info-carrusel">
                        <span class="title-six">{{__('medios.news.new2.title')}} <small> </small></span>
                        <p>
                            {{__('medios.news.new2.desc')}}
                        </p>
                    </div>
                </div>

                <div class="item-carrusel">
                    <iframe src="https://www.youtube.com/embed/3PZn_41cD24" title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
                    <div class="info-carrusel">
                        <span class="title-six">{{__('medios.news.new3.title')}} <small> </small></span>
                        <p>
                            {{__('medios.news.new3.desc')}}
                        </p>
                    </div>
                </div>

                <div class="item-carrusel">
                    <iframe src="https://www.youtube.com/embed/4URF3t6a1Po" title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
                    <div class="info-carrusel">
                        <span class="title-six"> {{__('medios.news.new4.title')}} <small>
                            </small></span>
                        <p>
                            {{__('medios.news.new4.desc')}}
                        </p>
                    </div>
                </div>
            </div>

            <div class="arrow-carrusel-der" onclick="document.querySelector('.carrusel-infinito').scrollBy({left: 400});">
                <i class="material-symbols-outlined">arrow_forward_ios</i>
            </div>
        </content>

        <content class="content-limit">
            <hr style="margin-top:50px;">
            <span class="title-second">{{__('medios.notes')}}</span>
            <div class="noticias no-visible">
                <div class="column-noticias caja-noticias-med">
                    @foreach ($posts as $post)
                        <div class="card noticia">
                            <img src="{{ $post->thumbnail }}" alt="{{ $post->post_title }}" title="{{ $post->post_title }}">
                            <div class="info-noticia">
                                <small>{{ Carbon\Carbon::parse($post->post_date)->format('d-m-Y') }}</small><br><br>
                                <span class="title-terd">{{ $post->post_title }}</span><br><br>
                                <span>
                                    <a  href="{{ $post->guid }}" target="_blanck">{{__('medios.more_info')}}</a>
                                </span>
                            </div>
                        </div>
                    @endforeach
                </div>
                <br style="clear: both;">
                <div class="column-posts">
                    <span class="title-terd" style="color:#2567AE;">{{__('medios.last_post')}}</span>
                    <div class="list-noticias-med">
                        @foreach ($postsRecientes as $postReciente)
                            <div class="caja-flex">
                                <div class="img-posts">
                                    <img src="{{ $postReciente->thumbnail }}" alt="{{ $postReciente->post_title }}"
                                        title="{{ $postReciente->post_title }}">
                                </div>
                                <div>
                                    <small>{{ Carbon\Carbon::parse($post->post_date)->format('d-m-Y') }}</small><br>
                                    <span class="title-for">{{ $postReciente->post_title }}...</span>
                                    <a  href="{{ $postReciente->guid }}" target="_blanck">{{__('medios.more_info')}}</a>
                                </div>
                            </div>
                            <hr>
                        @endforeach
                    </div>
                </div>
            </div>
        </content>
    </div>

    @section('scripts')

    @endsection
@endsection
