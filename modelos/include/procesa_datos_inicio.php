<?php

    require('../conexion/conexion.php');
    $objeto = new Conexion();
    $conexion = $objeto->Conectar();

    $opcion = (isset($_POST['opcion'])) ? $_POST['opcion'] : '';


    switch($opcion){

    // inicio cuadros superiores

        case 1:        
            
            $consulta = "SELECT total FROM numero_cobranza_mes_actual WHERE tipo='COBRANZA'";       
            $resultado = $conexion->prepare($consulta);
            $resultado->execute();
            $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
            break;

        case 2:        
            
            $consulta = "SELECT total FROM numero_cobranza_mes_actual WHERE tipo='NO COBRANZA'";       
            $resultado = $conexion->prepare($consulta);
            $resultado->execute();
            $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
            break;
            
        case 3:        
            
            $consulta = "SELECT total_grabaciones FROM numero_grabaciones";       
            $resultado = $conexion->prepare($consulta);
            $resultado->execute();
            $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
            break;

        case 4:        
            
            $consulta = "SELECT total_grabaciones_huerfanas FROM total_grabaciones_huerfanas";       
            $resultado = $conexion->prepare($consulta);
            $resultado->execute();
            $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
            break;
        
    // fin cuadros superiores

        case 5:        
            
            $consulta = "SELECT mes, total_mes FROM cobranza_meses_anual";       
            $resultado = $conexion->prepare($consulta);
            $resultado->execute();
            $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
            break;
            

        case 6:        
            
            $consulta = "SELECT mes, total_mes FROM no_cobranza_meses_anual";       
            $resultado = $conexion->prepare($consulta);
            $resultado->execute();
            $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
            break;

        case 7:        
            
            $consulta = "SELECT item_cobranza, total_item_cobranza FROM item_cobranza";       
            $resultado = $conexion->prepare($consulta);
            $resultado->execute();
            $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
            break;
        
        case 8:        
            
            $consulta = "SELECT mes, total_mes FROM contactabilidad_mensual";       
            $resultado = $conexion->prepare($consulta);
            $resultado->execute();
            $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
            break;
            
        }

    print json_encode($data);//envio el array final el formato json a AJAX
    $conexion=null;

?>