@extends('layouts.site')

@section('titulo', 'Soluciones de ciberseguridad a tu medida')

@section('metaDesc',
    'Descubre cómo nuestras soluciones de ciberseguridad protegen tu organización adaptándose a las
    necesidades del sector.')

@section('body', 'soluciones-body')

@section('head')
    <style>
        .title-fondo::before {
            background-image: url('{{ asset('img/portadas/portada_soluciones.webp') }}');
        }
    </style>
@endsection

@section('content')
    <div>
        <div class="title-fondo">
            <h1 class="title-main">Soluciones</h1>
            <p>
                Debido a la creciente incidencia de robo de información y demás ciberataques, las compañías intentan
                estar preparadas para hacer frente y disminuir los riegos a los que se exponen diariamente.
            </p>
        </div>

        <content class="content-limit">
            <div class="caja-soluciones">
                <div id="salud" class="solucion">
                    <img src="{{ asset('img/sol-salud.webp') }}" class="img-solucion" title="Solución SALUD"
                        alt="Solución SALUD">
                    <p>
                        Los sistemas de salud están redefiniendo la forma en cómo se realiza la atención médica,
                        incrementando el uso de la medicina virtual y promoviendo alianzas entre distintos jugadores
                        tecnológicos para tender de manera integral a sus pacientes. Nuestra oferta de servicios está
                        diseñada para permitir este tipo de transformación digital de forma segura.
                    </p>
                </div>
                <div id="financiera" class="solucion">
                    <img src="{{ asset('img/sol-financiera.webp') }}" class="img-solucion" title="Solución FINANCIERA"
                        alt="Solución FINANCIERA">
                    <p>
                        Nos adaptamos a la constante evolución de las exigencias de los clientes que buscan servicios
                        financieros más seguros y personalizados, tanto de forma física como virtual y móvil.
                    </p>
                </div>
                <div id="manofactura" class="solucion">
                    <img src="{{ asset('img/sol-manufactura.webp') }}" class="img-solucion" title="Solución MANOFACTURA"
                        alt="Solución MANOFACTURA">
                    <p>
                        La manufactura está en un proceso de transformación constante. Aprovechamos esta nueva ventana
                        de oportunidades y retos que ponen a prueba la capacidad de las empresas de enfrentarse a un
                        mundo digital, tecnológicamente conectado e inseguro.
                    </p>
                </div>
                <div id="energia" class="solucion">
                    <img src="{{ asset('img/sol-energia.webp') }}" class="img-solucion"
                        title="Solución ENERGÉTICA Y RECURSOS" alt="Solución ENERGÉTICA Y RECURSOS">
                    <p>
                        En un mundo en constante cambio, las compañías energéticas y de recursos enfrentan retos
                        tecnológicos importantes. Por esta razón implementamos estrategias eficaces a lo largo de la
                        cadena de valor de petróleo y gas, electricidad, agua y minería con el objetivo de proteger sus
                        operaciones.
                    </p>
                </div>
                <div id="agro" class="solucion">
                    <img src="{{ asset('img/sol-agro.webp') }}" class="img-solucion" title="Solución AGROINDUSTRIAL"
                        alt="Solución AGROINDUSTRIAL">
                    <p>
                        El uso de nuevas tecnologías con el objetivo de mejorar el rendimiento, la eficacia y la
                        rentabilidad de los productos agroindustriales no está exenta de los riesgos informáticos. Por
                        esta razón, preparamos una oferta de servicios especializada en su prevención, detección y
                        mitigación.
                    </p>
                </div>
                <div id="academia" class="solucion">
                    <img src="{{ asset('img/sol-academia.webp') }}" class="img-solucion" title="Solución ACADEMICA"
                        alt="Solución ACADEMICA">
                    <p>
                        Las organizaciones educativas están redefiniendo la forma en cómo se gestiona y lleva a cabo la
                        docencia. Nuestra oferta de servicios está diseñada para permitir que este tipo de
                        transformación digital se implemente de forma segura.
                    </p>
                </div>
            </div>
        </content>

    </div>

@endsection
