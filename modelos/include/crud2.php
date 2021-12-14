<?php
require('../conexion/conexion.php');
$objeto = new Conexion();
$conexion = $objeto->Conectar();

$session_id = (isset($_POST['session_id'])) ? $_POST['session_id'] : '';
$record_url = (isset($_POST['record_url'])) ? $_POST['record_url'] : '';
$phone = (isset($_POST['phone'])) ? $_POST['phone'] : '';
$campana = (isset($_POST['campana'])) ? $_POST['campana'] : '';
$fecha_grabacion = (isset($_POST['fecha_grabacion'])) ? $_POST['fecha_grabacion'] : '';
$fecha= (isset($_POST['fecha'])) ? $_POST['fecha'] : '';


$opcion = (isset($_POST['opcion'])) ? $_POST['opcion'] : '';
$session_id = (isset($_POST['session_id'])) ? $_POST['session_id'] : '';


switch($opcion){
  
    case 4:    
        $consulta = "SELECT * FROM grabaciones_huerfanas WHERE session_id='$session_id'";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();        
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;
}

print json_encode($data, JSON_UNESCAPED_UNICODE);//envio el array final el formato json a AJAX
$conexion=null;