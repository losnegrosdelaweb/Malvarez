

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
                    <b>Expensas</b> <a class="float-right"> <?=$Propiedad->signo_moneda?> <?=$Propiedad->expensas?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Precio</b> <a class="float-right"><?=$Propiedad->signo_moneda?> <?=$Propiedad->precio?></a>
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
                <h3 class="card-title">Tipo <?=$Propiedad->tipoPropiedad?></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <strong><i class="fas fa-book mr-1"></i> Descripción</strong>

                <p class="text-muted">                  
                  <?=$Propiedad->descripcion?>
                  <!--B.S. in Computer Science from the University of Tennessee at Knoxville-->
                </p>

                <hr>

                <strong><i class="fas fa-map-marker-alt mr-1"></i> Ubicación</strong>

                <p class="text-muted"><?=$Propiedad->ubicacion?></p>

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