<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>MALVAREZ - S.I</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Nose">

    <style>
       html {
          min-height: 100%;
          position: relative;
          zoom: 90%;
        }
        body{
          /*padding-bottom: 240px;*/
        }
      .portada{
       background: url('assets/img/puerto-madero.jpg') no-repeat fixed center;
       -webkit-background-size: cover;
       -moz-background-size: cover;
       -o-background-size: cover;
       background-size: cover;
       height: 100%;
       width: 100% ;
       text-align: center; 
      }
      .emprendimiento{
       background: url('..//assets/img/img-emprendimientos.jpg') no-repeat fixed center;
       -webkit-background-size: cover;
       -moz-background-size: cover;
       -o-background-size: cover;
       background-size: cover;
       height: 100%;
       width: 100% ;
     }
      img.dest-img{
       -webkit-background-size: cover;
       -moz-background-size: cover;
       -o-background-size: cover;
       background-size: cover;
       height: 100%;
       width: 100% ;
       text-align: center; 
      }
	  
  	  .ingresar {
  		background: #d91a1b;
  		border-radius: 12px;
  		max-width: 100px;
  		white-space: nowrap;
  		}

/*
      .navbar-nav li {
      border-right: 1px solid #c8c9ca;
      float: left;
      list-style: none outside none;
      padding-left: 5px;
      padding-right: 5px;
      width: auto;
      }
      .navbar-nav li:last-child {
      border-right:none;
      }
*/
</style>

<link rel="stylesheet" href="/<?=base_url('plugins/select2/css/select2.min.css')?>">

<!--
  <link href="/<?=base_url('')?>/assets/css/product.css" rel="stylesheet">
-->

 <link href="/<?=base_url('')?>/assets/css/bootstrap.min.css" rel="stylesheet">

<!--
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
-->
<link rel="stylesheet" href="/<?=base_url('/plugins/fontawesome-free/css/all.min.css')?>">

<!--
  <link rel="stylesheet" href="/<?=base_url('assets/css/select-propio.css')?>">
-->

</head>
<body>
<header>

<div class="container-xl">
<div class="row" style="width: 100%; justify-content: center;">

  <div class="row d-none d-sm-none d-md-block" style="text-align: -webkit-center;margin-top: 15px;margin-bottom: 15px;">
    <a href="/./Malvarezsi/index.php"><img id="logo" style="width: 325px;" src="/./Malvarezsi//assets/img/logo-head.png"></a>
  </div>

  <hr>
  <div class="row"> 
    <nav class="navbar navbar-expand-lg navbar-light " style="padding-bottom: 1%;">      
     
      <img class="d-block d-sm-block d-md-none" id="logo" style="width: 30%;" src="/<?=base_url('')?>/assets/img/logo-head.png">
     
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button> 
      <div class="collapse navbar-collapse" id="navbarTogglerDemo01" style="justify-content: center;">
        <ul class="navbar-nav" style="padding-bottom: 1%;justify-content: center;font-weight: bold;">   
          <li class="nav-item active">
             <a class="nav-link" aria-current="page" href="/<?=site_url('')?>">Inicio</a>
            </li>
            <li class="nav-item">
             <a class="nav-link" href="/<?=site_url('nosotros')?>">Nosotros</a>
            </li>
            <li class="nav-item">
             <a class="nav-link" href="/<?=site_url('catalogo-alquileres')?>">Alquileres</a>
            </li>
            <li class="nav-item">
             <a class="nav-link" href="/<?=site_url('catalogo?ventas')?>">Ventas</a>
            </li>
            <li class="nav-item">
             <a class="nav-link" href="/<?=site_url('emprendimientos')?>">Emprendimientos</a>
            </li>
            <li class="nav-item">
             <a class="nav-link" href="/<?=site_url('mantenimiento')?>">Mundo Inmobiliario</a>
            </li>
            <li class="nav-item">
             <a class="nav-link" href="/<?=site_url('contacto')?>">Contacto</a>
            </li>
        </ul> 
      </div>
    </nav>
  </div>
</div>
</div>
<!--
</div>
-->

</header>
</body>    
    </div>

<!-- Cuerpo -->


<script src="/<?=base_url('plugins/jquery/jquery.min.js')?>"></script>

<script src="/<?=base_url('')?>/assets/js/bootstrap.min.js"></script>

<script src="/<?=base_url('')?>/assets/js/sweetalert2@11.js"></script>
<!--
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
-->

<script src="/<?=base_url('plugins/select2/js/select2.full.js')?>"></script>