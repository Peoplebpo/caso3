

  <script type="text/javascript" src="vistas/js/email_integracion.js"></script>
  <link rel="stylesheet" href="vistas/css/main.css">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Integración Sendgrid</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="inicio">Home</a></li>
              <li class="breadcrumb-item active">Email Masivo</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
         <!-- SELECT2 EXAMPLE -->
         <div class="card card-default card-info">
            <div class="card-header">
              <h3 class="card-title">Email Masivo</h3>
            </div>
           
            <div class="card-body">

              <form id="formproductos">

                        <div class="row">

                              <div class="col-lg-6">

                                <label for="email_aut" class="form-label">Email Autorizado</label>

                                  <div class="form-group">
                              
                                      <div class="input-group">

                                         
                                      
                                          <span class="input-group-text" id="basic-addon1"><i class="fas fa-envelope-open-text"></i></span>

                                          <input type="email" class="form-control input-lg"  id="email_aut" required>

                                      </div> 

                                  </div>

                              </div>

                              <div class="col-lg-6">

                              <label for="email_aut" class="form-label">Servidor SMTP</label>

                                  <div class="form-group">
                              
                                      <div class="input-group">
                                      
                                          <span class="input-group-text" id="basic-addon1"><i class="fas fa-server"></i></span>

                                          <input type="text" class="form-control input-lg" id="servidor_smtp" required>

                                      </div> 

                                  </div>

                              </div>

                        </div>

                          <div class="row">

                              <div class="col-lg-6">

                                <label for="email_aut" class="form-label">Usuario</label>

                                  <div class="form-group">
                              
                                      <div class="input-group">
                                      
                                          <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>

                                          <input type="text" class="form-control input-lg"  id="usuario" required>

                                      </div> 

                                  </div>

                              </div>

                              <div class="col-lg-6">

                                <label for="email_aut" class="form-label">Clave</label>

                                  <div class="form-group">
                              
                                      <div class="input-group">
                                      
                                          <span class="input-group-text" id="basic-addon1"><i class="fas fa-unlock-alt"></i></span>

                                          <input type="text" name="clave" class="form-control input-lg" id="clave" required>

                                      </div> 

                                  </div>

                              </div>

                        </div>

                          <div class="row">

                              <div class="col-lg-6">

                                <label for="email_aut" class="form-label">Puerto</label>

                                  <div class="form-group">
                              
                                      <div class="input-group">
                                      
                                          <span class="input-group-text" id="basic-addon1"><i class="fas fa-file-import"></i></span>

                                          <input type="text" class="form-control input-lg"  id="puerto" required>

                                      </div> 

                                  </div>

                              </div>

                        </div>

                         <div class="modal-footer">

                            <button type="submit" id="btnguardar" class="btn btn-success">Guardar</button>

                        </div>

              </form>
          
            </div>
          
        </div>
        
    </section>
    <!-- /.content -->
  </div>
