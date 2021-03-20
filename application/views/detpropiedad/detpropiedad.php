   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback">
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
	  .bg-gray {
		background-color: #f5f5f5 !important;
	  }
	  .form-group {
		margin-bottom: 20px;
	  }
	  .btn-default1, .btn-default2:hover {
		color: #fff;
		background-color: #d91a1ba1;
		border-color: transparent;
	  }
	  .form-control {
		appearance: auto;
	  }
    </style>
    
  </head>
  <body>    

<main>
	<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
		  <div class="col-sm-6"><h1>
            <a href="" data-toggle="tooltip" title="" data-placement="top" data-original-title="Volver"><i class="fas fa-arrow-left"></i></a>
            Grand Bourg</h1>
          </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card card-solid">
        <div class="card-body">
          
		  <form action="./sitio/index.php/../../postPropiedad" method="POST" class="needs-validation" novalidate="">
		  <div class="row">
				<div class="col-12 col-sm-6">
				  <div class="col">
			<div class="card shadow-sm">        
			<div id="carouselExampleIndicators" class="carousel slide" style="width: 100%;">
			  <ol class="carousel-indicators">
			  <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
			  <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
			  <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
			  </ol>
			  <div class="carousel-inner">
			  <div class="carousel-item active">
				<img src="<?=base_url('../../assets/img/casa1.jpg')?>" class="d-block w-100" alt="...">
			  </div>
			  <div class="carousel-item">
				<img src="<?=base_url('../../assets/img/ph1.jpg')?>" class="d-block w-100" alt="...">
			  </div>
			  <div class="carousel-item">
				<img src="<?=base_url('../../assets/img/casa2.jpg')?>" class="d-block w-100" alt="...">
			  </div>
			  </div>
			  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
			  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			  <span class="visually-hidden">Previous</span>
			  </a>
			  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
			  <span class="carousel-control-next-icon" aria-hidden="true"></span>
			  <span class="visually-hidden">Next</span>
			  </a>
			</div>
		   </div>
		  </div>
				</div>           
		
			<div class="col-12 col-sm-6">
              <h3 class="my-3">LOWA - $80.00</h3>
              <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terr.</p>

			 
				<input type="text" class="form-control" id="id" name="id" hidden="">
        		  
					  <div class="row"> 
						<div class="col-4">
						  <div class="form-group">
							<label for="situacion">Situación</label>
							<input type="text" class="form-control" id="Situacion" name="Situacion" placeholder="Situación">
						  </div>
						</div>
						<div class="col-4">
						  <div class="form-group">
							<label for="expensas">Expensas</label>
							<input type="text" class="form-control" id="Expensas" name="Expensas" placeholder="Expensas">
						  </div>
						</div>
						 <div class="col-4">
						  <div class="form-group">
							<label for="orientacion">Orientación</label>
							<input type="text" class="form-control" id="Orientacion" name="Orientacion" placeholder="Orientación">
						  </div>
						</div>
					  </div>
					  <div class="row">  
						<div class="col-2" style="padding-right: 30px">
						  <div class="form-group">
							<label for="ambientes">Ambientes</label>
							<input type="number" class="form-control" id="Ambientes" name="Ambientes" placeholder="0" min="0">
						  </div>
						</div>
						<div class="col-2">
						  <div class="form-group">
							<label for="dormitorios">Dormitorios</label>
							<input type="number" class="form-control" id="Dormitorios" name="Dormitorios" placeholder="0" min="0">
						  </div>
						</div>
						<div class="col-2">
						  <div class="form-group">
							<label for="bano">Baños</label>
							<input type="number" class="form-control" id="Bano" name="Bano" placeholder="0" min="0">
						  </div>
						</div>
						<div class="col-2">
						  <div class="form-group">
							<label for="cochera">Cocheras</label>
							<input type="number" class="form-control" id="Cochera" name="Cochera" placeholder="0" min="0">
						  </div>
						</div>
						<div class="col-2">
						  <div class="form-group">
							<label for="pisos">Pisos</label>
							<input type="number" class="form-control" id="Pisos" name="Pisos" placeholder="0" min="0">
						  </div>
						</div>
						<div class="col-2">
						  <div class="form-group">
							<label for="antiguedad">Antiguedad</label>
							<input type="number" class="form-control" id="Antiguedad" name="Antiguedad" placeholder="0" min="0">
						  </div>
						</div>


					  </div>



					  <div class="row"> 
						<div class="col-4">
						  <div class="form-group">
							<label for="situacion">Situación</label>
							<input type="text" class="form-control" id="Situacion" name="Situacion" placeholder="Situación">
						  </div>
						</div>
						<div class="col-4">
						  <div class="form-group">
							<label for="expensas">Expensas</label>
							<input type="text" class="form-control" id="Expensas" name="Expensas" placeholder="Expensas">
						  </div>
						</div>
						 <div class="col-4">
						  <div class="form-group">
							<label for="orientacion">Orientación</label>
							<input type="text" class="form-control" id="Orientacion" name="Orientacion" placeholder="Orientación">
						  </div>
						</div>
					  </div>




					  <div class="row">
					   
						<div class="col-4">
						  <div class="form-group">
							<label for="disposicion">Disposición</label>
							<input type="text" class="form-control" id="Disposicion" name="Disposicion" placeholder="Disposición">
						  </div>
						</div>
						<div class="col-4">
						  <div class="form-group">
							<label for="estado">Estado</label>
							<input type="text" class="form-control" id="Estado" name="Estado" placeholder="Estado">
						  </div>
						</div>
						<div class="col-4">
						  <div class="form-group">
							<label for="descripcion">Descripción</label>
							<input type="text" class="form-control" id="Descripcion" name="Descripcion" placeholder="Descripción">
						  </div>
						</div>
					  </div>
				</div>
				</div>
				<div class="row">
				<div class="col-12 col-sm-6">
				<div class="row mt-4">
					<nav class="w-100">
					  <div class="nav nav-tabs" id="product-tab" role="tablist">
						<a class="nav-item nav-link active" id="product-desc-tab" data-toggle="tab" href="#product-desc" role="tab" aria-controls="product-desc" aria-selected="true">Descripción</a>
					  </div>
					</nav>
					<div class="tab-content p-3" id="nav-tabContent">
					  <div class="tab-pane fade show active" id="product-desc" role="tabpanel" aria-labelledby="product-desc-tab"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vitae condimentum erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed posuere, purus at efficitur hendrerit, augue elit lacinia arcu, a eleifend sem elit et nunc. Sed rutrum vestibulum est, sit amet cursus dolor fermentum vel. Suspendisse mi nibh, congue et ante et, commodo mattis lacus. Duis varius finibus purus sed venenatis. Vivamus varius metus quam, id dapibus velit mattis eu. Praesent et semper risus. Vestibulum erat erat, condimentum at elit at, bibendum placerat orci. Nullam gravida velit mauris, in pellentesque urna pellentesque viverra. Nullam non pellentesque justo, et ultricies neque. Praesent vel metus rutrum, tempus erat a, rutrum ante. Quisque interdum efficitur nunc vitae consectetur. Suspendisse venenatis, tortor non convallis interdum, urna mi molestie eros, vel tempor justo lacus ac justo. Fusce id enim a erat fringilla sollicitudin ultrices vel metus. </div>
					</div>
				</div>
				</div>				
				<div class="col-12 col-sm-6">
					<div class="row mt-4">
						<nav class="w-100">
						  <div class="nav nav-tabs" id="product-tab" role="tablist">
							<a class="nav-item nav-link active" id="product-desc-tab" data-toggle="tab" href="#product-desc" role="tab" aria-controls="product-desc" aria-selected="true">Contacto</a>
						  </div>
						</nav>
					</div>
					<div class="p-3">
						<div class="row">
							<div class="col-6">
							  <div class="form-group">
								<label for="nombre">Nombre</label>
								<input type="text" class="form-control" id="Nombre" name="Nombre">
							  </div>
							</div>
							<div class="col-6">
							  <div class="form-group">
								<label for="tel">Teléfono</label>
								<input type="text" class="form-control" id="Tel" name="Tel">
							  </div>
							</div>
						</div>
						<div class="col">
						  <div class="form-group">
							<label for="email">Email</label>
							<input type="text" class="form-control" id="Email" name="Email" placeholder="usuario@ejemplo.com">
						  </div>
						</div>
						<div class="col">
						  <div class="form-group">
							<label for="msj">Mensaje</label>
							<input type="text" class="form-control" id="Msj" name="Msj">
						  </div>
						</div>
						<div class="mt-4" style="float: right;">
							<div class="btn btn-primary btn-lg btn-flat">
							  <i class="fas fa-cart-plus fa-lg mr-2"></i>
							  Consultar
							</div>
						  </div>
					  </div>
					  
				</div>
				  
			</form>           
              
          
          
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  
</main>



