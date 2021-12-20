<script src="vistas/dist/js/pages/dashboard3.js"></script>
<script src="vistas/dist/js/pages/dashboard.js"></script>
  <!-- DataTables -->

  <script type="text/javascript" src="vistas/js/comportamiento.js"></script>
  
  <link rel="stylesheet" href="vistas/css/main.css">

<?php $rol=$_SESSION["rol"]; ?>  
  <link rel="stylesheet" href="vistas/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="vistas/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="vistas/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">

        </div>
      </div><!-- /.container-fluid -->
    </section>

     <!-- Main content -->
     <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><span id="cobranza"></span></h3>

                <p>COBRANZA (M)</p>
              </div>
              <div class="icon">
                <i class="fas fa-store"></i>
              </div>
              <?php
              if($rol<>"Agente"){
              echo '<a href="administrador" class="small-box-footer">Más info <i class="fas fa-arrow-circle-right"></i></a>';
              }?>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3><span id="no_cobranza"></span></h3>

                <p>NO COBRANZA (M)</p>
              </div>
              <div class="icon">
                <i class="fas fa-store-slash"></i>
              </div>
              <?php
              if($rol<>"Agente"){
              echo '<a href="administrador" class="small-box-footer">Más info <i class="fas fa-arrow-circle-right"></i></a>';
              }?>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner text-white">
                <h3><span id="total_grabaciones"></span></h3>

                <p>GRABACIONES</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <?php
              if($rol<>"Agente"){
              echo '<a href="grabaciones" class="small-box-footer">Más info <i class="fas fa-arrow-circle-right"></i></a>';
              }?>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><span id="total_grabaciones_huerfanas"></span></h3>

                <p>GRABACIONES HUER..</p>
              </div>
              <div class="icon">
                <i class="fas fa-list-ul"></i>
              </div>
              <?php
              if($rol<>"Agente"){
              echo '<a href="ghuerfanas" class="small-box-footer">Más info <i class="fas fa-arrow-circle-right"></i></a>';
              }?>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">

         <div class="col-md-6">
            <!-- AREA CHART -->
            <div class="card card-secondary">
              <div class="card-header">
                <h3 class="card-title">Grafico Cobranza - No Cobranza</h3>

              </div>
              <div class="card-body">
                <div class="chart">
                  <canvas id="barChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                </div>
              </div>
            </div>
            <!-- /.card -->

            <div class="card card-info">
              <div class="card-header border-0">
                <div class="d-flex justify-content-between">
                  <h3 class="card-title">Contactabilidad</h3>
                </div>
              </div>
              <div class="card-body">
    
                <!-- /.d-flex -->

                <div class="position-relative mb-4">
                  <canvas id="visitors-chart" height="200"></canvas>
                </div>

                <div class="d-flex flex-row justify-content-end">
                  <span class="mr-2">
                    <i class="fas fa-square text-primary"></i> Mes Actual
                  </span>

                  <span>
                    <i class="fas fa-square text-gray"></i> Mes Pasado
                  </span>
                </div>
              </div>
            </div>
         </div>

         <div class="col-md-6">
         
            <!-- DONUT CHART -->
            <div class="card card-success">
              <div class="card-header bg-success">
                <h3 class="card-title">Item's Cobranza (M)</h3>

              </div>
              <div class="card-body">
                <canvas id="donutChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

                <!-- /.card -->

            <div class="card card-danger">
              <div class="card-header">
                <h3 class="card-title text-white">Item's No Cobranza (M)</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table table-sm" id="tablacomp">
                  <thead>
                    <tr>
                      <th style="text-align: center;">ACCIÓN</th>
                      <th style="text-align: center;">TOTAL</th>
                    </tr>
                  </thead>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->


        </div>
        
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

    

 
  </div>

  <!-- jQuery -->
<script src="vistas/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="vistas/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="vistas/plugins/chart.js/Chart.min.js"></script>
<!-- AdminLTE App -->
<script src="vistas/dist/js/adminlte.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="vistas/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="vistas/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="vistas/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="vistas/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>


<script src="vistas/js/mostrar_datos_inicio.js"></script>
<script src="vistas/js/graficos_inicio.js"></script>



  