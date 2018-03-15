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
        <script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.5/jquery-ui.min.js'></script>
          <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

      <title>Ayuntamiento de Cornellá</title>

   
  </head>
 
  <body>
      @include('partials.navbar')   
      @yield('content')       
  </body>
</html>
