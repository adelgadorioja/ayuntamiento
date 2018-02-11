<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   
    <!-- Bootstrap CSS -->
    <link rel="stylesheet"  href="{{ asset('css/reset.css') }}">
      <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" >
      
      <link rel="stylesheet"  href="{{ asset('css/generic.css') }}">
      
       <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="{{ asset('js/jquery-3.2.1.js') }}"></script>
        <script src="{{ asset('js/popper.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>

      <title>Ayuntamiento de Cornellá</title>

   
  </head>
 
  <body>
      @include('partials.navbar')   
      @yield('content')       
  </body>
</html>
