@extends('layouts.site')

@section('content')

@section('titulo', 'Aliados de tu Ciberseguridad | Servicios para tu empresa')

@section('body', 'body')

<div id="video-inicio" class="caja-video-fondo">
    <video autoplay muted loop>
        <source src="img/fondo.webm" type="video/mp4">
        <img src="img/fondo_img.webp" width="100%">
    </video>
</div>

<section id="servicios">
    <div class="nuestros-servicios">
        <content class="content-limit">
            <div class="caja-flex no-visible caja-servicios-inicio" style="justify-content: space-between;">
                <div id="serv-original" class="caja-servicios-text">
                    <h1 class="title-servicios">Conoce Nuestros <br> Servicios</h1>
                    <p align="justify">
                        Debido a la creciente incidencia de robo de información, interrupción de operaciones, cifrado de base de datos, suplantación de identidad y demás ciberataques, las empresas intentan estar preparadas para hacer frente y mitigar los riegos informáticos a los que están expuestos diariamente.
                    </p>
                    <p>
                        Nuestro portafolio de servicios de ciberseguridad está diseñado para ser tu aliado en alcanzar la integridad, la confidencialidad y disponibilidad de la información dentro de tu empresa.
                    </p>
                </div>
                <div id="soc-noc" class="caja-servicios-text d-none">
                    <h1 class="title-servicios">SOC/NOC (Centro de Operaciones de Ciberseguridad) </h1>
                    <p>
                        Nuestro Centro de Operaciones de Ciberseguridad de última generación (SOC/NOC) está conformado por profesionistas capacitados y especializados en el uso de soluciones tecnológicas de vanguardia, enfocadas en brindarte servicios de seguridad integral, así como monitoreo continuo de la disponibilidad de las redes y operaciones de tu empresa.
                    </p>
                    <div>
                        <a href="{{asset('servicios/soc-noc')}}" class="btn-leer-mas">Leer más</a>
                    </div>

                    <button onclick="servicio('serv-original')" class="btn-close">
                        <i class="material-symbols-outlined">close</i>
                    </button>
                </div>
                <div id="ciberinteligencia" class="caja-servicios-text d-none">
                    <h1 class="title-servicios">Ciberinteligencia</h1>
                    <p align="justify">
                        El servicio de ciberinteligencia engloba estrategias proactivas y cognitivas de prevención, detección e investigación de riesgos de seguridad, vigilancia del ciberespacio e incorporación de herramientas de inteligencia artificial y machine learning.
                    <ol>
                        <li>Pentesting y Análisis de vulnerabilidades</li>
                        <li>Servicios de Ingeniería Social</li>
                        <li>Análisis forense</li>
                    </ol>
                    </p>
                    <div>
                        <a href="{{asset('servicios/ciberinteligencia')}}" class="btn-leer-mas">Leer más</a>
                    </div>
                    <button onclick="servicio('serv-original')" class="btn-close">
                        <i class="material-symbols-outlined">close</i>
                    </button>
                </div>
                <div id="consultoria" class="caja-servicios-text d-none">
                    <h1 class="title-servicios">Consultoría Estratégica</h1>
                    <p>
                        Te guiamos en el cumplimiento legal y regulatorio del ciclo de vida de los activos de información de tu empresa basándonos en la normatividad nacional e internacional.
                    <ol>
                        <li>Actualización a la nueva versión 2022 de la norma ISO 27001</li>
                        <li>Análisis de riesgos de seguridad de la información. </li>
                        <li>Plan de continuidad de negocio (BCP, DRP Y BIA). </li>
                    </ol>
                    </p>
                    <div>
                        <a href="{{asset('servicios/consultoria-estrategica')}}" class="btn-leer-mas">Leer más</a>
                    </div>
                    <button onclick="servicio('serv-original')" class="btn-close">
                        <i class="material-symbols-outlined">close</i>
                    </button>
                </div>
                <div id="otra-solucion" class="caja-servicios-text d-none">
                    <h1 class="title-servicios">Cyber Threat Intelligence (CTI)</h1>
                    <p>
                        Nuestro servicio CTI te permite identificar proactivamente las amenazas a las que se encuentra expuesta tu organización en el ciberespacio, como:
                        <ol>
                            <li>Suplantación de marca.</li>
                            <li>Fuga de información.</li>
                            <li>Credenciales comprometidas.</li>
                        </ol>
                    </p>
                    <div>
                        <a href="{{asset('servicios/otras-soluciones')}}" class="btn-leer-mas ">Leer más</a>
                    </div>
                    <button onclick="servicio('serv-original')" class="btn-close">
                        <i class="material-symbols-outlined">close</i>
                    </button>
                </div>
                <div class="caja-btn-servicios caja-btn-group no-visible">
                    <button onclick="servicio('soc-noc')">
                        <img src="img/serv_monitor.webp">
                        <p>SOC / NOC</p>
                    </button>
                    <button onclick="servicio('ciberinteligencia')">
                        <img src="img/serv_escudo.webp">
                        <p>Ciberinteligencia</p>
                    </button>
                    <button onclick="servicio('consultoria')">
                        <img src="img/serv_global.webp">
                        <p>Consultoría <br> Estratégica</p>
                    </button>
                    <button onclick="servicio('otra-solucion')">
                        <img src="img/serv_soluciones.webp">
                        <p>Cyber Threat <br> Intelligence (CTI)</p>
                    </button>
                </div>
            </div>
        </content>
    </div>
