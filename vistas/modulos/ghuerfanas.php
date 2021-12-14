
  <?php
      include 'vistas/modulos/modales/modal2.php';
  ?>
  <link rel="stylesheet" href="vistas/css/main.css">
  <script type="text/javascript" src="vistas/js/agregar_numero2.js"></script>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>REPORTES</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="inicio">Home</a></li>
              <li class="breadcrumb-item active">Grabaciones Huerfanas</li>
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
                <h3 class="card-title">Grabaciones Huerfanas</h3>
                <?php
                  include 'modelos/reportes/reporte2.php';
                ?>
              </div>
            

          <div class="container-fluid my-2">

              <div class="row">

                <div class="table-responsive">

                    <table id="tablaUsuarios2" class="table table-striped table-bordered" style="width:100%">

                        <thead>

                            <tr>

                            <th>SESSION ID</th>                                
                            <th>PHONE</th>  
                            <th>CAMPAÑA</th> 
                            <th>FECHA Y HORA DE GRABACION</th>
                            <th>FECHA</th>
                            <th>Acciones</th>

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