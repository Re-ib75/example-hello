<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>static site - @yield('title')</title>

        @include('partials._stylesheets')
        @yield('stylesheets')
        <!-- Fonts -->

        <!-- Styles -->


    </head>
    <body>

        @include('partials._sidebar')
  <div class="container">
    <div class="row">
        <div class="col-sm-12"></div>
         @yield('content')
    </div>
  </div>




      @include('partials._scripts')
      
    </body>
</html>
