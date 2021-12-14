
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="{{asset('frontend/assets/bootstrap-4/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css" rel="stylesheet">
    <link href="{{asset('frontend/assets/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/assets/slick-slider/slick/slick-theme.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/assets/slick-slider/slick/slick.css')}}" rel="stylesheet">
    <link href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="{{asset('frontend/assets/css/AdminLTE.min.css')}}">
    <title>{{config('app.name')}}</title>
     @livewireStyles
  </head>
  <body>

    @livewireStyles
    
  </head>
  <body>
     


    @include('layouts.frontend.components.header')

    @yield('content')

    <!-- Footer -->
   @livewireScripts

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="{{asset('frontend/assets/slick-slider/slick/slick.min.js')}}"></script>
    <script src="{{asset('frontend/assets/bootstrap-4/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/custom.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script src="{{asset('frontend/assets/js/app.min.js')}}"></script>
  </body>
</html>


