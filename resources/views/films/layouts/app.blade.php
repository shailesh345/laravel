<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
 <link rel="stylesheet" type="text/css" href="{{URL::asset('css/style.css')}}">
 
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 
        <title>Codeline Laravel Task</title>

    </head>
    <body>
      @include('films.layouts.inc.navbar')
    <div class="container">
     <div class="row">
    @if(Request::is('/'))
    @include('films.layouts.inc.showcase')
    @endif
    
     <div class="col-md-8 col-lg-8">
    @include('films.layouts.inc.notification')
    @yield('content')
    
   
    </div>
    <div class="col-md-4 col-lg-4">
    @yield('sidebar')
    
    </div>
    
    </div>
    </div>
      
      <footer class="footer">
      <p>Copyright 2018 &copy; Codeline</p>
      </footer>
        
        
     
    </body>
</html>
