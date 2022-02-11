<script type="text/javascript" src="vistas/js/email_campana.js"></script>
<script type="text/javascript" src="vistas/js/agg_campana.js"></script>
<script type="text/javascript" src="vistas/js/elim_campana.js"></script>
<script type="text/javascript" src="vistas/js/subir.js"></script>
<link rel="stylesheet" href="vistas/css/main.css">
<link href="http://fonts.cdnfonts.com/css/geometria" rel="stylesheet">
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>AGREGAR CAMPAÑA</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="inicio">Home</a></li>
            <li class="breadcrumb-item active">Camapaña</li>
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

              <div class="container-fluid my-3">

                <div class="row">

                  <div class="col d-grid gap-2 d-md-flex justify-content-md-end">

                    <button data-bs-target="#agregarC" style="background-color: #4BB543;" type="button" class="btn text-white" data-bs-toggle="modal">Agregar Campaña</button>

                    <!-- <button id="btneliminar" type="button" class="btn btn-danger text-white"  data-bs-toggle="modal">Eliminar Campaña</button> -->
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" id='eliminar'>Eliminar Campaña</button>

                    <button type="button" class="btn btn-info text-white" data-bs-toggle="modal" id="subir_email1">Subir Emails</button>

                    <?php
                    /*include 'vistas/modulos/modales/modal_email.php';*/
                    ?>
                  </div>


                </div>

              </div>
            </div>


            <div class="container-fluid my-2">

              <div class="row">

                <div class="table-responsive">

                  <table id="tablaEmail" class="table table-striped table-bordered" style="width:100%">

                    <thead>

                      <tr>
                        <th id="id_u">ID</th>
                        <th>EMAIL</th>
                        <th>CAMPAÑA</th>
                        <th style="text-align: center;">ACCIONES</th>

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





  <!-- Modal agg campaña -->
  <div class="modal fade" id="agregarC" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="AgregarProductos" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header" id="lm" style="font-family: geometria, sans-serif;">
          <h5 class="modal-title">Agregar Camapaña</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form id="formemail">
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-text" id="basic-addon1"><i class="fas fa-file-signature"></i></span>
                <input type="text" class="form-control input-lg" placeholder="Ingresar Nombre de Campaña" id="nombre" required>
              </div>
            </div>
            <div class="modal-footer">
              <button style="width: 100px; border-radius: 20px !important; font-family: geometria, sans-serif; font-size: 1rem; background-color:#322a46 !important; color: #C8D118;" type="submit" id="btnguardar" class="btn shadow-none">Guardar</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Fin Modal agg campaña-->
 
  <!-- modal eliminar campaña -->
  <div class="modal fade" id="eliminarC" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header" id="lm" style="font-family: geometria, sans-serif;">
          <h5 class="modal-title">Eliminar Campaña</h5>
          <button type="button" id="cerrar_eli_camp" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form>

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-text" id="basic-addon1"><i class="fas fa-eraser"></i></span>

                <select name="nombre1" id="nombre1" class="form-select form-control " required>
                  <option value="0">Seleccione:</option>
                </select>


              </div>

            </div>


        </div>
        <div class="modal-footer">
          <button style="width: 100px; border-radius: 20px !important; font-family: geometria, sans-serif; font-size: 1rem; background-color:#322a46 !important; color: #C8D118;" type="button" id="btneliminar" class="btn  shadow-none">Eliminar</button>
        </div>

        </form>
      </div>
    </div>
  </div>
  <!--Fin  modal eliminar campaña -->

  



  <!-- modal subir -->
  
  <link rel="stylesheet" href="vistas/css/main.css">
  <div class="modal fade" id="subir_email" data-bs-backdrop="static" tabindex="-1" data-bs-keyboard="false" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg ">
      <div class="modal-content">
        <div class="modal-header" id="lm" style="font-family: geometria, sans-serif;">
          <h5 class="modal-title  justify-content-center align-items-center"><strong>IMPORTAR EMAILS</strong> </h5>
          <button type="button" id="cerrar_sub_emails" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="importacion_ex" style="background-color: #D5D5D5; padding: 20px;">
            <form id="form_exq">
              <div class="container">
                <div class="form-group">
                  <div class="input-group">
                    <select name="nombre2" id="nombre2" class="form-select form-control nombre1" required>
                      <option value="0"><strong>Seleccione una Campaña:</strong></option>
                    </select>
                  </div>
                </div>
                <div class="row">
                  <div class="upload-btn-wrapper col-md-6 d-flex justify-content-center align-items-center posicion1_ex">
                    <button class="btn btnf"><strong>Seleccionar archivo</strong> </button>
                    <input type='file' name='sel_file' id='sel_file' accept=".csv">
                  </div>
                  <div class="col-md-6 d-flex justify-content-center align-items-center posicion2_ex">
                    <input style="width: 250px; height: 40px; border: none; background-color: #C8D118; color: #322A46; border-radius: 20px;" class="imagen_cargar_ex" type="submit" name="submit" value="Cargar" src="vistas/img/cargar.png">
                  </div>
                </div>
              </div>
            </form>
            <div id='resultado'></div>
            <div style="margin: auto;  margin-top: 10px;" class="textd">
              <div type="button" style="text-align: center; border: none; font-family: geometria, sans-serif; padding: 5px; background-color: #C8D118; color: #322A46; border-radius: 5px; width: 100%;">
                <h5><strong>Procedimiento de Carga</strong></h5>
              </div>
              <div style="background-color: white; padding: 20px; color:#322A46;">
                <p>
                  <strong>Paso 1:</strong> Descargar el formato de ejemplo desde este <strong><a style="color:#322A46 !important;" href="modelos/reportes/f_subiremail.csv">LINK.</a></strong> <br> <br>
                  <strong>Paso 2:</strong> En el archivo descargado con extensión CSV, debes ingresar los registros según el orden que indique la primera fila. <br> <br>
                  <strong>Paso 3:</strong> Una vez ingresados los datos debes eliminar la primera fila. <br> <br>
                  <strong>Paso 4:</strong> Guardar el archivo editado, este debe quedar con la misma extensión CSV. <br> <br>
                  <strong>Paso 5:</strong> Debes presionar el botón <strong>Seleccionar archivo,</strong> luego seleccionamos el archivo creado y editado, por último presionar el botón <strong>cargar.</strong><br>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--fin modal subir -->

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>



  