<?php
require('../conexion/conexion.php');
$objeto = new Conexion();
$conexion = $objeto->Conectar();

$session_id         = (isset($_POST['session_id'])) ? $_POST['session_id'] : '';
$record_url         = (isset($_POST['record_url'])) ? $_POST['record_url'] : '';
$phone              = (isset($_POST['phone'])) ? $_POST['phone'] : '';
$campana            = (isset($_POST['campana'])) ? $_POST['campana'] : '';
$nombre_agente      = (isset($_POST['nombre_agente'])) ? $_POST['nombre_agente'] : '';
$rut_agente         = (isset($_POST['rut_agente'])) ? $_POST['rut_agente'] : '';
$numero_agente      = (isset($_POST['numero_agente'])) ? $_POST['numero_agente'] : '';
$email_agente       = (isset($_POST['email_agente'])) ? $_POST['email_agente'] : '';
$fecha_grabacion    = (isset($_POST['fecha_grabacion'])) ? $_POST['fecha_grabacion'] : '';
$fecha              = (isset($_POST['fecha'])) ? $_POST['fecha'] : '';
$fecha_ingreso      = (isset($_POST['fecha_ingreso'])) ? $_POST['fecha_ingreso'] : '';
$hora_ingreso       = (isset($_POST['hora_ingreso'])) ? $_POST['hora_ingreso'] : '';
$pcs                = (isset($_POST['pcs'])) ? $_POST['pcs'] : '';
$tipo               = (isset($_POST['tipo'])) ? $_POST['tipo'] : '';
$campana_m          = (isset($_POST['campana_m'])) ? $_POST['campana_m'] : '';
$producto           = (isset($_POST['producto'])) ? $_POST['producto'] : '';
$rut_cliente        = (isset($_POST['rut_cliente'])) ? $_POST['rut_cliente'] : '';
$fecha_rellamada    = (isset($_POST['fecha_rellamada'])) ? $_POST['fecha_rellamada'] : '';
$hora_rellamada     = (isset($_POST['hora_rellamada'])) ? $_POST['hora_rellamada'] : '';
$estado_rellamada   = (isset($_POST['estado_rellamada'])) ? $_POST['estado_rellamada'] : '';


$opcion             = (isset($_POST['opcion'])) ? $_POST['opcion'] : '';
$session_id         = (isset($_POST['session_id'])) ? $_POST['session_id'] : '';


switch($opcion){
  
    case 4:    
        $consulta = "SELECT * FROM homo_referidos_movil_ob WHERE session_id='$session_id'";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();        
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;
}

print json_encode($data, JSON_UNESCAPED_UNICODE);//envio el array final el formato json a AJAX
$conexion=null;