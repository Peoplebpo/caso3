<?php

    require('../conexion/conexion.php');
    $objeto = new Conexion();
    $conexion = $objeto->Conectar();

    $opcion = (isset($_POST['opcion'])) ? $_POST['opcion'] : '';


    switch($opcion){

    // inicio cuadros superiores

        case 1:        
            
            $consulta = "SELECT total FROM numero_ventas_mes_actual WHERE tipo='VENTA'";       
            $resultado = $conexion->prepare($consulta);
            $resultado->execute();
            $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
            break;

        case 2:        
            
            $consulta = "SELECT total FROM numero_ventas_mes_actual WHERE tipo='NO VENTA'";       
            $resultado = $conexion->prepare($consulta);
            $resultado->execute();
            $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
            break;
            
        case 3:        
            
            $consulta = "SELECT total_referidos FROM numero_referidos_mes_actual";       
            $resultado = $conexion->prepare($consulta);
            $resultado->execute();
            $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
            break;

        case 4:        
            
            $consulta = "SELECT total_lista_negra FROM total_registros_lista_negra";       
            $resultado = $conexion->prepare($consulta);
            $resultado->execute();
            $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
            break;
        
    // fin cuadros superiores

        case 5:        
            
            $consulta = "SELECT mes, total_mes FROM ventas_meses_anual";       
            $resultado = $conexion->prepare($consulta);
            $resultado->execute();
            $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
            break;
            

        case 6:        
            
            $consulta = "SELECT mes, total_mes FROM no_ventas_meses_anual";       
            $resultado = $conexion->prepare($consulta);
            $resultado->execute();
            $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
            break;

        case 7:        
            
            $consulta = "SELECT producto, total_producto FROM productos_vendidos";       
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