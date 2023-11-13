@extends('layouts.app')



@section('content')

    <style>
        /*custom-card-cover*/
        .custom-card-img-filter {
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
            overflow: hidden;
            height: 300px;
            background-color: rgba(0, 0, 0, 0.5); /* Cor cinza com 50% de opacidade */
        }

        /*.custom-card-img {*/
        /*    filter: brightness(40%);*/
        /*    height: 300px;*/
        /*    width: auto;*/
        /*    overflow: hidden;*/
        /*}*/
    </style>

    @include('components.hero')

    <div class="b-example-divider"></div>

    @include('components.resume')

    <div class="b-example-divider"></div>

    <section class="section-skills">
        <div class="custom-section-title text-center pt-3" style="width: 100%">
            <h1>Nossos Produtos</h1>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="d-flex row row-cols-1 row-cols-lg-4 align-items-stretch g-4 pb-5">
                    <div class="col">
                        <div class="card text-bg-dark custom-card-img-filter bg-4">
{{--                            <img src="{{ asset('image/moodle.jpg') }}" class="custom-card-img" alt="...">--}}
                            <div class="card-img-overlay d-flex align-items-center text-center">
                                <div>
                                    <h2 class="display-4">Ambiente Virtual de Aprendizagem</h2>
                                    <p class="" style="font-size: 1.2rem">
{{--                                        Transforme a experiência de aprendizado online com nossas soluções AVA. Projetadas para instituições educacionais, oferecemos ferramentas personalizáveis que criam ambientes de aprendizado envolventes e eficazes.                                    </p>--}}
                                    <a class="btn btn-success rounded-3" href="#">Preview</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card text-bg-dark custom-card-img-filter">
{{--                            <img src="{{ asset('image/event.jpg') }}" class="custom-card-img" alt="...">--}}
                            <div class="card-img-overlay d-flex align-items-center text-center">
                                <div>
                                    <h2 class="display-4">Eventos Acadêmicos</h2>
                                    <p class="" style="font-size: 1.2rem">
{{--                                        Transforme a experiência de aprendizado online com nossas soluções AVA. Projetadas para instituições educacionais, oferecemos ferramentas personalizáveis que criam ambientes de aprendizado envolventes e eficazes.                                    </p>--}}
                                    <a class="btn btn-success rounded-3" href="#">Preview</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card text-bg-dark custom-card-img-filter">
{{--                            <img src="{{ asset('image/solution.jpg') }}" class="custom-card-img" alt="...">--}}
                            <div class="card-img-overlay d-flex align-items-center text-center">
                                <div>
                                    <h2 class="display-4">Soluções Personalizadas</h2>
                                    <p class="" style="font-size: 1.2rem">
{{--                                        Transforme a experiência de aprendizado online com nossas soluções AVA. Projetadas para instituições educacionais, oferecemos ferramentas personalizáveis que criam ambientes de aprendizado envolventes e eficazes.                                    </p>--}}
                                    <a class="btn btn-success rounded-3" href="#">Preview</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card text-bg-dark custom-card-img-filter">
{{--                            <img src="{{ asset('image/smarthome.jpg') }}" class="custom-card-img" alt="...">--}}
                            <div class="card-img-overlay d-flex align-items-center text-center">
                                <div>
                                    <h2 class="display-4">Automação Residêncial</h2>
                                    <p class="" style="font-size: 1.2rem">
{{--                                        Transforme a experiência de aprendizado online com nossas soluções AVA. Projetadas para instituições educacionais, oferecemos ferramentas personalizáveis que criam ambientes de aprendizado envolventes e eficazes.                                    </p>--}}
                                    <a class="btn btn-success rounded-3" href="#">Preview</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="b-example-divider"></div>

    <section>
        Section 3
    </section>

    <section>
        Section 4
    </section>

    <footer>
        Footer
    </footer>
@endsection
