
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



<!doctype html>

<html lang="en">
  <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

   

    <title>INGRESAR HOMOLOGADO</title>
  </head>
  <body>


    <!-- Modal -->
 

    <div class="modal" tabindex="-1" id="mingreso" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">SERVICIO MOVIL OUTBOUNT</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                            <form action="" method="POST" accept-charset="ISO-8859-1" id="frmingresar">

                                <div class="container-fluid">

                                    <div class="row border border-secondary rounded mx-0 shadow-sm py-3 fondo_cuadro">
                                        <!-- primera columna -->

                                        <div class="col">

                                        <label>Telefono</label>
                                        <input name="pcs" type="name" id="pcs2" class="form-control my-2" value="" size="32"/>

                                        
                                        <label>Nombre</label>
                                        <input name="nombre" type="name" id="nombre" class="form-control my-2" value="" size="32"/>

                                        <label>Sexo</label>
                                        <input name="sexo" type="name" id="sexo" class="form-control my-2" value="" size="32"/>

                                        
                                        </div>

                                        <!-- segunda columna -->

                                        <div class="col"> 

                                        <label>Tipo Cliente</label>
                                        <select name="tipo" id="tipo2" class="form-select my-2">
                                            <option value="">Seleccione</option>
                                            <option value="chileno">Chileno</option>
                                            <option value="extranjero">Extranjero</option>
                                        </select>

                                        
                                        <label>Apellidos</label>
                                        <input name="apellido" type="name" id="apellido" class="form-control my-2" value="" size="32"/>
                                        
                                        <label>Telefono Contacto</label>
                                        <input name="t_contacto" type="name" id="t_contacto" class="form-control my-2" value="" size="32"/>

                                        </div>

                                        <!-- tercera columna -->
                                        <div class="col">

                                        <label>Rut Cliente</label>
                                        <input class="form-control my-2 rut" name="rut" size="32" id="CustLoginIDAux" tabindex="2" type="text" maxlength="9"
                                            onkeypress="return soloRUT(event)" onblur="checkRutGenerico(CustLoginIDAux.value, false, 2)"
                                            onfocus="limpiaPuntoGuion(2)" onpaste="return false" ondrag="return false" ondrop="return false"
                                            oncopy="return false" oncut="return false" autocomplete="off"> 

                                        <label>Fecha de Nacimiento</label>
                                        <input name="fecha_nacimiento" type="date" id="fecha_nacimiento" class="form-control my-2" value="" size="32" />

                                        <label>Email</label>
                                        <input name="email" type="name" id="apellido" class="form-control my-2" value="" size="32"/>


                                        </div>

                                        <!-- cuarta columna -->

                                        <div class="col">

                                        <label>DNI Cliente </label>
                                        <input name="dni_cliente" type="name" id="dni_cliente" class="form-control my-2" value="" size="32"/>

                                        <label>Edad</label>
                                        <input name="edad" type="name" id="edad" class="form-control my-2" value="" size="32"/>
                                        
                                        <label>Dirección</label>
                                        <input name="direccion" type="name" id="direccion" class="form-control my-2" value="" size="32"/>
                            


                                        <input type="hidden" name="nombre_agente" id="nombre_agente" value="<?php echo $nombre; ?>">
                                        <input type="hidden" name="rut_usuario" id="rut_agente" value="<?php echo $rut_usuario; ?>">
                                        <input type="hidden" name="servicio" id="servicio" value="venta_en_frio">
                                        <input type="hidden" name="empresa" id="empresa" value="<?php echo $empresa; ?>">
                                        

                                        </div>

                                    </div>

                                    <div class="row border border-secondary rounded mx-0 shadow-sm py-3 fondo_cuadro" style="margin-top: 10px;">
                                        <!-- primera columna -->

                                        <div class="col">

                                        <label>Telefono</label>
                                        <input name="pcs" type="name" id="pcs2" class="form-control my-2" value="" size="32"/>

                                        
                                        <label>Nombre</label>
                                        <input name="nombre" type="name" id="nombre" class="form-control my-2" value="" size="32"/>

                                        <label>Sexo</label>
                                        <input name="sexo" type="name" id="sexo" class="form-control my-2" value="" size="32"/>

                                        
                                        </div>

                                        <!-- segunda columna -->

                                        <div class="col"> 

                                        <label>Tipo Cliente</label>
                                        <select name="tipo" id="tipo2" class="form-select my-2">
                                            <option value="">Seleccione</option>
                                            <option value="chileno">Chileno</option>
                                            <option value="extranjero">Extranjero</option>
                                        </select>

                                        
                                        <label>Apellidos</label>
                                        <input name="apellido" type="name" id="apellido" class="form-control my-2" value="" size="32"/>
                                        
                                        <label>Telefono Contacto</label>
                                        <input name="t_contacto" type="name" id="t_contacto" class="form-control my-2" value="" size="32"/>

                                        </div>

                                        <!-- tercera columna -->
                                        <div class="col">

                                        <label>Rut Cliente</label>
                                        <input class="form-control my-2 rut" name="rut" size="32" id="CustLoginIDAux" tabindex="2" type="text" maxlength="9"
                                            onkeypress="return soloRUT(event)" onblur="checkRutGenerico(CustLoginIDAux.value, false, 2)"
                                            onfocus="limpiaPuntoGuion(2)" onpaste="return false" ondrag="return false" ondrop="return false"
                                            oncopy="return false" oncut="return false" autocomplete="off"> 

                                        <label>Fecha de Nacimiento</label>
                                        <input name="fecha_nacimiento" type="date" id="fecha_nacimiento" class="form-control my-2" value="" size="32" />

                                        <label>Email</label>
                                        <input name="email" type="name" id="apellido" class="form-control my-2" value="" size="32"/>


                                        </div>

                                        <!-- cuarta columna -->

                                        <div class="col">

                                        <label>DNI Cliente </label>
                                        <input name="dni_cliente" type="name" id="dni_cliente" class="form-control my-2" value="" size="32"/>

                                        <label>Edad</label>
                                        <input name="edad" type="name" id="edad" class="form-control my-2" value="" size="32"/>
                                        
                                        <label>Dirección</label>
                                        <input name="direccion" type="name" id="direccion" class="form-control my-2" value="" size="32"/>
                            


                                        <input type="hidden" name="nombre_agente" id="nombre_agente" value="<?php echo $nombre; ?>">
                                        <input type="hidden" name="rut_usuario" id="rut_agente" value="<?php echo $rut_usuario; ?>">
                                        <input type="hidden" name="servicio" id="servicio" value="venta_en_frio">
                                        <input type="hidden" name="empresa" id="empresa" value="<?php echo $empresa; ?>">
                                        

                                        </div>

                                    </div>

                                    
                                </div>

                            </form>

                            <button type="submit" class="btn_ingresar btn btn-primary w-100 my-3" id="btn_ingresar">INGRESAR REGISTRO</button>

                    </div>
                
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
 
    
    <script src="vistas/js/rut.js"></script>
    <script src="vistas/js/tipificacion.js"></script>
    <script src="vistas/js/ingresar_registro.js"></script> 


  </body>

</html>


 