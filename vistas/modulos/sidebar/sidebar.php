<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="inicio" class="brand-link"  style="text-decoration: none">
      <img src="vistas/dist/img/logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">PEOPLE BPO</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        
        <div class="info">
          <a style="text-decoration: none" href="#" class="d-block"><?php echo $_SESSION["nombre"];?></a>
        </div>
        <div class="info">
          <a style="text-decoration: none" href="#" class="d-block">(<?php echo $_SESSION["rol"];?>)</a>
        </div>
      </div>
      

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Buscar" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <?php
          $rol=$_SESSION["rol"];
          if($rol=="Admin"){
            echo 
        '<li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-file-excel"></i>
            <p>
              REPORTES
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="grabaciones" class="nav-link">
                <i class="nav-icon fas fa-check"></i>
                <p>Grabaciones</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="ghuerfanas" class="nav-link">
              <i class="nav-icon fas fa-check"></i>
                <p>Grab. Huerfanas</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="administrador" class="nav-link">
            <i class="nav-icon fas fa-keyboard"></i>
            <p>TIPIFICACIÓN</p>
          </a>
        </li>
          <li class="nav-item">
            <a href="clientes" class="nav-link">
              <i class="nav-icon fas fa-people-carry"></i>
              <p>CLIENTES</p>
            </a>
          </li>
        <li class="nav-item">
          <a href="sms" class="nav-link">
            <i class="nav-icon fas fa-sms"></i>
            <p>ENVIO SMS</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="https://kit-us.voximplant.com/login" class="nav-link" target="_blank">
            <i class="nav-icon fas fa-phone-square-alt"></i>
            <p>LLAMADAS</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-tasks"></i>
            <p>
              GESTIÓN
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>

          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="usuarios" class="nav-link">
                <i class="nav-icon fas fa-users"></i>
                <p>USUARIOS</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-shopping-basket"></i>
                <p>
                  PRODUCTOS
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="productos" class="nav-link">
                    <i class="nav-icon  fas fa-cart-plus"></i>
                    <p>Productos</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="subproductos" class="nav-link">
                    <i class="nav-icon  fab fa-shopify"></i>
                    <p>Sub Productos</p>
                  </a>
                </li>
              </ul>
            </li>

            <li class="nav-item">
              <a href="servicios" class="nav-link">
                <i class="nav-icon fab fa-audible"></i>
                <i class="fas "></i>
                <p>SERVICIOS</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="sucursal" class="nav-link">
                <i class="nav-icon fas fa-laptop-house"></i>
                <p>SUCURSAL</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="canalpago" class="nav-link">
                <i class="nav-icon fab fa-cc-visa"></i>
                <p>CANAL PAGO</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="lnegra" class="nav-link">
                <i class="nav-icon fas fa-list-ul"></i>
                <p>LISTA NEGRA</p>
              </a>
            </li>
          
          </ul>
        </li>';
          }
          if($rol=="Sup"){
            echo '
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-file-excel"></i>
                <p>
                  REPORTES
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="grabaciones" class="nav-link">
                    <i class="nav-icon fas fa-check"></i>
                    <p>Grabaciones</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="ghuerfanas" class="nav-link">
                  <i class="nav-icon fas fa-check"></i>
                    <p>Grabaciones Huerfanas</p>
                  </a>
                </li>
              </ul>
            </li>

            <li class="nav-item">
              <a href="administrador" class="nav-link">
                <i class="nav-icon fas fa-keyboard"></i>
                <p>TIPIFICACIÓN</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="clientes" class="nav-link">
                <i class="nav-icon fas fa-people-carry"></i>
                <p>CLIENTES</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="sms" class="nav-link">
                <i class="nav-icon fas fa-sms"></i>
                <p>ENVIO SMS</p>
              </a>
            </li>';
          }

          if($rol=="Age"){
            echo '
        <li class="nav-item">
          <a href="administrador" class="nav-link">
            <i class="nav-icon fas fa-keyboard"></i>
            <p>TIPIFICACIÓN</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="https://kit-us.voximplant.com/login" class="nav-link" target="_blank">
            <i class="nav-icon fas fa-phone-square-alt"></i>
            <p>LLAMADAS</p>
          </a>
        </li>';
          }
          ?>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>