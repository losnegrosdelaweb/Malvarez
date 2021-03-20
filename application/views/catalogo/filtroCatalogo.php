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
  <div class="full-row py-3 bg-gray d-none d-sm-block">
	<div class="container">
		<div class="row">
			<div class="col-md-2 col-lg-3">
				<div class="form-group">
					<select class="form-control select2 select2-danger select2-hidden-accessible" name="dependencia" id="dependencia" data-dropdown-css-class="select2-danger" style="width: 100%;" data-select2-id="2" tabindex="-1" aria-hidden="true">
						<option value="0">Todos</option>
                       <?php
                        foreach ($listadoDepartamento as $key => $departamento) {
                          echo '<option class="red-input" value="'.$departamento->id_departamento.'">'.$departamento->descripcion.'</option>';
                        }
                      ?>
                    </select>      
				</div>
			</div>
			<div class="col-md-2 col-lg-3">
				<div class="form-group">
					<select class="form-control select2 select2-danger select2-hidden-accessible" name="ciudad" id="ciudad" data-dropdown-css-class="select2-danger" style="width: 100%;" data-select2-id="3" tabindex="-1" aria-hidden="true">
						<option value="0">Todos</option>
                       <?php
                        foreach ($listadoTipoPropiedad as $key => $TipoPropiedades) {
                          echo '<option class="red-input" value="'.$TipoPropiedades->Id.'">'.$TipoPropiedades->Descripcion.'</option>';
                        }
                      ?>
                    </select>     
				</div>
			</div>
			<div class="col-md-2 col-lg-3">
				<div class="form-group">
					<select class="form-control" id="estado" name="estado">
						<option value="0">Todos</option>
						<option value="">Estado</option>
						<option selected="selected" value="sale">En Venta</option>
						<option value="rent">En Alquiler</option>
					</select>
				</div>
			</div>
			<div class="col-md-2 col-lg-3">
				<div class="form-group">
					<select class="form-control" id="tipoPropiedad" name="tipoPropiedad">
						<option value="0" selected=""> Tipo de Propiedad </option><?php
                        foreach ($listadoTipoPropiedad as $key => $tipoProp) {
                          echo '<option class="red-input" value="'.$tipoProp->id_tipo_propiedad.'">'.$tipoProp->descripcion.'</option>';
                        }
                      ?>
                  </select>
				</div>
			</div>
			<div class="col-md-2 col-lg-2">
				<div class="form-group">
					<select class="form-control" id="dormitorios" name="dormitorios"><option value="0" selected="selected">Cantidad dormitorios </option><option value="sindor"> Sin dormitorio </option><option value="mono"> Monoambiente </option><option value="1"> 1 </option><option value="2"> 2 </option><option value="3"> 3 </option><option value="4"> 4 </option><option value="5"> 5 </option><option value="6"> 6 </option><option value="7"> 7 </option><option value="8"> 8 </option><option value="9"> 9 </option></select>
				</div>
			</div>
			<div class="col-md-7 col-lg-5">
				<div class="form-group">
					<input type="text" class="form-control" name="clave" id="clave" value="" placeholder="Buscar palabras clave">
				</div>
			</div>
			<div class="col-md-3 col-lg-3">
					<select class="form-control" name="orden" id="orden">
						<option value="0" selected="">Ordenar por</option>
						<option value="price_dollars_low_to_height">Menor Precio</option>
						<option value="price_dollars_high_to_low">Mayor Precio</option>
						<option value="latest">Más Recientes</option>
						<option value="oldest">Más Antiguas</option>
					</select>
				</div>
			<div class="col-md-3 col-lg-3">
				<div class="form-group">
					<button type="button" id="filtrarCatalogo" class="btn btn-default1 w-100">Buscar</button>
				</div>
			</div>
		</div>
	</div>
  </div>



<!-- Catalogo  -->
<div id="contenedorCatalogo">
	<?= $vista ?>
</div>

</main>

<footer class="text-muted py-5">
  <div class="container">
    <p class="float-end mb-1">
      <a href="#">Back to top</a>
    </p>
    <p class="mb-1">Album example is &copy; Bootstrap, but please download and customize it for yourself!</p>
    <p class="mb-0">New to Bootstrap? <a href="/">Visit the homepage</a> or read our <a href="../getting-started/introduction/">getting started guide</a>.</p>
  </div>
</footer>
      
<script type="text/javascript">
	 $('.select2').select2();  


	$("#filtrarCatalogo").click(function(){ 

		var departamento = $('#dependencia').val();
		var ciudad = $('#ciudad').val();
		var estado = $('#estado').val();
		var tipoPropiedad = $('#tipoPropiedad').val();
		var dormitorios = $('#dormitorios').val();
		var palabraClave = $('#palabraClave').val();
		var orden = $('#orden').val();

		$.ajax({         
	          url: "<?=site_url('../../filtrarCatalogo')?>",
	          method: 'POST',
	          data: {departamento : departamento, ciudad : ciudad, estado : estado, tipoPropiedad : tipoPropiedad, dormitorios : dormitorios, palabraClave : palabraClave, orden : orden},
	          //cache: false,
	          //contentType: false,
	          //processData: false,

	          success: function(respuesta){	          	
	          	$('#contenedorCatalogo').empty();
	          	$( "#contenedorCatalogo" ).append(respuesta);	            
	        }
	    });
	});


	    $("#dependencia").change(function(){
          var dependencia_id = $('#dependencia').val();
          $.ajax({         
            url: "<?=site_url()?>/../../buscarCiudades/"+dependencia_id,
            type: "GET",
            dataType : 'json',
            success: function(respuesta){
				$("#ciudad").empty();              
				$("#ciudad").select2({
					data: respuesta
				})
            }
          });              
        });

</script>



