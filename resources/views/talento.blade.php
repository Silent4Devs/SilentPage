@extends('layouts.site')

@section('content')

@section('titulo', 'Aliados de tu Ciberseguridad | Servicios para tu empresa')

@section('body', 'talento-body')

<style>
    .title-fondo::before {
        background-image: url('img/portadas/portada_talento.webp');
    }
</style>

<div>
    <div class="title-fondo">
        <h1>Aporta tu talento</h1>
        <p>Ingresa tus datos y forma parte de nuestro equipo</p>
    </div>

    <contetn class="content-limit">
        <div class="card">
            <h2>¿Quieres ser parte de Silent4Business?</h2>

            <p class="parrafo-suec">
                Somos una empresa comprometida, tenemos más de 5 años de experiencia en seguridad informática.
                Contamos con las certificaciones más importantes a nivel internacional para la operación de un CSOC
                y nuestro personal está altamente especializado en análisis de seguridad y ciberinteligencia.
            </p>

            <div class="caja-flex" style="justify-content: space-between; margin-top: 50px;">
                <div class="talento-servicios">
                    <p class="parrafo-nedp">
                        Nos encargamos de proveer un servicio de excelencia, en constante perfeccionamiento. Con el
                        fin de obtener crecimiento continuo, apoyamos a nuestros colaboradores para que se
                        certifiquen en cursos, estudiando una maestría, diplomado o especialidad.
                    </p>
                    <div class="caja-flex" style="justify-content: space-between; margin-top: 80px;">
                        <div class="talent-serv">
                            <img src="img/talent_1.webp">
                            <p>Crecimiento continuo</p>
                        </div>
                        <div class="talent-serv">
                            <img src="img/talent_2.webp">
                            <p>Vacaciones flexibles</p>
                        </div>
                    </div>
                    <div class="caja-flex" style="justify-content: space-between; margin-top: 30px;">
                        <div class="talent-serv">
                            <img src="img/talent_3.webp">
                            <p>Eventos de integración</p>
                        </div>
                        <div class="talent-serv">
                            <img src="img/talent_4.webp">
                            <p>Capacitaciones constantes</p>
                        </div>
                    </div>
                </div>
                <div class="talento-form">
                    @livewire('talento-form-component')
                </div>
            </div>
        </div>

        <div class="card d-none" style="margin-top: 35px;">
            <h2 style="text-align: left;">Últimas vacantes</h2>

            <div class="caja-vacantes">
                <hr>
                <div class="vacante">
                    <h5>Desarrrollador</h5>
                    <i>Jornada completa</i>
                    <p>
                        Estamos en búsqueda de su próximo Consultor de Seguridad (Pentester) Sr. Se busca una
                        persona que este motivada y abierta al aprendizaje continuo, con experiencia.
                    </p>
                    <p>
                        Experiencia media SOA, WEB-SERVICES, SVN, GITHUB, SQL Y MATERIAL DESIGN
                    </p>
                </div>
                <hr>
                <div class="vacante">
                    <h5>Desarrrollador</h5>
                    <i>Jornada completa</i>
                    <p>
                        Estamos en búsqueda de su próximo Consultor de Seguridad (Pentester) Sr. Se busca una
                        persona que este motivada y abierta al aprendizaje continuo, con experiencia.
                    </p>
                    <p>
                        Experiencia media SOA, WEB-SERVICES, SVN, GITHUB, SQL Y MATERIAL DESIGN
                    </p>
                </div>
                <hr>
                <div class="vacante">
                    <h5>Desarrrollador</h5>
                    <i>Jornada completa</i>
                    <p>
                        Estamos en búsqueda de su próximo Consultor de Seguridad (Pentester) Sr. Se busca una
                        persona que este motivada y abierta al aprendizaje continuo, con experiencia.
                    </p>
                    <p>
                        Experiencia media SOA, WEB-SERVICES, SVN, GITHUB, SQL Y MATERIAL DESIGN
                    </p>
                </div>
            </div>
        </div>
    </contetn>

</div>

@endsection
