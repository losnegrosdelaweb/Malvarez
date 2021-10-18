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
    .badge-precio {
    color: rgb(255, 255, 255);
    background-color: rgb(220, 53, 69);
    border-radius: 0rem;
		}
		.badge-exp {
    color: rgb(255, 255, 255);
    background-color: rgb(53, 81, 220);
    border-radius: 0rem;
		}
		.badge-oper {
    color: rgb(255, 255, 255);
    background-color: rgb(0, 0, 0);
    border-radius: 0rem;
		}
		.badge-oper-exp {
    color: rgb(255, 255, 255);
    background-color: rgb(72, 72, 72);
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
      
      	
		 		<div class="col-sm-12"><h1> <?=$Propiedad->titulo?></h1></div>
      <!-- /.container-fluid -->
      	    	
	      	<div class="row bg-grey py-2 px-3">
	           <h5 class="fontStyle fw-normal badge-oper" style="width: min-content; padding: .375rem .75rem;">
	           	<?=$Propiedad->descOper?></h5>
	           	<h5 class="fw-normal badge-precio" style="width: min-content; padding: .375rem .75rem;">
	           	<?=$Propiedad->signo_moneda?><?=$Propiedad->precio?></h5>
	           <!--div class="col-1 badge badge-precio" style="width: auto;padding: .375rem .75rem;"><h5><?=$Propiedad->signo_moneda?><?=$Propiedad->precio?></h5></div-->

	           	<?php
	             if($Propiedad->expensas != NULL && $Propiedad->expensas != '0')
	              {
	                echo '<h5 class="fontStyle fw-normal badge-oper-exp" style="width: min-content; padding: .375rem .75rem;">Expensas</h5>';
	                echo '
	                <h5 class="fw-normal badge-exp" style="width: min-content; padding: .375rem .75rem;">$'.$Propiedad->expensas.'</h5>';
	              }
	            ?>
	        </div>
	      
      
		</section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card card-solid">
        <div class="card-body">
          
		  <form action="./sitio/index.php/../../postPropiedad" method="POST" class="needs-validation" novalidate="">
		  	<input type="text" hidden="hidden" name="propiedadId" id="propiedadId" value="<?=$Propiedad->id_propiedad?>">
		  <div class="row">
				<div class="col-12 col-sm-6">
				  <div class="col" style="width: 100%;height: 100%;">
          <div class="card shadow-sm" style="width: 100%;height: 100%;">        
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
                      echo '<img src="data:image/jpeg;base64,'.$value->base64.'" class="img-fluid d-block listado-Carrusel" alt="..." style="width: 100%;height: 68%;-webkit-writing-mode: vertical-lr;">
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
                <h3 class="card-title">Detalles de la Propiedad</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              	<strong><i class="fas fa-map-marker-alt mr-1"></i> Ubicación • Localidad</strong>
 
                <ul class="text">
                	<li><p class="text"><?=$Propiedad->direccion?>, <?=$Propiedad->ciudad?> - <?=$Propiedad->ubicacion?></p></li>
                </ul>
                <hr>
                <strong><i class="fas fa-book mr-1"></i> Tipo propiedad</strong>

                <ul class="text"><li><p class="text">
                  <?=$Propiedad->tipoPropiedad?>
                </p></li></ul>
                <!--i class="fas fa-pencil-alt mr-1"></i-->
                <?php
	                if($Propiedad->supcub != NULL || $Propiedad->supdesc != NULL || $Propiedad->suptotal != NULL || $Propiedad->supcub != 0 || $Propiedad->supdesc != 0 || $Propiedad->suptotal != 0){
		                echo '<hr>';
		                echo '<strong><i class="fas fa-ruler-combined"></i> Superficies</strong>';		                 
		                echo '<ul class="text">';
		                	if($Propiedad->supcub != NULL && $Propiedad->supcub != 0)
						          {
		                  	echo '<li class="tag tag-danger">Cubierta: ';
		                  	echo $Propiedad->supcub.' m²</li>';
						          }
					            if($Propiedad->supdesc != NULL && $Propiedad->supdesc != 0)
						          {
		                  	echo '<li class="tag tag-success">Descubierta: ';
		                  	echo $Propiedad->supdesc.' m²</li>';
						          }
						          if($Propiedad->suptotal != NULL && $Propiedad->suptotal != 0)
						          {
		                  	echo '<li class="tag tag-info">Total construido: ';
		                  	echo $Propiedad->suptotal.' m²</li>';
						          }                  
		                echo '</ul>';
	              	}                
	                if($Propiedad->ambientes != NULL || $Propiedad->dormitorios != NULL || $Propiedad->banos != NULL || $Propiedad->ambientes != 0 || $Propiedad->dormitorios != 0 || $Propiedad->banos != 0 || $Propiedad->antiguedad != NULL || $Propiedad->cocheras != NULL || $Propiedad->pisos != NULL || $Propiedad->antiguedad != 0 || $Propiedad->cocheras != 0 || $Propiedad->pisos != 0){
	                	echo '<hr>';
	                	echo '<strong><i class="far fa-file-alt mr-1"></i> Detalles</strong>';
	                	echo '<div class="row">';
		                	echo '<div class="col-6">';
		                	echo '<ul class="text">';
		                	if($Propiedad->ambientes != NULL && $Propiedad->ambientes != 0)
						          {
		                		echo '<li>Ambientes: '.$Propiedad->ambientes.'</li>';
		                	}
		                	if($Propiedad->dormitorios != NULL && $Propiedad->dormitorios != 0)
						          {
		                		echo '<li>Dormitorios: '.$Propiedad->dormitorios.'</li>';
		                	}
		                	if($Propiedad->banos != NULL && $Propiedad->banos != 0)
						          {
		                		echo '<li>Baños: '.$Propiedad->banos.'</li>';
		                	}
		                	echo '</ul></div>';
		                	echo '<div class="col-6">';
		                	echo '<ul class="text">';
		                	if($Propiedad->antiguedad != NULL && $Propiedad->antiguedad != 0)
						          {
		                		echo '<li>Antigüedad: '.$Propiedad->antiguedad.'</li>';
		                	}
		                	if($Propiedad->cocheras != NULL && $Propiedad->cocheras != 0)
						          {
		                		echo '<li>Cocheras: '.$Propiedad->cocheras.'</li>';
		                	}
		                	if($Propiedad->pisos != NULL && $Propiedad->pisos != 0)
						          {
		                		echo '<li>Pisos: '.$Propiedad->pisos.'</li>';
		                	}
		                	echo '</ul></div></div>';
	                }
	                if($Propiedad->orientacion != NULL || $Propiedad->condicion != NULL){
		                echo '<hr>';
		                echo '<div class="row">';
		                if($Propiedad->orientacion != NULL)
					          {
		                	echo '<div class="col-6">';
		                	echo '<ul class="text">';		                
	                		echo '<li>Orientación: '.$Propiedad->orientacion.'</li>';
	                		echo '</ul></div>';
	                	}
	                	if($Propiedad->condicion != NULL){
			                echo '<div class="col-6">';
			                echo '<ul class="text">';
	                		echo '<li>Estado: '.$Propiedad->condicion.'</li>';
	                		echo '</ul></div>';
	                	}
	                	echo '</div>';
		              }
	              ?>
              <!-- /.card-body -->
            </div>

				</div>
				</div>
				 </div>
				<div class="row">
				<div class="col-12 col-sm-6">
				<div class="row mt-4">
					<nav class="w-100">
					  <div class="nav nav-tabs" id="product-tab" role="tablist">
						<p class="nav-item nav-link active" id="product-desc-tab" data-toggle="tab" href="#product-desc" role="tab" aria-controls="product-desc" aria-selected="true">Descripción</p>
					  </div>
					</nav>
					<div class="tab-content p-3" id="nav-tabContent">
					  <div class="tab-pane fade show active" id="product-desc" role="tabpanel" aria-labelledby="product-desc-tab">
					   <?php 
              if($Propiedad->descripcion != NULL)
              {
                echo nl2br($Propiedad->descripcion);
              } else {
              	echo ' N/A';
              }
             ?>
						</div>
					</div>
				</div>
				</div>				
				<div class="col-12 col-sm-6">
					<div class="row mt-4">
						<nav class="w-100">
						  <div class="nav nav-tabs" id="product-tab" role="tablist">
							<p class="nav-item nav-link active" id="product-desc-tab" data-toggle="tab" href="#product-desc" role="tab" aria-controls="product-desc" aria-selected="true">Contacto</p>
						  </div>
						</nav>
					</div>
					<div class="p-3">
						<div class="row">
							<div class="col-6">
							  <div class="form-group">
								<label for="nombre">Nombre *</label>
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
							<label for="email">Email *</label>
							<input type="text" class="form-control" id="Email" name="Email" placeholder="usuario@ejemplo.com">
						  </div>
						</div>
						<div class="col">
						  <div class="form-group">
							<label for="msj">Mensaje *</label>
							<textarea class="form-control" rows="3" id="Msj" name="Msj"></textarea>
							<!--input type="text" class="form-control" id="Msj" name="Msj"-->
						  </div>
						</div>
						
						<div class="mt-4" style="float: right;">
							<div class="btn btn-primary btn-lg btn-flat" id="BotonConsultar">
							  
							  <!--i class="fas fa-cart-plus fa-lg mr-2"></i-->
							  <i class="fas fa-envelope-open-text"></i>
							  Consultar
							</div>
						  </div>
				  </div>
					  
					</div>
				</div>
				<div class="row">
					<div class="row mt-4">
					<nav class="w-100">
					  <div class="nav nav-tabs" id="product-tab" role="tablist">
						<p class="nav-item nav-link active" id="product-desc-tab" data-toggle="tab" href="#product-desc" role="tab" aria-controls="product-desc" aria-selected="true">Ubicación</p>
					  </div>
					</nav>
						<?php 
              if($Propiedad->mapa != NULL)
              {
                echo $Propiedad->mapa;
              } else {
              	echo '<iframe src="https://www.google.com/maps" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>';
              }
             ?>


						<!--iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3289.084745544193!2d-58.784092684189325!3d-34.47537435822674!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bc98e1c0d2d5cd%3A0xc4280a97817d5249!2sJuan%20XXIII%204617%2C%20B1667EXD%20Tortuguitas%2C%20Provincia%20de%20Buenos%20Aires!5e0!3m2!1ses-419!2sar!4v1634516514312!5m2!1ses-419!2sar" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe-->
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

<script type="text/javascript">
	

	$("#BotonConsultar").on("click", function(){
		var x =  document.getElementById('Nombre').value;
     if (x == "") {
         Swal.fire({
						  position: 'top-end',
						  icon: 'error',
						  title: 'Nombre no puede quedar vacío.',
						  showConfirmButton: false,
						  timer: 2000
						})
         return false;
     }
     var email =  document.getElementById('Email').value;
     var tel =  document.getElementById('Tel').value;
     if (email == "" && tel == "") {
         Swal.fire({
						  position: 'top-end',
						  icon: 'error',
						  title: 'Debe ingresar un medio de contacto.',
						  showConfirmButton: false,
						  timer: 2000
						})
         return false;
     } else {
         var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
         if(!re.test(email)){
             Swal.fire({
						  position: 'top-end',
						  icon: 'error',
						  title: 'El mail no posee un formato correcto.',
						  showConfirmButton: false,
						  timer: 2000
						})
						return false;
         }
     }
     x =  document.getElementById('Msj').value;
     if (x == "") {
         Swal.fire({
						  position: 'top-end',
						  icon: 'error',
						  title: 'El mensaje no puede quedar vacío.',
						  showConfirmButton: false,
						  timer: 2000
						})
         return false;
     }
		let propiedadId = $("#propiedadId").val();
		$.ajax({
				url: "<?=site_url('../../../enviarMailPropiedad')?>",
				type: 'POST',	
				data: {
					id: propiedadId,
					nombre : $("#Nombre").val(),
					Email:$("#Email").val(),
					Tel:$("#Tel").val(),
					Msj:$("#Msj").val()
				},
				success: function(data){
					console.log(data);
					if(data){
						
						Swal.fire({
						  position: 'top-end',
						  icon: 'success',
						  title: 'Se envio su Consulta.',
						  showConfirmButton: false,
						  timer: 2000
						})
						$("#Nombre").val("");
            $("#Email").val("");
            $("#Tel").val("");
            $("#Msj").val("");
					}else{
						Swal.fire({
						  position: 'top-end',
						  icon: 'error',
						  title: 'Error al enviar la consulta.',
						  showConfirmButton: false,
						  timer: 2000
						})
					}
				},
				error: function(data){

					console.log(data);
					Swal.fire({
						  position: 'top-end',
						  icon: 'error',
						  title: 'Error al enviar la consulta.',
						  showConfirmButton: false,
						  timer: 2000
						})
				}		
			});
	})


</script>



