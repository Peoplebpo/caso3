<?php

require("serverside_datatable.php");

$table_data->get('clientes','id',array('id','numero','nombre','apellidos','edad','email','direccion', 'ciclo_fact', 'fact_pendiente', 'periodo_fact'));

?>