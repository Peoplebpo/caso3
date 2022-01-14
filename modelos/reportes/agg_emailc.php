

<!DOCTYPE html>

<html>

  <head>

    <title>Subir registros a la base calidad</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

      <!-- Inicio Alertas -->
      <!-- BSA AdPacks code -->
      
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>  
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
      <link rel="stylesheet" href="vistas/plugins/fontawesome-free/css/all.min.css">
      <!-- <script type="text/javascript" src="../../vistas/js/subir.js"></script> -->
      
      

      <!-- Fin Alertas -->         


  </head>

<body>

    <div class="importacion_ex">


            
              <form id="form_ex" action='<?php echo $_SERVER["PHP_SELF"];?>' method='post' enctype="multipart/form-data">

                  <div class="form-group">
                    
                    <div class="input-group">
                    
            
                          
                                <select name="nombre1" id="nombre1" class="form-select form-control nombre1" required>

                                        <option value="0"><strong>Seleccione una Campaña:</strong></option>
                                            <?php
                                                require('../conexion/conexion_modal.php');
                                                $query3 = $mysqli3 -> query ("SELECT * FROM campana_email;");
                                                while ($valores3 = mysqli_fetch_array($query3)) {
                                                echo '<option value="'.$valores3['nombre'].'">'.$valores3['nombre'].'</option>';
                                                }

                                            ?>

                                </select>
                                

                    </div>

                  </div>
              
                  <div class="posicion1_ex"> 

                      <input class="seleccione archivocsv" type='file' name='sel_file'>

                  </div>

                  <div class="posicion2_ex">

                      <input class="imagen_cargar_ex" type='submit' name='submit'  value="Cargar" src="vistas/img/cargar.png">

                  </div>

              </form>




              <?php

              //conexiones, conexiones everywhere

              ini_set('display_errors', 1);
              $servidor  ="157.230.57.48"; 
              $usuario   ="root";  
              $clave     ="413471*IIO"; 
              $basedatos ="cobranza_cliente"; 
              $conexion = mysqli_connect($servidor, $usuario, $clave) or die(mysqli_error($conexion)); 
              mysqli_select_db($conexion, $basedatos) or die(mysqli_error($conexion));
              mysqli_set_charset($conexion,"utf8");

              if (!$conexion)

                  die("No se pudo establecer conexión a la base de datos");
               
               
                if (!mysqli_select_db($conexion, $basedatos))

                  die("base de datos no existe");

                if(isset($_POST['submit'])){

                    //Aquí es donde seleccionamos nuestro csv

                    $fname = $_FILES['sel_file']['name'];

                          echo '<small class="resultados_importacion_ex">Nombre del archivo cargado: '.$fname.'</small>';

                    $chk_ext = explode(".",$fname);
                         
                if(strtolower(end($chk_ext)) == "csv"){

                    //si es correcto, entonces damos permisos de lectura para subir

                    $filename = $_FILES['sel_file']['tmp_name'];
                          
                    $handle = fopen($filename, "r");
                          
                    $contador=0;

              
                    $campana = $_POST["nombre1"];
                    
                    


                    while (($data = fgetcsv($handle, 1000, ";") ) !== FALSE)

                      {
                               
                        //Insertamos los datos con los valores...

                  $sql2 = "INSERT into email_campana Set 
                  email='$data[0]',
                  campana='$campana'";
                  
                  mysqli_query($conexion, $sql2) or die(mysqli_error($conexion));
                  

                  $contador++;

                                  
                      }

     
                             //cerramos la lectura del archivo "abrir archivo" con un "cerrar archivo"
                             fclose($handle);

                             echo "<small class='resultados_importacion_ex'>Importaci&oacute;n exitosa!   <img class='ok' src='https://i.ibb.co/xFvRww2/ok.png' width='20'></small><br>";

                             echo "<small class='resultados_importacion_ex'>Se han cargado ".$contador." numeros";

                            
                      }

                         
                            else
                         

                      {


                            //si aparece esto es posible que el archivo no tenga el formato adecuado, inclusive cuando es cvs, revisarlo para             //ver si esta separado por " , "

                      ?>

<script type="text/javascript">

Swal.fire({
        position: 'top',
        icon: 'error',
        title: 'ERROR',
        text: 'ARCHIVO O FORMATO INVALIDO',
      })

</script>



                          <?php
                             
                         }   
                    }
                  
                    

              ?>

              <div style="padding: 5px;">
                
                  <a href="f_subiremail.csv">

                    <input type="button" style="padding: 2px; background-color: red; width: 100%; color: white; border-radius: 5px;" value="EJEMPLO FORMATO DE CARGA">

                  
                  </a>

              </div>


            </div>

      
            
            <div class="d-flex justify-content-center align-items-center" style="margin: auto; width:700px;">
              <img style="width:98%" src="https://i.ibb.co/rZ4wvYT/procedimiento.png" alt="">
            </div>
     

 <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>


</body>
</html>