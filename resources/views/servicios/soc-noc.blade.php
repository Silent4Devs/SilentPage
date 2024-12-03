@extends('layouts.site')

@section('titulo', __('soc-noc.title'))

@section('metaDesc', __('soc-noc.meta_desc'))

@section('body', 'serv-inter-body')

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
            <img src="{{ asset('img/serv_monitor.webp') }}" height="70px" style="filter: brightness(10);" alt="Monitoreo"
                title="Monitoreo">
            <h1 class="title-main">{{__('soc-noc.header_title')}}</h1>
            <p style="text-align:center;">
                {{__('soc-noc.header_desc')}}
            </p>
        </div>

        <content class="content-limit">
            <div class="caja-serv-inter">
                <div class="menu-serv-inter">
                    <div class="caja-menu-serv">
                        <span class="title-terd"> {{__('soc-noc.title_second')}}</span>
                        @include('servicios.menu-servicios')
                    </div>
                </div>
                <div class="main-serv-inter">
                    <span class="title-main title-first-serv">{{__('soc-noc.title_serv')}}</span>
                    <p style="margin-top: 50px;">
                        {{__('soc-noc.desc_serv')}}
                    </p>
                    <p>
                    </p>
                    <ul>
                        <li> {{__('soc-noc.list_serv.item1')}} </li>
                        <li> {{__('soc-noc.list_serv.item2')}} </li>
                        <li> {{__('soc-noc.list_serv.item3')}} </li>
                        <li> {{__('soc-noc.list_serv.item4')}}</li>
                    </ul>

                    <div class="img-serv-inter">
                        <img src="{{ asset('img/soc_noc.webp') }}" width="80%" style="margin: 50px 10%;" title="Soc Noc"
                            alt="Soc Noc">
                    </div>

                    <span class="title-main title-first-serv">{{__('soc-noc.title_secound_serv')}}</span>
                    <p>
                        {{__('soc-noc.desc_secound_serv')}}
                    </p>

                    <ul>
                        <li> {{__('soc-noc.list_secound_serv.item1')}} </li>
                        <li> {{__('soc-noc.list_secound_serv.item2')}} </li>
                        <li> {{__('soc-noc.list_secound_serv.item3')}} </li>
                        <li> {{__('soc-noc.list_secound_serv.item4')}} </li>
                        <li> {{__('soc-noc.list_secound_serv.item5')}}</li>
                    </ul>

                    <span class="title-main title-first-serv" style="margin-top: 50px;">{{__('soc-noc.title_3_serv')}}</span>

                    <p>
                        {{__('soc-noc.desc_3_serv.desc1')}} <br><br>
                        {{__('soc-noc.desc_3_serv.desc2')}} <br> <br>
                        {{__('soc-noc.desc_3_serv.desc3')}} <br> <br>
                        {{__('soc-noc.desc_3_serv.desc4')}} <br> <br>
                        {{__('soc-noc.desc_3_serv.desc5')}}
                    </p>

                    <a href="{{ route('contacto') }}" class="btn-contact"
                        style="margin: auto; margin-top: 100px; transform: scale(1.3);">{{__('soc-noc.contac')}}</a>
                </div>
            </div>
        </content>
    </div>

@endsection
