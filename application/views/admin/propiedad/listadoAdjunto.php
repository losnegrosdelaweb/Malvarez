

<script src="<?=base_url('/../../../assets/js/dropzone.js')?>"></script>
<link rel="stylesheet" type="text/css" href="<?=base_url('/../../../assets/css/dropzone.css')?>">
<!--

<img src="data:image/jpeg;base64,">

-->
<div class="content-wrapper" style="min-height: 1662.75px;">
    <!-- Content Header (Page header) -->
    <section class="content-header" style="padding-top: 20px;">
          <h6 class="fontStyle fw-normal" style="padding: 0.5%; width: fit-content; background-color: #181919db!important; border-radius: 15px;"><a href="javascript: history.go(-1)" data-toggle="tooltip" title="" data-placement="top" data-original-title="Volver" style="color: white;"><i class="fas fa-arrow-left"></i> Volver</a></h6>
    </section>

    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Detalle de Propiedad</h1>
            <input type="text" name="IdPropiedad" id="IdPropiedad" hidden="hidden" value=" <?=$Propiedad->id_propiedad?> ">
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">
            <div class="card card-danger card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <!--<img class="profile-user-img img-fluid img-circle" src="../../dist/img/user4-128x128.jpg" alt="User profile picture">-->
                </div>

                <h3 class="profile-username text-center">ID: <?=$Propiedad->id_propiedad?></h3>

                <p class="text-muted text-center">Estadísticas</p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Visitas</b> <a class="float-right"><?=$Propiedad->visitas?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Consultas</b> <a class="float-right">0</a>
                  </li>
                  <li class="list-group-item">
                    <b>Fecha</b> <a class="float-right"><?=$Propiedad->fecha?></a>
                  </li>
                   <li class="list-group-item">
                    <b>Moneda</b> <a class="float-right"> <?=$Propiedad->moneda?></a>
                  </li>                  
                  <li class="list-group-item">
                    <b>Precio</b> <a class="float-right"><?=$Propiedad->signo_moneda?> <?=$Propiedad->precio?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Expensas</b> <a class="float-right"> <?=$Propiedad->expensas?></a>
                  </li>
                </ul>

                <!--<a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>-->
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
           
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-9">
             <div class="card card-danger">
              <div class="card-header">
                <h3 class="card-title"><?=$Propiedad->titulo?> - Tipo <?=$Propiedad->tipoPropiedad?></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                
                <strong><i class="fas fa-map-marker-alt mr-1"></i> Ubicación</strong>
                <ul class="text">
                  <li><p class="text"><?=$Propiedad->direccion?>, <?=$Propiedad->ciudad?> - <?=$Propiedad->ubicacion?></p></li>
                </ul>
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
                <hr>
                <strong><i class="fas fa-book mr-1"></i> Descripción</strong>

                <p class="text-muted">
                <?php 
                  if($Propiedad->descripcion != NULL)
                  {
                    #echo nl2br($Propiedad->descripcion);
                    echo '<ul class="text">';                   
                    echo '<li>'.$Propiedad->descripcion.'</li></ul>';
                  } else {
                    echo ' N/A';
                  }
                 ?>              
                  
                </p>



                <!--strong><i class="far fa-file-alt mr-1"></i> Detalles</strong>
                <ul class="text-muted">
                  <li><b>Ambientes: </b><?=$Propiedad->ambientes?></li>
                  <li><b>Dormitorios: </b><?=$Propiedad->dormitorios?></li>
                  <li><b>baños: </b><?=$Propiedad->banos?></li>
                </ul-->
              </div>
              <!-- /.card-body -->
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md">
            <div class="card card-danger card-outline">
              <div class="card-header border-0">
                <div class="d-flex justify-content-between">
                  <h3 class="card-title">Listado de Imagenes</h3>
                  <a href="javascript:void(0);">
                    <button type="button" class="btn btn-success btn-sm float-right" id="ModalAdjunto"><i class="fas fa-plus"></i> Nueva</button>
                  </a>
                </div>
              </div>
              <div class="card-body">
                <table class="table" id="listadoAdjuntos">
                  <thead>
                    <tr>
                      <th scope="col">Imágen</th>
                      <th scope="col">Acciones</th>                  
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                    <?php foreach ($Adjuntos as $key => $value) {
                      echo '<td><img class="rounded" src="data:image/jpeg;base64,'.$value->base64.'" style="width: 9%;"></td>';
                     ?>
                      <td>
                        <a type="button" class="btn btn-danger btn-sm" href="<?=base_url('../../borrarImagen/').$Propiedad->id_propiedad?>/<?=$value->id_imagenes?>">
                          <i class="fas fa-trash-alt"></i>
                        </a>
                      </td>
                    </tr>  
                    <?php } ?>              
                  </tbody>
                </table>                
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md">
            <div class="card card-danger card-outline">
              <div class="card-header border-0">
                <div class="d-flex justify-content-between">
                  <h3 class="card-title">Mapa</h3>                  
                </div>
              </div>
              <div class="card-body" style="align-self: center;">
                <?php 
                  if($Propiedad->mapa != NULL)
                  {
                    echo $Propiedad->mapa;
                  }
                 ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
</div>
  <script type="text/javascript">
    $(document).ready(function () {
    $('#listadoAdjuntos').DataTable({
        "language": {
          'url': '<?=base_url('../../../assets/js/arg.json')?>'            
        }
    });
});




$('#ModalAdjunto').click(function(){
  //alert("asda");
    $('#adjuntoModal').modal('show');
})


var arrayFiles = [];

Dropzone.options.FormUpload = {
  url: "<?=site_url('../../ajuntoImagen2')?>",
  paramName: "file", // The name that will be used to transfer the file
  maxFilesize: 10, // MB
  addRemoveLinks: true,
  resizeWidth: 600,
  resizeHeight: 400,
  dictRemoveFile: "Eliminar",
  init: function(){
    //funcion para subir las imagenes
    this.on("addedfile", function(file){      
      arrayFiles.push(file);
      //console.log(arrayFiles);
    })
    //funcion para eliminar las imagenes
    this.on("removedfile", function(file){
      var index = arrayFiles.indexOf(file);
      arrayFiles.splice(index, 1);
     // console.log(arrayFiles);
    });
  }
}



</script>