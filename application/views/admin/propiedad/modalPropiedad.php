

<style type="text/css">

</style>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header card-danger card-outline">
        <h5 class="modal-title" id="exampleModalLabel">Nueva Propiedad</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">   

      <form action="<?=site_url('../../postPropiedad')?>" method="POST" class="needs-validation" novalidate>
        <input type="text" class="form-control limpiar" id="id" name="id" hidden="">
          <div class="row">
             <div class="col-4">
              <div class="form-group">
                  <label>Operación</label>
                  <select class="form-control select2 select2-danger select2-hidden-accessible" data-dropdown-css-class="select2-danger" id="Operacion" name="Operacion" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                     <?php
                      foreach ($listadoOperacion as $key => $Operacion) {
                        echo '<option class="red-input" value="'.$Operacion->id.'">'.$Operacion->descripcion.'</option>';
                      }
                    ?>
                  </select>                  
              </div>             
            </div>
            <div class="col-4">
              <div class="form-group"> 
                <label for="titulo">Título</label>
                <input type="text" class="form-control limpiar" id="Titulo" name="Titulo" placeholder="Titulo de la Operacion">          
              </div>             
            </div>
            <div class="col-4">
              <div class="form-group">
                  <label>Tipo Propiedad</label>
                  <select class="form-control select2 select2-danger select2-hidden-accessible" data-dropdown-css-class="select2-danger" id="TipoPropiedad" name="TipoPropiedad" style="width: 100%;" data-select2-id="2" tabindex="-1" aria-hidden="true">
                     <?php
                      foreach ($listadoTipoPropiedad as $key => $TipoPropiedades) {
                        echo '<option class="red-input" value="'.$TipoPropiedades->id_tipo_propiedad.'">'.$TipoPropiedades->descripcion.'</option>';
                      }
                    ?>
                  </select>                  
              </div>             
            </div>
            <!--
            
            <div class="col-4">   
              <div class="form-group">
                    <label>Departamento</label>
                    <select class="form-control select2 select2-danger select2-hidden-accessible" id="dependencia" data-dropdown-css-class="select2-danger" style="width: 100%;" data-select2-id="2" tabindex="-1" aria-hidden="true">
                       <?php
                        foreach ($listadoDepartamento as $key => $departamento) {
                          echo '<option class="red-input" value="'.$departamento->id_departamento.'">'.$departamento->descripcion.'</option>';
                        }
                      ?>
                    </select>                  
                </div>             
            </div>
             <div class="col-4">   
              <div class="form-group">
                    <label>Ciudad</label>
                    <select class="form-control select2 select2-danger select2-hidden-accessible" id="ciudad" data-dropdown-css-class="select2-danger" style="width: 100%;" data-select2-id="3" tabindex="-1" aria-hidden="true">
                       <?php
                        foreach ($listadoTipoPropiedad as $key => $TipoPropiedades) {
                          echo '<option class="red-input" value="'.$TipoPropiedades->Id.'">'.$TipoPropiedades->Descripcion.'</option>';
                        }
                      ?>
                    </select>                  
                </div>             
            </div>
            -->
            
           
        </div>
        <hr>
        <div class="row">
          <div class="col-4" >
              <div class="form-group">
                <label for="direccion">Dirección</label>
                <input type="text" class="form-control limpiar" id="Direccion" name="Direccion">
              </div>
          </div>
          <div class="col-4">   
              <div class="form-group">
                    <label>Ubicación</label>
                    <select class="form-control select2 select2-danger select2-hidden-accessible" id="ubicacion" data-dropdown-css-class="select2-danger" style="width: 100%;" data-select2-id="3" tabindex="-1" aria-hidden="true" name="Ubicacion">
                       <?php
                        foreach ($listadoUbicaciones as $key => $ubicacion) {
                          echo '<option class="red-input" value="'.$ubicacion->id_ubicacion.'">'.$ubicacion->descripcion.'</option>';
                        }
                      ?>
                    </select>                  
                </div>             
            </div>
          <div class="col-4">
              <div class="form-group">
                  <label>Localidad</label>
                  <select class="form-control select2 select2-danger select2-hidden-accessible" data-dropdown-css-class="select2-danger" id="Ciudad" name="Ciudad" style="width: 100%;" data-select2-id="4" tabindex="-1" aria-hidden="true">
                     <?php
                      foreach ($listadoCiudad as $key => $Ciudad) {
                        echo '<option class="red-input" value="'.$Ciudad->id_ciudad.'">'.$Ciudad->descripcion.'</option>';
                      }
                    ?>
                  </select>                  
              </div>    
          </div>
        </div>
        <div class="row">
          <div class="col-12" >
              <div class="form-group">
                <label for="mapa">Mapa</label>                
                <textarea class="form-control limpiar" rows="2" id="Mapa" name="Mapa" placeholder="Incorpore el HTML de Google Maps..."></textarea>
              </div>
          </div>
        </div>
        <hr>
          <div class="row">
             <div class="col-2">
              <div class="form-group">
                  <label>Moneda</label>
                  <select class="form-control select2 select2-danger select2-hidden-accessible" data-dropdown-css-class="select2-danger" id="Moneda" name="Moneda" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                     <?php
                      foreach ($listadoMonedas as $key => $moneda) {
                        echo '<option class="red-input" value="'.$moneda->id.'">'.$moneda->descripcion.'</option>';
                      }
                    ?>
                  </select>                  
              </div>             
            </div>
            <div class="col-2">
              <div class="form-group">
                <label for="precio">Precio</label>
                <input type="text" class="form-control limpiar" id="Precio" name="Precio" placeholder="Ingrese Monto">
              </div>
            </div>
            <div class="col-2">
              <div class="form-group">
                <label for="expensas">Expensas</label>
                <input type="text" class="form-control limpiar" id="Expensas" name="Expensas" placeholder="Ingrese Monto">
              </div>
            </div>
               
          </div>
          <hr>
          <div class="row">  
           <div class="col-2">
              <div class="form-group">
                <label for="suptotal">Superficie Total</label>
                <input type="number" class="form-control limpiar" id="SupTotal" name="SupTotal" placeholder="0" min="0">
              </div>
            </div>
            <div class="col-2">
              <div class="form-group">
                <label for="supcub">Superficie Cubierta</label>
                <input type="number" class="form-control limpiar" id="SupCub" name="SupCub" placeholder="0" min="0">
              </div>
            </div>
            <div class="col-2">
              <div class="form-group">
                <label for="supdesc">Superficie Descubierta</label>
                <input type="number" class="form-control limpiar" id="SupDesc" name="SupDesc" placeholder="0" min="0">
              </div>
            </div>
          </div>
          <hr>
        <div class="row">  
           <div class="col-2">
              <div class="form-group">
                <label for="ambientes">Ambientes</label>
                <input type="number" class="form-control limpiar" id="Ambientes" name="Ambientes" placeholder="0" min="0">
              </div>
            </div>
            <div class="col-2">
              <div class="form-group">
                <label for="dormitorios">Dormitorios</label>
                <input type="number" class="form-control limpiar" id="Dormitorios" name="Dormitorios" placeholder="0" min="0">
              </div>
            </div>
            <div class="col-2">
              <div class="form-group">
                <label for="antiguedad">Antigüedad</label>
                <input type="number" class="form-control limpiar" id="Antiguedad" name="Antiguedad" placeholder="0" min="0">
              </div>
            </div>
            <div class="col-2">
              <div class="form-group">
                <label for="bano">Baños</label>
                <input type="number" class="form-control limpiar" id="Bano" name="Bano" placeholder="0" min="0">
              </div>
            </div>
            <div class="col-4">
              <div class="form-group">
                <label for="orientacion">Orientación</label>
                <input type="text" class="form-control limpiar" id="Orientacion" name="Orientacion" placeholder="">
              </div>
            </div>         
        </div>
          <div class="row">    
            <div class="col-2" >
              <div class="form-group">
                <label for="cochera">Cocheras</label>
                <input type="number" class="form-control limpiar" id="Cochera" name="Cochera" placeholder="0" min="0">
              </div>
            </div>
            <div class="col-2" >
              <div class="form-group">
                <label for="pisos">Pisos</label>
                <input type="number" class="form-control limpiar" id="Pisos" name="Pisos" placeholder="0" min="0">
              </div>
            </div>
            <div class="col-4">
            </div>
            <div class="col-4">
              <div class="form-group">
                <label for="estado">Estado</label>
                <input type="text" class="form-control limpiar" id="Estado" name="Estado" placeholder="">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <div class="form-group">  
                <label for="descripcion">Descripción</label>
                <!--input type="textarea" class="form-control limpiar" id="Descripcion" name="Descripcion" placeholder="Descripción"-->
                <textarea class="form-control limpiar" rows="5" id="Descripcion" name="Descripcion" placeholder="Descripción"></textarea>                
              </div>
            </div>            
          </div>

      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Guardar</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
        
      </div>
    </div>
  </div>
</div>


<script type="text/javascript">
    $('.select2').select2();  


    $("#dependencia").change(function(){
          var dependencia_id = $('#dependencia').val();
          $.ajax({         
            url: "<?=site_url()?>/../../buscarCiudades/"+dependencia_id,
            type: "GET",
            dataType : 'json',
            success: function(respuesta){
              $("#ciudad").empty();              
              $("#ciudad").select2({
                data: respuesta
              })
            }
          });              
        });
</script>