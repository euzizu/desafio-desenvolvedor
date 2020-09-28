@extends('layouts.app')

@section('content')

<form id="cadastro-cliente" onsubmit="return false">
    <div class="form-group">
        <label for="txtNome">Nome:</label>
        <input type="text" class="form-control" value="{{ $cliente[0]->nome }}" name="nome" id="txtNome" required>
    </div>
    <div class="form-group">
        <label for="txtCPF">CPF:</label>
        <input type="text" class="form-control" value="{{ $cliente[0]->cpf }}" name="cpf" id="txtCPF" required>
    </div>
    <div class="form-group">
        <label for="txtEmail">E-mail:</label>
        <input type="text" class="form-control" value="{{ $cliente[0]->email }}" name="email" id="txtEmail" required>
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
        $("#cadastro-cliente").submit(function (e){
            e.preventDefault();
           
            let data = $('#cadastro-cliente').serialize();
            let ativo = 0;

            if ($('#ckbAtivo').is(':checked')){
                ativo = 1;
            }

            $.ajax({
                method: "PUT",
                url: "/api/cliente/{{ $cliente[0]->id }}",
                cache: false,
                data: $('#cadastro-cliente').serialize()+"&ativo="+ativo
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

