<?php
require('../conexion/conexion.php');
$objeto = new Conexion();
$conexion = $objeto->Conectar();

$dominio         = (isset($_POST['dominio'])) ? $_POST['dominio'] : '';
$campana_id      = (isset($_POST['campana_id'])) ? $_POST['campana_id'] : '';
$access_token    = (isset($_POST['access_token'])) ? $_POST['access_token'] : '';




$opcion = (isset($_POST['opcion'])) ? $_POST['opcion'] : '';



switch($opcion){
  
    case 2:        

        $consulta = "SELECT * FROM sms_integracion";       
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;
    
    case 3:

        $consulta = "UPDATE sms_integracion SET dominio='$dominio', campana_id='$campana_id', access_token='$access_token'";		
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


