@extends('layouts.app')
@section('content')

<style>
    .formlogin {
        margin: 0 auto;
        max-width: 600px;
        width: 90%;
    }
</style>


<div class="background-login">
    <div class="container">
        <div class="formlogin">
            <div class="row">
            </div>
            <div class="row">
                <div class="col s12 m10 l8 offset-m1 offset-l2">
                    <div class="card-panel white"><center><img class="responsive-img" src="/imagens/icone-aluno.png" </i> <center>
                        <h6>Bem-vindo!</h6>
                        <label>Insira suas Credenciais</label>
                        @if (session('status'))
                        <div class="card">
                            {{ session('status') }}
                        </div>
                        @endif
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                            {{ csrf_field() }}
                            <div class="input-field col s12">
                                <input type="text" name="email" value="{{ old('email') }}" class="validate"
                                    autofocus>
                                <label>E-mail</label>
                                @if ($errors->has('email'))
                                <span>
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="input-field col s12">
                                <input type="password" name="password" value="{{ old('password') }}" class="validate">
                                <label>Senha</label>
                                @if ($errors->has('password'))
                                <span>
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="row">
                            </div>
                            <div class="checkbox">
                                <input type="checkbox" class="filled-in" id="remember"
                                    {{ old('remember') ? 'checked' : '' }} />
                                <label for="remember">Lembrar-me</label>
                            </div>
                            <div class="row">
                            </div>
                            <center><a href="{{ url('/password/reset') }}">Esqueceu sua Senha?</a>
                                <center>

                                    <div class="row">
                                    </div>
                                    <button class="btn blue">Entrar</button>

                        </form>
                        <div class="row">
                        </div>
                        <div class="divider"></div>
                        <div class="row">
                        </div>
                        <a title="Registrar" class="btn green" href="{{ url('/register') }}">Registre-se</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection