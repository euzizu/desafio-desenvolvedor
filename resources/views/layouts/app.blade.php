<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        @yield('css-style')
        <title>Desafio desenvolvedor</title>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="#">Desafio desenvolvedor</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
        
                <div class="collapse navbar-collapse" id="navbarsExample07">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/">Loja</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/produto">Cadastrar produto</a>
                    </li>                    
                    <li class="nav-item">
                        <a class="nav-link" href="/login">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-outline-primary" href="/cliente">Signin</a>
                    </li>
                </ul>
                
                </div>
            </div>
        </nav>
        <br>
        <div class="container">
            @yield('content')
        </div>
    </body>
    
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    
    <script>
        $(document).ready(function(){
            $(".nav-item").click(function(e){
                $(".nav-item").removeClass('active');
                $(this).addClass('active');
            });
        })
    </script>
    @yield('scripts')
</html>