</section>

<section id="valores">
    <div class="caja-valores">
        <div class="vision">
            <div class="vision-1">

                <div class="vision-text">
                    <h1>¿Cómo se puede enriquecer nuestro entorno?</h1>
                    <h4>Nuestra visión</h4>
                    <p>
                        A través de un equipo especializado, ser un referente confiable en materia de investigación,
                        asistencia y difusión en actividades de atención y respuesta a incidentes de ciberseguridad.
                    </p>
                </div>
                <div class="img-vision"></div>
            </div>
            <div class="vision-2">

                <div class="vision-text">
                    <h1>Nuestra filosofía</h1>
                    <h4></h4>
                    <p>
                        Está basada en la configuración del futuro, donde las organizaciones cuenten con la tecnología
                        que les permita alcanzar sus objetivos y desarrollar todo su potencial en un ambiente
                        informático seguro, integro y confidencial.
                    </p>
                </div>
                <div class="img-vision"></div>
            </div>
        </div>
        <div class="mision">
            <div class="mision-1">
                <div class="mision-text">
                    <h1>Lo solucionamos por ti</h1>
                    <h4>Nuestra misión</h4>
                    <p>
                        Proveer soluciones integrales que salvaguarden la seguridad de la información a través de la
                        aplicación de estándares normativos y tecnológicos de vanguardia y recursos altamente
                        especializados, contribuyendo así a los objetivos y estrategias de nuestros clientes globales.
                    </p>
                </div>
                <div class="img-mision"></div>
            </div>
            <div class="mision-2">
                <div class="mision-text">
                    <h1>Mejora continua</h1>
                    <h4></h4>
                    <p>
                        Nuestra entrega de servicios está sujeta a un proceso de mejora continua, totalmente adecuado a
                        las necesidades de nuestros clientes y enfocado a impactar positivamente su experiencia.
                    </p>
                </div>
                <div class="img-mision"></div>
            </div>
        </div>
    </div>
</section>

