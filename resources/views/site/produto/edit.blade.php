@extends('layouts.app')

@section('content')

<form id="produto" onsubmit="return false">
    <div class="form-group">
        <label for="txtNome">Nome:</label>
    <input type="text" class="form-control" value="{{ $produto[0]->nome }}" name="nome" id="txtNome" required>
    </div>
    <div class="form-group">
        <label for="txtCodigo">Código:</label>
        <input type="text" class="form-control" value="{{ $produto[0]->codigo }}" name="codigo" id="txtCodigo" required>
    </div>
    <div class="form-group">
        <label for="txtQuantidade">Quantidade:</label>
        <input type="text" class="form-control" value="{{ $produto[0]->quantidade }}" name="quantidade" id="txtQuantidade" required>
    </div>
    <div class="form-group">
        <label for="txtPreco">Preço:</label>
        <input type="text" class="form-control" value="{{ $produto[0]->preco }}" name="preco" id="txtPreco" required>
    </div>
    <div class="form-group">
        <label for="txtaDescricao">Descrição:</label>
    <textarea class="form-control" id="txtaDescricao" rows="3" name="descricao">{{ $produto[0]->descricao }}</textarea>
    </div>

    <div class="form-group">
        <label for="ckbAtivo">Ativo:</label>
        <input type="checkbox" id="ckbAtivo">
    </div>
    
    <button type="submit" class="btn btn-primary">Atualizar</button>
</form>
@endsection

@section('scripts')
<script>
    $(document).ready(function() { 
        $("#produto").submit(function (e){
            e.preventDefault();
           
            let data = $('#produto').serialize();
            let ativo = 0;

            if ($('#ckbAtivo').is(':checked')){
                ativo = 1;
            }

            $.ajax({
                method: "PUT",
                url: "/api/produto/{{ $produto[0]->id }}",
                cache: false,
                data: $('#produto').serialize()+"&ativo="+ativo
            })    
            .done(function(msg){
                alert(msg.message)
            })
            .fail(function(e){
                alert(e.responseText)
            })
        })
    })
</script>
@endsection

