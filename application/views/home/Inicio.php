<!doctype html>
    <div>
      
    </div>    

<main>
  <div class="position-relative overflow-hidden p-3 p-md-5 text-center portada">
    <div class="col-md-5 p-lg-5 mx-auto my-5" style="background-color: #18191980!important;border-radius: 15px;width: 75%;">
      <h1 class="display-4 fw-normal text-white">Buscador de Propiedades</h1>
      <p class="lead fw-normal text-white">Encontrá el inmueble que buscás con solo ingresar...</p>
      
      <!-- Buscardor --->
      <!--<a class="btn btn-outline-secondary" href="#">Coming soon</a>-->
      <div class="input-group mb-3">
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
  </div>


 <div class="display-4 fw-normal text-black text-center">
  <h2 class="display-5" style="padding: 30px;">Propiedades Destacadas</h2>
</div>
 
<div class="row mb-2">
		<div class="col-md-6">
      <div class="row container border rounded  " style="padding-left: 0px;">
        <div class="col">

			  <div class="card shadow-sm">				
				<div id="carouselPropiedadesDestacadas1" class="carousel slide" style="width: 100%;width: 100%;height: 100%;">
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



		<div class="col-md-6 ">
      <div class="row container border rounded " style="padding-left: 0px;width: 100%;height: 100%;">
        <div class="col">
			  <div class="card shadow-sm">				
				<div id="carouselPropiedadesDestacadas2" class="carousel slide" style="width: 100%;">
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
<!--
  <div class="album bg-light"style="padding-bottom:3rem!important;">
	  <div class="container">
		<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
-->






			

<!--
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
					  <img src="assets/img/casa1.jpg" class="d-block w-100" alt="...">
					</div>
					<div class="carousel-item">
					  <img src="assets/img/ph1.jpg" class="d-block w-100" alt="...">
					</div>
					<div class="carousel-item">
					  <img src="assets/img/casa2.jpg" class="d-block w-100" alt="...">
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
				<div class="card-body">
				  <h4 class="card-title"><a href="/<?=site_url('detpropiedad')?>">Venta - Vte. Lopez</a></h4>
				  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
				  <h5 class="card-title"style="padding-bottom: 10px;">Precio: u$s 100.000</h5>
				  <div class="d-flex justify-content-between align-items-center">
				  <?php
					echo '<button type="button" class="btn btn-sm btn-outline-secondary" onclick="edit()">Detalle</button>'
				  ?>
				  <button type="button" class="btn btn-sm btn-outline-secondary" align="right">Consultar</button>
				  </div>
				</div>
			  </div>
			</div>
			<div class="col">
			  <div class="card shadow-sm">				
				<div id="carouselExampleIndicators1" class="carousel slide" style="width: 100%;">
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
				  <a class="carousel-control-prev" href="#carouselExampleIndicators1" role="button" data-bs-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Previous</span>
				  </a>
				  <a class="carousel-control-next" href="#carouselExampleIndicators1" role="button" data-bs-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Next</span>
				  </a>
				</div>
				<div class="card-body">
				  <h4 class="card-title">Alquiler - Munro</h4>
				  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
				  <h5 class="card-title"style="padding-bottom: 10px;">Precio: $ 10.000</h5>
				  <div class="d-flex justify-content-between align-items-center">					
				  <button type="button" class="btn btn-sm btn-outline-secondary">Detalle</button>				 
				  <button type="button" class="btn btn-sm btn-outline-secondary" align="right">Consultar</button>
				  </div>
				</div>
			  </div>
			</div>
			<div class="col">
			  <div class="card shadow-sm">				
				<div id="carouselExampleIndicators2" class="carousel slide" style="width: 100%;">
				  <ol class="carousel-indicators">
					<li data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="0" class="active"></li>
					<li data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="1"></li>
					<li data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="2"></li>
				  </ol>
				  <div class="carousel-inner">
					<div class="carousel-item active">
					  <img src="assets/img/depa1.jpg" class="d-block w-100" alt="...">
					</div>
					<div class="carousel-item">
					  <img src="assets/img/ph1.jpg" class="d-block w-100" alt="...">
					</div>
					<div class="carousel-item">
					  <img src="assets/img/casa2.jpg" class="d-block w-100" alt="...">
					</div>
				  </div>
				  <a class="carousel-control-prev" href="#carouselExampleIndicators2" role="button" data-bs-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Previous</span>
				  </a>
				  <a class="carousel-control-next" href="#carouselExampleIndicators2" role="button" data-bs-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Next</span>
				  </a>
				</div>
				<div class="card-body">
				  <h4 class="card-title">Venta - Florida</h4>
				  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
				  <h5 class="card-title"style="padding-bottom: 10px;">Precio: u$s 150.000</h5>
				  <div class="d-flex justify-content-between align-items-center">					
				  <button type="button" class="btn btn-sm btn-outline-secondary">Detalle</button>				 
				  <button type="button" class="btn btn-sm btn-outline-secondary" align="right">Consultar</button>
				  </div>
				</div>
			  </div>
			</div>
-->

		<!-- 
		</div>
	  </div>
  </div>
 -->



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
  
  </body>
</html>
