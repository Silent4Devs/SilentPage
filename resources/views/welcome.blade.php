@extends('layouts.site')

@section('titulo', 'Aliados de tu Ciberseguridad | Servicios de ciberseguridad para empresas')

@section('metaDesc',
    'Protégete de ciberataques con nuestros servicios de ciberseguridad para empresas: SOC/NOC, ISO
    27001:2022, Pentesting. Aumenta la seguridad y mitiga riesgos.')

@section('body', 'body')

@section('content')

    <div id="video-inicio" class="caja-video-fondo">
        <video autoplay muted loop
            title="Video presentación Sielent4Business. Hoy más que nunca debemos contar con la capacidad y las herramientas necesarias para proteger tu información. La seguridad ágil requiere un talento resiliente Somos Silent4businees y estamos listos para ayudarte.">
            <source src="img/fondo.mp4" type="video/mp4">
            <img src="{{ asset('img/fondo_img.webp') }}" width="100%" alt="Imagen provicional" title="Imagen provicional">
        </video>
    </div>
    <section id="servicios">
        <div class="nuestros-servicios">
            <content class="content-limit">
                <div class="caja-flex no-visible caja-servicios-inicio" style="justify-content: space-between;">
                    <div id="serv-original" class="caja-servicios-text">
                        <h1 class="title-servicios title-main">Conoce Nuestros <br> Servicios</h1>
                        <p align="justify">
                            Debido a la creciente incidencia de robo de información, interrupción de operaciones,
                            cifrado de
                            base de datos, suplantación de identidad y demás ciberataques, las empresas intentan estar
                            preparadas para hacer frente y mitigar los riegos informáticos a los que están expuestos
                            diariamente.
                        </p>
                        <p>
                            Nuestro portafolio de servicios de ciberseguridad está diseñado para ser tu aliado en
                            alcanzar
                            la integridad, la confidencialidad y disponibilidad de la información dentro de tu empresa.
                        </p>
                    </div>
                    <div id="soc-noc" class="caja-servicios-text d-none">
                        <span class="title-servicios title-main">SOC/NOC (Centro de Operaciones de Ciberseguridad) </span>
                        <p>
                            Nuestro Centro de Operaciones de Ciberseguridad de última generación (SOC/NOC) está
                            conformado
                            por profesionistas capacitados y especializados en el uso de soluciones tecnológicas de
                            vanguardia, enfocadas en brindarte servicios de seguridad integral, así como monitoreo
                            continuo
                            de la disponibilidad de las redes y operaciones de tu empresa.
                        </p>
                        <div>
                            <a href="{{ route('servicios/soc-noc') }}" class="btn-leer-mas">Leer más</a>
                        </div>

                        <button onclick="servicio('serv-original')" class="btn-close">
                            <i class="material-symbols-outlined" title="Cerrar sección">close</i>
                        </button>
                    </div>
                    <div id="ciberinteligencia" class="caja-servicios-text d-none">
                        <span class="title-servicios title-main">Ciberinteligencia</span>
                        <p align="justify">
                            El servicio de ciberinteligencia engloba estrategias proactivas y cognitivas de prevención,
                            detección e investigación de riesgos de seguridad, vigilancia del ciberespacio e
                            incorporación
                            de herramientas de inteligencia artificial y machine learning.
                        <ol>
                            <li>Pentesting y Análisis de vulnerabilidades</li>
                            <li>Servicios de Ingeniería Social</li>
                            <li>Análisis forense</li>
                        </ol>
                        </p>
                        <div>
                            <a href="{{ route('servicios/ciberinteligencia') }}" class="btn-leer-mas">Leer más</a>
                        </div>
                        <button onclick="servicio('serv-original')" class="btn-close">
                            <i class="material-symbols-outlined" title="Cerrar sección">close</i>
                        </button>
                    </div>
                    <div id="consultoria" class="caja-servicios-text d-none">
                        <span class="title-servicios title-main">Consultoría Estratégica</span>
                        <p>
                            Te guiamos en el cumplimiento legal y regulatorio del ciclo de vida de los activos de
                            información de tu empresa basándonos en la normatividad nacional e internacional.
                        <ol>
                            <li>Actualización a la nueva versión 2022 de la norma ISO 27001</li>
                            <li>Análisis de riesgos de seguridad de la información. </li>
                            <li>Plan de continuidad de negocio (BCP, DRP Y BIA). </li>
                        </ol>
                        </p>
                        <div>
                            <a href="{{ route('servicios/consultoria-estrategica') }}" class="btn-leer-mas">Leer más</a>
                        </div>
                        <button onclick="servicio('serv-original')" class="btn-close">
                            <i class="material-symbols-outlined" title="Cerrar sección">close</i>
                        </button>
                    </div>
                    <div id="otra-solucion" class="caja-servicios-text d-none">
                        <span class="title-servicios title-main">Cyber Threat Intelligence (CTI)</span>
                        <p>
                            Nuestro servicio CTI te permite identificar proactivamente las amenazas a las que se
                            encuentra expuesta tu organización en el ciberespacio, como:
                        </p>
                        <ol>
                            <li>Suplantación de marca.</li>
                            <li>Fuga de información.</li>
                            <li>Credenciales comprometidas.</li>
                        </ol>
                        <div>
                            <a href="{{ route('servicios/otras-soluciones') }}" class="btn-leer-mas ">Leer más</a>
                        </div>
                        <button onclick="servicio('serv-original')" class="btn-close">
                            <i class="material-symbols-outlined" title="Cerrar sección">close</i>
                        </button>
                    </div>
                    <div class="caja-btn-servicios caja-btn-group no-visible">
                        <button onclick="servicio('soc-noc')">
                            <img src="{{ asset('img/serv_monitor.webp') }}" alt="Sección SOC- NOC" title="Sección SOC- NOC">
                            <p>SOC / NOC</p>
                        </button>
                        <button onclick="servicio('ciberinteligencia')">
                            <img src="{{ asset('img/serv_escudo.webp') }}" alt="Sección Ciberinteligencia"
                                title="Sección Ciberinteligencia">
                            <p>Ciberinteligencia</p>
                        </button>
                        <button onclick="servicio('consultoria')">
                            <img src="{{ asset('img/serv_global.webp') }}" alt="Sección Consultoría estraégica"
                                title="Sección Consultoría estraégica">
                            <p>Consultoría <br> Estratégica</p>
                        </button>
                        <button onclick="servicio('otra-solucion')">
                            <img src="{{ asset('img/serv_soluciones.webp') }}" alt="Sección Cyber Threat Intelligence"
                                title="Sección Cyber Threat Intelligence">
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
                        <span class="title-main">¿Cómo se puede enriquecer nuestro entorno?</span>
                        <span class="title-for">Nuestra visión</span>
                        <p>
                            A través de un equipo especializado, ser un referente confiable en materia de investigación,
                            asistencia y difusión en actividades de atención y respuesta a incidentes de ciberseguridad.
                        </p>
                    </div>
                    <div class="img-vision"></div>
                </div>
                <div class="vision-2">

                    <div class="vision-text">
                        <h2 class="title-main">Nuestra filosofía</h2>
                        <span class="title-for"></span>
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
                        <h2 class="title-main">Lo solucionamos por ti</h2>
                        <h3 class="title-for">Nuestra misión</h3>
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
                        <h2 class="title-main">Mejora continua</h2>
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
            <img src="{{ asset('img/escudo.webp') }}" alt="escudo" title="escudo">
            <div>
                <h2 class="title-main">¿Conoces tu nivel de seguridad?</h2>
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
                    <a href="{{ route('soluciones') }}#salud">
                        <img src="{{ asset('img/serv_escudo.webp') }}" alt="Salud" title="Salud">
                        <p>Salud</p>
                    </a>
                    <a href="{{ route('soluciones') }}#financiera">
                        <img src="{{ asset('img/ciber_edificio.webp') }}" alt="Financiera" title="Financiera">
                        <p>Financiera</p>
                    </a>
                    <a href="{{ route('soluciones') }}#manofactura">
                        <img src="{{ asset('img/ciber_person.webp') }}" alt="Manufactura" title="Manufactura">
                        <p>Manufactura</p>
                    </a>
                    <a href="{{ route('soluciones') }}#energia">
                        <img src="{{ asset('img/ciber_electro.webp') }}" alt="Energética y Recursos"
                            title="Energética y Recursos">
                        <p>Energética y Recursos</p>
                    </a>
                    <a href="{{ route('soluciones') }}#agro">
                        <img src="{{ asset('img/ciber_tubo.webp') }}" alt="Agroindustrial" title="Agroindustrial">
                        <p>Agroindustrial</p>
                    </a>
                    <a href="{{ route('soluciones') }}#academia">
                        <img src="{{ asset('img/ciber_graduado.webp') }}" alt="Académica" title="Académica">
                        <p>Académica</p>
                    </a>
                </div>
                <div class="caja-industria">
                    <h2 class="title-main">Ciberseguridad en Industrias</h2>
                    <p>
                        El concepto de ciberseguridad industrial se especializa principalmente en la unión de los principios
                        de seguridad del entorno de la OT (Tecnología de las Operaciones) y los fundamentos de seguridad del
                        entorno de la red TI (Tecnologías de la Información).
                    </p>
                </div>
            </content>
        </div>
    </section>

    <section>
        <div class="casos-exito">
            <div class="caja-exito-text">
                <div class="exito-text text-caso2">
                    <h2 class="title-main">Casos de éxito</h2>

                    <h3 class="title-terd">Cero Extracción</h3>

                    <h4 class="title-six">Industria minera</h4>

                    <p>
                        Múltiples publicaciones revelan posible filtración de información sensible de empresas mexicanas.
                    </p>

                    <a href="{{ route('exito') }}#cero-extraccion" class="btn-exito">Leer más <i
                            class="fa-solid fa-chevron-right"></i></a>
                </div>
                <div class="exito-text text-caso1">
                    <h2 class="title-main">Casos de éxito</h2>

                    <h3 class="title-terd">Seguridad a la medida</h3>

                    <h4 class="title-six">Industria turística</h4>

                    <p>
                        La entrega de nuestros servicios está basada en la comunicación continua.
                    </p>

                    <a href="{{ route('exito') }}#seguridad-medida" class="btn-exito">Leer más <i
                            class="fa-solid fa-chevron-right"></i></a>
                </div>
            </div>
            <div class="caja-exito-img">
                <div class="exito-img img-caso1" style="order: 1;"></div>
                <div class="exito-img img-caso2" style="order: 2;"></div>
            </div>

            <button class="btn-casos-up" onclick="casoUp()"
                style="margin-left: -38px; border-bottom-left-radius: 6px; border-top-left-radius: 6px;">
                <i class="fa-solid fa-arrow-up" title="Cambiar de imagen"></i>
            </button>
            <button class="btn-casos-down" onclick="casoUp()"
                style="margin-top: -42px; border-bottom-right-radius: 6px; border-top-right-radius: 6px;">
                <i class="fa-solid fa-arrow-down" title="Cambiar de imagen"></i>
            </button>
        </div>
    </section>

    <section>
        <div class="caja-tendencias">
            <h2 class="title-main">Tendencias</h2>
            <p>
                Noticias relevantes sobre Ciberseguridad
            </p>

            <div class="card-tend">
                <div class="tend-img">
                    <img src="{{ asset('img/tend_polonium.webp') }}" alt="malware" title="malware">
                </div>
                <div class="tend-text">
                    <h3 class"title-second">Protección Online <br> Confiable</h3>
                    <p style="color: #2585AE;">
                        Ciberespionaje
                    </p>
                    <p style="margin-top: 20px; color:#666;">
                        Tendencias más importantes y recientes <br> para proteger tus datos personales <br> y prevenir
                        ataques cibernéticos.
                    </p>
                    <a href="{{ route('tendencias') }}" class="btn-tend">Leer más</a>
                </div>

                <div class="tend-img d-none">
                    <img src="{{ asset('img/tend_lilisbot.webp') }}" alt="Malware" title="Malware">
                </div>
                <div class="tend-text d-none">
                    <h3 class"title-second">Tendencias de Ciberseguridad <br> Actualizadas</h3>
                    <p style="color: #2585AE;">
                        Malware
                    </p>
                    <p style="margin-top: 20px; color:#666;">
                        Mantente actualizado sobre las últimas <br> tendencias en ciberseguridad <br> y protege tus
                        datos
                        personales
                    </p>
                    <a href="{{ route('tendencias') }}" class="btn-tend">Leer más</a>
                </div>

                <button class="btn-swivht-tend" onclick="swichtTend()">
                    <i class="fa-solid fa-circle" title="Cambiar de imagen"></i>
                    <i class="fa-regular fa-circle" title="Cambiar de imagen"></i>
                </button>
            </div>
        </div>
    </section>

    <section>
        <div class="medios">
            <div class="medios-text">
                <h2 class="title-main">Silent4Business</h2>
                <a href="{{ route('medios') }}">Nuestra presencia en medios</a>
            </div>
        </div>
    </section>

    <section id="alianzas">
        <div class="caja-alianzas">
            <h2 class="title-main">Nuestro ecosistema de alianzas</h2>
            <p>Cada uno de nuestros aliados potencia nuestra capacidad para diseñar y proveer seguridad ágil.</p>

            <div class="logos-alianzas no-visible">
                <img src="{{ asset('img/alianzas/alianza_1.png') }}" alt="Logo Allot" title="=Logo Allot">
                <img src="{{ asset('img/alianzas/alianza_2.png') }}" alt="BlackBag" title="BlackBag">
                <img src="{{ asset('img/alianzas/alianza_3.png') }}" alt="Check Point" title="Check Point">
                <img src="{{ asset('img/alianzas/alianza_4.png') }}" alt="Logo Cyberark" title="Logo Cyberark">
                <img src="{{ asset('img/alianzas/alianza_5.png') }}" alt="Logo Dell" title="Logo Dell">
                <img src="{{ asset('img/alianzas/alianza_6.png') }}" alt="Logo Eset" title="Logo Eset">
                <img src="{{ asset('img/alianzas/alianza_7.png') }}" alt="Logo Exabeam" title="Logo Exabeam">
                <img src="{{ asset('img/alianzas/alianza_8.png') }}" alt="Logo F5" title="Logo F5">
                <img src="{{ asset('img/alianzas/alianza_9.png') }}" alt="Logo Rthreat" title="Logo Rthreat">
                <img src="{{ asset('img/alianzas/alianza_10.png') }}" alt="Logo Forcepoint" title="Logo Forcepoint">
                <img src="{{ asset('img/alianzas/alianza_11.png') }}" alt="Logo Fortinet" title="Logo Fortinet">
                <img src="{{ asset('img/alianzas/alianza_12.png') }}" alt="Logo Huawei" title="Logo Huawei">
                <img src="{{ asset('img/alianzas/alianza_13.png') }}" alt="Logo IBM Security" title="Logo IBM Security">
                <img src="{{ asset('img/alianzas/alianza_14.png') }}" alt="Logo Infoblox" title="Logo Infoblox">
                <img src="{{ asset('img/alianzas/alianza_15.png') }}" alt="Logo imperva" title="Logo imperva">
                <img src="{{ asset('img/alianzas/alianza_16.png') }}" alt="Logo Kaspersky" title="Logo Kaspersky">
                <img src="{{ asset('img/alianzas/alianza_17.png') }}" alt="Logo LogRhythm" title="Logo LogRhythm">
                <img src="{{ asset('img/alianzas/alianza_18.png') }}" alt="Logo Orchestra" title="Logo Orchestra">
                <img src="{{ asset('img/alianzas/alianza_19.png') }}" alt="Logo MicroFocus" title="Logo MicroFocus">
                <img src="{{ asset('img/alianzas/alianza_20.png') }}" alt="Logo Paloalto" title="Logo Paloalto">
                <img src="{{ asset('img/alianzas/alianza_21.png') }}" alt="Logo Picus" title="Logo Picus">
                <img src="{{ asset('img/alianzas/alianza_22.png') }}" alt="Logo radware" title="Logo radware">
                <img src="{{ asset('img/alianzas/alianza_23.png') }}" alt="Logo RSA" title="Logo RSA">
                <img src="{{ asset('img/alianzas/alianza_24.png') }}" alt="Logo Sailpoint" title="Logo Sailpoint">
                <img src="{{ asset('img/alianzas/alianza_25.png') }}" alt="Logo Sophos" title="Logo Sophos">
                <img src="{{ asset('img/alianzas/alianza_26.png') }}" alt="Logo Sonic Wall" title="Logo Sonic Wall">
                <img src="{{ asset('img/alianzas/alianza_27.png') }}" alt="Logo Tenable" title="Logo Tenable">
                <img src="{{ asset('img/alianzas/alianza_28.png') }}" alt="Logo Thales" title="Logo Thales">
                <img src="{{ asset('img/alianzas/alianza_29.png') }}" alt="Logo Trapx" title="Logo Trapx">
                <img src="{{ asset('img/alianzas/alianza_30.png') }}" alt="Logo Wandera" title="Logo Wandera">
                <img src="{{ asset('img/alianzas/alianza_31.png') }}" alt="Logo Trellix" title="Logo Trellix">
                <img src="{{ asset('img/alianzas/alianza_32.png') }}" alt="Logo Trend" title="Logo Trend">
                <img src="{{ asset('img/alianzas/alianza_33.png') }}" alt="Logo Hillstone" title="Logo Hillstone">
                <img src="{{ asset('img/alianzas/alianza_34.png') }}" alt="Logo Microsoft" title="Logo Microsoft">
                <img src="{{ asset('img/alianzas/alianza_35.png') }}" alt="Logo Blanco" title="Logo Blanco">
                <img src="{{ asset('img/alianzas/alianza_36.png') }}" alt="Logo Blanco" title="Logo Blanco">
                <img src="{{ asset('img/alianzas/alianza_37.png') }}" alt="Logo Blanco" title="Logo Blanco">
                <img src="{{ asset('img/alianzas/alianza_38.png') }}" alt="Logo Blanco" title="Logo Blanco">
                <img src="{{ asset('img/alianzas/alianza_39.png') }}" alt="Logo Blanco" title="Logo Blanco">
            </div>
        </div>
    </section>

    <section id="certificaciones">
        <div class="caja-certificaciones">
            <h2 class="title-main">Nuestras certificaciones</h2>
            <p>Buscamos siempre las mejores practicas para poder ofrecer la mejor calidad en nuestros servicios</p>

            <div class="logos-certificaciones no-visible">
                <img src="{{ asset('img/certificaciones/cert_1.webp') }}" alt="Logo SGI" title="Logo SGI">
                <img src="{{ asset('img/certificaciones/cert_2.webp') }}" alt="Logo COBIT" title="Logo COBIT">
                <img src="{{ asset('img/certificaciones/cert_3.webp') }}" alt="Logo ITIL" title="Logo ITIL">
                <img src="{{ asset('img/certificaciones/cert_4.webp') }}" alt="Logo CISA" title="Logo CISA">
                <img src="{{ asset('img/certificaciones/cert_5.webp') }}" alt="Logo CRISC" title="Logo CRISC">
                <img src="{{ asset('img/certificaciones/cert_6.webp') }}" alt="Logo CISM" title="Logo CISM">
                <img src="{{ asset('img/certificaciones/cert_7.webp') }}" alt="Logo Marketing Digital"
                    title="Logo Marketing Digital">
                <img src="{{ asset('img/certificaciones/cert_8.webp') }}" alt="Logo Security" title="Logo Security">
                <img src="{{ asset('img/certificaciones/cert_9.webp') }}" alt="Logo ESR" title="Logo ESR">
                <img src="{{ asset('img/certificaciones/cert_10.webp') }}" alt="Logo EXIN" title="Logo EXIN">
                <img src="{{ asset('img/certificaciones/cert_11.webp') }}" alt="Logo CISSP" title="Logo CISSP">
                <img src="{{ asset('img/certificaciones/cert_12.webp') }}" alt="Logo PMI" title="Logo PMI">
                <img src="{{ asset('img/certificaciones/cert_13.webp') }}" alt="Logo ECIH" title="Logo ECIH">
                <img src="{{ asset('img/certificaciones/cert_14.webp') }}" alt="Logo ECSA" title="Logo ECSA">
                <img src="{{ asset('img/certificaciones/cert_15.webp') }}" alt="Logo CEH" title="Logo CEH">
                <img src="{{ asset('img/certificaciones/cert_16.webp') }}" alt="Logo CHIFI" title="Logo CHIFI">
                <img src="{{ asset('img/certificaciones/cert_17.webp') }}" alt="Logo ECSP" title="Logo ECSP">
                <img src="{{ asset('img/certificaciones/cert_18.webp') }}" alt="Logo CISCO" title="Logo CISCO">
                <img src="{{ asset('img/certificaciones/cert_19.webp') }}" alt="Logo Security" title="Logo Security">
                <img src="{{ asset('img/certificaciones/cert_20.webp') }}" alt="Logo GPEN" title="Logo GPEN">
                <img src="{{ asset('img/certificaciones/cert_21.webp') }}" alt="Logo GCIH" title="Logo GCIH">
                <img src="{{ asset('img/certificaciones/cert_22.webp') }}" alt="Logo GREM" title="Logo GREM">
                <img src="{{ asset('img/certificaciones/cert_23.webp') }}" alt="Logo First" title="Logo First">
                <br style="clear: both;">
            </div>
        </div>
    </section>

    <section>
        <div class="curso no-visible">
            <a href="{{ route('contacto') }}">
                <h2 class="title-main">Cursos y capacitaciones</h2>
            </a>
            <p style="font-size: 20px;">Solicita una visita a tu escuela para una capacitación o bien para recibir una
                ponencia en ciberseguridad.</p>
            <p style="font-size:14px;">Como empresa socialmente responsable nos importa ser parte de la formación de mentes
                jovenes.</p>
        </div>
    </section>

    <section>
        <div class="caja-jefes">
            <h2 class="title-main">Generando Ideas</h2>
            <p>Conoce a los profesionales al servicio de tu seguridad</p>
        </div>
        <div class="jefes-cards no-visible">
            <div class="card-jefe lay">
                <div class="img-jefe">
                    <img src="{{ asset('img/jefe_lay.webp') }}" alt="CEO Layla Delgadillo" title="CEO Layla Delgadillo">
                </div>
                <div class="info-jefe">
                    <h3 class="title-terd">Layla Delgadillo</h3>
                    <p>Fundadora & CEO</p>
                    <div class="redes-jefe">
                        <a href="https://twitter.com/laylad81" target="_blanck"><i class="fa-brands fa-twitter"
                                title="X Layla Delgadillo"></i></a>
                        <a href="https://www.linkedin.com/in/layladelgadillo/" target="_blanck"><i
                                class="fa-brands fa-linkedin" title="Linkedin Layla Delgadillo"></i></a>
                    </div>
                </div>
            </div>

            <div class="card-jefe gera">
                <div class="img-jefe">
                    <img src="{{ asset('img/jefe_gerardo.webp') }}" alt="Director Comercial Gerardo Garibay"
                        title="Director Comercial Gerardo Garibay">
                </div>
                <div class="info-jefe">
                    <h3 class="title-terd">Gerardo Garibay</h3>
                    <p>Director Comercial</p>
                    <div class="redes-jefe">
                        <a href="https://twitter.com/GaribayGerardo" target="_blanck"><i class="fa-brands fa-twitter"
                                title="X Gerardo Garibay"></i></a>
                        <a href="https://www.linkedin.com/in/gerardo-garibay-4877a622/" target="_blanck"><i
                                class="fa-brands fa-linkedin" title="Linkedin Gerardo Garibay"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script src="{{ asset('js/welcome.js') }}"></script>
@endsection
