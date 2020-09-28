@extends('layouts.app')

@section('content')

<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col"></th>
            <th scope="col">Nome</th>
            <th scope="col">Email</th>
            <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($clientes as $cliente)
        <tr id="cliente_{{ $cliente->id }}">
            <th scope="row">{{ $cliente->id }}</th>
            <td> <input type="checkbox" name="" id=""> </td>
            <td>{{ $cliente->nome}}</td>
            <td>{{ $cliente->email}}</td>
            <th scope="col">
                <a href="/cliente/{{ $cliente->id }}" class="btn btn-primary btn-sm active" role="button" aria-pressed="true">Editar</a>
                <button type="button" class="btn btn-danger btn-sm btnDelete" cliente="{{ $cliente->id }}">delete</button>
            </th>
        </tr>
        @endforeach
    </tbody>
  </table>
@endsection

@section('scripts')
<script>
    $(document).ready(function() { 
        
        $('.btnDelete').click(function(){
            let cliente = $(this).attr('cliente')
            $.ajax({
                method: "delete",
                url: "/api/cliente/"+cliente,
                cache: false,
            })    
            .done(function(msg){
                alert(msg.message)
                $("#cliente_"+cliente).remove();
                console.log(msg)
            })
            .fail(function(e){
                alert(e.responseText)
            })
            
        })
    })
</script>
@endsection