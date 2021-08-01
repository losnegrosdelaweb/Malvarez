
  <style>
  .foot{
    width: 100%;
    padding-right: var(--bs-gutter-x,.75rem);
    padding-left: var(--bs-gutter-x,.75rem);
    margin-right: auto;
    margin-left: auto;
    background-color: #020202;
    color: white;
    text-align: -webkit-center;
    position: absolute;
    bottom: 0;
    height: auto;
  }
   #app-messenger, #app-whatsapp{
    position: fixed;
    right: 0%;
    bottom: 25px;
    width: 60px;
    z-index: 1000;
    display: none;
  }
  #app-whatsapp{
    bottom: 95px;
    display: block;
  }
  #app-messenger i, #app-whatsapp i{
    font-size: 63px;
  }
  #app-whatsapp i{
    color: #1ebea5;
  }
  #app-messenger i{
    color: #0084ff; 
  }

  @media screen and (max-width: 766px){
    #fb-root{
      display: none;
    }
    #app-messenger{
      display: block;
    }
  }
  a{
    text-decoration: none;
  }
  .responsive {
    width: 100%;
    max-width: 250px;
    height: auto;
  }

 </style>

 <a id="app-whatsapp" target="_blanck" href="https://wa.me/+5491135560795">
     <img src="/<?=base_url('assets/img/Whatsapp.png')?>" style="width: 100%;">
     <!--<i class="fab fa-whatsapp"></i>-->
</a>


<footer class="foot py-5">
  <div class="row" style="width: 90%;">
    <div class="col-12 col-md">
      <img src="/<?=base_url('assets/img/logo-footer.png')?>" class="responsive">

      <small class="d-block mb-3 text-muted">&copy; 2021 - MALVAREZ Servicios Inmobiliarios.</small>
    </div>

    <div class="col-6 col-md">
      <h5></h5>
      <ul class="list-unstyled text-small">
        <li class="link-secondary">MAT. 7420 CUCICBA</li>
        <li class="link-secondary">Alvarez Miriam E.</li>
        <li class="link-secondary">Bienes Raíces · Estudio Jurídico · Asesoramiento legal y notarial</li>
      </ul>
    </div>

    <div class="col-6 col-md">
      <h5>Seguinos en</h5>
      <ul class="list-unstyled text-small">
              <li><a href="https://www.facebook.com/MAlvarez-Servicios-Inmobiliarios-105021768004660">
                  <img src="https://static.tokkobroker.com/tfw/img/r-facebook.svg?20210602200718" width="40" height="40">
                </a>              
                <a href="https://www.instagram.com/malvarezinmobiliaria/?hl=es">
                  <img src="https://static.tokkobroker.com/tfw/img/r-instagram.svg?20210602200718" width="40" height="40">
                </a></li>
      </ul>
    </div>
    <div class="col-6 col-md">
      <h5>Contactos</h5>
      <ul class="list-unstyled text-small">
        <li>
          <a class="link-secondary" href="https://wa.me/+5491135560795"><i class="fas fa-mobile-alt" style="color: white;"></i> 11 3556-0795</a></li>
        <li>
          <a class="link-secondary" href="https://wa.me/+5491158052424"><i class="fas fa-mobile-alt" style="color: white;"></i> 11 5805-2424</a></li>
        <li>
          <a class="link-secondary" href="mailto:infomalvarezsi@gmail.com"><i class="far fa-envelope" style="color: white;"></i> infomalvarezsi@gmail.com</a>
      </ul>
    </div>
    
    <div class="col-6 col-md">
      <h5>Acceso</h5>
      <ul class="list-unstyled text-small">
        <li><a class="link-secondary" href="/./Malvarezsi/index.php/login"><i class="fas fa-user-lock" style="color: white;"></i> Login</a></li>
      </ul>
    </div>
  </div>
</footer>
  </body>
</html>