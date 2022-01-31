<?php 
        require('../conexion/conexion.php');

        // CAPTURA DADOS PARA INSERTAR
        $nombre       = (isset($_POST['nombre'])) ? $_POST['nombre'] : ''; 
        $descripcion  = (isset($_POST['descripcion'])) ? $_POST['descripcion'] : '';
        $contenido    = (isset($_POST['contenido'])) ? $_POST['contenido'] : '';
        

        $sSQL= "INSERT INTO template SET 
        nombre       ='$nombre',
        descripcion  ='$descripcion',
        contenido    ='$contenido'";


        echo mysqli_query($conn,$sSQL); 
        

        // INGRESAR DATOS A LA BASE

        


        

        

?>