<?php

require("serverside_datatable.php");

$table_data->get('grabaciones_huerfanas','session_id',array('session_id','phone','campana','fecha_grabacion', 'fecha'));

?>