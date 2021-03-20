
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4" style="flex: 1;">
    <!-- Brand Logo -->
    <a href="dashboard" class="brand-link">
      <img src="/<?=base_url('dist/img/AdminLTELogo.png')?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Proyecto</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="/<?=base_url('dist/img/user2-160x160.jpg')?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">          
            <?php if (isset($this->session->login)) {
              echo '<a class="d-block">'.$this->session->email.'</a>';             
              //echo "<a>".$this->session->email."</a>";              
            } ?>   
        </div>
      </div>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Gestión
                <i class="fas fa-angle-left right"></i>
                <!--<span class="badge badge-info right">6</span>-->
              </p>
            </a>
            <ul class="nav nav-treeview">
              <!--
              <li class="nav-item">
                <a href="pages/layout/top-nav.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Catalogo</p>
                </a>
              </li>
              -->
              <li class="nav-item">
                <a href="/<?=site_url('propiedad')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Propiedad</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/<?=site_url('tipoPropiedad')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tipo Propiedad</p>
                </a>
              </li>
              <!--
              <li class="nav-item">
                <a href="pages/layout/boxed.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Servicios</p>
                </a>
              </li>              
            -->
            </ul>            
          </li>


          
          <li class="nav-header">Administrador</li>
          <li class="nav-item">
            <a href="/<?=site_url('users')?>" class="nav-link">
              <i class="nav-icon far fa-user"></i>
              <p>
                Usuarios               
              </p>
            </a>
          </li>                   
         
          <li class="nav-header">Niveles</li>
          <li class="nav-item">
            <a href="<?=base_url('/../..')?>" class="nav-link">
              <i class="nav-icon far fa-circle text-danger"></i>
              <p class="text">Cerrar Sesión</p>
            </a>
          </li>
          <!--
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle text-warning"></i>
              <p>Warning</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle text-info"></i>
              <p>Informational</p>
            </a>
          </li>
        -->
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>