<?php

require("serverside_datatable.php");

$table_data->get('homo_movil_ob','session_id',array('session_id','phone','campana','fecha_grabacion', 'fecha', 'nombre_agente', 
'rut_usuario', 'fecha_ingreso', 'hora_ingreso', 'pcs', 'tipo', 'campana_t', 'producto', 'tipo_cliente', 'rut_cliente', 'dni_cliente'));

?>