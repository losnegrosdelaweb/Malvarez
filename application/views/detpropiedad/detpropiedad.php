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
	  .bg-light {
      min-height: 450px;
    }
    .fontStyle {
      background-color: #181919db!important;
      border-radius: 15px;
    }
    .badge-venta {
    color: rgb(255, 255, 255);
    background-color: rgb(220, 53, 69);
    border-radius: 0rem;
		}
		.badge-oper {
    color: rgb(255, 255, 255);
    background-color: rgb(0, 0, 0);
    border-radius: 0rem;
		}
		.detalles {
    color: rgb(255, 255, 255);
    background-color: rgb(56, 56, 56);
  	}
    </style>
    
  </head>
  <body>    



<main class="bg-light">
  <div class="container">
	<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header" style="padding-top: 20px;">
          <h6 class="fontStyle fw-normal" style="padding: 0.5%; width: fit-content;"><a href="javascript: history.go(-1)" data-toggle="tooltip" title="" data-placement="top" data-original-title="Volver" style="color: white;"><i class="fas fa-arrow-left"></i> Volver</a></h6>
		</section>
    <section class="content-header">
      <div class="container-fluid">
		  <div class="col-sm-6"><h1> Dirección junto a la altura 9999</h1>
          </div>
      </div><!-- /.container-fluid -->     
      	<div class="row bg-grey py-2 px-3">
           <div class="col-1 badge badge-oper"><h5>VENTA</h5></div>
           <div class="col-1 badge badge-venta" style="width: auto;"><h5><?=$Propiedad->signo_moneda?><?=$Propiedad->precio?></h5></div>
        </div>              
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
          <div  id="carouselExampleIndicators" class="carousel slide"  data-bs-ride="carousel" style="width: 100%;height: 100%;">

            <div class="carousel-inner">
              <?php
                  $cont=0;
                  foreach ($catalogo as $key => $value) {             
                    if($cont==0){
                      echo '<div class="carousel-item active">';
                      }else{
                        echo '<div class="carousel-item">';
                      }
                      echo '<img src="data:image/jpeg;base64,'.$value->base64.'" class="d-block listado-Carrusel" alt="..." style=";-webkit-writing-mode: vertical-lr;">
                          </div>';
                    $cont++;
                  }
              ?>
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
				<div class="card card-primary">
              <div class="card-header detalles">
                <h3 class="card-title">Detalles de la Propieadad</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <strong><i class="fas fa-book mr-1"></i> Tipo propiedad</strong>

                <p class="text">
                  <?=$Propiedad->tipoPropiedad?>
                </p>

                <hr>

                <strong><i class="fas fa-map-marker-alt mr-1"></i> Ubicación</strong>

                <p class="text"><?=$Propiedad->ubicacion?></p>

                <hr>

                <strong><i class="fas fa-pencil-alt mr-1"></i> Superficies</strong>

                <ul class="text">
                  <li class="tag tag-danger">Cubierta: 50 m²</li>
                  <li class="tag tag-success">Semicubierta: 3 m²</li>
                  <li class="tag tag-success">Descubierta: 2 m²</li>
                  <li class="tag tag-info">Total construido: 55 m²</li>
                </ul>

                <hr>

              <strong><i class="far fa-file-alt mr-1"></i> Detalles</strong>
                <ul class="text-muted">
                  <li><b>Ambientes: </b><?=$Propiedad->ambientes?></li>
                  <li><b>Dormitorios: </b><?=$Propiedad->dormitorios?></li>
                  <li><b>baños: </b><?=$Propiedad->banos?></li>
                </ul>
              </div>
              <!-- /.card-body -->
            </div>
              <!--h3 class="my-3">Descripción de la Propiedad</h3>
              <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terr.</p>

				<input type="text" class="form-control" id="id" name="id" hidden=""-->
					  <!--div class="row"> 
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
					  </div-->
					  
					  <!--div class="row">  
						<div class="col-2" style="padding-right: 30px">
						  <div class="form-group">
							<label for="ambientes">Ambientes</label>
							<input type="number" class="form-control" id="Ambientes" name="Ambientes" placeholder="0" min="0" readonly>
						  </div>
						</div>
						<div class="col-2">
						  <div class="form-group">
							<label for="dormitorios">Dormitorios</label>
							<input type="number" class="form-control" id="Dormitorios" name="Dormitorios" placeholder="0" min="0" readonly>
						  </div>
						</div>
						<div class="col-2">
						  <div class="form-group">
							<label for="bano">Baños</label>
							<input type="number" class="form-control" id="Bano" name="Bano" placeholder="0" min="0" readonly>
						  </div>
						</div>
						<div class="col-2">
						  <div class="form-group">
							<label for="cochera">Cocheras</label>
							<input type="number" class="form-control" id="Cochera" name="Cochera" placeholder="0" min="0" readonly>
						  </div>
						</div>
						<div class="col-2">
						  <div class="form-group">
							<label for="pisos">Pisos</label>
							<input type="number" class="form-control" id="Pisos" name="Pisos" placeholder="0" min="0" readonly>
						  </div>
						</div>
						<div class="col-2">
						  <div class="form-group">
							<label for="antiguedad">Antiguedad</label>
							<input type="number" class="form-control" id="Antiguedad" name="Antiguedad" placeholder="0" min="0" readonly>
						  </div>
						</div>
					  </div>

					  <div class="row"> 
						<div class="col-4">
						  <div class="form-group">
							<label for="situacion">Situación</label>
							<input type="text" class="form-control" id="Situacion" name="Situacion" placeholder="Situación" readonly>
						  </div>
						</div>
						<div class="col-4">
						  <div class="form-group">
							<label for="expensas">Expensas</label>
							<input type="text" class="form-control" id="Expensas" name="Expensas" placeholder="Expensas" readonly>
						  </div>
						</div>
						 <div class="col-4">
						  <div class="form-group">
							<label for="orientacion">Orientación</label>
							<input type="text" class="form-control" id="Orientacion" name="Orientacion" placeholder="Orientación" readonly>
						  </div>
						</div>
					  </div>

					  <div class="row">
					   
						<div class="col-4">
						  <div class="form-group">
							<label for="disposicion">Disposición</label><br>
							<input type="text" class="form-control" id="Disposicion" name="Disposicion" placeholder="Disposición" readonly>
						  </div>
						</div>
						<div class="col-4">
						  <div class="form-group">
						  
							<label for="estado">Estado</label>
							<input type="text" class="form-control" id="Estado" name="Estado" placeholder="Estado" readonly>
						  
						  </div>
						</div-->
						<!--div class="col-4">
						  <div class="form-group">
							<label for="descripcion">Descripción</label>
							<input type="text" class="form-control" id="Descripcion" name="Descripcion" placeholder="Descripción">
						  </div>
						</div>
					  </div-->
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
					  <div class="tab-pane fade show active" id="product-desc" role="tabpanel" aria-labelledby="product-desc-tab"> VENTA DEPARTAMENTO 3 AMBIENTES EN NÚÑEZ<br>

