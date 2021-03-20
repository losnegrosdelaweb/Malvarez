    

  <div class="album py-5 bg-light">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

        <?php 
          foreach ($catalogo as $key => $itemCatalogo) 
          { ?>
          <div class="col">
          <div class="card shadow-sm">        
          <div id="carouselExampleIndicators-<?=$itemCatalogo['propiedad']->id_propiedad?>" class="carousel slide"  style="width: 100%;">


            <div class="carousel-inner">

              <?php
                  $cont=0;
                  foreach ($itemCatalogo['imagenes'] as $key => $value) {                
                    if($cont==0){
                      echo '<div class="carousel-item active">';
                      }else{
                        echo '<div class="carousel-item">';
                      }
                      echo '<img src="data:image/jpeg;base64,'.$value->base64.'" class="d-block w-100 listado-Carrusel" alt="...">
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
          <div class="card-body">
            <h4 class="card-title">Venta - <?=$itemCatalogo['propiedad']->ubicacion?></h4>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <h5 class="card-title" style="padding-bottom: 10px;">Precio: u$s 100.000</h5>
            <div class="d-flex justify-content-between align-items-center">         
            <button type="button" class="btn btn-sm btn-outline-secondary">Detalle</button>        
            <button type="button" class="btn btn-sm btn-outline-secondary" align="right">Consultar</button>
            </div>
          </div>
          </div>
        </div>
      <?php } ?>

      </div>
    </div>
  </div>

