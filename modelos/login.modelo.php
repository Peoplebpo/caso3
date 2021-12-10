<?php

require_once "conexion/conexion.php";

class ModeloLogin {

    static public function mdlogin($tabla,$item,$value){
        $sql=Conexion2::Conectar2()->prepare("SELECT * FROM $tabla WHERE $item=:$item and estado = 'Activo'");
        $sql->bindParam(":".$item,$value, PDO::PARAM_STR);
        $sql->execute();
        // var_dump($sql);
        return $sql->fetch();
        // $sql->close();
        $sql=null;
    }

}