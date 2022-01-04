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
          
          
        /*    // integracion voximplant  
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, "https://kitapi-us.voximplant.com/api/v2/outbound/appendToCampaign");
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query([
            'domain' => 'peoplebpo',
            'campaign_id' => 31925,
            'access_token' => 'ddef8a4b5025a6f21cb0f6ca3a482324',
            'domain' => $row2['dominio'],
            'campaign_id' => $row2['campana_id'],
            'access_token' => $row2['access_token'],
            'rows' => '[{"phone":"'.$phone.'","new_caller_id":"56999999999","mensaje":"'.$mensaje.'","UTC":"America/Santiago"}]'
            ]));
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $response = curl_exec($ch);
        */

}

        echo "2"; 
    }
}

?>