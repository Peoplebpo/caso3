<?php
require('../conexion/conexion.php');
$objeto = new Conexion();
$conexion = $objeto->Conectar();

$usuario  = (isset($_POST['usuario'])) ? $_POST['usuario'] : '';
$clave    = (isset($_POST['clave'])) ? $_POST['clave'] : '';





$opcion = (isset($_POST['opcion'])) ? $_POST['opcion'] : '';



switch($opcion){
  
    case 2:        

        $consulta = "SELECT * FROM sms_integracion";       
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;
    
    case 3:

        $consulta = "UPDATE sms_integracion SET usuario='$usuario', clave='$clave'";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute(); 

        $consulta = "SELECT * FROM sms_integracion";       
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;
  
    }

print json_encode($data, JSON_UNESCAPED_UNICODE);//envio el array final el formato json a AJAX
$conexion=null;


