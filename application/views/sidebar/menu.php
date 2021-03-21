<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>M.Alvarez S.I</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Nose">

    <style>
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
    </style>

  <link rel="stylesheet" href="/<?=base_url('plugins/select2/css/select2.min.css')?>">
    <link href="/<?=base_url('')?>/assets/css/product.css" rel="stylesheet">

    <link href="/<?=base_url('')?>/assets/css/bootstrap.min.css" rel="stylesheet">

    
  <link rel="stylesheet" href="/<?=base_url('/plugins/fontawesome-free/css/all.min.css')?>">

   <link rel="stylesheet" href="/<?=base_url('assets/css/select-propio.css')?>">
  </head>
  <body>
  

  <nav class="navbar navbar-expand-lg navbar-dark" aria-label="Ninth navbar example">
    <div class="container-xl">
      <!--a class="navbar-brand" href="#">Proyecto A</a-->
	  <div class="row" style="width: 100%;">
		<div class="row">
			<a href="/<?=site_url('')?>" style="width: auto;"><img id="logo" src="/<?=base_url('')?>/assets/img/logo.png"></a>
		</div>
		<hr>
		<div class="row">	
				<button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample07XL" aria-controls="navbarsExample07XL" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
				</button>
			
				<div class="navbar-collapse collapse" id="navbarsExample07XL" style=""></div>
			  
				<ul class="navbar-nav" style="padding-left: 1%; padding-bottom: 1%;">
				
				  <li class="nav-item active" style="padding-right: 10%;">
					<a class="nav-link" aria-current="page" href="/<?=site_url('')?>">Inicio</a>
				  </li>
				  <li class="nav-item">
					<a class="nav-link" style="padding-right: 10%;" href="/<?=site_url('catalogo')?>">Propiedades</a>
				  </li>
				  <li class="nav-item" style="padding-left: 70%;">
				  
					<a class="ingresar nav-link" style="color: #fff;" href="/<?=site_url('login')?>" tabindex="-1"><i class="fas fa-user-lock"></i> Login</a>
				  </li>
				  <!--
				  <li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="dropdown07XL" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</a>
					<ul class="dropdown-menu" aria-labelledby="dropdown07XL">
					  <li><a class="dropdown-item" href="#">Action</a></li>
					  <li><a class="dropdown-item" href="#">Another action</a></li>
					  <li><a class="dropdown-item" href="#">Something else here</a></li>
					</ul>
				  </li>
				  -->
				</ul>
				</div>
        <!--
        <form>
          <input class="form-control" type="text" placeholder="Search" aria-label="Search">
        </form>
      -->
		<hr>
		</div>
      </div>
  </nav>
</body>
      <!--
      <header class="site-header sticky-top py-1">
        <nav class="container d-flex flex-column flex-md-row justify-content-between">
          <a class="py-2" href="#" aria-label="Product">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="d-block mx-auto" role="img" viewBox="0 0 24 24"><title>Product</title><circle cx="12" cy="12" r="10"/><path d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94"/></svg>
          </a>
          <a class="py-2 d-none d-md-inline-block" href="/<?=site_url('')?>">Inicio</a>
          <a class="py-2 d-none d-md-inline-block" href="/<?=site_url('catalogo')?>">Catalogo</a>
          <a class="py-2 d-none d-md-inline-block" href="/<?=site_url('login')?>">Iniciar Sesión</a>
          <!--<a class="py-2 d-none d-md-inline-block" href="/<?=site_url('dashboard')?>">Iniciar Sesión</a>-->
        <!--</nav>
      </header>
    -->
    </div>

<!-- Cuerpo -->




<script src="/<?=base_url('plugins/jquery/jquery.min.js')?>"></script>
 <script src="/<?=base_url('')?>/assets/js/bootstrap.bundle.min.js"></script>

<script src="/<?=base_url('plugins/select2/js/select2.full.js')?>"></script>