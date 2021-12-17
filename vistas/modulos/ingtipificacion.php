
<?php

if (isset($_SESSION["user"])) {

    $usuario     = $_SESSION["user"];
    $rut_usuario = $_SESSION["rut_usuario"];
    $servicio    = $_SESSION["servicio"];
    $nombre      = $_SESSION["nombre"];
    $empresa    = "peoplebpo";
   

}else{

  header('location: ../../../login/session.html');

  exit;

}

?>



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>INGRESAR REGISTROS</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="inicio">Home</a></li>
              <li class="breadcrumb-item active">Ingresar Registros</li>
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

                <h3 class="card-title">Ingresar Registros</h3>

                <div class="container-fluid my-3">
                  <div class="row">
                    <div class="col d-grid gap-2 d-md-flex justify-content-md-end">


                      <a href="administrador"><button type="button" class="btn btn-success text-white"><i class="fas fa-hand-point-left" style="margin-right: 5px;"></i>Regresar</button></a>
                    


                    </div>
                  </div>        
                </div>
               
              </div>
            

          <div class="container-fluid my-2">

              <div class="row">

               <form action="" method="POST" accept-charset="ISO-8859-1" id="frmingresar">

                                <div class="container-fluid">

                                    <div class="row border border-secondary rounded mx-0 shadow-sm py-3 fondo_cuadro">
                                        <!-- primera columna -->

                                        <div class="col">

                                        <label>Session_id</label>
                                        <input name="session_id" type="" id="session_id" class="form-control my-2" value="" size="32"/>

                                        
                                        <label>Cedula Cliente </label>
                                        <input name="dni_cliente" type="name" id="dni_cliente" class="form-control my-2" value="" size="32"/>

                                        <label>Edad</label>
                                        <input min="0" oninput="validity.valid||(value='');" name="edad" type="number" id="edad" class="form-control my-2" value="" size="32"/>

                                        <label>Ciclo de Facturación</label>
                                        <input name="ciclo_fact" type="name" id="ciclo_fact" class="form-control my-2" value="" size="32"/>
                                        
                                        </div>

                                        <!-- segunda columna -->

                                        <div class="col"> 

                                        <label>Telefono</label>
                                        <input min="0" oninput="validity.valid||(value='');" name="pcs" type="number" id="pcs" class="form-control my-2" value="" size="32"/>

                                        <label>Nombre</label>
                                        <input name="nombre_cliente" type="name" id="nombre_cliente" class="form-control my-2" value="" size="32"/>

                                        <label>Sexo</label>
                                        <select name="sexo" id="sexo" class="form-select my-2">
                                            <option value="seleccione">Seleccione</option>
                                            <option value="sin_expecificar">Sin Expecificar</option>
                                            <option value="hombre">Hombre</option>
                                            <option value="mujer">Mujer</option>
                                        </select>

                                        <label>Facturación Pendiente</label>
                                        <input name="fact_pendiente" type="name" id="fact_pendiente" class="form-control my-2" value="" size="32"/>
 

                                        </div>

                                        <!-- tercera columna -->
                                        <div class="col">

                                        <label>Tipo Cliente</label>
                                        <select name="tipo_cliente" id="tipo_cliente" class="form-select my-2">
                                            <option value="seleccione">Seleccione</option>
                                            <option value="Chile">Chile</option>
                                            <option value="Colombia">Colombia</option>
                                        </select>

                                        <label>Apellidos</label>
                                        <input name="apellido_cliente" type="name" id="apellido_cliente" class="form-control my-2" value="" size="32"/>

                                        <label>Email</label>
                                        <input name="email" type="email" id="email" class="form-control my-2" value="" size="32"/>

                                        <label>Periodo de Facturación</label>
                                        <input name="periodo_fact" type="text" id="periodo_fact" class="form-control my-2" value="" size="32"/>


                                        </div>

                                        <!-- cuarta columna -->

                                        <div class="col">

                                        <label>Rut Cliente</label>
                                        <input class="form-control my-2 rut" name="rut_cliente" size="32" id="CustLoginIDAux" tabindex="2" type="text" maxlength="9"
                                            onkeypress="return soloRUT(event)" onblur="checkRutGenerico(CustLoginIDAux.value, false, 2)"
                                            onfocus="limpiaPuntoGuion(2)" onpaste="return false" ondrag="return false" ondrop="return false"
                                            oncopy="return false" oncut="return false" autocomplete="off"> 

                                        <label>Fecha de Nacimiento</label>
                                        <input name="fecha_nacimiento" type="date" id="fecha_nacimiento" class="form-control my-2" value="" size="32" />
                                        
                                        <label>Dirección</label>
                                        <input name="direccion" type="name" id="direccion" class="form-control my-2" value="" size="32"/>

                                        </div>

                                    </div>

                                    <div class="row border border-secondary rounded mx-0 shadow-sm py-3 fondo_cuadro" style="margin-top: 10px;">
                                        <!-- primera columna -->

                                        <div class="col">

                                        <label>Tipo</label>
                                        <select name="tipo" id="tipo" class="form-select my-2">
                                            <option value="">Seleccione</option>
                                            <option value="COBRANZA">Cobranza</option>
                                            <option value="NO COBRANZA">No Cobranza</option>
                                            <option value="SIN CONTACTO">Sin Contacto</option>
                                           
                                        </select>

                                        <label>Producto</label>
                                        <select name="producto" id="producto" class="form-select my-2">

                                            <option value="0">Seleccione:</option>
                                                <?php
                                                    require('modelos/conexion/conexion_modal.php');
                                                    $query3 = $mysqli3 -> query ("SELECT * FROM productos;");
                                                    while ($valores3 = mysqli_fetch_array($query3)) {
                                                    echo '<option value="'.$valores3['nombre'].'">'.$valores3['nombre'].'</option>';
                                                    }

                                                ?>

                                        </select>

                                        <label>Sucursal</label>
                                        <select name="sucursal" id="sucursal" class="form-select my-2">

                                            <option value="0">Seleccione:</option>
                                                <?php
                                                    require('modelos/conexion/conexion_modal.php');
                                                    $query3 = $mysqli3 -> query ("SELECT * FROM sucursal;");
                                                    while ($valores3 = mysqli_fetch_array($query3)) {
                                                    echo '<option value="'.$valores3['nombre'].'">'.$valores3['nombre'].'</option>';
                                                    }

                                                ?>

                                        </select> 
                                        
                                        </div>

                                        <!-- segunda columna -->

                                        <div class="col"> 

                                        <label>Acción</label>
                                        <select name="accion"  id="accion" class="form-control my-2 form-select"></select>

                                         <label>Sub Producto</label>
                                            <select name="sub_producto" class="form-select my-2" id="sub_producto">
                                              <option value="">Seleccione</option>
                                            </select>

                                        <label>Región</label>
                                        <input name="region" type="name" id="region" class="form-control my-2" value="" size="32"/>

                                        </div>

                                        <!-- tercera columna -->
                                        <div class="col">

                                        <label>Fecha Compromiso de Pago</label>
                                        <input name="fecha_cpago" type="date" id="fecha_cpago" class="form-control my-2" value="" size="32"/>

                                        <label>Cantidad</label>
                                        <input min="0" oninput="validity.valid||(value='');" name="cantidad" type="number" id="cantidad" class="form-control my-2" value="" size="32"/>

                                        <label>Ciudad</label>
                                        <input name="ciudad" type="name" id="ciudad" class="form-control my-2" value="" size="32"/>

                                      
                                        </div>

                                        <!-- cuarta columna -->

                                        <div class="col">

                                        <label>Canal de Pago</label>
                                        <select name="canal_pago" id="canal_pago" class="form-select my-2">

                                            <option value="0">Seleccione:</option>
                                                <?php
                                                    require('modelos/conexion/conexion_modal.php');
                                                    $query3 = $mysqli3 -> query ("SELECT * FROM canal_pago;");
                                                    while ($valores3 = mysqli_fetch_array($query3)) {
                                                    echo '<option value="'.$valores3['nombre'].'">'.$valores3['nombre'].'</option>';
                                                    }

                                                ?>

                                        </select>

                                        <label>Forma de Entrega</label>
                                        <select name="forma_entrega" id="forma_entrega" class="form-select my-2">
                                            <option value="">Seleccione</option>
                                            <option value="Retiro Tienda">Retiro en Tienda</option>
                                            <option value="Delivery">Delivery</option>
                                        </select>

                                            <input type="hidden" name="nombre_agente" id="nombre_agente" value="<?php echo $nombre; ?>">
                                            <input type="hidden" name="user" id="user" value="<?php echo $usuario; ?>">
                                            <input type="hidden" name="rut_usuario" id="rut_agente" value="<?php echo $rut_usuario; ?>">
                                            <input type="hidden" name="campana_t" id="campana_t" value="cobranza">
                                            <input type="hidden" name="empresa" id="empresa" value="<?php echo $empresa; ?>">
                                            

                                        </div>

                                        <div class="row">

                                    

                                            <div class="col-lg-12">

                                                <div class="form-group">
                                                  <label>Observaciones</label>
                                                  <textarea style="resize: none;" class="form-control"  placeholder="Observaciones"  name="observacion" id="observacion" style="height: 100px"></textarea>
                                                </div>

                                            </div>

                                            

                                            
                                        </div>

                                       

                                    </div>

                                    
                                </div>

                            </form>

                            <button type="submit" class="btn_ingresar btn btn-primary w-100 my-3" id="btn_ingresar">INGRESAR REGISTRO</button>

              

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

  <script src="vistas/js/rut.js"></script>
  <script src="vistas/js/tipificacion.js"></script>
  <script src="vistas/js/ingresar_registro.js"></script> 
  <script src="vistas/js/buscar.js"></script> 
  
<script src="vistas/lib/jquery.js"></script>
<script src="vistas/js/select.js"></script>