<section class="d-none">
    <div class="nivel-seguridad no-visible">
        <img src="img/escudo.webp">
        <div>
            <h1>¿Conoces tu nivel de seguridad?</h1>
            <p class="ns-p-1" style="margin-top: 13px; font-size: 24px;">
                <strong>Identifica que tan expuesto estás a ataques cibernéticos</strong>
            </p>
            <p class="ns-p-2" style="margin-top: 37px; font-size: 18px;">
                Debido a la creciente incidencia de robo de información y demás ciberataques, <br>
                las compañías intentan estar preparadas para hacer frente y disminuir los riegos a los que se <br>
                exponen diariamente.
            </p>
            <div style="text-align: right; margin-top: 40px;">
                <button>Realiza una evaluación</button>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="ciber-ind no-visible">
        <content class="content-limit">
            <div class="caja-btn-group">
                <a href="{{asset('soluciones#salud')}}">
                    <img src="img/serv_escudo.webp">
                    <p>Salud</p>
                </a>
                <a href="{{asset('soluciones#financiera')}}">
                    <img src="img/ciber_edificio.webp">
                    <p>Financiera</p>
                </a>
                <a href="{{asset('soluciones#manofactura')}}">
                    <img src="img/ciber_person.webp">
                    <p>Manofactura</p>
                </a>
                <a href="{{asset('soluciones#energia')}}">
                    <img src="img/ciber_electro.webp">
                    <p>Energética y Recursos</p>
                </a>
                <a href="{{asset('soluciones#agro')}}">
                    <img src="img/ciber_tubo.webp">
                    <p>Agroindustrial</p>
                </a>
                <a href="{{asset('soluciones#academia')}}">
                    <img src="img/ciber_graduado.webp">
                    <p>Académica</p>
                </a>
            </div>
            <div class="caja-industria">
                <h1>Ciberseguridad en tu sector</h1>
                <p>
                    En la era digital todas las empresas de todos los sectores son vulnerables a un ciberataque o brecha de informació. Debido a esto, nuestros servicios pueden adaptarse a las circunstancias y necesidades de cada sector, inclusive en lo que engloba la unión de los principios: Tecnología de las Operaciones (OT) y Tecnologías de la Información (TI).
                </p>
            </div>
        </content>
    </div>
</section>

<section>
    <div class="casos-exito">
        <div class="caja-exito-text">
            <div class="exito-text text-caso2">
                <h1>Casos de éxito</h1>

                <h3>Cero Extracción</h3>

                <h6>Industria minera</h6>

                <p>
                    Múltiples publicaciones revelan posible filtración de información sensible de empresas mexicanas.
                </p>

                <a href="{{asset('exito.php#cero-extraccion')}}" class="btn-exito">Leer más <i
                        class="fa-solid fa-chevron-right"></i></a>
            </div>
            <div class="exito-text text-caso1">
                <h1>Casos de éxito</h1>

                <h3>Seguridad a la medida</h3>

                <h6>Industria turística</h6>

                <p>
                    La entrega de nuestros servicios está basada en la comunicación continua.
                </p>

                <a href="exito.php#seguridad-medida" class="btn-exito">Leer más <i
                        class="fa-solid fa-chevron-right"></i></a>
            </div>
        </div>
        <div class="caja-exito-img">
            <div class="exito-img img-caso1" style="order: 1;"></div>
            <div class="exito-img img-caso2" style="order: 2;"></div>
        </div>

        <button class="btn-casos-up" onclick="casoUp()"
            style="margin-left: -38px; border-bottom-left-radius: 6px; border-top-left-radius: 6px;">
            <i class="fa-solid fa-arrow-up"></i>
        </button>
        <button class="btn-casos-down" onclick="casoUp()"
            style="margin-top: -42px; border-bottom-right-radius: 6px; border-top-right-radius: 6px;">
            <i class="fa-solid fa-arrow-down"></i>
        </button>
    </div>
</section>

