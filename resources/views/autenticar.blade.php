@extends('layouts.app')

@section('content')
    <div class="container autenticar">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-md-offset-3">
                <div class="panel panel-default panel-head">
                    <div class="panel-heading panel-head ">
                        <h3 class="cor-h3">Logar no sistema <small><strong><a class="botao-cadastrar" href="#" data-toggle="modal" data-target="#myModal">Cadastrar</a></strong></small></h3> 
                        <!--Div Modal-->
                        <div class="col-md-4 col-md-offset-6">
                            <!-- Modal -->
                            <div class="modal fade modal-margem" id="myModal" role="dialog">
                                <div class="modal-dialog">

                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h3 class="cor-h3 modal-title">Cadastrar</h3>
                                        </div>
                                        <div class="modal-body">
                                            @include('layouts._includes.formCadastro')
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                                <div class="col-md-6 col-md-offset-3">
                                    <input type="text" class="form-control input-lg" placeholder="Usuário" name="username"  required autofocus>

                                    @if ($errors->has('username'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <div class="col-md-6 col-md-offset-3">
                                    <input  type="password" class="form-control input-lg" placeholder="Senha" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-3">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" class="uk-checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Mantenha-me conectado
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-2 col-md-offset-3">
                                    <button type="submit" class="btn btn-success">
                                        Entrar
                                    </button>

                                    {{--<a class="btn btn-link" href="{{ route('password.request') }}">--}}
                                        {{--Forgot Your Password?--}}
                                    {{--</a>--}}
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
