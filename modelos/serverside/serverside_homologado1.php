<?php

require("serverside_datatable.php");

$table_data->get('homo_referidos_movil_ob','session_id',array('session_id','phone','campana','nombre_agente','rut_agente','numero_agente', 'email_agente',
'fecha_grabacion','fecha','fecha_ingreso', 'hora_ingreso', 'pcs', 'tipo','campana_t','producto','rut_cliente'));

?>