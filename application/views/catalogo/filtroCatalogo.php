<!--CSS-->
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

    .listado-Carrusel{
      height: 235px!important;
      width: 419px!important;
    }

 </style>   
   
  </head>
  <body>    



<main>
	<div class="row" style="background-color: #f8f9fa!important;">
		<div class="col-3" style="padding-left: 2%;">
			<main class="container text-light">
				<div class="d-flex align-items-center p-3 my-3 bg-purple rounded shadow-sm" style="background-color: #131414!important;" >
					<div class="lh-1">
						<h1 class="h6 mb-0 lh-1" style="font-size: x-large;" >Alquileres</h1>
						<!--<small>Since 2011</small>-->
					</div>
				</div>
				<div class="my-3 p-3 bg-body rounded shadow-sm text-light" style="background-color: #000000eb!important">
					<h6 class="border-bottom pb-2 mb-0">Filtros</h6>
					<div class="d-flex pt-3">
						<div class="col-sm-10">
							<div class="form-check">
								<input class="form-check-input" type="radio" name="gridRadiosMoneda" id="gridRadiosPesos" value="0" checked>
								<label class="form-check-label" for="gridRadiosPesosDolar">
									Pesos/Dólares
								</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="gridRadiosMoneda" id="gridRadiosPesos" value="1">
								<label class="form-check-label" for="gridRadiosPesos">
									Pesos
								</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="gridRadiosMoneda" id="gridRadiosDolar" value="2">
								<label class="form-check-label" for="gridRadiosDolar">
									Dólares
								</label>
							</div>
						</div>
					</div>
					<div class="d-flex pt-3">     
						<div class="form-group">
							<div class="row">
								<div class="col">
									<label>Desde</label>
									<input type="number" id="precioDesde" class="form-control" min="0">
								</div>
								<div class="col">
									<label>Hasta</label>
									<input type="number" id="precioHasta" class="form-control" min="0" >
								</div>
							</div>
						</div>  
					</div>
					<hr>
					<div class="d-flex pt-3">
						<div class="form-group" style="width: 90%;">
							<label>Tipo Propiedad</label>
							<select class="form-control select2 select2-danger select2-hidden-accessible" name="tipoPropiedad" id="tipoPropiedad" data-dropdown-css-class="select2-danger" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
								<option value="0">Todos</option>
								<?php foreach ($listadoTipoPropiedad as $key => $TipoPropiedades) {
									echo '<option class="red-input" value="'.$TipoPropiedades->id_tipo_propiedad.'">'.$TipoPropiedades->descripcion.'</option>';
								} ?>
							</select>     
						</div>
					</div>

				   <div class="d-flex pt-3">
						<div class="form-group" style="width: 90%;">
							<label>Ubicación</label>
							<select class="form-control select2 select2-danger select2-hidden-accessible" name="ubicacion" id="ubicacion" data-dropdown-css-class="select2-danger" style="width: 100%;" data-select2-id="2" tabindex="-1" aria-hidden="true">
								<option value="0">Todos</option>
						     <?php foreach ($listadoUbicacion as $key => $Ubicacion) {
						        echo '<option class="red-input" value="'.$Ubicacion->id_ubicacion.'">'.$Ubicacion->descripcion.'</option>';
						      } ?>
						  </select>     
						</div>
				   </div>

					<div class="d-flex pt-3">     
						<div class="row g-3 align-items-center">
						  <div class="col-auto" style="margin-top: 5%;">
						    <label for="inputPassword6" class="col-form-label">Dormitorios:</label>
						  </div>
						 <div class="col">
								<label>Mínimo</label>
								<input type="number" id="dormitoriosDesde" class="form-control" min="0" max="15">
							</div>
							<div class="col">
								<label>Máximo</label>
								<input type="number" id="dormitoriosHasta" class="form-control" min="0" max="15">
							</div>
						</div>
					</div>  

					<div class="d-flex pt-3">     
						<div class="row g-3 align-items-center">
						  <div class="col-auto" style="margin-top: 5%;">
						    <label for="inputPassword6" class="col-form-label">Ambientes:</label>
						  </div>
						 <div class="col">
								<label>Mínimo</label>
								<input type="number" id="ambientesDesde" class="form-control" min="0" max="15">
							</div>
							<div class="col">
								<label>Máximo</label>
								<input type="number" id="ambientesHasta" class="form-control" min="0" max="15">
							</div>
						</div>
					</div>
					<br>
					<div class="pt-3">  
						 <div class="container">
						    <div class="row">
						      <div class="col">
						          <button class="btn btn-primary me-md-2" id="BtnLimpiarFiltros" type="button">Limpiar</button>
						      </div>

						      <div class="col d-grid gap-2 d-md-flex justify-content-md-end">
						          <button class="btn btn-primary me-md-2" id="BtnAplicarFiltros" type="button">Buscar</button>
						      </div>
						    </div>
						 </div>
						 <br>
						<div id="filtrosAplicados">
							<!-- Filtros Aplicados -->
						</div>
					</div>
				</div>
			</main>
		</div>
		<div class="col-8">
			<div id="divContenedorCatalogo">
				<?= $vista ?>
			</div>
		</div>
	</div>
</main>

