
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
                  <th scope="col">Tipo Propiedad</th>
                  <th scope="col">Barrio</th>
                  <th scope="col">Ubicación</th>
                  <th scope="col">Condicion</th>
                  <th scope="col" class="text-center">Modificar</th>
                  <th scope="col" class="text-center">Detalles</th>
                  <th scope="col" class="text-center"vv>Inhabilitar/Habilitar</th>       
                </tr>
              </thead>
              <tbody>
                
                  <?php
                    foreach ($listadoPropiedad as $key => $value) {
                      echo "<tr>";
                      echo "<td>".$value->id_propiedad."</td>";
                      echo "<td>".$value->id_ciudad."</td>";
                      echo "<td>".$value->ubicacion."</td>";
                      echo "<td>".$value->condicion."</td>";
                      echo '<td class="text-center"><button type="button" class="btn btn-warning btn-sm">
                              <i class="fas fa-pen"></i>
                            </button></td>';                            
                      
                      echo '<td class="text-center"><a type="button" class="btn btn-success btn-sm" href="'.site_url('../../adjuntoListado/'.$value->id_propiedad).'">
                              <i class="fas fa-file-upload"></i>
                            </a></td>';

                      echo '<td class="text-center"><button type="button" class="btn btn-danger btn-sm" onclick="">
                              <i class="fas fa-trash-alt"></i>
                            </button>';
                      echo "</td></tr> ";

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
  //alert("asda");
    $('#exampleModal').modal('show');
})





</script>







 