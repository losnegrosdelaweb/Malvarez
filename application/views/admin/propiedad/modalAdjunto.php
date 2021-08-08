

<style type="text/css">
  
  .title{
    text-align: center;
    color: #007bff;
  }

  .form-container{
    width: 70%;
    margin: 0 auto;
  }

  .form-container .dropzone{
    border: 2px dashed #c3c3c3;
    padding: 40px;
  }

  .form-container .icon i{
    font-size: 2em;
    text-align: center;
    color: #696767;
    background-color: #dfdddd;
    height: 100px;
    width: 100px;
    margin-bottom:20px;
    border-radius: 50%;
    padding: 25px;
  }

</style> 

<div class="modal fade" id="adjuntoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar Imagenes</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">    
        <div id="dropzone">
          <center>
            <div class="form-container">
              <form action="" class="dropzone" id="FormUpload" name="file" enctype="multipart/fotm-data">
                <div class="dz-message">
                  <div class="icon">
                    <i class="fas fa-cloud-upload-alt"></i>
                  </div>
                  <h2>Suelta tus archivos aquí</h2>
              <span class="note">No hay archivos seleccionados</span>
                </div>                      
              </form>
              <!--<button class="btn btn-success guardarProducto">Guardar</button>-->
            </div>
          </center>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary guardarProducto">Guardar</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
        
      </div>
    </div>
  </div>
</div>


<script type="text/javascript">
  

$(".guardarProducto").click(function(){ 
  if(arrayFiles != ""){

    if(arrayFiles.length > 0){
      var listaMultimedia = [];
      var finalFor = 0;

      for (var i = 0; i < arrayFiles.length; i++) {
        var datosMultimedia = new FormData();
        datosMultimedia.append("file", arrayFiles[i]);
        datosMultimedia.append("orden", i);     

        var IdProp = $("#IdPropiedad").val();

        $.ajax({         
         url: "<?=site_url('../../../ajuntoImagen/')?>"+IdProp.trim(),
          method: 'POST',
          data: datosMultimedia,
          cache: false,
          contentType: false,
          processData: false,

          success: function(respuesta){
            //location.reload();
            /*
            listaMultimedia.push({'foto': respuesta});
            multimediaFisica = JSON.stringify(listaMultimedia);
            if((finalFor + 1) == arrayFiles.length){
              //agregarMiProducto(multimediaFisica);
              finalFor = 0;
            }
            finalFor ++;
            //$("#guardarProducto").html("Gurdar Producto");  */       
          }
        });  
        }    
      
  }else{
    alert("Debe elegir alguna imagen");  
 }
}
});

</script>