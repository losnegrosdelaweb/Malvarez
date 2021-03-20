

<script src="<?=base_url('/../../../assets/js/dropzone.js')?>"></script>
<link rel="stylesheet" type="text/css" href="<?=base_url('/../../../assets/css/dropzone.css')?>">
<!--

<img src="data:image/jpeg;base64,">

-->
<div class="content-wrapper" style="min-height: 1662.75px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Propiedad</h1>
            <input type="text" name="IdPropiedad" id="IdPropiedad" hidden="hidden" value="<?=$Propiedad->id_propiedad?>">
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

                <h3 class="profile-username text-center">Nina Mcintire</h3>

                <p class="text-muted text-center">Software Engineer</p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Followers</b> <a class="float-right">1,322</a>
                  </li>
                  <li class="list-group-item">
                    <b>Following</b> <a class="float-right">543</a>
                  </li>
                  <li class="list-group-item">
                    <b>Friends</b> <a class="float-right">13,287</a>
                  </li>
                </ul>

                <!--<a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>-->
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
            <div class="card card-danger">
              <div class="card-header">
                <h3 class="card-title">Descripción</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <strong><i class="fas fa-book mr-1"></i> Education</strong>

                <p class="text-muted">
                  B.S. in Computer Science from the University of Tennessee at Knoxville
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
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-9">

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
                  <th scope="col">Tipo</th>
                  <th scope="col">Imagen</th>
                  <th scope="col">Acciones</th>                  
                </tr>
              </thead>
              <tbody>
                <?php foreach ($Adjuntos as $key => $value) {
                  echo "<tr><td>A</td>";
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
      console.log(file);
      arrayFiles.push(file);
    })
    //funcion para eliminar las imagenes
    this.on("removedfile", function(file){
      var index = arrayFiles.indexOf(file);
      arrayFiles.splice(index, 1);
    });
  }
}



</script>