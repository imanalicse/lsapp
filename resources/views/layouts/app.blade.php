<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">       
        @include('inc.navbar')
        <div class="container">
            @include('inc.messages')
            @yield('content')
        </div>       
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    <script src="{{url('vendor/unisharp/laravel-ckeditor/ckeditor.js')}}"></script>
    <script>
        if(jQuery("#article-ckeditor").length > 0) {
            CKEDITOR.replace( 'article-ckeditor' );
        }
    </script>
    
</body>
</html>
