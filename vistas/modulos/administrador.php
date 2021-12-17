
  <link rel="stylesheet" href="vistas/css/main.css">
  <script type="text/javascript" src="vistas/js/agregar_numero5.js"></script>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" id="tipificacion">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>TIPIFICACIÓN</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="inicio">Home</a></li>
              <li class="breadcrumb-item active">Registros Ingresados</li>
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
                <h3 class="card-title">Registros Ingresados</h3>

                <div class="container-fluid my-3">
                  <div class="row">
                    <div class="col d-grid gap-2 d-md-flex justify-content-md-end">

                      <a href="ingtipificacion"><button type="button" class="btn btn-warning text-white">Ingresar Registro <i class="fas fa-user-plus"></i></button></a>
              
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

  
                                <td id="n_agente"><strong>nombre agente</strong></td>
                                <td id="r_agente"><strong>rut agente</strong></td>
                                <td><strong>FECHA INGRESO</strong></td>
                                <td><strong>TELEFONO</strong></td>
                                <td><strong>IDENTIFICADOR LLAMADA</strong></td>
                                <td><strong>ESTADO GESTION</strong></td>
                                <td id="campana"><strong>campaña</strong></td>
                                <td id="pro"><strong>producto</strong></td>
                                <td id="r_cliente"><strong>RUT CLIENTE</strong></td>
                                <td id="t_cliente"><strong>TIPO cLIENTE</strong></td>
                                <td id="dni_tcliente"><strong>DNI CLIENTE</strong></td>
                                <td id="n_cliente"><strong>NOMBRE CLIENTE</strong></td>
                                <td id="f_ingreso"><strong>fecha ingreso</strong></td>
                                <td id="h_ingreso"><strong>hora ingreso</strong></td>
                                <td id="empresa_t"><strong>EMPRESA</strong></td>
                                <td id="a_cliente"><strong>APELLIDO CLIENTE</strong></td>
                                <td id="f_nacimiento"><strong>FECHA NACIMIENTO</strong></td>
                                <td id="edad_t"><strong>EDAD</strong></td>
                                <td id="sexo_t"><strong>SEXO</strong></td>
                                <td id="email_t"><strong>EMAIL</strong></td>
                                <td id="direccion_t"><strong>DIRECCION</strong></td>
                                <td id="accion_t"><strong>ACCION</strong></td>
                                <td id="cantidad_t"><strong>CANTIDAD</strong></td>
                                <td id="f_entrega"><strong>FORMA ENTREGA</strong></td>
                                <td id="sucursal_t"><strong>SUCURSAL</strong></td>
                                <td id="region_t"><strong>REGION</strong></td>
                                <td id="ciudad_t"><strong>CIUDAD</strong></td>
                                <td id="obse"><strong>OBSERVACIONES</strong></td>
                                <td id="obse"><strong>SUB PRODUCTOS</strong></td>
                                <td id="obse"><strong>CICLO FACTURACIÓN</strong></td>
                                <td id="obse"><strong>FACTURACIÓN PENDIENTE</strong></td>
                                <td id="obse"><strong>PERIODO DE FACTURACIÓN</strong></td>
                                <td id="obse"><strong>FECHA COM. PAGO</strong></td>
                                <td id="obse"><strong>CANAL DE PAGO</strong></td>
                                <td><strong>ACCIONES</strong></td>
                          
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


<div id="ver_datos">
  <?php
  include("vistas/modulos/datostipificacion.php");
  ?>
</div>


