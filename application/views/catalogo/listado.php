<div class="album py-5 bg-light">
  <div class="container" style="padding-right: 0px;">
    <div class="row row-cols-1 row-cols-sm-2 g-3">
        <?php foreach ($catalogo as $key => $itemCatalogo) { ?>
          <div class="row container border rounded " style="padding-left: 0px;width: 100%;height: 100%;margin-bottom: 2%;background-color: white;">

          <div class="col-md-4 col-sm-12">
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
          <?php 
              if($itemCatalogo['propiedad']->precio != NULL)
              {
                if($itemCatalogo['propiedad']->id_moneda==1){
                  echo '<h3 class="mb-0">$ '.$itemCatalogo['propiedad']->precio.'</h3>';
                }else{
                  echo '<h3 class="mb-0">USD '.$itemCatalogo['propiedad']->precio.'</h3>';
                }
              }    

              if($itemCatalogo['propiedad']->expensas != NULL)
              {
                echo '<div class="mb-1 text-muted">+ $ '.$itemCatalogo['propiedad']->expensas.' Expensas</div>';
              }              
            ?>
          
          <br>
          <p>
            <span style="padding-right: 5%;"><i class="fas fa-ruler-combined"> </i> 80 m²</span>
            <?php 
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
          <p class="card-text mb-auto"> </p>
          <a href="/<?=site_url('detpropiedad/'.$itemCatalogo['propiedad']->id_propiedad)?>"><h4 class="mb-0"><?=$itemCatalogo['propiedad']->direccion?></h4></a>
          <div class="mb-1 text-muted"><?=$itemCatalogo['propiedad']->ciudad?>,<?=$itemCatalogo['propiedad']->ubicacion?></div>
          <!--<a href="#">Continue reading</a>-->
          <div class="d-grid gap-2 d-md-flex justify-content-md-end">
           <a href="/<?=site_url('detpropiedad/'.$itemCatalogo['propiedad']->id_propiedad)?>" class="btn btn-primary me-md-2" type="button">Contactar</a>
          </div>
        </div>
    </div>
      <?php } ?>

      </div>
    </div>
  </div>