<section>
    <div class="caja-tendencias">
        <h1>Tendencias</h1>
        <p>
            Noticias relevantes sobre Ciberseguridad
        </p>

        <div class="card-tend">
            <div class="tend-img">
                <img src="img/tend_polonium.webp">
            </div>
            <div class="tend-text">
                <h2>Protección Online <br> Confiable</h2>
                <p style="color: #2585AE;">
                    Ciberespionaje
                </p>
                <p style="margin-top: 20px; color:#666;">
                    Tendencias más importantes y recientes <br> para proteger tus datos personales <br> y prevenir
                    ataques cibernéticos.
                </p>
                <a href="tendencias.php" class="btn-tend">Leer más</a>
            </div>

            <div class="tend-img d-none">
                <img src="img/tend_lilisbot.webp">
            </div>
            <div class="tend-text d-none">
                <h2>Tendencias de Ciberseguridad <br> Actualizadas</h2>
                <p style="color: #2585AE;">
                    Malware
                </p>
                <p style="margin-top: 20px; color:#666;">
                    Mantente actualizado sobre las últimas <br> tendencias en ciberseguridad <br> y protege tus datos
                    personales
                </p>
                <a href="tendencias.php" class="btn-tend">Leer más</a>
            </div>

            <button class="btn-swivht-tend" onclick="swichtTend()">
                <i class="fa-solid fa-circle"></i>
                <i class="fa-regular fa-circle"></i>
            </button>
        </div>
    </div>
</section>

<section>
    <div class="medios">
        <div class="medios-text">
            <h1>Silent4Business</h1>
            <a href="medios.php">Nuestra presencia en medios</a>
        </div>
    </div>
</section>

<section id="alianzas">
    <div class="caja-alianzas">
        <h1>Nuestro ecosistema de alianzas</h1>
        <p>Cada uno de nuestros aliados potencia nuestra capacidad para diseñar y proveer seguridad ágil.</p>

        <div class="logos-alianzas no-visible">
            <img src="img/alianzas/alianza_1.webp">
            <img src="img/alianzas/alianza_2.webp">
            <img src="img/alianzas/alianza_3.webp">
            <img src="img/alianzas/alianza_4.webp">
            <img src="img/alianzas/alianza_5.webp">
            <img src="img/alianzas/alianza_6.webp">
            <img src="img/alianzas/alianza_7.webp">
            <img src="img/alianzas/alianza_8.webp">
            <img src="img/alianzas/alianza_9.webp">
            <img src="img/alianzas/alianza_10.webp">
            <img src="img/alianzas/alianza_11.webp">
            <img src="img/alianzas/alianza_12.webp">
            <img src="img/alianzas/alianza_13.webp">
            <img src="img/alianzas/alianza_14.webp">
            <img src="img/alianzas/alianza_15.webp">
            <img src="img/alianzas/alianza_16.webp">
            <img src="img/alianzas/alianza_17.webp">
            <img src="img/alianzas/alianza_18.webp">
            <img src="img/alianzas/alianza_19.webp">
            <img src="img/alianzas/alianza_20.webp">
            <img src="img/alianzas/alianza_21.webp">
            <img src="img/alianzas/alianza_22.webp">
            <img src="img/alianzas/alianza_23.webp">
            <img src="img/alianzas/alianza_24.webp">
            <img src="img/alianzas/alianza_25.webp">
            <img src="img/alianzas/alianza_26.webp">
            <img src="img/alianzas/alianza_27.webp">
            <img src="img/alianzas/alianza_28.webp">
            <img src="img/alianzas/alianza_29.webp">
            <img src="img/alianzas/alianza_30.webp">
            <img src="img/alianzas/alianza_31.webp">
            <img src="img/alianzas/alianza_32.webp">
            <img src="img/alianzas/alianza_33.webp">
            <img src="img/alianzas/alianza_34.webp">
            <img src="img/alianzas/alianza_35.webp">
        </div>
    </div>
</section>

