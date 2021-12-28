
  <?php
      include 'vistas/modulos/modales/modal.php';
  ?>
  <script type="text/javascript" src="vistas/js/agregar_numero.js"></script>
  <link rel="stylesheet" href="vistas/css/main.css">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>SMS Masivo</h1>
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
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">SMS Masivo</h3>
               

                <div class="container-fluid my-3">
                  <div class="row">
                    <div class="col d-grid gap-2 d-md-flex justify-content-md-end">

                      <button type="button" class="btn btn-info text-white" data-bs-toggle="modal" data-bs-target="#subir_usuarios" style="float: left; margin-right: 10px;">Subir Numeros<i class="fas fa-file-upload" style="margin-left: 5px;"></i></button>
                      
                      <?php
                        include 'vistas/modulos/modales/modal_sms.php';
                      ?>

                      <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalInt" data-bs-whatever="@mdo">Integración</button>


                    </div>
                  </div>        
                </div>

              </div>
            

      </div>
              <!-- /.card-body -->
            </div>
            
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- modal -->

  <div class="modal fade" id="modalInt" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="AgregarProductos" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                <div class="modal-header" style="background:#3c8dbc; color:white">
                    <h5 class="modal-title" id="AgregarProductos">INTEGRACIÓN VOXIMPLANT</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                <form id="formproductos">

                      <div class="row">

                          <div class="col-lg">

                              <div class="form-group">
                          
                                  <div class="input-group">
                                  
                                      <span class="input-group-text" id="basic-addon1"><i class="fas fa-edit"></i></span>

                                      <input type="text" class="form-control input-lg" placeholder="Ingresar Dominio" id="dominio" required>

                                  </div> 

                              </div>

                          </div>

                      </div>

                      <div class="row" style="text-align: center;">

                      <div class="col-lg">

                              <div class="form-group">
                    
                                  <div class="input-group">
                                  
                                      <span class="input-group-text" id="basic-addon1"><i class="fas fa-file-signature"></i></span>

                                      <input type="text" class="form-control input-lg" placeholder="Ingresar Campaña ID" id="campana_id" required>

                                  </div>

                              </div>

                          </div>


                      </div>

                      <div class="row">

                          <div class="col-lg">

                              <div class="form-group">
                    
                                  <div class="input-group">
                                  
                                      <span class="input-group-text" id="basic-addon1"><i class="fas fa-signature"></i></span>

                                      <input type="text" class="form-control input-lg" placeholder="Ingresar Access Token" id="access_token" required>

                                  </div>

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
        </div>

  <!-- fin modal -->