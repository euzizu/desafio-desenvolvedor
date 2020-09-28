@extends('layouts.app')

@section('content')

<form id="cadastro-cliente" onsubmit="return false">
    <div class="form-group">
        <label for="txtNome">Nome:</label>
        <input type="text" class="form-control" name="nome" id="txtNome" required>
    </div>
    <div class="form-group">
        <label for="txtCPF">CPF:</label>
        <input type="text" class="form-control" name="cpf" id="txtCPF" required>
    </div>
    <div class="form-group">
        <label for="txtEmail">E-mail:</label>
        <input type="text" class="form-control" name="email" id="txtEmail" required>
    </div>
    <div class="form-group">
        <label for="pwdSenha">Senha:</label>
        <input type="password" class="form-control" name="senha" id="pwdSenha" required>
    </div>
    <div class="form-group">
        <label for="pwdConfirma">Confirmar Senha:</label>
        <input type="password" class="form-control" id="pwdConfirmma" required>
    </div>
    
    <button type="submit" class="btn btn-primary">Cadastrar</button>
</form>
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
                console.log(msg)
            })
            .fail(function(e){
                alert(e.responseText)
            })
        })
    })
</script>
@endsection

