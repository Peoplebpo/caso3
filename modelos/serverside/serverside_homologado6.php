<?php

require("serverside_datatable.php");

$table_data->get('users','id',array('id','nombre','correo','usuario','password', 'rut_usuario', 'servicio','rol', 'estado'));

?>