@extends('layouts.app')

@section('content')
@include('site.cliente.componente.subnav')
<div class="row">
    <div class="col-md-8 order-md-1 offset-md-2">
        <form id="cadastro-cliente" onsubmit="return false">
            <div class="mb-3">
                <label for="txtNome">Nome</label>
                <input type="text" class="form-control" name="nome" id="txtNome" required>
            </div>
            <div class="mb-3">
                <label for="txtCPF">CPF</label>
                <input type="text" class="form-control" name="cpf" id="txtCPF" required>
            </div>
            <div class="mb-3">
                <label for="txtEmail">E-mail</label>
                <input type="text" class="form-control" name="email" id="txtEmail" required>
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="pwdSenha">Senha</label>
                    <input type="password" class="form-control" name="senha" id="pwdSenha" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="pwdConfirma">Confirmar Senha</label>
                    <input type="password" class="form-control" id="pwdConfirmma" required>
                </div>
            </div>
            
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
    </div>
</div>
@endsection

@section('scripts')
<script>
    $(document).ready(function() { 
        $("#cadastro-cliente").submit(function (e){
            e.preventDefault();

            let senha = $('#pwdSenha').val();
            let confirmaSenha = $('#pwdConfirmma').val();

            if( senha != confirmaSenha) {
                alert('senhas diferentes');
                return false;
            }

            $.ajax({
                method: "POST",
                url: "/api/cliente/create",
                cache: false,
                data: $('#cadastro-cliente').serialize()
            })    
            .done(function(msg){
                alert('Cadastro realziado com sucesso')
                window.location.href = "/clientes";
                
            })
            .fail(function(e){
                alert(e.responseText)
            })
        })
    })
</script>
@endsection

