

<!DOCTYPE html>

<html>

  <head>

    <title>Subir registros a la base calidad</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

      <!-- Inicio Alertas -->
      <!-- BSA AdPacks code -->
      
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
      

      <!-- Fin Alertas -->         


  </head>

<body>

    <div class="importacion_ex">
            
              <form id="form_ex" action='<?php echo $_SERVER["PHP_SELF"];?>' method='post' enctype="multipart/form-data">
              
                  <div class="posicion1_ex"> 

                      <input class="seleccione" type='file' name='sel_file'>

                  </div>

                  <div class="posicion2_ex">

                      <input class="imagen_cargar_ex" type='submit' name='submit'  value="Cargar" src="vistas/img/cargar.png">

                  </div>

              </form>


              <?php

              //conexiones, conexiones everywhere

              ini_set('display_errors', 1);
              $servidor  ="92.204.221.86"; 
              $usuario   ="referidos";  
              $clave     ="413471*Iio"; 
              $basedatos ="apiblog"; 
              $conexion = mysqli_connect($servidor, $usuario, $clave) or die(mysqli_error($conexion)); 
              mysqli_select_db($conexion, $basedatos) or die(mysqli_error($conexion));

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


                    date_default_timezone_set("America/Argentina/Buenos_Aires");
                            
                    $fecha = date("Y-m-d");
                            
                    $hora = date("H:i:s");

                    $fecha_hora=date("Y-m-d H:i:s");

                    $sql1= "TRUNCATE TABLE `numeros_movil_ob_s`";
                    mysqli_query($conexion, $sql1) or die(mysqli_error($conexion));

                    while (($data = fgetcsv($handle, 1000, ";") ) !== FALSE)

                      {
                               
                        //Insertamos los datos con los valores...

                  $sql2 = "INSERT into numeros_movil_ob_s Set 
                  phone='$data[0]', 
                  mensaje='$data[1]'";
                  
                  mysqli_query($conexion, $sql2) or die(mysqli_error($conexion));
                  

                  $contador++;

                                  
                      }

     
                             //cerramos la lectura del archivo "abrir archivo" con un "cerrar archivo"
                             fclose($handle);

                             echo "<small class='resultados_importacion_ex'>Importaci&oacute;n exitosa!   <img class='ok' src='https://i.ibb.co/xFvRww2/ok.png' width='20'></small><br>";

                             echo "<small class='resultados_importacion_ex'>Se han cargado ".$contador." numeros";

                             echo ' <div class="container">
        
                                    <div class="d-flex justify-content-center">
                                        <button id="btnSubmitm" class="btn btn-primary">Cargar Datos En Campaña</button>
                                    </div>
                        
                                    <!-- <div id="resultado"></div> -->
                                    
                                  </div>  ';

                             

                            
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
                
                  <a href="formato2.csv">

                    <input type="button" style="padding: 2px; background-color: red; width: 100%; color: white; border-radius: 5px;" value="EJEMPLO FORMATO DE CARGA">

                  
                  </a>

              </div>


            </div>

      
            
            <div class="d-flex justify-content-center align-items-center" style="margin: auto; width:770px;">
              <img style="width:98%" src="https://i.ibb.co/rZ4wvYT/procedimiento.png" alt="">
            </div>
     

 <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

    <script src="../../vistas/js/boton.js"></script>



</body>
</html>