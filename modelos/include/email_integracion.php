<?php
require('../conexion/conexion.php');
$objeto = new Conexion();
$conexion = $objeto->Conectar();

$email_aut      = (isset($_POST['email_aut'])) ? $_POST['email_aut'] : '';
$servidor_smtp  = (isset($_POST['servidor_smtp'])) ? $_POST['servidor_smtp'] : '';
$usuario        = (isset($_POST['usuario'])) ? $_POST['usuario'] : '';
$clave          = (isset($_POST['clave'])) ? $_POST['clave'] : '';
$puerto         = (isset($_POST['puerto'])) ? $_POST['puerto'] : '';





$opcion = (isset($_POST['opcion'])) ? $_POST['opcion'] : '';



switch($opcion){
  
    case 2:        

        $consulta = "SELECT * FROM email_sms";       
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;
    
    case 3:

        $consulta = "UPDATE email_sms SET email_aut='$email_aut', servidor_smtp='$servidor_smtp', usuario='$usuario', clave='$clave', puerto='$puerto' ";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute(); 
  
    }

print json_encode($data, JSON_UNESCAPED_UNICODE);//envio el array final el formato json a AJAX
$conexion=null;


