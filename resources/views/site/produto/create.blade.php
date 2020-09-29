@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-8 order-md-1 offset-md-2">
        <form id="cadastro-produto" onsubmit="return false">
            <div class="mb-3">
                <label for="txtNome">Nome</label>
                <input type="text" class="form-control" name="nome" id="txtNome" required>
            </div>
            <div class="mb-3">
                <label for="txtCodigo">Código</label>
                <input type="text" class="form-control" name="codigo" id="txtCodigo" required>
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="txtQuantidade">Quantidade</label>
                    <input type="text" class="form-control" name="quantidade" id="txtQuantidade" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="txtPreco">Preço</label>
                    <input type="text" class="form-control" name="preco" id="txtPreco" required>
                </div>
            </div>
            <div class="mb-3">
                <label for="txtaDescricao">Descrição</label>
                <textarea class="form-control" id="txtaDescricao" rows="3" name="descricao"></textarea>
            </div>
            
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
    </div>
</div>
@endsection

@section('scripts')
<script>
    $(document).ready(function() { 
        $("#cadastro-produto").submit(function (e){
            e.preventDefault();

            let senha = $('#pwdSenha').val();
            let confirmaSenha = $('#pwdConfirmma').val();

            if( senha != confirmaSenha) {
                alert('senhas diferentes');
                return false;
            }
            $.ajax({
                method: "POST",
                url: "/api/produto/create",
                cache: false,
                data: $('#cadastro-produto').serialize()
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

