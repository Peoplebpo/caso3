
  <script type="text/javascript" src="vistas/js/sms_integracion.js"></script>
  <link rel="stylesheet" href="vistas/css/main.css">
  <link href="http://fonts.cdnfonts.com/css/geometria" rel="stylesheet">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Integración LabsMobile</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="inicio">Home</a></li>
              <li class="breadcrumb-item active">SMS Masivo</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
         <!-- SELECT2 EXAMPLE -->
         <div class="card card-default card-info">
            <div class="card-header" id="lm" style="font-family: geometria, sans-serif;">
              <h3 class="card-title">SMS Masivo</h3>
            </div>
           
            <div class="card-body">

              <form id="formproductos">

                        <div class="row">

                              <div class="col-lg-6">

                                <label for="" class="form-label">Usuario</label>

                                  <div class="form-group">
                              
                                      <div class="input-group">

                                          <span class="input-group-text" id="basic-addon1"><i class="fa fa-user"></i></span>

                                          <input type="text" class="form-control input-lg"  id="usuario" required>

                                      </div> 

                                  </div>

                              </div>

                              <div class="col-lg-6">

                              <label for="" class="form-label">Contraseña</label>

                                  <div class="form-group">
                              
                                      <div class="input-group">
                                      
                                          <span class="input-group-text" id="basic-addon1"><i class="fas fa-lock"></i></span>

                                          <input type="password" class="form-control input-lg" id="clave" required>

                                      </div> 

                                  </div>

                              </div>

                        </div>


                         <div class="modal-footer">

                            <button style="width: 100px; border-radius: 20px !important; font-family: geometria, sans-serif; font-size: 1rem; background-color:#322a46 !important; color: #C8D118;" type="submit" id="btnguardar" class="btn shadow-none">Guardar</button>

                        </div>

              </form>
          
            </div>
          
        </div>
        
    </section>
    <!-- /.content -->
  </div>
