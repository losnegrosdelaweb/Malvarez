<!doctype html>

<style type="text/css">
	
@media (min-width:768px){

  #DivBuscadorPropiedades {  	
  	 width: 75%;
  }
}
@media (max-width:768px){
#MainContainerMobile{
	
	  width: 100%;
    padding-right: var(--bs-gutter-x,.75rem);
    padding-left: var(--bs-gutter-x,.75rem);
    margin-right: auto;
    margin-left: auto;
  }

}

a{
	color: black;
}

.badge-oper {
    color: rgb(255, 255, 255);
    background-color: rgb(0, 0, 0);
    border-radius: 0.25rem;
    margin-right: 2%;
}
</style>
<main id="MainContainerMobile">
  <div class="position-relative overflow-hidden p-3 p-md-5 text-center portada">
    <div class="col-md-5 p-lg-5 mx-auto my-5" id="DivBuscadorPropiedades" style=" background-color: #18191980!important;
  	 border-radius: 15px;">
      <h1 class="display-4 fw-normal text-white">Buscador de Propiedades</h1>
      <p class="lead fw-normal text-white">Encontrá el inmueble que buscás con solo ingresar...</p>

		<div class="d-none d-sm-none d-md-block">	<!--Web-->
    <form action="../<?=site_url('buscadorHome')?>" method="POST">  
      <div class="input-group">
				<select id="operations" name="operations" style="background-color: #d91a1ba1" class="btn btn-danger">
					<option data-name="Venta" value="1">Venta</option>
					<option data-name="Alquiler" value="2">Alquiler</option>
				</select>
				<select id="property_types" name="property_types" style="background-color: #d91a1ba1" class="btn btn-danger">
					<option class="red-input" value="-1" selected disabled="disabled">Tipo de Propiedad</option>
					<option class="red-input" value="0">Todas</option>
					<?php
						foreach ($listadoTipoPropiedad as $key => $TipoPropiedades) {
						echo '<option class="red-input" value="'.$TipoPropiedades->id_tipo_propiedad.'">'.$TipoPropiedades->descripcion.'</option>';
					}
					?>
				</select>
			<input type="text" class="form-control form-control-lg" placeholder="Buscar por ubicación, dirección o calle" name="BuscadorText" aria-label="Recipient's username" aria-describedby="button-addon2">
			<button class="btn btn-danger" type="submit" id="button-addon2">Buscar</button>
      </div>
    </form>
		</div>


		<div class="d-block d-sm-block d-md-none">	<!--Mobile-->
      <form action="../<?=site_url('buscadorHomeMobile')?>" method="POST">  
			<div class="form-group">
				<select id="operations-2" name="operations-2" style="background-color: #d91a1ba1;margin-bottom: 3%;" class="btn btn-danger">
					<option data-name="Venta" value="1">Venta</option>
					<option data-name="Alquiler" value="2">Alquiler</option>
				</select>

				<select id="property_types-2" style="background-color: #d91a1ba1;margin-bottom: 3%;" class="btn btn-danger">
					<option class="red-input" value="-1" selected disabled="disabled">Tipo de Propiedad</option>
					<option class="red-input" value="0">Todas</option>
					<?php
					foreach ($listadoTipoPropiedad as $key => $TipoPropiedades) {
					echo '<option class="red-input" value="'.$TipoPropiedades->id_tipo_propiedad.'">'.$TipoPropiedades->descripcion.'</option>';
					}
					?>
				</select>

				<input type="text" class="form-control form-control-sm" style="margin-bottom: 3%;" name="BuscadorText-2" placeholder="Buscar por ubicación, dirección o calle" aria-label="Recipient's username" aria-describedby="button-addon2">
				<button class="btn btn-danger" type="submit" id="button-addon2">Buscar</button>
			</div>
    </form>
		</div>
		</div>
		</div>


 <div class="display-4 fw-normal text-black text-center">
  <h2 class="display-5" style="padding: 30px;">Propiedades Destacadas</h2>
</div>
 
<!-- Destacadas -->

