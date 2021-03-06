@extends('layouts.app')

@section('content')
<div class="background-login">
  <div class="container">
    <div class="row">

    </div>
    <div class="row">
      <h5 class="left">Criar Conta</h4>
    </div>
    <div class="row">
      <div class="card-panel white">
        <div class="row">
          <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
            {{ csrf_field() }}

            <div class="input-field col s12">
              <input type="text" name="name" value="{{ old('name') }}" class="validate" autofocus>
              <label>Nome</label>
              @if ($errors->has('name'))
              <span>
                <strong>{{ $errors->first('name') }}</strong>
              </span>
              @endif
            </div>
            <div class="input-field col s12">
              <input type="text" name="email" value="{{ old('email') }}" class="validate">
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
            <div class="input-field col s12">
              <input type="password" name="password_confirmation" value="{{ old('password_confirmation') }}" class="validate">
              <label>Confirme a senha</label>
              @if ($errors->has('password_confirmation'))
              <span>
                <strong>{{ $errors->first('password_confirmation') }}</strong>
              </span>
              @endif
            </div>
            <button class="btn green">Cadastrar</button>
          </form>
        </div>

      </div>
    </div>

  </div>
</div>

@endsection