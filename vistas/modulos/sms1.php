<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

$inc = require("../../modelos/conexion/conexion.php");

$ob = (isset($_POST['n'])) ? $_POST['n'] : '';


if ($inc) {
    $consulta  = "SELECT phone, mensaje FROM numeros_movil_ob_s";
    $resultado = mysqli_query($conn,$consulta);

    $consulta2  = "SELECT usuario, clave FROM sms_integracion";
    $resultado2 = mysqli_query($conn,$consulta2);
    $row2       = mysqli_fetch_array($resultado2);

    $usuario     = $row2['usuario'];
    $password    = $row2['clave'];

    $auth_basic = base64_encode("$usuario:$password");

    if($resultado){

        while($row = $resultado->fetch_array()){
            
            $phone      = $row['phone'];
            $mensaje    = $row['mensaje'];

        // integracion labsmobile


        $auth_basic = base64_encode("andres.galvis@peoplebpo.com:Peoplebpo*21%");


        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.labsmobile.com/json/send",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => '{"message":"'.$mensaje.'", "tpoa":"Sender","recipient":[{"msisdn":"'.$phone.'"}]}',
            CURLOPT_HTTPHEADER => array(
              "Authorization: Basic ".$auth_basic,
              "Cache-Control: no-cache",
              "Content-Type: application/json"
            ),
          ));
          
          $response = curl_exec($curl);
          $err = curl_error($curl);
          
          curl_close($curl);

 
}

         echo "2"; 
    }
}

?>