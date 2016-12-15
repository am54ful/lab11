<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="_token" content="{!! csrf_token() !!}"/>
        <title>Laravel</title>
        <!-- CSS -->
        <link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ URL::asset('css/jsgrid.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ URL::asset('css/jsgrid-theme.min.css') }}" rel="stylesheet" type="text/css">
        <!-- script -->
        <script type="text/javascript" src="{{ URL::asset('js/jquery.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('js/jsgrid.min.js') }}"></script>
    </head>
    <body>
    <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      
    </div>
  </div>
</nav>
    @yield('content')
    </body>
</html>