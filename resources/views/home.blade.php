<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link type="text/css" rel="shortcut icon" href="img/logo-mywebsite-urian-viera.svg"/>
  <title>Cómo saber si un Checkbox esta seleccionado con JQUERY y JAVASCRIPT usando Laravel :: WebDeveloper Urian Viera</title>
  <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/cargando.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/maquinawrite.css') }}">
  <style>
      h3{
          font-weight: 900;
      }
       .dias label{
          color: #ffa200;
          font-weight: 600;
      }
      .personas label{
        color: #563d7c !important;
        font-weight: 600;
      }
      #respDias{
          color: green;
      }
      p{
          background-color: coral;
          color: #fff;
          font-weight: 600;
      }
      #respPersonas{
          color: crimson;
      }
  </style>

</head>
<body>

<div class="cargando">
    <div class="loader-outter"></div>
    <div class="loader-inner"></div>
</div>


<nav class="navbar navbar-expand-lg navbar-light navbar-dark fixed-top" style="background-color: #563d7c !important;">
    <ul class="navbar-nav mr-auto collapse navbar-collapse">
      <li class="nav-item active">
        <a href="{{ ('/') }}"> 
          <img src="{{ asset('img/logo-mywebsite-urian-viera.svg') }}" alt="Web Developer Urian Viera" width="120">
        </a>
      </li>
    </ul>
    <div class="my-2 my-lg-0" id="maquinaescribir">
      <h5 class="navbar-brand">Web Developer Urian Viera <span>&#160;</span></h5>
    </div>
</nav>


<div class="container justify-content mt-7">
    <br><br>
    <br>

<h3 class="text-center mt-5">
    Cómo saber si un Checkbox esta seleccionado con JQUERY y JAVASCRIPT usando Laravel
    <img src="{{ asset('img/laravel.png') }}" alt="Logo"  style="width: 120px;">
</h3>
<hr>


<div class="row justify-content-center">
    <div class="col-6 col-md-6">
        @include('dias')
    </div>


    <div class="col-6 col-md-6">
        @include('personas')
    </div>
</div>


</div>



<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/script.js') }}"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $(window).load(function() {
            $(".cargando").fadeOut(1000);
        });
    });
</script>

</body>
</html>