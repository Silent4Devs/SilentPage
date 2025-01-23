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

            <div class="noticias no-visible">
                <div id="lista-noticias-medias" class="column-noticias caja-noticias-med">
                    @foreach ($posts as $post)
                        <div class="card noticia">
                            <img src={{ asset($post->thumbnail) }}>
                            <div class="info-noticia">
                                <small>{{ Carbon\Carbon::parse($post->post_date)->format('d-m-Y') }}</small><br><br>
                                <span class="title-terd">{{ $post->post_title }}</span><br><br>
                                <span>
                                    <a  href="{{ $post->guid }}" target="_blanck">{{__('tendencias.more_info')}}</a>
                                </span>
                            </div>
                        </div>
                    @endforeach
                </div>
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
                                        <a href="{{ $postReciente->guid }}" target="_blanck">{{__('tendencias.more_info')}}</a>
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

@section('scripts')
    <script>
        function dividirDivsPorIndice(contenedorId) {
            // Obtener el contenedor principal
            const contenedor = document.getElementById(contenedorId);

            if (!contenedor) {
                console.error('El contenedor no existe.');
                return;
            }

            // Obtener todos los divs hijos del contenedor
            const divs = Array.from(contenedor.children).filter(el => el.tagName === 'DIV');
            console.log(`Total de divs encontrados: ${divs.length}`);

            // Crear los dos nuevos divs
            const divPares = document.createElement('div');
            const divImpares = document.createElement('div');

            divPares.classList.add('div-pares');
            divImpares.classList.add('div-impares');

            // Separar los divs por índice
            divs.forEach((div, index) => {
                if (index % 2 === 0) {
                    divPares.appendChild(div.cloneNode(true)); // Agregar a pares
                } else {
                    divImpares.appendChild(div.cloneNode(true)); // Agregar a impares
                }
            });

            // Limpiar el contenedor principal y agregar los nuevos divs
            contenedor.innerHTML = '';
            contenedor.appendChild(divPares);
            contenedor.appendChild(divImpares);

            console.log('Los divs se han separado correctamente.');
        }
        dividirDivsPorIndice('lista-noticias-medias');
    </script>
@endsection
