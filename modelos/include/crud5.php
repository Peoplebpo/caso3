<?php

include('../../../hora_oficial/zona_horaria.php');

        date_default_timezone_set($zona_horaria);

        $hora = date("h:i:s");
        $fecha = date("Y-m-d");

require('../conexion/conexion.php');
$objeto = new Conexion();
$conexion = $objeto->Conectar();


$opcion = (isset($_POST['opcion'])) ? $_POST['opcion'] : '';
$session_id = (isset($_POST['session_id'])) ? $_POST['session_id'] : '';


switch($opcion){
  
    case 4:    
        $consulta = "SELECT * FROM script_movil_ob WHERE session_id='$session_id'";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();        
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;
}

print json_encode($data, JSON_UNESCAPED_UNICODE);//envio el array final el formato json a AJAX
$conexion=null;