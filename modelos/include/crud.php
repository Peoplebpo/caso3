<?php
require('../conexion/conexion.php');
$objeto = new Conexion();
$conexion = $objeto->Conectar();

$opcion             = (isset($_POST['opcion'])) ? $_POST['opcion'] : '';
$session_id         = (isset($_POST['session_id'])) ? $_POST['session_id'] : '';


switch($opcion){
  
    case 4:    
        $consulta = "SELECT * FROM homo_movil_ob WHERE session_id='$session_id'";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();        
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;
    case 5:    
        $consulta = "SELECT * FROM campana_email";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();        
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;
    case 6;
        $campana = $_POST["nombre2"];
        $fname = $_FILES['sel_file']['name'];
        $chk_ext = explode(".", $fname);

        if (strtolower(end($chk_ext)) == "csv") {
      
          $filename = $_FILES['sel_file']['tmp_name'];
      
          $handle = fopen($filename, "r");
          $data='<small class="resultados_importacion_ex">Nombre del archivo cargado: ' . $fname ;
          $contador = 0;
      
          while (($dataa = fgetcsv($handle, 1000, ";")) !== FALSE) {
            $consulta = "INSERT into email_campana Set 
            email='$dataa[0]',
            campana='$campana'";
            $resultado = $conexion->prepare($consulta);
            $resultado->execute();        
            $contador++;
          }
          //cerramos la lectura del archivo "abrir archivo" con un "cerrar archivo"
          fclose($handle);
        $optParams = array('primero' => $fname,'segundo' => $contador);
        $matriz[] = $optParams;
        $data=$matriz;
        } else {
      
            $data ='error';
      
        }
        /*
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


  $fname = $_FILES['sel_file']['name'];

  echo '<small class="resultados_importacion_ex">Nombre del archivo cargado: ' . $fname . '</small>';

  $chk_ext = explode(".", $fname);

  if (strtolower(end($chk_ext)) == "csv") {


    $filename = $_FILES['sel_file']['tmp_name'];

    $handle = fopen($filename, "r");

    $contador = 0;





    while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {


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



  }
}*/
break;
}

print json_encode($data, JSON_UNESCAPED_UNICODE);//envio el array final el formato json a AJAX
$conexion=null;