<section id="certificaciones">
    <div class="caja-certificaciones">
        <h1>Nuestras certificaciones</h1>
        <p>Buscamos siempre las mejores practicas para poder ofrecer la mejor calidad en nuestros servicios</p>

        <div class="logos-certificaciones no-visible">
            <img src="img/certificaciones/cert_1.webp">
            <img src="img/certificaciones/cert_2.webp">
            <img src="img/certificaciones/cert_3.webp">
            <img src="img/certificaciones/cert_4.webp">
            <img src="img/certificaciones/cert_5.webp">
            <img src="img/certificaciones/cert_6.webp">
            <img src="img/certificaciones/cert_7.webp">
            <img src="img/certificaciones/cert_8.webp">
            <img src="img/certificaciones/cert_9.webp">
            <img src="img/certificaciones/cert_10.webp">
            <img src="img/certificaciones/cert_11.webp">
            <img src="img/certificaciones/cert_12.webp">
            <img src="img/certificaciones/cert_13.webp">
            <img src="img/certificaciones/cert_14.webp">
            <img src="img/certificaciones/cert_15.webp">
            <img src="img/certificaciones/cert_16.webp">
            <img src="img/certificaciones/cert_17.webp">
            <img src="img/certificaciones/cert_18.webp">
            <img src="img/certificaciones/cert_19.webp">
            <img src="img/certificaciones/cert_20.webp">
            <img src="img/certificaciones/cert_21.webp">
            <img src="img/certificaciones/cert_22.webp">
            <img src="img/certificaciones/cert_23.webp">
            <br style="clear: both;">
        </div>
    </div>
</section>

<section>
    <div class="curso no-visible">
        <a href="contacto.php">
            <h1>Cursos y capacitaciones</h1>
        </a>
        <p style="font-size: 20px;">Solicita una visita a tu escuela para una capacitación o bien para recibir una
            ponencia en ciberseguridad.</p>
        <p style="font-size:14px;">Como empresa socialmente responsable nos importa ser parte de la formación de mentes
            jovenes.</p>
    </div>
</section>

<section>
    <div class="caja-jefes">
        <h1>Generando Ideas</h1>
        <p>Conoce a los profesionales al servicio de tu seguridad</p>
    </div>
    <div class="jefes-cards no-visible">
        <div class="card-jefe lay">
            <div class="img-jefe">
                <img src="img/jefe_lay.webp">
            </div>
            <div class="info-jefe">
                <h3>Layla Delgadillo</h3>
                <p>Fundadora & CEO</p>
                <div class="redes-jefe">
                    <a href="https://twitter.com/laylad81" target="_blanck"><i class="fa-brands fa-twitter"></i></a>
                    <a href="https://www.linkedin.com/in/layladelgadillo/" target="_blanck"><i
                            class="fa-brands fa-linkedin"></i></a>
                </div>
            </div>
        </div>

        <div class="card-jefe gera">
            <div class="img-jefe">
                <img src="img/jefe_gerardo.webp">
            </div>
            <div class="info-jefe">
                <h3>Gerardo Garibay</h3>
                <p>Director Comercial</p>
                <div class="redes-jefe">
                    <a href="https://twitter.com/GaribayGerardo" target="_blanck"><i
                            class="fa-brands fa-twitter"></i></a>
                    <a href="https://www.linkedin.com/in/gerardo-garibay-4877a622/" target="_blanck"><i
                            class="fa-brands fa-linkedin"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@section('scripts')
    <script type="text/javascript">
        function servicio(id_servicio) {
            $('.caja-servicios-text').addClass('d-none');
            $('#' + id_servicio).removeClass('d-none');
            $('.nuestros-servicios').addClass('flex-reverse');
            $('.caja-btn-servicios button').removeClass('serv-active');
            $('.caja-btn-servicios button:hover').addClass('serv-active');

            if(id_servicio == 'serv-original'){
                $('.nuestros-servicios').removeClass('flex-reverse');
            }
        }
        function casoUp() {
            $('.casos-exito').toggleClass('second');
        }

        function swichtTend() {
            $('.tend-text').toggleClass('d-none');
            $('.tend-img').toggleClass('d-none');
            $('.btn-swivht-tend').toggleClass('second');
        }

        let back_pos = 0;
        $(window).scroll(function() {
            if($(window).scrollTop() > ($('.medios').offset().top - 1000) && $(window).scrollTop() < ($('.medios').offset().top + 1000)){
                back_pos =(($('.medios').offset().top + 350) - ($(window).scrollTop() ) ) / 15;
            }

            $('.medios').css('background-position', 'center ' + back_pos + '%');
        });

        $(document).ready(function() {

        });
    </script>
@endsection
