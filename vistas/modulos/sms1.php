<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

$inc = require("../../modelos/conexion/conexion.php");

$ob = (isset($_POST['n'])) ? $_POST['n'] : '';



if ($inc) {
    $consulta = "SELECT phone, mensaje FROM numeros_movil_ob_s";
    $resultado = mysqli_query($conn,$consulta);
    if($resultado){

        while($row = $resultado->fetch_array()){
            $phone      = $row['phone'];
            $mensaje    = $row['mensaje'];

            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, "https://kitapi-us.voximplant.com/api/v2/outbound/appendToCampaign");
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query([
            'domain' => 'peoplebpo',
            'campaign_id' => 30029,
            'access_token' => 'ddef8a4b5025a6f21cb0f6ca3a482324',
            'rows' => '[{"phone":"'.$phone.'","new_caller_id":"56999999999","mensaje":"'.$mensaje.'","UTC":"America/Santiago"}]'
            ]));
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $response = curl_exec($ch);

}

        echo "2"; 
    }
}

?>