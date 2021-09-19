
  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <!--<h1 class="m-0">Dashboard</h1>-->
          </div>
        </div>
      </div>
    </div>
    <section class="content">
      <div class="">    
        <div class="card card-danger card-outline">
          <div class="card-header border-0">
            <div class="d-flex justify-content-between">
              <h3 class="card-title">Listado de Ubicaciones</h3>
              <a href="javascript:void(0);">
                <button type="button" class="btn btn-success btn-sm float-right" id="modalAddUbicacion"><i class="fas fa-plus"></i> Nueva</button>
              </a>
            </div>
          </div>
          <div class="card-body"> 
            <table class="table" id="listadoUbicacion">
              <thead>
                <tr>
                  <th scope="col">Descripción</th>
                  <th scope="col" class="text-center">Estado</th>
                  <th scope="col" class="text-center">Modificar</th>
                  <th scope="col" class="text-center"vv>Inhabilitar/Habilitar</th>       
                </tr>
              </thead>
              <tbody>
                <?php
                    foreach ($listadoUbicaciones as $key => $value) 
                    {
                      if($value->activo==1)
                      {
                        $style = "color: black;";
                      }elseif($value->activo==0)
                      {
                        $style = "color: darkgray;";
                      }
                      echo "<tr>";

                      echo "<td style=\"".$style."\">".$value->descripcion."</td>";

                      if($value->activo==1)
                      {
                        echo "<td style=\"".$style."\"><center>Activo</center></td>";
                      }
                      elseif($value->activo==0)
                      {
                        echo "<td style=\"".$style."\"><center>Inhabilitado</center></td>";
                      }

                      echo '<td><center>            
                        <button type="button" onclick="edit('.$value->id_ubicacion.')" class="btn btn-warning btn-sm pop" data-toggle="popover" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                          <i class="fas fa-pen"></i>
                        </button>
                        &nbsp;</center></td>';

                    echo '<td><center>';
                        if($value->activo==1)
                        {
                          echo '<button type="button" class="btn btn-danger btn-sm" onclick="delet('.$value->id_ubicacion.','.$value->activo.')">
                                  <i class="fas fa-trash-alt"></i>
                                </button>';
                        }
                        elseif($value->activo==0)
                        {
                          echo '<button type="button" class="btn btn-success btn-sm" onclick="delet('.$value->id_ubicacion.','.$value->activo.')">
                                  <i class="fas fa-check"></i>
                                </button>';
                        }
                        echo '</td>';
                        echo '</tr>';
                    }
                  ?>                                 
              </tbody>
            </table>
         </div>
        </div>
      </div>
    </section>
  </div>


<script>

$(document).ready(function () {
    $('#listadoUbicacion').DataTable({
        "language": {
          'url': '<?=base_url('../../assets/js/arg.json')?>'            
        }
    });
});



$('#modalAddUbicacion').click(function(){
  //alert("asda");
    $('#exampleModal').modal('show');
});



/*
$('#addTipoPropiedad').click(function(){
    $('#nombre').val("");
    $('#id_tipo_propiedad').val("");
    $('#exampleModal').modal('show');
})
*/

function edit(id){
  $.ajax({
    url: '<?=site_url()?>/../../getUbicacion/'+id,
    type: "GET",
    success: function(respuesta) {
      console.log(respuesta);
      $('#descripcion').val(respuesta);
      $('#id').val(id);
      $('#exampleModal').modal('show');
    },
    error: function() {
          console.log("No se ha podido obtener la información");
      }
  });
}


function delet(id, activo){
  $.ajax({
    url: '<?=site_url()?>/../../putEstadoUbicacion/'+id,
    type: "POST",
    data: {activo : activo},
    success: function(respuesta) {
      if(respuesta==1){
         location.reload();
      }
    },
    error: function() {
          console.log("No se ha podido obtener la información");
      }
  });
}





</script>







 