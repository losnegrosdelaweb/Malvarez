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
</style>
<main id="MainContainerMobile">
  <div class="position-relative overflow-hidden p-3 p-md-5 text-center portada">
    <div class="col-md-5 p-lg-5 mx-auto my-5" id="DivBuscadorPropiedades" style=" background-color: #18191980!important;
  	 border-radius: 15px;">
      <h1 class="display-4 fw-normal text-white">Buscador de Propiedades</h1>
      <p class="lead fw-normal text-white">Encontrá el inmueble que buscás con solo ingresar...</p>

		<div class="d-none d-sm-none d-md-block">	<!--Web-->
      <div class="input-group">
				<select id="operations" style="background-color: #d91a1ba1" class="btn btn-danger">
					<option data-name="Venta" value="1">Venta</option>
					<option data-name="Alquiler" value="2">Alquiler</option>
				</select>
				<select id="property_types" style="background-color: #d91a1ba1" class="btn btn-danger">
					<option class="red-input" value="-1" selected disabled="disabled">Tipo de Propiedad</option>
					<option class="red-input" value="0">Todas</option>
					<?php
						foreach ($listadoTipoPropiedad as $key => $TipoPropiedades) {
						echo '<option class="red-input" value="'.$TipoPropiedades->id_tipo_propiedad.'">'.$TipoPropiedades->descripcion.'</option>';
					}
					?>
				</select>
			<input type="text" class="form-control form-control-lg" placeholder="Buscar por ubicación, dirección o calle" aria-label="Recipient's username" aria-describedby="button-addon2">
			<button class="btn btn-danger" type="button" id="button-addon2">Buscar</button>
      </div>
		</div>


		<div class="d-block d-sm-block d-md-none">	<!--Mobile-->
			<div class="form-group">
				<select id="operations" style="background-color: #d91a1ba1;margin-bottom: 3%;" class="btn btn-danger">
					<option data-name="Venta" value="1">Venta</option>
					<option data-name="Alquiler" value="2">Alquiler</option>
				</select>

				<select id="property_types" style="background-color: #d91a1ba1;margin-bottom: 3%;" class="btn btn-danger">
					<option class="red-input" value="-1" selected disabled="disabled">Tipo de Propiedad</option>
					<option class="red-input" value="0">Todas</option>
					<?php
					foreach ($listadoTipoPropiedad as $key => $TipoPropiedades) {
					echo '<option class="red-input" value="'.$TipoPropiedades->id_tipo_propiedad.'">'.$TipoPropiedades->descripcion.'</option>';
					}
					?>
				</select>

				<input type="text" class="form-control form-control-sm" style="margin-bottom: 3%;" placeholder="Buscar por ubicación, dirección o calle" aria-label="Recipient's username" aria-describedby="button-addon2">
				<button class="btn btn-danger" type="button" id="button-addon2">Buscar</button>
			</div>
		</div>
		</div>
		</div>


 <div class="display-4 fw-normal text-black text-center">
  <h2 class="display-5" style="padding: 30px;">Propiedades Destacadas</h2>
</div>
 
