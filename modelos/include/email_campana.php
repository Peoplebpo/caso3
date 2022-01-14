<?php
require('../conexion/conexion.php');
$objeto = new Conexion();
$conexion = $objeto->Conectar();

$email = (isset($_POST['email'])) ? $_POST['email'] : '';
$campana = (isset($_POST['campana'])) ? $_POST['campana'] : '';

$opcion = (isset($_POST['opcion'])) ? $_POST['opcion'] : '';
$id = (isset($_POST['id'])) ? $_POST['id'] : '';


switch($opcion){

    case 3:        
        $consulta = "DELETE FROM email_campana WHERE campana='$campana' ";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();                           
        break;
        
    }

print json_encode($data, JSON_UNESCAPED_UNICODE);//envio el array final el formato json a AJAX
$conexion=null;


