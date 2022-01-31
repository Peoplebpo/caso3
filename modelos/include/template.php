<?php
require('../conexion/conexion.php');
$objeto = new Conexion();
$conexion = $objeto->Conectar();


$nombre       = (isset($_POST['nombre'])) ? $_POST['nombre'] : '';
$descripcion       = (isset($_POST['descripcion'])) ? $_POST['descripcion'] : '';
$contenido   = (isset($_POST['contenido'])) ? $_POST['contenido'] : '';


$opcion = (isset($_POST['opcion'])) ? $_POST['opcion'] : '';
$id = (isset($_POST['id'])) ? $_POST['id'] : '';


switch($opcion){
  
    case 1:
        $consulta = "INSERT INTO template (contenido, nombre, descripcion) VALUES('$contenido', '$nombre', '$descripcion')";			
        $resultado = $conexion->prepare($consulta);
        $resultado->execute(); 
        
        $consulta = "SELECT * FROM template ORDER BY id DESC LIMIT 1";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);       
        break;   

    case 2:        
        $consulta = "UPDATE template SET contenido='$contenido', nombre='$nombre', descripcion='$descripcion' WHERE id='$id' ";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();   
        
        $consulta = "SELECT * FROM template WHERE id='$id' ";       
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;

    case 3:        
        $consulta = "DELETE FROM template WHERE id='$id' ";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();   
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);                        
        break;

    case 4:    
        $consulta = "SELECT * FROM homo_movil_ob WHERE session_id='$session_id'";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();        
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;
        
    case 5:    
        $consulta = "SELECT * FROM template WHERE id='$id'";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();        
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;
    case 6:        
        $consulta = "UPDATE template SET contenido='$contenido', nombre='$nombre', descripcion='$descripcion' WHERE id='$id' ";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute(); 
        if ($resultado->rowCount() > 0) { 
            $consulta = "SELECT * FROM template WHERE id='$id' ";       
            $resultado = $conexion->prepare($consulta);
            $resultado->execute();
            $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        }
        else { 
            $data = "No"; 
        }       

        break;
    
    }
    

print json_encode($data, JSON_UNESCAPED_UNICODE);//envio el array final el formato json a AJAX
$conexion=null;


