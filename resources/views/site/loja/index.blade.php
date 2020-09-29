@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @foreach ($produtos as $produto)

        <div class="col-md-4">
          <h2>{{ $produto->nome }}</h2>
          <p>{{ $produto->descricao }}</p>
          <p><a class="btn btn-secondary" href="#" role="button">Adicionar</a></p>
        </div>
        @endforeach
    </div>
</div>
    
        
    


@endsection

@section('scripts')
<script>
    
</script>
@endsection

