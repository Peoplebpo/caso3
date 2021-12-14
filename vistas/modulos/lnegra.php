

  <script type="text/javascript" src="vistas/js/agregar_numero4.js"></script>
  <link rel="stylesheet" href="vistas/css/main.css">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>LISTA NEGRA</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="inicio">Home</a></li>
              <li class="breadcrumb-item active">Lista Negra</li>
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
                <h3 class="card-title">LISTA NEGRA</h3>
               

                <div class="container-fluid my-3">
                  <div class="row">
                    <div class="col d-grid gap-2 d-md-flex justify-content-md-end">

                      <button type="button" class="btn btn-info text-white" data-bs-toggle="modal" data-bs-target="#subir_usuarios" style="float: left; margin-right: 10px;">Subir Numeros<i class="fas fa-file-upload" style="margin-left: 5px;"></i></button>
                      
                      <?php
                        include 'vistas/modulos/modales/modal_agg.php';
                      ?>
                    

                      <button type="button" class="btn btn-warning text-white" data-bs-toggle="modal" data-bs-target="#ingresar">Ingresar Numero
                      <i class="fas fa-user-plus"></i></button>

                      <?php
                        include 'vistas/modulos/modales/modal_ing.php';
                      ?>
                    


                    </div>
                  </div>        
                </div>
              


              </div>
            

          <div class="container-fluid my-2">

              <div class="row">

                <div class="table-responsive">

                    <table id="employee_data" class="table table-striped table-bordered" style="width:100%">

                        <thead>

                            <tr>

                            <th>ID</th>                                
                            <th>NUMERO</th>  
                            <th>FECHA Y HORA</th> 
                            <th>ACCIONES</th>

                            </tr>

                        </thead>

                    </table>

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