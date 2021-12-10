<?php

require("serverside_datatable.php");

$table_data->get('grabaciones_referidos_huerfanas','session_id',array('session_id','phone','campana', 'nombre_agente', 'rut_agente', 'numero_agente', 'email_agente', 'fecha_grabacion', 'fecha'));

?>