<div class="album py-5 bg-light">
  <div class="container" style="padding-right: 0px;">
    <div class="row row-cols-1 row-cols-sm-2 g-3">
        <?php foreach ($catalogo as $key => $itemCatalogo) { ?>
          <div class="row container border rounded " style="padding-left: 0px;width: 100%;height: 100%;margin-bottom: 2%;background-color: white;">

          <div class="col-md-4 col-sm-12 p-3 d-flex flex-column position-static">
          <div class="card shadow-sm">        
          <div  id="carouselExampleIndicators-<?=$itemCatalogo['propiedad']->id_propiedad?>" class="carousel slide"  data-bs-ride="carousel" style="width: 100%;height: 100%;">

            <div class="carousel-inner">
              <?php
                  $cont=0;
                  foreach ($itemCatalogo['imagenes'] as $key => $value) {                
                    if($cont==0){
                      echo '<div class="carousel-item active">';
                      }else{
                        echo '<div class="carousel-item">';
                      }
                      echo '<img src="data:image/jpeg;base64,'.$value->base64.'" class="d-block w-100 listado-Carrusel" alt="..." style="width: 100%!important;
    height: 100%!important;max-height: 235px;-webkit-writing-mode: vertical-lr;">
                          </div>';
                    $cont++;
                  }
              ?>
            </div>

            <a class="carousel-control-prev" href="#carouselExampleIndicators-<?=$itemCatalogo['propiedad']->id_propiedad?>" role="button" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators-<?=$itemCatalogo['propiedad']->id_propiedad?>" role="button" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </a>


          </div>
          </div>
        </div>
        <div class="col-md-8 col-sm-12 p-3 d-flex flex-column position-static">
          <div class="row">
            <div class="col"><a href="/<?=site_url('detpropiedad/'.$itemCatalogo['propiedad']->id_propiedad)?>">
            <h3 class="mb-0"><?=$itemCatalogo['propiedad']->titulo?></h3></a> 
            </div>
            <div class="col" style="text-align: -webkit-right;">
              <h5 class="fontStyle fw-normal badge-oper" style="width: min-content; padding: .375rem .75rem;">
              Venta</h5>
            </div>
          </div>
          <div class="row">
          <?php 
              if($itemCatalogo['propiedad']->precio != NULL)
              {
                  echo '<h5 class="mb-0">'.$itemCatalogo['propiedad']->signo_moneda.' '.$itemCatalogo['propiedad']->precio.'</h5>';
                
              }    

              if($itemCatalogo['propiedad']->expensas != NULL)
              {
                echo '<div class="mb-1 text-muted">+ '.$itemCatalogo['propiedad']->signo_moneda.' '.$itemCatalogo['propiedad']->expensas.' Expensas</div>';
              }              
            ?>
          </div>
          <div class="row">
          <p class="card-text mb-auto"> </p>
           <h4 class="mb-0">
            <?=$itemCatalogo['propiedad']->direccion?></h4>
          <div class="mb-1 text-muted"><?=$itemCatalogo['propiedad']->ciudad?>,<?=$itemCatalogo['propiedad']->ubicacion?></div>
          </div>
          <div class="row">

          <p>
            <?php            
              if($itemCatalogo['propiedad']->tipoPropiedad != NULL)
              {
                echo '<span style="padding-right: 5%;"><i class="fas fa-book mr-1"> </i> '.$itemCatalogo['propiedad']->tipoPropiedad.'</span>';
              }
              if($itemCatalogo['propiedad']->suptotal != NULL)
              {
                echo '<span style="padding-right: 5%;"><i class="fas fa-ruler-combined"> </i>'.$itemCatalogo['propiedad']->suptotal.' m²</span>';
              }
              if($itemCatalogo['propiedad']->ambientes != "0" && $itemCatalogo['propiedad']->ambientes != NULL)
              {
                echo '<span style="padding-right: 5%;"><i class="fas fa-door-open"></i> '.$itemCatalogo['propiedad']->ambientes.' amb.</span> ';
              }       

              if($itemCatalogo['propiedad']->dormitorios != "0" && $itemCatalogo['propiedad']->dormitorios != NULL)
              {
                echo '<span style="padding-right: 5%;"><i class="fas fa-bed"></i> '.$itemCatalogo['propiedad']->dormitorios.' dorm.</span> ';
              }              
            ?>
          </p>
          </div>
          <!--<a href="#">Continue reading</a>-->
          <div class="row">
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
              <a href="/<?=site_url('detpropiedad/'.$itemCatalogo['propiedad']->id_propiedad)?>" class="btn btn-primary me-md-2" type="button">Contactar</a>
            </div>
          </div>
        </div>
    </div>
      <?php } ?>

      </div>
    </div>
  </div>
<!-- FIN-Destacadas -->








<br>
<br>
<!--<script src="assets/dist/js/bootstrap.bundle.min.js"></script>-->
<script>
function edit(id){
  $.ajax({
    url: '<?=site_url()?>/../../detpropiedad',
    type: "GET",
    dataType : 'json',
    success: function(respuesta) {
      console.log(respuesta);
      $('#email').val(respuesta.Email);
      $('#nombre').val(respuesta.Nombre);
      $('#tel').val(respuesta.Tel);
      $('#id').val(respuesta.Id);
	  $('#clave').val(respuesta.Clave);
      $('#exampleModal').modal('show');
    },
    error: function() {
          console.log("No se ha podido obtener la información");
      }
  });
}
</script>
  </main>
  </body>
 
</html>
