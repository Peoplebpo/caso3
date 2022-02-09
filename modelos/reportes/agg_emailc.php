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
  <link href="../lib/bootstrap.min.css" rel="stylesheet">
  <script src="../lib/popper.min.js"></script>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <link rel="stylesheet" href="../../vistas/css/main.css">
  <!-- <script type="text/javascript" src="../../vistas/js/subir.js"></script> -->



  <!-- Fin Alertas -->


</head>

<body>

  <div class="importacion_ex" style="background-color: #D5D5D5; padding: 20px;">



    <form id="form_ex" action='<?php echo $_SERVER["PHP_SELF"]; ?>' method='post' enctype="multipart/form-data">
      <div class="container">

        <div class="form-group">

          <div class="input-group">

            <select name="nombre1" id="nombre1" class="form-select form-control nombre1" required>

              <option value="0"><strong>Seleccione una Campaña:</strong></option>
              <?php
              require('../conexion/conexion_modal.php');
              $query3 = $mysqli3->query("SELECT * FROM campana_email;");
              while ($valores3 = mysqli_fetch_array($query3)) {
                echo '<option value="' . $valores3['nombre'] . '">' . $valores3['nombre'] . '</option>';
              }

              ?>

            </select>


          </div>

        </div>

        <div class="row">

          <div class="upload-btn-wrapper col-md-6 d-flex justify-content-center align-items-center posicion1_ex">
            <button class="btn btnf"><strong>Seleccionar archivo</strong> </button>
            <input type='file' name='sel_file'>
          </div>

          <div class="col-md-6 d-flex justify-content-center align-items-center posicion2_ex">
            <input style="width: 250px; height: 40px; border: none; background-color: #C8D118; color: #322A46; border-radius: 20px;" class="imagen_cargar_ex" type='submit' name='submit' value="Cargar" src="vistas/img/cargar.png">

          </div>


        </div>

      </div>




    </form>

    <!-- <script type="text/javascript">
      $(document).ready(function() {

        $('#Cargar').click(function() {

          if ($('#nombre1').val() == '')

          {
            Swal.fire({
              icon: 'error',
              title: 'CIUDAD',
              position: 'top',
              text: 'Campo Obligatorio'
            })

            return false;

          }

        })

      })
    </script> -->




    <?php

    //conexiones, conexiones everywhere

    ini_set('display_errors', 1);
    $servidor  = "157.230.57.48";
    $usuario   = "root";
    $clave     = "413471*IIO";
    $basedatos = "cobranza_cliente";
    $conexion = mysqli_connect($servidor, $usuario, $clave) or die(mysqli_error($conexion));
    mysqli_select_db($conexion, $basedatos) or die(mysqli_error($conexion));
    mysqli_set_charset($conexion, "utf8");

    if (!$conexion)

      die("No se pudo establecer conexión a la base de datos");


    if (!mysqli_select_db($conexion, $basedatos))

      die("base de datos no existe");

    if (isset($_POST['submit'])) {

      //Aquí es donde seleccionamos nuestro csv

      $fname = $_FILES['sel_file']['name'];

      echo '<small class="resultados_importacion_ex">Nombre del archivo cargado: ' . $fname . '</small>';

      $chk_ext = explode(".", $fname);

      if (strtolower(end($chk_ext)) == "csv") {

        //si es correcto, entonces damos permisos de lectura para subir

        $filename = $_FILES['sel_file']['tmp_name'];

        $handle = fopen($filename, "r");

        $contador = 0;


        $campana = $_POST["nombre1"];




        while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {

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

        echo "<small class='resultados_importacion_ex'>Se han cargado " . $contador . " numeros";
      } else {


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



    <div style="margin: auto;  margin-top: 10px;" class="textd">


      <div type="button" style="text-align: center; border: none; font-family: geometria, sans-serif; padding: 5px; background-color: #C8D118; color: #322A46; border-radius: 5px; width: 100%;">
        <h5><strong>Procedimiento de Carga</strong></h5>

      </div>


      <div style="background-color: white; padding: 20px; color:#322A46;">
        <p>
          <strong>Paso 1:</strong> Descargar el formato de ejemplo desde este <strong><a style="color:#322A46 !important;" href="f_subiremail.csv">LINK.</a></strong> <br> <br>

          <strong>Paso 2:</strong> En el archivo descargado con extensión CSV, debes ingresar los registros según el orden que indique la primera fila. <br> <br>

          <strong>Paso 3:</strong> Una vez ingresados los datos debes eliminar la primera fila. <br> <br>

          <strong>Paso 4:</strong> Guardar el archivo editado, este debe quedar con la misma extensión CSV. <br> <br>

          <strong>Paso 5:</strong> Debes presionar el botón <strong>Seleccionar archivo,</strong> luego seleccionamos el archivo creado y editado, por último presionar el botón <strong>cargar.</strong><br>
        </p>


      </div>


    </div>

  </div>



  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>





</body>

</html>