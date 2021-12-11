<?php

class Conexion{   
    public static function Conectar() {        
        define('servidor', '157.230.57.48');
        define('nombre_bd', 'cobranza_cliente');
        define('usuario', 'root');
        define('password', '413471*IIO');  
                           
        $opciones = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');            
        try{
            $conexion = new PDO("mysql:host=".servidor."; dbname=".nombre_bd, usuario, password, $opciones);            
            return $conexion;
        }catch (Exception $e){
            die("El error de Conexión es: ". $e->getMessage());
        }
    }
    
}

$conn = new mysqli('157.230.57.48','root','413471*IIO','cobranza_cliente'); //servidor, usuario de base de datos, contraseÃ±a del usuario, nombre de base de datos
 	mysqli_set_charset($conn,"utf8");
    //  var_dump($conn);


	if(mysqli_connect_errno()){

		echo 'Conexion Fallida : ', mysqli_connect_error();

		exit();

	}

class Conexion2{
    public function conectar2(){
        $link= new PDO("mysql:host=157.230.57.48;dbname=cobranza_cliente",
        "root",
        "413471*IIO",
        array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
              PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
        );
    
    return $link;
    }
}



?>

