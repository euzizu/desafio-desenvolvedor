<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        
               
        @yield('css-style')
        <title>teste</title>
    </head>
    <body>
        <div class="container">
            @yield('content')
        </div>
    </body>
    
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    
    @yield('scripts')
</html>