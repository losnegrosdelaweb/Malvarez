<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">  
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header card-danger card-outline">
        <h5 class="modal-title" id="exampleModalLabel">Usuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?=site_url('../../insertUsuario')?>" method="POST" class="needs-validation" novalidate>
        <div class="modal-body">  
          <input type="text" class="form-control" name="id" id="id" placeholder="id" hidden="hidden">
            <div class="form-group">
				<label for="email">Email</label>
				<input type="text" class="form-control" name="email" id="email" placeholder="Email" required>
				<!--<div class="valid-feedback">Valido.</div>-->
				<div class="invalid-feedback">El campo esta vacio.</div>
            </div>
			<div class="row">
				<div style="flex: 50%;max-width: 50%;" class="col-2">			
					<div class="form-group">
						<label for="nombre">Nombre</label>
						<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre">
					</div>
					</div>
				<div style="flex: 50%;max-width: 50%;" class="col-2">
					<div class="form-group">
						<label for="tel">Teléfono</label>
						<input type="text" class="form-control" id="tel" name="tel" placeholder="Teléfono">
					</div>
				</div>
			</div>
			<div class="form-group">
                <label for="clave">Clave</label>
                <input type="text" class="form-control" id="clave" name="clave" placeholder="Clave">
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

(function () {
  'use strict'

  var forms = document.querySelectorAll('.needs-validation')

  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }
        form.classList.add('was-validated')
      }, false)
    })
})()

</script>