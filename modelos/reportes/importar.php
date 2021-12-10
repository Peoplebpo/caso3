

<!DOCTYPE html>

<html>

  <head>

    <title>Subir registros a la base calidad</title>

      <link href="../lib/bootstrap.min.css" rel="stylesheet">
      <script src="../lib/popper.min.js"></script>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>    

      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous"> 

      <!-- Inicio Alertas -->

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
              $conexion = mysqli_connect($servidor, $usuario, $clave) or die(mysql_error()); 
              mysqli_select_db($conexion, $basedatos) or die(mysql_error());

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

                    while (($data = fgetcsv($handle, 1000, ";") ) !== FALSE)

                      {
                               
                        //Insertamos los datos con los valores...

                  $sql = "INSERT into l_negras Set 
                  numero='$data[0]', 
                  published_at='$fecha_hora',
                  created_by='1',
                  updated_by='1'";


                  mysqli_query($conexion, $sql) or die(mysql_error());

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

              <div style="margin: auto;  margin-top: 30px;">
                
                  <a href="formato.csv">

                    <input type="button" style="padding: 5px; background-color: red; width: 100%; color: white; border-radius: 5px;" value="EJEMPLO FORMATO DE CARGA">

                  
                  </a>

              </div>


            </div>

      
      
            <div class="d-flex justify-content-center align-items-center" style="margin: auto; width:770px;">
              <img style="width:98%" src="https://i.ibb.co/rZ4wvYT/procedimiento.png" alt="">
            </div>
     

<!-- BSA AdPacks code -->
<script src="../js/jquery-1.6.3.min.js"></script>
</body>
</html>