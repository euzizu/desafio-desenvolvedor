<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Exemplo de labels flutuantes, usando Bootstrap.</title>

    <!-- Principal CSS do Bootstrap -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Estilos customizados para esse template -->
    <link href="{{ asset('css/floating-labels.css') }}" rel="stylesheet">]
    @yield('css-style')
</head>
<body>
    
        @yield('content')
    
</body>
<script src="{{ asset('js/jquery.min.js') }}"></script>
    
<script src="{{ asset('js/bootstrap.min.js') }}"></script>

@yield('scripts')
</html>