<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">  
  <div class="modal-dialog modal-s" role="document">
    <div class="modal-content">
      <div class="modal-header card-danger card-outline">
        <h5 class="modal-title" id="exampleModalLabel">Nueva Ubicación</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?=site_url('../../postUbicacion')?>" method="POST" class="needs-validation" novalidate>
      <div class="modal-body"> 
        <input type="text" class="form-control" id="id" name="id" hidden="">   
          <div class="form-group">
            <label for="ambientes">Descripción</label>
            <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="CABA">             
        </div>
     </div>
     <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Guardar</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
        
      </div>
       </form>
    </div>
  </div>
</div>

            


         

<script type="text/javascript">

</script>