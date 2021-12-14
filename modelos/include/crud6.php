<?php
require('../conexion/conexion.php');
$objeto = new Conexion();
$conexion = $objeto->Conectar();

$nombre = (isset($_POST['nombre'])) ? $_POST['nombre'] : '';
$correo = (isset($_POST['correo'])) ? $_POST['correo'] : '';
$usuario = (isset($_POST['usuario'])) ? $_POST['usuario'] : '';
$password = (isset($_POST['password'])) ? $_POST['password'] : '';
$rut_usuario = (isset($_POST['rut_usuario'])) ? $_POST['rut_usuario'] : '';
$servicio = (isset($_POST['servicio'])) ? $_POST['servicio'] : '';
$rol = (isset($_POST['rol'])) ? $_POST['rol'] : '';
$estado = (isset($_POST['estado'])) ? $_POST['estado'] : '';




$opcion = (isset($_POST['opcion'])) ? $_POST['opcion'] : '';
$id = (isset($_POST['id'])) ? $_POST['id'] : '';


switch($opcion){
  
    case 1:
        $consulta = "INSERT INTO users (nombre, correo, usuario, password, rut_usuario, servicio, rol, estado ) VALUES('$nombre', '$correo', '$usuario', '$password', '$rut_usuario', '$servicio', '$rol', 'Activo') ";			
        $resultado = $conexion->prepare($consulta);
        $resultado->execute(); 
        
        $consulta = "SELECT * FROM users ORDER BY id DESC LIMIT 1";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);       
        break;   

    case 2:        
        $consulta = "UPDATE users SET nombre='$nombre', correo='$correo', usuario='$usuario', password='$password', rut_usuario='$rut_usuario', servicio='$servicio', rol='$rol', estado='$estado'  WHERE id='$id' ";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();        
        
        $consulta = "SELECT * FROM users WHERE id='$id' ";       
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;
    case 3:        
        $consulta = "DELETE FROM users WHERE id='$id' ";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();                           
        break;
        
    }

print json_encode($data, JSON_UNESCAPED_UNICODE);//envio el array final el formato json a AJAX
$conexion=null;


