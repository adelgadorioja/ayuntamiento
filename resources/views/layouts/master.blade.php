<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Ayuntamiento Cornellá  </title>
    <!-- Styles -->   
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">    
    <link href="{{ asset('css/reset.css') }}" rel="stylesheet">
    <link href="{{ asset('css/generic.css') }}" rel="stylesheet"> 
    <script type="text/javascript" src="{{ asset('js/jquery-3.2.1.js')}}" ></script>
    <script type="text/javascript" src="{{ asset('js/script.js')}}" ></script>

</head>
<body> 

<div>
@include('partials.navbar')
</div>

<div>
@yield('content')
</div>

</body>
</html>



