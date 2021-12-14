<?php

$phone          = (isset($_POST['phone'])) ? $_POST['phone'] : '';
$phone_agente   = (isset($_POST['phone_agente'])) ? $_POST['phone_agente'] : '';
$email_agente   = (isset($_POST['email_agente'])) ? $_POST['email_agente'] : '';
$nombre_agente  = (isset($_POST['nombre_agente'])) ? $_POST['nombre_agente'] : '';
$rut_agente  	= (isset($_POST['rut_agente'])) ? $_POST['rut_agente'] : '';


// abrimos la sesión cURL
$ch = curl_init();

// definimos la URL a la que hacemos la petición
curl_setopt($ch, CURLOPT_URL,"https://kitapi-us.voximplant.com/api/v3/scenario/runScenario");
// indicamos el tipo de petición: POST
curl_setopt($ch, CURLOPT_POST, TRUE);
// definimos cada uno de los parámetros

$variables = "{'nombre_agente':'".$nombre_agente."','campana':'movil_ob','phone_agente':'".$phone_agente."','email_agente':'".$email_agente."'}";

curl_setopt($ch, CURLOPT_POSTFIELDS, 'scenario_id=24208&phone='.$phone.'&caller_id=56412560118&domain=peoplebpo&access_token=ddef8a4b5025a6f21cb0f6ca3a482324&variables={"nombre_agente":"'.$nombre_agente.'","rut_agente":"'.$rut_agente.'","phone_agente":"'.$phone_agente.'","email_agente":"'.$email_agente.'"}');

// recibimos la respuesta y la guardamos en una variable

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$remote_server_output = curl_exec ($ch);

// cerramos la sesión cURL

curl_close ($ch);

// hacemos lo que queramos con los datos recibidos
// por ejemplo, los mostramos

print_r($remote_server_output);
echo "1";

?>