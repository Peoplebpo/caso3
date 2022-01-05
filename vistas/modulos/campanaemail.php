

  <script type="text/javascript" src="vistas/js/"></script>
  <link rel="stylesheet" href="vistas/css/main.css">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>CAMPAÑAS</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="inicio">Home</a></li>
              <li class="breadcrumb-item active">Campañas</li>
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
                <h3 class="card-title">Campañas Email</h3>

                <div class="container-fluid my-3">

                  <div class="row">

                    <div class="col d-grid gap-2 d-md-flex justify-content-md-end">

                      <button type="button" class="btn btn-info text-white" data-bs-toggle="modal" data-bs-target="#modalagg" style="float: left; margin-right: 10px;">Subir Email<i class="fas fa-file-upload" style="margin-left: 5px;"></i></button>

                      <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalInt" style="margin-right: 10px;">Eliminar Campaña</button>

                      <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalInt">Agregar Campaña</button>
                    
                    </div>
                  
                  </div>   

                </div>
              
              </div>
            

          <div class="container-fluid my-2">

              <div class="row">

                <div class="table-responsive">

                    <table id="tablaUsuarios" class="table table-striped table-bordered" style="width:100%">

                        <thead>

                            <tr>
                               
                                <th>EMAIL</th>  
                                <th>CAMPAÑA</th> 
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

  <!-- modal boton agregar -->

<div class="modal fade" id="modalagg" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalagg">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Understood</button>
      </div>
    </div>
  </div>
</div>
  <!--fin modal boton agregar -->