<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
   
    @yield('styles')
</head>
<body>
    <div id="app">
        <ul class="">
            <li><a href="{{ route('simple') }}">Simple Table</a></li>
            <li><a href="{{ route('datatable') }}">DataTable</a></li>
            <li><a href="{{ route('datatable-ajax') }}">DataTable AJAX</a></li>
        </ul>

        @yield('content')

    </div>

    <!-- Scripts -->
    
    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
    @yield('javascripts')
</body>
</html>