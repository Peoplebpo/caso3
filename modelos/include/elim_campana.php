<?php
require('../conexion/conexion.php');
$objeto = new Conexion();
$conexion = $objeto->Conectar();

$nombre = (isset($_POST['nombre'])) ? $_POST['nombre'] : '';

$opcion = (isset($_POST['opcion'])) ? $_POST['opcion'] : '';



switch($opcion){
  

    case 3:        
        $consulta = "DELETE FROM campana_email WHERE id='$nombre' ";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();                           
        break;
        
    }

echo "1";
$conexion=null;


