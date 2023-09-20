@extends('layouts.site')

@section('titulo', 'Aliados de tu Ciberseguridad | Servicios para tu empresa')

@section('metaDesc',
    'Descubre cómo Silent4Business brilla en los medios, digital y tradicionalmente. Nuestra huella en
    el mundo de la seguridad cibernética.')

@section('body', 'medios-body')

@section('content')

    <style>
        .title-fondo::before {
            background-image: url('img/portadas/portada_medios.webp');
        }
    </style>

    <div>
        <div class="title-fondo">
            <h1 class="title-main">Nuestra presencia en medios</h1>
            <p>Conoce el mundo Silent4Business</p>
        </div>

        <span class="title-second">Videos recientes</span>

        <content class="content-limit caja-carrusel">
            <div class="arrow-carrusel-izq">
                <i class="material-symbols-outlined">arrow_back_ios</i>
            </div>

            <div class="carrusel-infinito">
                <div class="item-carrusel">
                    <iframe src="https://www.youtube.com/embed/PrzLJe_McxQ" title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
                    <div class="info-carrusel">
                        <span class="title-six">SENER <small> Protección Total </small></span>
                        <p>
                            Breve reseña sobre nuestra labor en la migración tecnológica, así como el análisis,
                            protección, detección y respuesta a amenzas de nuestra entrega de servicios.
                        </p>
                    </div>
                </div>

                <div class="item-carrusel">
                    <iframe src="https://www.youtube.com/embed/FUqSChUdLVk" title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
                    <div class="info-carrusel">
                        <span class="title-six">Caso de éxito Industria Minera <small> </small></span>
                        <p>
                            Acompáñanos a revisar como esta Industria Minera alanzó el éxito en ciberseguridad para
                            su
                            empresa.
                        </p>
                    </div>
                </div>

                <div class="item-carrusel">
                    <iframe src="https://www.youtube.com/embed/3PZn_41cD24" title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
                    <div class="info-carrusel">
                        <span class="title-six">SEGURIDAD A LA MEDIDA <small> </small></span>
                        <p>
                            Gestionamos la Seguridad de la Industria Turística por medio de una estrategia integral
                            multi-marca totalmente personalizada.
                        </p>
                    </div>
                </div>

                <div class="item-carrusel">
                    <iframe src="https://www.youtube.com/embed/4URF3t6a1Po" title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
                    <div class="info-carrusel">
                        <span class="title-six"> El sector de la ciberseguridad y los retos que enfrenta <small>
                            </small></span>
                        <p>
                            El sector de la ciberseguridad y los retos que se enfrentan.
                        </p>
                    </div>
                </div>
            </div>

            <div class="arrow-carrusel-der">
                <i class="material-symbols-outlined">arrow_forward_ios</i>
            </div>
        </content>

        <content class="content-limit">
            <hr style="margin-top:50px;">
            <span class="title-second">Notas importantes de S4B</span>
            <div class="noticias no-visible">
                <div class="column-noticias caja-noticias-med">
                    @foreach ($posts as $post)
                        <div class="card noticia">
                            <img src="{{ $post->thumbnail }}" alt="{{ $post->post_title }}" title="{{ $post->post_title }}">
                            <div class="info-noticia">
                                <small>{{ Carbon\Carbon::parse($post->post_date)->format('d-m-Y') }}</small><br><br>
                                <span class="title-terd">{{ $post->post_title }}</span><br><br>
                                <span>
                                    <a href={{ url('/medios/' . $post->ID) }}>Leer más</a>
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
                                    <img src="{{ $postReciente->thumbnail }}" alt="{{ $postReciente->post_title }}"
                                        title="{{ $postReciente->post_title }}">
                                </div>
                                <div>
                                    <small>{{ Carbon\Carbon::parse($post->post_date)->format('d-m-Y') }}</small><br>
                                    <span class="title-for">{{ $postReciente->post_title }}...</span>
                                    <a href={{ url('/medios/' . $postReciente->ID) }}>Leer más</a>
                                </div>
                            </div>
                            <hr>
                        @endforeach
                    </div>
                </div>
            </div>
        </content>

    </div>

@endsection

@section('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            let rigth_space = 0;
            $('.arrow-carrusel-izq').click(function() {
                if (rigth_space < 0) {
                    rigth_space += 200;
                }
                $('.item-carrusel:first').css('margin-left', rigth_space + 'px');
            });
            $('.arrow-carrusel-der').click(function() {
                console.log($('.item-carrusel').length * 400);
                if (rigth_space >
                    -(($('.item-carrusel').length * 200))) {
                    rigth_space -= 300;
                }
                console.log(rigth_space);
                $('.item-carrusel:first').css('margin-left', rigth_space + 'px');
            });

            // cargar noticias
            const xhr = new XMLHttpRequest();

            function getNoticias() {
                xhr.open('GET', 'complementos/medios/medios.json');
                xhr.send();

                xhr.onreadystatechange = function() {
                    if (this.readyState === 4 && this.status === 200) {
                        const data = JSON.parse(this.responseText);
                        let html_noticia = ``;
                        data.noticias.forEach(element => {
                            html_noticia += `
        <div class="card noticia">
            <img src="img/noticias/${element.imagen}">
            <div class="info-noticia">
                <small>${element.fecha}</small><br><br>
                <span class="title-terd">${element.titulo}</span>
                <p>
                    ${element.descripcion}
                </p>
            </div>
        </div>
        `;
                            document.querySelector('.caja-noticias-med').innerHTML = html_noticia;
                        });

                        let html_noticia_list = ``;
                        data.noticias.forEach(element => {
                            html_noticia_list += `
        <div class="caja-flex">
            <div class="img-posts">
                <img src="img/noticias/${element.imagen}">
            </div>
            <div>
                <small>${element.fecha}</small><br>
                <span class="title-for">${element.descripcion.substring(0, 60,)}...</span>
            </div>
        </div>
        <hr>
        `;
                            document.querySelector('.list-noticias-med').innerHTML = html_noticia_list;
                        });
                    }
                };
            }
            getNoticias();
        });
    </script>
@endsection