Impecable y muy luminoso Departamento al contrafrente, reciclado a nuevo.<br>
Ubicado muy cerca de Av. Cabildo y a la estación Congreso de Tucumán del subte Línea D.<br>

Living Comedor con acceso a Balcón corrido.<br>
Cocina.<br>
Entrada de servicio.<br>
Dormitorio principal con Placard y salida al Balcón.<br>
2° Dormitorio con Placard.<br>
Lavadero con circulación tanto a Cocina como 2° Dormitorio.<br>
Baño completo.<br>
Toilette.<br>

Aberturas nuevas con Blindex.<br>
Pisos de madera.<br>

Apto Mascotas.<br>

Apto Crédito.<br>

Para más información contáctenos: online@ruizpropiedades.com<br>

Sucursal Núñez: 4702-1721<br>
Sucursal Olivos: 4797-4422<br>
Sucursal Villa Adelina: 4763-1003<br>
Sucursal Carapachay: 4756-5099<br>
Sucursal Florida: 4795-0663 </div>
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
							<textarea class="form-control" rows="3" id="Msj" name="Msj"></textarea>
							<!--input type="text" class="form-control" id="Msj" name="Msj"-->
						  </div>
						</div>
						<div class="mt-4" style="float: right;">
							<div class="btn btn-primary btn-lg btn-flat">
							  
							  <!--i class="fas fa-cart-plus fa-lg mr-2"></i-->
							  <i class="fas fa-envelope-open-text"></i>
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
 </div>
</main>