<div class="row mb-2">
	<div class="col-lg-1"></div>
		<div class="col-lg-5 col-sm-12">
      <div class="row border rounded  " style="padding-left: 0px;">
        <div class="col-lg-6 col-sm-12">

			  <div class="card shadow-sm">				
				<div id="carouselPropiedadesDestacadas1" class="carousel slide">
				  <ol class="carousel-indicators">
					<li data-bs-target="#carouselPropiedadesDestacadas1" data-bs-slide-to="0" class="active"></li>
					<li data-bs-target="#carouselPropiedadesDestacadas1" data-bs-slide-to="1"></li>
					<li data-bs-target="#carouselPropiedadesDestacadas1" data-bs-slide-to="2"></li>
				  </ol>
				  <div class="carousel-inner">
					<div class="carousel-item active">
					  <img src="assets/img/ph1.jpg" class="d-block w-100" alt="...">
					</div>
					<div class="carousel-item">
					  <img src="assets/img/ph1.jpg" class="d-block w-100" alt="...">
					</div>
					<div class="carousel-item">
					  <img src="assets/img/casa2.jpg" class="d-block w-100" alt="...">
					</div>
				  </div>
				  <a class="carousel-control-prev" href="#carouselPropiedadesDestacadas1" role="button" data-bs-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Previous</span>
				  </a>
				  <a class="carousel-control-next" href="#carouselPropiedadesDestacadas1" role="button" data-bs-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Next</span>
				  </a>
				</div>
			  </div>

			</div>
        <div class="col p-4 d-flex flex-column position-static">
          <!--<strong class="d-inline-block mb-2 text-primary">World</strong>-->
          <h3 class="mb-0">$ 24.000</h3>
          <div class="mb-1 text-muted">+ $ 12.000 Expensas</div>
          <br>
          <p>
	          <span style="padding-right: 5%;"><i class="fas fa-ruler-combined"> </i> 80 m²</span>
	          <span style="padding-right: 5%;"><i class="fas fa-door-open"></i> 3 amb.</span>
	          <span style="padding-right: 5%;"><i class="fas fa-bed"></i> 2 dorm.</span>
        	</p>
          <p class="card-text mb-auto"> </p>
           <h4 class="mb-0">BOULOGNE SUR MER 1590. Entre Illia y Pedriel</h4>
          <div class="mb-1 text-muted">Villa Maipu, General San Martín</div>
          <!--<a href="#">Continue reading</a>-->
          <div class="d-grid gap-2 d-md-flex justify-content-md-end">
					  <button class="btn btn-primary me-md-2" type="button">Contactar</button>
					</div>
        </div>
      </div>
    </div>



		<div class="col-lg-5 col-sm-12">
			<div class="col-lg-1"></div>
      <div class="row border rounded " style="padding-left: 0px;">
        <div class="col-lg-6 col-sm-12">
			  <div class="card shadow-sm">				
				<div id="carouselPropiedadesDestacadas2" class="carousel slide">
				  <ol class="carousel-indicators">
					<li data-bs-target="#carouselPropiedadesDestacadas2" data-bs-slide-to="0" class="active"></li>
					<li data-bs-target="#carouselPropiedadesDestacadas2" data-bs-slide-to="1"></li>
					<li data-bs-target="#carouselPropiedadesDestacadas2" data-bs-slide-to="2"></li>
				  </ol>
				  <div class="carousel-inner">
					<div class="carousel-item active">
					  <img src="assets/img/casa1.jpg" class="d-block w-100" alt="...">
					</div>
					<div class="carousel-item">
					  <img src="assets/img/ph1.jpg" class="d-block w-100" alt="...">
					</div>
					<div class="carousel-item">
					  <img src="assets/img/casa2.jpg" class="d-block w-100" alt="...">
					</div>
				  </div>
				  <a class="carousel-control-prev" href="#carouselPropiedadesDestacadas2" role="button" data-bs-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Previous</span>
				  </a>
				  <a class="carousel-control-next" href="#carouselPropiedadesDestacadas2" role="button" data-bs-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Next</span>
				  </a>
				</div>
			  </div>
			</div>
        <div class="col p-4 d-flex flex-column position-static">
          <!--<strong class="d-inline-block mb-2 text-primary">World</strong>-->
          <h3 class="mb-0">$ 60.000</h3>
          <br>
          <!--<div class="mb-1 text-muted">Nov 12</div>-->
        	<p>
	          <span style="padding-right: 5%;"><i class="fas fa-ruler-combined"> </i> 80 m²</span>
	          <span style="padding-right: 5%;"><i class="fas fa-door-open"></i> 3 amb.</span>
	          <span style="padding-right: 5%;"><i class="fas fa-bed"></i> 2 dorm.</span>
        	</p>
          <p class="card-text mb-auto"> </p>
           <h4 class="mb-0">Laprida al 2145</h4>
          <div class="mb-1 text-muted">Florida, Vicente López</div>
          <div class="d-grid gap-2 d-md-flex justify-content-md-end">
					  <button class="btn btn-primary me-md-2" type="button">Contactar</button>
					</div>
        </div>
      </div>
    </div>
  </div>

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
