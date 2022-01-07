<?php
require('../conexion/conexion.php');


$nombre = (isset($_POST['nombre'])) ? $_POST['nombre'] : '';

$opcion = (isset($_POST['opcion'])) ? $_POST['opcion'] : '';
$id = (isset($_POST['id'])) ? $_POST['id'] : '';


$accion_nm="SELECT * FROM campana_email WHERE  nombre='$nombre'";
$consulta_nm=mysqli_query($conn,$accion_nm);
$datos_nm=mysqli_fetch_assoc($consulta_nm);

//Cantidad de registros
$cantidad_nm=mysqli_num_rows($consulta_nm);



    if($cantidad_nm > 0){
        echo 1;

    } else{

        $accion_nm = "INSERT INTO campana_email (nombre) VALUES('$nombre')";
        $consulta_nm = mysqli_query($conn,$accion_nm);

        echo 0;

    }



$conexion=null;


