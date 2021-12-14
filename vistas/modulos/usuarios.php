
<script type="text/javascript" src="vistas/js/agregar_numero6.js"></script>
<?php
if($rol<>"Admin"){
  echo "<script>
            alert('No tiene acceso');
            window.history.back();
            </script>";
	
}?>
  <link rel="stylesheet" href="vistas/css/main.css">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>ADMINISTRAR USUARIOS</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="inicio">Home</a></li>
              <li class="breadcrumb-item active">Usuarios</li>
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

                                      <button id="btnguardar" type="button" class="btn btn-info text-white"  data-bs-toggle="modal">Agregar Usuario</button>

                                  </div>
                      

                              </div>

                           </div>
                    </div>
                    

                <div class="container-fluid my-2">

                    <div class="row">

                      <div class="table-responsive">

                    <table id="tablaUsuarios6" class="table table-striped table-bordered" style="width:100%">

                        <thead>

                            <tr>
                                <th id="id_u">ID</th>  
                                <th>NOMBRE</th>   
                                <th id="correo_us">CORREO</th>                             
                                <th>USUARIO</th>  
                                <th id="password_us">CONTRASEÑA</th> 
                                <th id="rut_us">RUT USUARIO</th>
                                <th>SERVICIO</th>
                                <th>PERFIL</th> 
                                <th>ESTADO</th>
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

   <!-- Button trigger modal -->


   <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>Agregar Usuario</title>
  </head>
  <body>


        <!-- Modal -->
        <div class="modal fade" id="modalCRUD" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="Agregar Usuario" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header" style="background:#3c8dbc; color:white">
                    <h5 class="modal-title" id="Agregar Usuario">Agregar Usuario</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                <form id="formUsuarios1">

                    <div class="form-group">
                
                        <div class="input-group">
                        
                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-user"></i></span>

                            <input type="text" class="form-control input-lg" placeholder="Ingresar nombre" id="nombre" required>

                        </div>

                    </div>

                    <div class="form-group">
                
                        <div class="input-group">
                        
                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-envelope-open-text"></i></span>

                            <input type="email" class="form-control input-lg" placeholder="Ingresar correo" id="correo" required>

                        </div>

                    </div>

                    <div class="form-group">
              
                        <div class="input-group">
                        
                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-users"></i></i></span> 

                            <input type="text" class="form-control input-lg" placeholder="Ingresar usuario" id="usuario" required>

                        </div>

                    </div>

                    <div class="form-group">
              
                        <div class="input-group">
                        
                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-lock"></i></span> 

                            <input type="password" class="form-control input-lg" placeholder="Ingresar contraseña" id="password" required>

                        </div>

                    </div>

                     <div class="form-group">
              
                        <div class="input-group">
                        
                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-sort-numeric-up-alt"></i></span> 

                            <input type="text" class="form-control input-lg" placeholder="Rut Usuario" id="rut_usuario" required>
                            

                        </div>

                    </div>

                     <div class="form-group">
              
                        <div class="input-group">
                        
                            <span class="input-group-text" id="basic-addon1"><i class="fab fa-servicestack"></i></span> 

                            
                                    <select name="servicios" id="servicio" class="form-select my-2 form-control input-lg" required>

                                            <option value="0">Seleccione:</option>
                                                <?php
                                                    require('modelos/conexion/conexion_modal.php');
                                                    $query3 = $mysqli3 -> query ("SELECT * FROM servicios;");
                                                    while ($valores3 = mysqli_fetch_array($query3)) {
                                                    echo '<option value="'.$valores3['nombre'].'">'.$valores3['nombre'].'</option>';
                                                    }

                                                ?>

                                    </select>

                        </div>

                    </div>

                    <div class="form-group">
              
                        <div class="input-group">
                        
                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-users-cog"></i></span> 

                            <select class="form-control input-lg form-select"  id="rol">
                            
                            <option value="">Selecionar perfil</option>

                            <option value="Admin">Administrador</option>

                            <option value="Sup">Supervisor</option>

                            <option value="Age">Agente</option>

                            </select>

                        </div>

                    </div>
                    <div class="form-group" id="checkUser">
                    <div class="input-group">
                      <input class="form-check-input" type="checkbox" id="check1">
                      <label class="form-check-label" for="flexSwitchCheckDefault">Estado</label>
                    </div>
                    </div>

     
                </div>
                <div class="modal-footer">
                <button type="submit" id="btnguardar" class="btn btn-dark">Guardar</button>
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


 

    