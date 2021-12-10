
  <?php
      include 'vistas/modulos/modales/modal1.php';
  ?>
<script type="text/javascript" src="vistas/js/agregar_numero1.js"></script>
<link rel="stylesheet" href="vistas/css/main.css">
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
              <li class="breadcrumb-item active">Grabaciones Referidos</li>
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
                <h3 class="card-title">Grabaciones Referidos</h3>
                <?php
                  include 'modelos/reportes/reporte1.php';
                ?>
              </div>
            

          <div class="container-fluid my-2">

              <div class="row">

                <div class="table-responsive">

                    <table id="tablaUsuarios1" class="table table-striped table-bordered" style="width:100%">

                        <thead>

                         
                            <tr>

                                <th>SESSION ID</th>                                
                                <th>PHONE</th>  
                                <th>CAMPAÑA</th>
                                <th>NOMBRE AGENTE</th>
                                <th id="rut_g">RUT AGENTE</th>
                                <th id="numero_tabla">NUMERO AGENTE</th>
                                <th id="email_tabla">EMAIL AGENTE</th>
                                <th id="fecha_g">FECHA Y HORA DE GRABACION</th>
                                <th id="fecha_tabla">FECHA</th>
                                <th id="ingreso_tabla">FECHA INGRESO</th>
                                <th id="hora_tabla">HORA INGRESO</th>
                                <th>PCS</th>
                                <th id="tipo_tabla">TIPO</th>
                                <th id="campana_tabla">CAMPAÑA</th>
                                <th id="producto_tabla">PRODUCTO</th>
                                <th id="rut_tabla">RUT CLIENTE</th>
                                

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