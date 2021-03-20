<style>
  .bd-placeholder-img {
    font-size: 1.125rem;
    text-anchor: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    user-select: none;
  }

  @media (min-width: 768px) {
    .bd-placeholder-img-lg {
      font-size: 3.5rem;
    }
  }    
  .form-signin {
    width: 100%;
    max-width: 330px;
    padding: 15px;
    margin: auto;
  }
  .form-signin .checkbox {
    font-weight: 400;
  }
  .form-signin .form-control {
    position: relative;
    box-sizing: border-box;
    height: auto;
    padding: 10px;
    font-size: 16px;
  }
  .form-signin .form-control:focus {
    z-index: 2;
  }
  .form-signin input {
    margin-bottom: -1px;
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0;

    border-top-left-radius: 0;
    border-top-right-radius: 0;
  }
  .form-signin input[type="password"] {
    margin-bottom: 10px;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
  }
</style>

<div class="text-center" style="padding-top: 60px">    
  <main class="form-signin">
    <form action="/<?=site_url('validar')?>" method="POST">
      <img class="mb-4" src="/<?=base_url('')?>dist/img/AdminLTELogo.png" alt="" width="72" height="57">
      <h1 class="h3 mb-3 fw-normal">Iniciar Sesión</h1>
      <label for="email" class="visually-hidden">Email</label>
      <input type="email" id="email" name="email" class="form-control" placeholder="Email" required autofocus>
      <label for="inputPassword" class="visually-hidden">Contraseña</label>
      <input type="password" id="clave" name="clave" class="form-control" placeholder="Contraseña" required>
      <button type="submit" class="w-100 btn btn-lg btn-primary" >Aceptar</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2021</p>
    </form>
  </main>
</div>
</body>
</html>
