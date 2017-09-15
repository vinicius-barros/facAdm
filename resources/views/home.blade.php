@extends('layouts.app')
@include('layouts._includes.navHome')
@section('content')
    <div class="container meu-container">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-10 col-md-offset-1 home-icones">
                    <div class="uk-text-center col-md-3">
                        <p><a class="fa fa-line-chart fa-5x icone-painel ico-dash" href="{{ route('dashboard') }}"></a><br>
                            <strong class="rotulo-ico">Painel Produção</strong></p>
                    </div>
                    <div class="uk-text-center col-md-3">
                        <p><a class="fa fa-usd fa-5x icone-painel ico-cf" href="{{ route('financeiro') }}"></a><br>
                            <strong class=" rotulo-ico">Financeiro</strong></p>
                    </div>
                    <div class="uk-text-center col-md-3">
                        <p><a class="fa fa-users fa-5x icone-painel ico-list-users" href="{{ route('funcionario') }}"></a><br>
                            <strong class="rotulo-ico">Funcionários</strong></p>
                    </div>
                    <div class="uk-text-center col-md-3">
                        <p><a class="fa fa-file-text fa-5x icone-painel ico-op" href="{{ route('op') }}"></a><br>
                            <strong class="rotulo-ico">Ordens Produção</strong></p>
                    </div>
                </div>
                <div class="col-md-10 col-md-offset-1">
                    <div class="uk-text-center col-md-3">
                        <p><a class="fa fa fa-wrench fa-5x icone-painel ico-manutencao" href="{{ route('manutencao') }}"></a><br>
                            <strong class="rotulo-ico">Manutenção</strong></p>
                    </div>
                    <div class="uk-text-center col-md-3">
                        <p><a class="fa fa-cart-plus fa-5x icone-painel ico-estoque" href="{{ route('estoque') }}"></a><br>
                            <strong class="rotulo-ico">Estoque</strong></p>
                    </div>
                    <div class="uk-text-center col-md-3">
                        <p><a class="fa fa-list-alt fa-5x icone-painel ico-inventario" href="{{ route('inventario') }}"></a><br>
                            <strong class=" rotulo-ico">Inventário</strong></p>
                    </div>

                    {{--<div class="uk-text-center col-md-2">
                        <p><a class="fa fa-user-plus fa-5x icone-painel ico-add-user"></a><br>
                            <strong class="rotulo-ico">Cad. Funcionário</strong></p>
                    </div>--}}
                </div>
            </div>

        </div>
    </div>
@endsection