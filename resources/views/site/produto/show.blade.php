@extends('layouts.app')

@section('content')

<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col"></th>
            <th scope="col">Produto</th>
            <th scope="col">valor</th>
            <th scope="col">quantidade</th>
            <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($produtos as $produto)
        <tr id="produto_{{ $produto->id }}">
            <th scope="row">{{ $produto->id }}</th>
            <td> <input type="checkbox" name="" id=""> </td>
            <td>{{ $produto->nome}}</td>
            <td>R$ {{ $produto->preco}}</td>
            <td>{{ $produto->quantidade}}</td>
            <th scope="col">
                <a href="/produto/{{ $produto->id }}" class="btn btn-primary btn-sm active" role="button" aria-pressed="true">Editar</a>
                <button type="button" class="btn btn-danger btn-sm btnDelete" produto="{{ $produto->id }}">delete</button>
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
            let produto = $(this).attr('produto')
            $.ajax({
                method: "delete",
                url: "/api/produto/"+produto,
                cache: false,
            })    
            .done(function(msg){
                alert(msg.message)
                $("#produto_"+produto).remove();
                console.log(msg)
            })
            .fail(function(e){
                alert(e.responseText)
            })
            
        })
    })
</script>
@endsection