<script type="text/javascript">
	$('.select2').select2(); 

	$("#BtnAplicarFiltros").click(function(){ 
		var moneda =$('input:radio[name=gridRadiosMoneda]:checked').val();
		var precioDesde = $('#precioDesde').val();
		var precioHasta = $('#precioHasta').val();
		var tipoPropiedad = $('#tipoPropiedad').val();
		var dormitoriosDesde = $('#dormitoriosDesde').val();
		var dormitoriosHasta = $('#dormitoriosHasta').val();
		var ambientesDesde = $('#ambientesDesde').val();
		var ambientesHasta = $('#ambientesHasta').val();
		var ubicacion = $('#ubicacion').val();
		//var orden = $('#orden').val();

		cargaLoading();

		$.ajax({         
	          url: "<?=site_url('../../filtrarCatalogo')?>",
	          method: 'POST',
	          dataType: 'json',
	          data: {
	          	precioDesde : precioDesde, 
	          	precioHasta : precioHasta, 
	          	tipoPropiedad : tipoPropiedad, 
	          	dormitoriosDesde : dormitoriosDesde, 
	          	dormitoriosHasta : dormitoriosHasta, 
	          	ambientesDesde : ambientesDesde, 
	          	ambientesHasta : ambientesHasta,
	          	ubicacion : ubicacion,
	          	moneda: moneda
	          },

	          success: function(respuesta){	        	
	          $('#filtrosAplicados').empty();

	          setTimeout(function(){ 
	          	$('#divContenedorCatalogo').empty();
	          	$( "#divContenedorCatalogo" ).append(respuesta.vista);
	          	/* Mostrar Filtros Aplicados */							
	          	$( "#filtrosAplicados" ).append(respuesta.FiltradoPor);	
	          }, 600);
	          	

	        }
	    });
	});


	$("#BtnLimpiarFiltros").click(function()
		{ $.ajax({         
	          url: "<?=site_url('../../filtrarCatalogo')?>",
	          method: 'POST',
	          dataType: 'json',
	          data: {},

	          success: function(respuesta){	       	
	          	$('#divContenedorCatalogo').empty();
	          	$( "#divContenedorCatalogo" ).append(respuesta.vista);

	          	/* Mostrar Filtros Aplicados */
						$('#filtrosAplicados').empty();						        
				}
	    });
	});
function filtro_close(id){
		cargaLoading();
		var moneda =$('input:radio[name=gridRadiosMoneda]:checked').val();
		var precioDesde = $('#precioDesde').val();
		var precioHasta = $('#precioHasta').val();
		var tipoPropiedad = $('#tipoPropiedad').val();
		var dormitoriosDesde = $('#dormitoriosDesde').val();
		var dormitoriosHasta = $('#dormitoriosHasta').val();
		var ambientesDesde = $('#ambientesDesde').val();
		var ambientesHasta = $('#ambientesHasta').val();
		var ubicacion = $('#ubicacion').val();

	switch(id.id) {
	  case "precioDesde":
		    precioDesde = "";
		    $('#precioDesde').val("");
	    break;
		  case "precioHasta":
		    precioHasta = "";
		    $('#precioHasta').val("");
	    break;
	    case "dormitoriosDesde":
		    dormitoriosDesde = "";
		    $('#dormitoriosDesde').val("");
	    break;
	    case "dormitoriosHasta":
		    dormitoriosDesde = "";
		    $('#dormitoriosHasta').val("");
	    break;
	    case "ambientesDesde":
		    ambientesDesde = "";
		    $('#ambientesDesde').val("");
    	break;
    	case "ambientesHasta":
		    ambientesHasta = "";
		    $('#ambientesHasta').val("");
	    break;
	    case "tipoPropiedad":
		    tipoPropiedad = "";
		    $('#tipoPropiedad').val('0').trigger('change.select2');
	    break;
	    case "ubicacion":
		    ubicacion = "";
		    $('#ubicacion').val('0').trigger('change.select2');
	    break;
	}

		$.ajax({         
	          url: "<?=site_url('../../filtrarCatalogo')?>",
	          method: 'POST',
	          dataType: 'json',
	          data: {
	          	precioDesde : precioDesde, 
	          	precioHasta : precioHasta, 
	          	tipoPropiedad : tipoPropiedad, 
	          	dormitoriosDesde : dormitoriosDesde, 
	          	dormitoriosHasta : dormitoriosHasta, 
	          	ambientesDesde : ambientesDesde, 
	          	ambientesHasta : ambientesHasta,
	          	ubicacion : ubicacion,
	          	moneda: moneda
	          },

	          success: function(respuesta){	        	
	           $('#filtrosAplicados').empty();
	          	setTimeout(function(){ 
	          	$('#divContenedorCatalogo').empty();
	          	$( "#divContenedorCatalogo" ).append(respuesta.vista);

	          	/* Mostrar Filtros Aplicados */
	          	$( "#filtrosAplicados" ).append(respuesta.FiltradoPor);	
	          }, 600);

	        }
	    });
	};

	function cargaLoading(){
		var loading = "";
		loading += "<div class='container'><div class='row'>";
		loading += "<img class='rounded mx-auto d-block' style='width: 30%; height: 30%;padding-top: 15%;' src='<?=base_url('../../assets/img/GifCarga.gif')?>'>";
		loading += "</div></div>";

		$('#divContenedorCatalogo').empty();
	  $( "#divContenedorCatalogo" ).append(loading);
	}
</script> 





      

          

