<?php
require('../conexion/conexion.php');
$objeto = new Conexion();
$conexion = $objeto->Conectar();

include('../../../../hora_oficial/zona_horaria.php');

date_default_timezone_set($zona_horaria);

$fecha = date("Y-m-d H:i:s");

$numero = (isset($_POST['numero'])) ? $_POST['numero'] : '';
$published_at = (isset($_POST['published_at'])) ? $_POST['published_at'] : '';

$opcion = (isset($_POST['opcion'])) ? $_POST['opcion'] : '';
$id = (isset($_POST['id'])) ? $_POST['id'] : '';

$codigo_area= "56";


switch($opcion){

    case 1:

        $consulta = "INSERT INTO l_negras (numero, published_at, created_by, updated_by) VALUES('$codigo_area$numero', '$fecha', '1', '1') ";          
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();      
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;

    case 2:

        $consulta = "DELETE FROM l_negras WHERE id='$id' ";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data="exito";                       
        break;    

}

print json_encode($data, JSON_UNESCAPED_UNICODE);//envio el array final el formato json a AJAX
$conexion=null;