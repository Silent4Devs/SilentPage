@extends('layouts.site')

@section('content')

@section('titulo', 'Aliados de tu Ciberseguridad | Servicios para tu empresa')

@section('body', 'medios-body')

<div class="wrapper-space">
    <content class="content-limit">
        <div class="card" style="margin-top: 70px;">
            <div>
                <h1>{{ $post->post_title }}</h1>
                {!! $post->post_content !!}
            </div>
        </div>
    </content>
</div>

@endsection
