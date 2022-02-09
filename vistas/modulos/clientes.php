
<script type="text/javascript" src="vistas/js/clientes.js"></script>
  <link rel="stylesheet" href="vistas/css/main.css">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>CLIENTES</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="inicio">Home</a></li>
              <li class="breadcrumb-item active">Clientes</li>
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

                                      <button id="btnguardar" type="button" class="btn btn-info text-white"  data-bs-toggle="modal">Agregar Clientes</button>
                                      <button type="button" class="btn btn-success text-white" data-bs-toggle="modal" data-bs-target="#subir_usuarios" style="float: left; margin-right: 10px;">Subir Clientes<i class="fas fa-file-upload" style="margin-left: 5px;"></i></button>
                                      <?php
                                        include 'vistas/modulos/modales/modal_cliente.php';
                                      ?>

                                  </div>

                              </div>

                           </div>
                           
                    </div>
                    

                <div class="container-fluid my-2">

                    <div class="row">

                      <div class="table-responsive">

                    <table id="tablaProductos" class="table table-striped table-bordered" style="width:100%">

                        <thead>

                            <tr>
                                <th id="id_u">ID</th>  
                                <th>TELEFONO</th>
                                <th>NOMBRE</th>   
                                <th>APELLIDOS</th>
                                <th>EDAD</th>
                                <th>EMAIL</th>
                                <th>DIRECCION</th>
                                <th id="id_u">CICLO FACTURACIÓN</th>
                                <th id="id_u">FACTURACIÓN PENDIENTE</th>
                                <th id="id_u">PERIODO FACTURACIÓN</th>
                                <th id="id_u">FECHA DE ACTIVACIÓN</th>
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
  <!-- /.content-wrapper -->

   <!-- Button trigger modal -->


   <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>Agregar Tipo Venta</title>
  </head>
  <body>


        <!-- Modal -->
        <div class="modal fade" id="modalCRUD12" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="AgregarProductos" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                <div class="modal-header" style="background:#3c8dbc; color:white">
                    <h5 class="modal-title t1" id="AgregarProductos">Agregar Tipo Venta</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                <form id="formproductos">

                      <div class="row">

                          <div class="col-lg-6">

                              <div class="form-group">
                          
                                  <div class="input-group">
                                  
                                      <span class="input-group-text" id="basic-addon1"><i class="fas fa-phone-volume"></i></span>

                                      <input type="text" class="form-control input-lg" placeholder="Ingresar Telefono" id="numero" required>

                                  </div> 

                              </div>

                          </div>

                          <div class="col-lg-6">

                              <div class="form-group">
                    
                                  <div class="input-group">
                                  
                                      <span class="input-group-text" id="basic-addon1"><i class="fas fa-file-signature"></i></span>

                                      <input type="text" class="form-control input-lg" placeholder="Ingresar Nombre" id="nombre" required>

                                  </div>

                              </div>

                          </div>

                      </div>

                      <div class="row">

                          <div class="col-lg-6">

                              <div class="form-group">
                    
                                  <div class="input-group">
                                  
                                      <span class="input-group-text" id="basic-addon1"><i class="fas fa-signature"></i></span>

                                      <input type="text" class="form-control input-lg" placeholder="Ingresar Apellidos" id="apellidos" required>

                                  </div>

                              </div>

                          </div>

                          <div class="col-lg-6">

                              <div class="form-group">
                          
                                  <div class="input-group">
                                  
                                      <span class="input-group-text" id="basic-addon1"><i class="fas fa-pager"></i></span>

                                      <input type="number" class="form-control input-lg" placeholder="Ingresar Edad" id="edad" required>

                                  </div>

                              </div>
                                      
                          </div>

                      </div>

                      <div class="row">

                        <div class="col-lg-6">

                            <div class="form-group">
                                
                                <div class="input-group">
                                
                                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-envelope-open-text"></i></span>

                                    <input type="text" class="form-control input-lg" placeholder="Ingresar Email" id="email" required>

                                </div>

                            </div>

                        </div>

                        <div class="col-lg-6">

                             <div class="form-group">
                                
                                <div class="input-group">
                                
                                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-map-marked-alt"></i></span>

                                    <input type="text" class="form-control input-lg" placeholder="Ingresar Dirección" id="direccion" required>

                                </div>

                            </div>


                        </div>

                      </div>

                      <div class="row">

                        <div class="col-lg-6">

                          <div class="form-group">
                      
                              <div class="input-group">
                              
                                  <span class="input-group-text" id="basic-addon1"><i class="fas fa-cash-register"></i></span>
                                  <input type="text" class="form-control input-lg" placeholder="Ciclo Facturación" id="ciclo_fact" required>
                              
                                </div>
                          </div>
                          
                        </div>

                        <div class="col-lg-6">

                          <div class="form-group">
                      
                              <div class="input-group">
                              
                                  <span class="input-group-text" id="basic-addon1"><i class="fas fa-dumpster"></i></span>
                                  <input type="text" class="form-control input-lg" placeholder="Facturación Pendiente" id="fact_pendiente" required>
                              
                              </div>

                          </div>

                        </div>

                      </div>
                      
                      <div class="row">

                        <div class="col-lg-6">

                          <div class="form-group">
                      
                              <div class="input-group">
                              
                                  <span class="input-group-text" id="basic-addon1"><i class="fas fa-dumpster-fire"></i></span>
                                  <input type="text" class="form-control input-lg" placeholder="Periodo Facturación" id="periodo_fact" required>
                              
                            </div> 

                          </div>
                          
                        </div>

                        <div class="col-lg-6">

                          <div class="form-group">
                      
                              <div class="input-group">
                              
                                  <span class="input-group-text" id="basic-addon1"><i class="fas fa-calendar-alt"></i></span>
                                  <input type="date" class="form-control input-lg" placeholder="Fecha de Activación" id="f_activacion" required>
                              
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

    <!-- Fin Modal exportar csv -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
  
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
   
  </body>
</html>


 

    