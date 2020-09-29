@extends('layouts.login')

@section('content')
@endsection
<form class="form-signin">
    <div class="text-center mb-4">
        <h1 class="h3 mb-3 font-weight-normal">Desafio desenvolvedor</h1>
    </div>

    <div class="form-label-group">
        <input type="email" id="inputEmail" class="form-control" placeholder="Endereço de email" required="" autofocus="">
        <label for="inputEmail">Endereço de email</label>
    </div>

    <div class="form-label-group">
        <input type="password" id="inputPassword" class="form-control" placeholder="Senha" required="">
        <label for="inputPassword">Senha</label>
    </div>

    <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
</form>
@section('scripts')
<script>
</script>
@endsection