
  <style>
  .foot{
    width: 100%;
    padding-right: var(--bs-gutter-x,.75rem);
    padding-left: var(--bs-gutter-x,.75rem);
    margin-right: auto;
    margin-left: auto;
    background-color: #020202;
    color: white;
    text-align: -webkit-center;;
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

  </style>

 <a id="app-whatsapp" target="_blanck" href="https://wa.me/+1135560795">
     <img src="/<?=base_url('assets/img/Whatsapp.png')?>" style="width: 100%;">
     <!--<i class="fab fa-whatsapp"></i>-->
</a>


<footer class="foot py-5">
  <div class="row" style="width: 90%;">
    <div class="col-12 col-md">
      <img src="/<?=base_url('assets/img/logo-footer.png')?>" style="width: 100%;">

      <small class="d-block mb-3 text-muted">&copy; 2021 - MALVAREZ Servicios Inmobiliarios.</small>
    </div>

    <div class="col-6 col-md">
      <h5>Matrícula</h5>
      <ul class="list-unstyled text-small">
        <li class="link-secondary">MAT. 7420 CUCICBA</li>
        <li class="link-secondary">Bienes raíces · Abogado de bienes raíces · Servicio de escritura.</li>
      </ul>
    </div>

    <div class="col-6 col-md">
      <h5>Seguinos en</h5>
      <ul class="list-unstyled text-small">
              <li><a href="https://www.facebook.com/MAlvarez-Servicios-Inmobiliarios-105021768004660">
                  <img src="https://static.tokkobroker.com/tfw/img/r-facebook.svg?20210602200718" width="40" height="40">
                </a>              
                <a href="https://www.facebook.com/MAlvarez-Servicios-Inmobiliarios-105021768004660">
                  <img src="https://static.tokkobroker.com/tfw/img/r-instagram.svg?20210602200718" width="40" height="40">
                </a></li>
      </ul>
    </div>
    <div class="col-6 col-md">
      <h5>Contactos</h5>
      <ul class="list-unstyled text-small">
        <li>
          <a class="link-secondary" href="tel:011 3556-0795"><i class="fas fa-mobile-alt" style="color: white;"></i> 011 3556-0795</a></li>
        <li>
          <i class="far fa-envelope"></i><a class="link-secondary" href="mailto:infomalvarezsi@gmail.com"> infomalvarezsi@gmail.com</a>
      </ul>
    </div>
    
    <div class="col-6 col-md">
      <h5>Acceso</h5>
      <ul class="list-unstyled text-small">
        <li><i class="fas fa-user-lock"></i><a class="link-secondary" href="/./Malvarezsi/index.php/login"> Login</a></li>
      </ul>
    </div>
  </div>
</footer>
  </body>
</html>