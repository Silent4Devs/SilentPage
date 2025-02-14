<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>@yield('titulo', 'Aliados de tu Ciberseguridad | Servicios para tu empresa')</title>

<meta name="description" content="@yield('metaDesc', 'Protege tu organización con servicios a la medida: Centro de Operaciones de Seguridad, Pentesting, ISO 27001:2022 y mucho más. Contáctanos.')">
<meta name="keywords" content="@yield('keywords', 'Keyword, ciberseguridad, seguridad de información, informacion de la seguridad, seguridad perimetral, ciberinteligencia, seguridad en la informacion, la ciberseguridad, empresas de ciberseguridad, ciberseguridad empresas, empresa de ciberseguridad, servicios de seguridad informática, lider en ciberseguridad, Empresas de seguridad informática, Seguridad de la información, Seguridad informática, Seguridad en redes, Seguridad perimetral, Programa para bloquear páginas, Firewall, Internet Security, Pentesting, Análisis de vulnerabilidades, monitoreo de redes, analisis de riesgo de una empresa, certificación iso 27001, DLP, firewalls, SIEM, analisis de riesgos de seguridad, iso seguridad de la información, analisis de riesgo, normatividades iso, iso 27001, iso 27001:2022, Continuidad de Negocio. SPEI, SPID')">
<!-- Facebook Meta Tags -->

{{-- canonical --}}
<link rel="canonical" href="{{ url()->current() }}">

<meta property="og:url" content="https://silent4business.com/">

<meta property="og:type" content="website">

<meta property="og:title" content="@yield('ogTitle', 'Aliados de tu Ciberseguridad | Servicios para tu empresa')">

<meta property="og:description" content="@yield('metaDesc', 'Protege tu organización con servicios a la medida: Centro de Operaciones de Seguridad, Pentesting, ISO 27001:2022 y mucho más. Contáctanos.') Descripción: OG">

<meta property=" og:image" content="https://www.silent4business.com/img/logo_silent.webp">

<!-- Twitter Meta Tags -->
<meta name="twitter:card" content="summary_large_image">

<meta property="twitter:domain" content="silent4business.com">

<meta property="twitter:url" content="https://silent4business.com/">

<meta name="twitter:title" content="@yield('titulo', 'Aliados de tu Ciberseguridad | Servicios para tu empresa')">

<meta name="twitter:description" content="@yield('metaDesc', 'Protege tu organización con servicios a la medida: Centro de Operaciones de Seguridad, Pentesting, ISO 27001:2022 y mucho más. Contáctanos.') Descripción: twitter">

<meta name="twitter:image" content="https://silent4business.com/img/logo_silent.webp">
<!-- favicon -->
<link rel="shortcut icon" href="{{ asset('img/logo_silent.webp') }}" type="image/png" />

<!-- css inerno -->
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}?v=1.2.1">

<!-- font awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
<link
    href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp"
    rel="stylesheet">
<!-- google material simbol -->
<link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,200,0,0" />

<!-- Accessibility Code for "silent4business.com" -->
<script src="{{ asset('js/head/accesibilidad.js') }}"></script>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-5R11XHGHKR"></script>
<script src="{{ asset('js/head/google_manager.js') }}"></script>
<!-- End Google Tag Manager -->

<!-- Hotjar Tracking Code for https://silent4business.com/ -->
<script src="{{ asset('js/head/hotjar.js') }}"></script>

<meta name="csrf-token" content="{{ csrf_token() }}">

@yield('head')
