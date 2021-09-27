
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
              <h3 class="card-title">Listado de Propiedades</h3>
              <a href="javascript:void(0);">
                <button type="button" class="btn btn-success btn-sm float-right" id="modalAddPropiedad"><i class="fas fa-plus"></i> Nueva</button>
              </a>
            </div>
          </div>
          <div class="card-body"> 
            <table class="table" id="listadoPropiedades">
              <thead>
                <tr>
                  <th scope="col">Operación</th>
                  <th scope="col">Dirección / Titulo</th>
                  <th scope="col">Ubicación</th>
                  <th scope="col">Tipo Propiedad</th>
                  <th scope="col">Estado</th>
                  <th scope="col" class="text-center">Ultima Fecha</th>
                  <th scope="col" class="text-center">Modificar</th>
                  <th scope="col" class="text-center">Detalles/Img</th>
                  <th scope="col" class="text-center">Destacar</th>
                  <th scope="col" class="text-center"vv>Inhabilitar/Habilitar</th>       
                </tr>
              </thead>
              <tbody>
                
                  <?php
                    foreach ($listadoPropiedad as $key => $value) {
                      if($value->activo==1)
                      {
                        $style = "color: black;";
                      }elseif($value->activo==0)
                      {
                        $style = "color: darkgray;";
                      }
                      echo "<tr style=\"".$style."\">";
                      echo "<td>".$value->descOper."</td>";
                      echo "<td>".$value->direccion."</td>";
                      echo "<td>".$value->ubicacion."</td>";
                      echo "<td>".$value->tipoPropiedad."</td>";
                      echo "<td>".$value->condicion."</td>";  
                      echo "<td><center>".$value->fecha."</center></td>";
                      echo '<td><center>            
                        <button type="button" onclick="edit('.$value->id_propiedad.')" class="btn btn-warning btn-sm pop" data-toggle="popover">
                        <i class="fas fa-pen"></i></button>
                        &nbsp;</center></td>';


                       echo '<td class="text-center"><a type="button" class="btn btn-success btn-sm" href="'.site_url('../../adjuntoListado/'.$value->id_propiedad).'">
                            <i class="fas fa-file-upload"></i>
                          </a></td>';
                      echo '<td><center>';
                        if($value->destacada==1)
                        {
                          echo '<button type="button" class="btn btn-sm" onclick="propdestacada('.$value->id_propiedad.','.$value->destacada.')">
                                  <i class="fas fa-star"></i>
                                </button>';
                        }
                        elseif($value->destacada==0)
                        {
                          echo '<button type="button" class="btn btn-sm" onclick="propdestacada('.$value->id_propiedad.','.$value->destacada.')">
                                  <i class="far fa-star"></i>
                                </button>';
                        }
                        echo '</center></td>';

                     echo '<td><center>';
                        if($value->activo==1)
                        {
                          echo '<button type="button" class="btn btn-danger btn-sm" onclick="delet('.$value->id_propiedad.','.$value->activo.')">
                                  <i class="fas fa-trash-alt"></i>
                                </button>';
                        }
                        elseif($value->activo==0)
                        {
                          echo '<button type="button" class="btn btn-success btn-sm" onclick="delet('.$value->id_propiedad.','.$value->activo.')">
                                  <i class="fas fa-check"></i>
                                </button>';
                        }
                        echo '</center></td>';
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
    $('#listadoPropiedades').DataTable({
        "language": {
          'url': '<?=base_url('../../assets/js/arg.json')?>'            
        }
    });
});


$('#modalAddPropiedad').click(function(){
   $('.limpiar').val("");
    $('#exampleModal').modal('show');
})



function edit(id){
  $.ajax({
    url: '<?=site_url()?>/../../getPropiedad/'+id,
    type: "GET",
    dataType: "json",
    success: function(respuesta) {
      console.log(respuesta)
      $('#id').val(id);
      $("#TipoPropiedad").val(respuesta.id_tipo).trigger('change');
      $("#Ciudad").val(respuesta.id_ciudad).trigger('change');
      $("#ubicacion").val(respuesta.id_ubicacion).trigger('change');
      $("#Operacion").val(respuesta.id_operacion).trigger('change');
      $('#Ambientes').val(respuesta.ambientes);
      $('#Dormitorios').val(respuesta.dormitorios);
      $('#Bano').val(respuesta.banos);
      $('#Cochera').val(respuesta.cocheras);
      $('#Pisos').val(respuesta.pisos);
      $('#Antiguedad').val(respuesta.antiguedad);
      $('#Situacion').val(respuesta.situacion);
      $('#Expensas').val(respuesta.expensas);
      $('#Orientacion').val(respuesta.orientacion);
      $('#Disposicion').val(respuesta.disposicion);
      $('#Estado').val(respuesta.condicion);
      $('#Descripcion').val(respuesta.descripcion);
      $('#Precio').val(respuesta.precio);
      $('#Direccion').val(respuesta.direccion);      
      $('#SupTotal').val(respuesta.suptotal);
      $('#SupCub').val(respuesta.supcub);
      $('#SupDesc').val(respuesta.supdesc);  
      $('#exampleModal').modal('show');
    },
    error: function() {
          console.log("No se ha podido obtener la información");
      }
  });
}


function delet(id, activo){
  $.ajax({
    url: '<?=site_url()?>/../../putEstadoPropiedad/'+id,
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

function propdestacada(id, destacada){
  $.ajax({
    url: '<?=site_url()?>/../../putDestacadaPropiedad/'+id,
    type: "POST",
    data: {destacada : destacada},
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







 