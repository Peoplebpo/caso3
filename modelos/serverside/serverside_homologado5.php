<?php

    require("serverside_datatable.php");
    $table_data -> get('script_movil_ob','session_id', array('nombre_agente','rut_usuario','fecha_hora_ingreso','pcs', 'session_id','tipo', 'campana_t', 'producto','rut_cliente',
    'tipo_cliente', 'dni_cliente', 'nombre_cliente','fecha_ingreso', 'hora_ingreso', 'empresa', 'apellido_cliente',
    'fecha_nacimiento', 'edad', 'sexo', 'email', 'direccion', 'accion', 'cantidad', 'forma_entrega',
    'sucursal', 'region', 'ciudad', 'observacion', 'sub_producto', 'ciclo_fact', 'fact_pendiente', 'periodo_fact', 'fecha_cpago', 'canal_pago'));

?>