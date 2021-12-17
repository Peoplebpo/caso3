<?php
require('../conexion/conexion.php');
$objeto = new Conexion();
$conexion = $objeto->Conectar();

$numero    = (isset($_POST['numero'])) ? $_POST['numero'] : '';
$nombre    = (isset($_POST['nombre'])) ? $_POST['nombre'] : '';
$apellidos = (isset($_POST['apellidos'])) ? $_POST['apellidos'] : '';
$edad      = (isset($_POST['edad'])) ? $_POST['edad'] : '';
$email     = (isset($_POST['email'])) ? $_POST['email'] : '';
$direccion = (isset($_POST['direccion'])) ? $_POST['direccion'] : '';
$ciclo_fact     = (isset($_POST['ciclo_fact'])) ? $_POST['ciclo_fact'] : '';
$fact_pendiente = (isset($_POST['fact_pendiente'])) ? $_POST['fact_pendiente'] : '';
$periodo_fact   = (isset($_POST['periodo_fact'])) ? $_POST['periodo_fact'] : '';



$opcion = (isset($_POST['opcion'])) ? $_POST['opcion'] : '';
$id = (isset($_POST['id'])) ? $_POST['id'] : '';


switch($opcion){
  
    case 1:
        $consulta = "INSERT INTO clientes (numero, nombre, apellidos, edad, email, direccion, ciclo_fact, fact_pendiente, periodo_fact ) VALUES('$numero','$nombre','$apellidos','$edad','$email','$direccion', '$ciclo_fact', '$fact_pendiente', '$periodo_fact') ";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute(); 
        
        $consulta = "SELECT * FROM clientes ORDER BY id DESC LIMIT 1";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);       
        break;   

    case 2:        
        $consulta = "UPDATE clientes SET numero='$numero', nombre='$nombre', apellidos='$apellidos', edad='$edad', email='$email', direccion='$direccion', ciclo_fact='$ciclo_fact', fact_pendiente='$fact_pendiente', periodo_fact='$periodo_fact' WHERE id='$id' ";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();        
        
        $consulta = "SELECT * FROM clientes WHERE id='$id' ";       
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;
    case 3:        
        $consulta = "DELETE FROM clientes WHERE id='$id' ";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();                           
        break;
        
    }

print json_encode($data, JSON_UNESCAPED_UNICODE);//envio el array final el formato json a AJAX
$conexion=null;


