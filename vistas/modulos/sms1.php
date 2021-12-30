<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

$inc = require("../../modelos/conexion/conexion.php");

$ob = (isset($_POST['n'])) ? $_POST['n'] : '';



if ($inc) {
    $consulta  = "SELECT phone, mensaje FROM numeros_movil_ob_s";
    $resultado = mysqli_query($conn,$consulta);

    $consulta2  = "SELECT * FROM sms_integracion";
    $resultado2 = mysqli_query($conn,$consulta2);
    $row2       = mysqli_fetch_array($resultado2);

    if($resultado){

        while($row = $resultado->fetch_array()){
            $phone      = $row['phone'];
            $mensaje    = $row['mensaje'];

            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, "https://kitapi-us.voximplant.com/api/v2/outbound/appendToCampaign");
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query([
            'domain' => $row2['dominio'],
            'campaign_id' => $row2['campana_id'],
            'access_token' => $row2['access_token'],
            'rows' => '[{"phone":"'.$phone.'","new_caller_id":"56999999999","mensaje":"'.$mensaje.'","UTC":"America/Santiago"}]'
            ]));
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $response = curl_exec($ch);

}

        echo "2"; 
    }
}

?>