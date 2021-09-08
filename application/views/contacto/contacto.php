<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback">
    <style>
    .bg-light {
      min-height: 450px;
    }
    .fontStyle {
      background-color: #181919db!important;
      border-radius: 15px;
    }
    .form-group {
      margin-bottom: 2%;
    }
    .status {
      color: red;
    }
    .statusok {
      color: red;
    }
    </style>
<main class="bg-light">
<div class="container">
<div class="content-wrapper ">    
<section class="content-header " style="text-align: -webkit-center;padding-top: 20px;">
          <h2 class="fontStyle fw-normal" style="color: white;padding: 0.5%;">Contacto</h2>
</section>
<section class="content">
      <!-- Default box -->
      <div class="card">
        <div class="card-body row">
          <div class="col-5 text-center d-flex align-items-center justify-content-center">
            <div>
              <h2>M.ALVAREZ</h2><br><div style="color: red;font-size: x-large;">SERVICIOS INMOBILIARIOS</div><br><br>
              <p class="lead mb-5">Tel: (+54 9) 11-3556-0795 / 11-5805-2424<br><br>
                info@malvarezsi.com
              </p>
            </div>
          </div>
          <div class="col-7">
            <form id="contactoForm" method="POST">
              <div class="form-group">
                <label for="inputName">Nombre / Apellido *</label>
                <input type="text" id="inputName" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputEmail">E-Mail *</label>
                <input type="email" id="inputEmail" class="form-control" placeholder="usuario@ejemplo.com">
              </div>
              <div class="form-group">
                <label for="tel">Teléfono</label>
                <input type="text" class="form-control" id="Tel" name="Tel">
              </div>
              <div class="form-group">
                <label for="inputSubject">Asunto *</label>
                <input type="text" id="inputSubject" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputMessage">Mensaje *</label>
                <textarea id="inputMessage" class="form-control" rows="4"></textarea>
              </div>
              <div class="status"></div>
              <div class="statusok"></div>
              <div class="form-group" style="float: right;">
                <input type="submit" class="btn btn-primary" value="Enviar" onclick="validateForm();">
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
<!--Section: Contact v.2-->
    <!--Custom scripts-->
    <script>

function validateForm() {
     var x =  document.getElementById('inputName').value;
     if (x == "") {
         document.querySelector('.status').innerHTML = "Nombre no puede quedar vacío.";
         return false;
     }
     var email =  document.getElementById('inputEmail').value;
     var tel =  document.getElementById('Tel').value;
     if (email == "" && tel == "") {
         document.querySelector('.status').innerHTML = "Debe ingresar un medio de contacto.";
         return false;
     } else {
         var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
         if(!re.test(email)){
             document.querySelector('.status').innerHTML = "Email tiene un formato inválido.";
             return false;
         }
     }
     x =  document.getElementById('inputSubject').value;
     if (x == "") {
         document.querySelector('.status').innerHTML = "Asunto no puede quedar vacío.";
         return false;
     }
     x =  document.getElementById('inputMessage').value;
     if (x == "") {
         document.querySelector('.status').innerHTML = "Mensaje no puede quedar vacío.";
         return false;
     }
      document.querySelector('statusok').innerHTML = "Enviando...";
     
}
    </script>
</div>
</div>
</main>