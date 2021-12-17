<?php 
        require('../conexion/conexion.php');

        include('../../../hora_oficial/zona_horaria.php');

        date_default_timezone_set($zona_horaria);

        $hora = date("h:i:s");
        $fecha = date("Y-m-d");

        // CAPTURA DADOS PARA INSERTAR
        $nombre_agente 	     = (isset($_POST['nombre_agente'])) ? $_POST['nombre_agente'] : ''; 
        $rut_usuario         = (isset($_POST['rut_usuario'])) ? $_POST['rut_usuario'] : '';
        $pcs		     = (isset($_POST['pcs'])) ? $_POST['pcs'] : '';
        $session_id          = (isset($_POST['session_id'])) ? $_POST['session_id'] : '';
        $tipo		     = (isset($_POST['tipo'])) ? $_POST['tipo'] : '';
        $campana_t	     = (isset($_POST['campana_t'])) ? $_POST['campana_t'] : '';
        $producto            = (isset($_POST['producto'])) ? $_POST['producto'] : '';
        $rut_cliente         = (isset($_POST['rut_cliente'])) ? $_POST['rut_cliente'] : ''; 
        $tipo_cliente        = (isset($_POST['tipo_cliente'])) ? $_POST['tipo_cliente'] : ''; 
        $dni_cliente         = (isset($_POST['dni_cliente'])) ? $_POST['dni_cliente'] : '';
        $nombre_cliente      = (isset($_POST['nombre_cliente'])) ? $_POST['nombre_cliente'] : '';
        $apellido_cliente    = (isset($_POST['apellido_cliente'])) ? $_POST['apellido_cliente'] : '';
        $empresa             = (isset($_POST['empresa'])) ? $_POST['empresa'] : '';
        $fecha_nacimiento    = (isset($_POST['fecha_nacimiento'])) ? $_POST['fecha_nacimiento'] : '';
        $edad                = (isset($_POST['edad'])) ? $_POST['edad'] : '';
        $sexo                = (isset($_POST['sexo'])) ? $_POST['sexo'] : '';
        $email               = (isset($_POST['email'])) ? $_POST['email'] : '';
        $direccion           = (isset($_POST['direccion'])) ? $_POST['direccion'] : '';
        $accion              = (isset($_POST['accion'])) ? $_POST['accion'] : '';
        $cantidad            = (isset($_POST['cantidad'])) ? $_POST['cantidad'] : '';
        $forma_entrega       = (isset($_POST['forma_entrega'])) ? $_POST['forma_entrega'] : '';
        $sucursal            = (isset($_POST['sucursal'])) ? $_POST['sucursal'] : '';
        $region              = (isset($_POST['region'])) ? $_POST['region'] : '';
        $ciudad              = (isset($_POST['ciudad'])) ? $_POST['ciudad'] : '';
        $observacion         = (isset($_POST['observacion'])) ? $_POST['observacion'] : '';
        $user                = (isset($_POST['user'])) ? $_POST['user'] : '';
        $sub_producto        = (isset($_POST['sub_producto'])) ? $_POST['sub_producto'] : '';
        $ciclo_fact          = (isset($_POST['ciclo_fact'])) ? $_POST['ciclo_fact'] : '';
        $fact_pendiente      = (isset($_POST['fact_pendiente'])) ? $_POST['fact_pendiente'] : '';
        $periodo_fact        = (isset($_POST['periodo_fact'])) ? $_POST['periodo_fact'] : '';
        $fecha_cpago         = (isset($_POST['fecha_cpago'])) ? $_POST['fecha_cpago'] : '';
        $canal_pago          = (isset($_POST['canal_pago'])) ? $_POST['canal_pago'] : '';
         


  

        $sSQL= "INSERT INTO script_movil_ob SET 
        nombre_agente         ='$nombre_agente',
        rut_usuario           ='$rut_usuario',
        fecha_hora_ingreso    ='$fecha $hora',
        pcs                   ='$pcs',
        session_id            ='$session_id',
        tipo                  ='$tipo',
        campana_t               ='$campana_t',
        producto              ='$producto',
        rut_cliente           ='$rut_cliente',
        tipo_cliente          ='$tipo_cliente',
        dni_cliente           ='$dni_cliente',
        nombre_cliente        ='$nombre_cliente',
        fecha_ingreso         ='$fecha',
        hora_ingreso          ='$hora',
        empresa               ='$empresa',
        apellido_cliente      ='$apellido_cliente',
        fecha_nacimiento      ='$fecha_nacimiento',
        edad                  ='$edad',
        sexo                  ='$sexo',
        email                 ='$email',
        direccion             ='$direccion',
        accion                ='$accion',
        cantidad              ='$cantidad',
        forma_entrega         ='$forma_entrega',
        sucursal              ='$sucursal',
        region                ='$region',
        ciudad                ='$ciudad',
        observacion           ='$observacion',
        user                  ='$user',
        sub_producto          ='$sub_producto',
        ciclo_fact            ='$ciclo_fact',
        fact_pendiente        ='$fact_pendiente',
        periodo_fact          ='$periodo_fact',
        fecha_cpago           ='$fecha_cpago',
        canal_pago            ='$canal_pago'";


        echo mysqli_query($conn,$sSQL); 
            
       


        // INGRESAR DATOS A LA BASE

        


        

        

?>