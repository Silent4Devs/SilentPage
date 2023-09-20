<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="@yield('metaDesc', 'Protege tu organización con servicios a la medida: Centro de Operaciones de Seguridad, Pentesting, ISO 27001:2022 y mucho más. Contáctanos.')">
<meta name="keywords"
    content="ciberseguridad, empresa, empresas, ciberseguridad empresas, empresas ciberseguridad, empresa de ciberseguridad, servicio, servicios, servicios de ciberseguridad, servicio ciberseguridad, ciberseguridad servicios, información, Seguridad, seguridad de la información, politicas de seguridad de la informacion, seguridad de la información y ciberseguridad, Pentesting, Análisis de vulnerabilidades, monitoreo de redes, analisis de riesgo de una empresa, certificación iso 27001, analisis de riesgos de seguridad, iso seguridad de la información, analisis de riesgo, normatividades iso, iso 27001, Continuidad de Negocio">
<!-- Facebook Meta Tags -->

<meta property="og:url" content="https://silent4business.com/">

<meta property="og:type" content="website">

<meta property="og:title" content="@yield('titulo', 'Aliados de tu Ciberseguridad | Servicios para tu empresa')">

<meta property="og:description" content="@yield('metaDesc', 'Protege tu organización con servicios a la medida: Centro de Operaciones de Seguridad, Pentesting, ISO 27001:2022 y mucho más. Contáctanos.') Descripción: OG”

<meta property=" og:image"
    content="https://www.silent4business.com/img/logo_silent.webp">

<!-- Twitter Meta Tags -->
<meta name="twitter:card" content="summary_large_image">

<meta property="twitter:domain" content="silent4business.com">

<meta property="twitter:url" content="https://silent4business.com/">

<meta name="twitter:title" content="@yield('titulo', 'Aliados de tu Ciberseguridad | Servicios para tu empresa')">

<meta name="twitter:description" content="@yield('metaDesc', 'Protege tu organización con servicios a la medida: Centro de Operaciones de Seguridad, Pentesting, ISO 27001:2022 y mucho más. Contáctanos.') Descripción: twitter">

<meta name="twitter:image" content="https://www.silent4business.com/img/logo_silent.webp">
<!-- favicon -->
<link rel="shortcut icon" href="{{ asset('img/logo_silent.webp') }}" type="image/png" />

<!-- css inerno -->
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">

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
<script>
    window.interdeal = {
        "sitekey": "2722302a642853e246a74ba1264eb045",
        "Position": "Left",
        "Menulang": "ES-MX",
        "domains": {
            "js": "https://cdn.equalweb.com/",
            "acc": "https://access.equalweb.com/"
        },
        "btnStyle": {
            "vPosition": ["80%", null],
            "scale": ["0.8", "0.8"],
            "icon": {
                "type": 7,
                "shape": "semicircle",
                "outline": false
            }
        }
    };
    (function(doc, head, body) {
        var coreCall = doc.createElement('script');
        coreCall.src = interdeal.domains.js + 'core/4.5.8/accessibility.js';
        coreCall.defer = true;
        coreCall.integrity =
            'sha512-edRZXolhkUWHM/uu0oiEu0tD39SPOhnl5a2KM+62YWIfb4M5oSMjvyl2NPXtGq8McfJl88bKtaxljjViGqQXtA==';
        coreCall.crossOrigin = 'anonymous';
        coreCall.setAttribute('data-cfasync', true);
        body ? body.appendChild(coreCall) : head.appendChild(coreCall);
    })(document, document.head, document.body);
</script>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-5R11XHGHKR"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'G-5R11XHGHKR');
</script>

<!-- Google Tag Manager -->
<script>
    (function(w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
            'gtm.start': new Date().getTime(),
            event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s),
            dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src =
            'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-KS5GLC8');
</script><!-- End Google Tag Manager -->

<!-- Hotjar Tracking Code for https://silent4business.com/ -->
<script>
    (function(h, o, t, j, a, r) {
        h.hj = h.hj || function() {
            (h.hj.q = h.hj.q || []).push(arguments)
        };
        h._hjSettings = {
            hjid: 3251092,
            hjsv: 6
        };
        a = o.getElementsByTagName('head')[0];
        r = o.createElement('script');
        r.async = 1;
        r.src = t + h._hjSettings.hjid + j + h._hjSettings.hjsv;
        a.appendChild(r);
    })(window, document, 'https://static.hotjar.com/c/hotjar-', '.js?sv=');
</script>


<meta name="csrf-token" content="{{ csrf_token() }}">
