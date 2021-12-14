
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="sweetalert2.all.min.js"></script>


<div class=" container-fluid d-flex justify-content-center align-items-center" style="background:#E6E6E6; height: 100vh;">


<div class="login-box">

      <div class="login-logo" style="margin-top: -230px;">

          <img src="vistas/img/logo-3.png" class="img-responsive" style="text-align:center; width:80%;">

      </div>
      
      <div class="card card-outline card-primary"  style="margin-top: -150px;">
        <div class="card-header text-center">
          <a href="" class="h2"><b>INICIAR SESSION</b></a>
        </div>
        <div class="card-body">
      

          <form  method="post">
            <div class="input-group mb-3">
              <input type="text" class="form-control" placeholder="Usuario" name="user">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-envelope"></span>
                </div>
              </div>
            </div>
            <div class="input-group mb-3">
              <input type="password" class="form-control" placeholder="Password" name="password">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-lock"></span>
                </div>
              </div>
            </div>
            <div class="row">
             
              
              <div class="d-grid gap-2" style="width: 100% !important;">
                <button type="submit" class="btn btn-primary btn-block" style="background-color:#C9D218 !important; color:#373050;"><strong>Ingresar</strong></button>
              </div>
              
            </div>
          </form>

          <?php
          $login = new ControladorLogin();
          $login->clogin();
          
          ?>
          
        </div>
      
      </div>
   
</div>


</div>



