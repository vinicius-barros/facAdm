@extends('layouts.app')
@include('layouts._includes.navHome')
@section('content')
    {{--  col-md-offset-1  --}}
    <div class="container-fluid meu-body">
        {{--  indicadores sm  --}}
        {{--  Carousel  --}}

          <div class="row row-card">
            <div class="col-lg-12">
                <div class="div-center ">
                    <div class="col-lg-6 col-md-2 col-sm-2 indicador-sm">
                        <div class="card text-center">
                            <div class="row titulo-cartao c-cor">
                                <h3 class="text-center" ><strong>Produção individual</strong></h3>
                            </div>

                            <div class="row cabeca-card ">
                                <div class="col-lg-12">
                                    <div class="col-md-6 ">
                                        <img class="image-card" src="https://scontent.fudi1-2.fna.fbcdn.net/v/t1.0-9/20431525_1449725368475309_3390175617523025452_n.jpg?oh=5a976b96d8fbfe0be24856adcf073666&oe=5A544A67">
                                    </div>
                                    <div class="col-md-6 ">
                                        <h3 class="nome-card"><strong>Vinicius</strong></h3>
                                    </div>
                                </div>
                            </div>

                            <div class="row corpo-card text-center">
                                    <div class="col-md-10 col-md-offset-1 ">
                                        <div class="carousel slide " data-ride="carousel" id="quote-carousel">
                                          <!-- Carousel Slides / Quotes -->
                                            <div class="carousel-inner">
                                                <!-- Quote 1 -->
                                                <div class="item active">
                                                    <blockquote>
                                                        <div class="row">
                                                                <h1 class="text-center alinhar-h"><strong>08:00</strong></h1>
                                                                <p><h2 class="text-center alinhar-h"><strong>90</strong></h2></p>
                                                        </div>
                                                    </blockquote>
                                                </div>
                                                <!-- Quote 2 -->
                                                <div class="item">
                                                    <blockquote>
                                                        <div class="row">
                                                                <h1 class="text-center alinhar-h"><strong>09:00</strong></h1>
                                                                <p><h2 class="text-center alinhar-h"><strong>--</strong></h2></p>
                                                        </div>
                                                    </blockquote>
                                                </div>
                                                <!-- Quote 3 -->
                                                <div class="item">
                                                    <blockquote>
                                                        <div class="row">
                                                                <h1 class="text-center alinhar-h"><strong>10:00</strong></h1>
                                                                <p><h2 class="text-center alinhar-h"><strong>--</strong></h2></p>
                                                        </div>
                                                    </blockquote>
                                                </div>
                                                <!-- Quote 4 -->
                                                <div class="item">
                                                    <blockquote>
                                                        <div class="row">
                                                                <h1 class="text-center alinhar-h"><strong>11:30</strong></h1>
                                                                <p><h2 class="text-center alinhar-h"><strong>--</strong></h2></p>
                                                        </div>
                                                    </blockquote>
                                                </div>
                                            </div>
                                        </div>
                                        <hr class="uk-divider-small">
                                    </div>

                                    <div class="col-md-12 ">
                                        <div class="card ">
                                            <div class="card-header ">
                                                <h3 class="text-center alinhar-h"><strong>Total Produzido Hoje</strong></h3>
                                                <p><h2 class="text-center "><strong>90</strong></h2></p>
                                            </div><hr class="uk-divider-small">
                                        </div>
                                    </div>
                                </div>

                            <div class="row rodape-card">

                            </div>
                        </div>
                    </div> {{--col-lg3--}}
                    <div class="col-lg-5 col-md-2 col-sm-2 indicador-sm">
                        <div class="card text-center">
                            <div class="row titulo-cartao c-cor">
                                <h3 class="text-center" ><strong>Produção individual</strong></h3>
                            </div>

                            <div class="row cabeca-card ">
                                <div class="col-lg-12">
                                    <div class="col-md-6 ">
                                        <img class="image-card" src="https://scontent.fudi1-2.fna.fbcdn.net/v/t1.0-9/20431525_1449725368475309_3390175617523025452_n.jpg?oh=5a976b96d8fbfe0be24856adcf073666&oe=5A544A67">
                                    </div>
                                    <div class="col-md-6 ">
                                        <h3 class="nome-card"><strong>Vinicius</strong></h3>
                                    </div>
                                </div>
                            </div>

                            <div class="row corpo-card text-center">
                                    <div class="col-md-10 col-md-offset-1 ">
                                        <div class="carousel slide " data-ride="carousel" id="quote-carousel">
                                          <!-- Carousel Slides / Quotes -->
                                            <div class="carousel-inner">
                                                <!-- Quote 1 -->
                                                <div class="item active">
                                                    <blockquote>
                                                        <div class="row">
                                                                <h1 class="text-center alinhar-h"><strong>08:00</strong></h1>
                                                                <p><h2 class="text-center alinhar-h"><strong>90</strong></h2></p>
                                                        </div>
                                                    </blockquote>
                                                </div>
                                                <!-- Quote 2 -->
                                                <div class="item">
                                                    <blockquote>
                                                        <div class="row">
                                                                <h1 class="text-center alinhar-h"><strong>09:00</strong></h1>
                                                                <p><h2 class="text-center alinhar-h"><strong>--</strong></h2></p>
                                                        </div>
                                                    </blockquote>
                                                </div>
                                                <!-- Quote 3 -->
                                                <div class="item">
                                                    <blockquote>
                                                        <div class="row">
                                                                <h1 class="text-center alinhar-h"><strong>10:00</strong></h1>
                                                                <p><h2 class="text-center alinhar-h"><strong>--</strong></h2></p>
                                                        </div>
                                                    </blockquote>
                                                </div>
                                                <!-- Quote 4 -->
                                                <div class="item">
                                                    <blockquote>
                                                        <div class="row">
                                                                <h1 class="text-center alinhar-h"><strong>11:30</strong></h1>
                                                                <p><h2 class="text-center alinhar-h"><strong>--</strong></h2></p>
                                                        </div>
                                                    </blockquote>
                                                </div>
                                            </div>
                                        </div>
                                        <hr class="uk-divider-small">
                                    </div>

                                    <div class="col-md-12 ">
                                        <div class="card ">
                                            <div class="card-header ">
                                                <h3 class="text-center alinhar-h"><strong>Total Produzido Hoje</strong></h3>
                                                <p><h2 class="text-center "><strong>90</strong></h2></p>
                                            </div><hr class="uk-divider-small">
                                        </div>
                                    </div>
                                </div>

                            <div class="row rodape-card">

                            </div>
                        </div>
                    </div> {{--col-lg3--}}
                </div>
            </div>
        </div>

        {{--  indicadores md  --}}
    
        {{--<div class="row">
            <div class="col-lg-12">
                <div class="container">
                    <div class="col-lg-3  col-md-2 col-sm-2 col-md-offset-1 indicador-md">
                        <p><h4 class="text-center">Produção Diária</h4></p>
                        <p class="text-center"><img src="#" alt="" class="img-circle fa fa-user-circle-o fa-5x"></p>
                    </div>
                    <div class="col-lg-3  col-md-2 col-sm-2 indicador-md">
                        <p><h4 class="text-center">Produção Semanal</h4></p>
                        <p class="text-center"><img src="#" alt="" class="img-circle fa fa-user-circle-o fa-5x"></p>
                    </div>
                    <div class="col-lg-3  col-md-2 col-sm-2 indicador-md">
                        <p><h4 class="text-center">Produção Mensal</h4></p>
                        <p class="text-center"><img src="#" alt="" class="img-circle fa fa-user-circle-o fa-5x"></p>
                    </div>
                </div>
            </div>
        </div>--}}
    </div>

@endsection