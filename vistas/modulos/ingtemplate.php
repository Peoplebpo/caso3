<script type="text/javascript" src="vistas/js/TinyMCE.js"></script>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>AGREGAR PLANTILLAS</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="inicio">Home</a></li>
            <li class="breadcrumb-item active">Agregar Plantillas</li>
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


                    <a href="template"><button type="button" class="btn btn-success text-white"><i class="fas fa-hand-point-left" style="margin-right: 5px;"></i>Regresar</button></a>
                  
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

                      <div class="row">

                        <div class="col-lg-6">
                          <div class="form-group">
                            <label>Nombre:</label>
                            <input name="nombre" type="" id="nombre" class="form-control my-2" value="" size="32" />
                          </div>
                        </div>

                      </div>

                      <div class="row">

                        <div class="col-lg-6">
                          <div class="form-group">
                            <label>Descripción:</label>
                            <textarea class="form-control my-2"  name="descripcion" id="descripcion" style="height: 100px; resize:none;"></textarea>
                          </div>
                        </div>

                      </div>

                       <div class="row">

                        <div class="col-lg-12">
                          <div class="form-group">
                            <label>Contenido:</label>
                            <textarea class="form-control my-2"  name="contenido" id="contenido" style="height: 100px"></textarea>
                          </div>
                        </div>

                      </div>


                    </div>
                  </div>

                </form>

                <button type="submit" class="btn_ingresar btn btn-primary w-100 my-3" id="btn_ingresar">Agregar Plantilla</button>



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

<script src="vistas/js/aggtemplate.js"></script>


