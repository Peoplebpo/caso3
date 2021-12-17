<?php
  session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="vistas/dist/img/logo.png" />
  <title>People BPO | Dashboard</title>


  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="vistas/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="vistas/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="vistas/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="vistas/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="vistas/dist/css/adminlte.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="vistas/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="vistas/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="vistas/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <!-- jQuery -->
<script src="vistas/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="vistas/plugins/jquery-ui/jquery-ui.min.js"></script>
 <!-- Toastr -->
 <link rel="stylesheet" href="vistas/plugins/toastr/toastr.min.css">
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<!-- Bootstrap 4 -->
<script src="vistas/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="vistas/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="vistas/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="vistas/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="vistas/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="vistas/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="vistas/plugins/moment/moment.min.js"></script>
<script src="vistas/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="vistas/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="vistas/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="vistas/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="vistas/dist/js/adminlte.js"></script>
<!-- SweetAlert2 -->
<script src="vistas/plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- Toastr -->
<script src="vitas/plugins/toastr/toastr.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="vistas/dist/js/pages/dashboard.js"></script>
  <link rel="stylesheet" href="vistas/plugins/summernote/summernote-bs4.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap5.min.css" />
  <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap5.min.js"></script>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

  

</head>

<body class="hold-transition sidebar-mini layout-fixed">
    
    

      <div class="preloader flex-column justify-content-center align-items-center">
          <div class="spinner-border text-primary" role="status">
            <span class="visually-hidden"></span>
          </div>
      </div>

      

      <!-- rutas amigables -->
      <?php

      if(isset($_SESSION["validar_session"])&&
        $_SESSION["validar_session"]==="ok"
      ){

        echo '<div class="wrapper">';

        include "modulos/header/header.php";
        include "modulos/sidebar/sidebar.php";
        //  rutas amigables 
        if (isset($_GET["ruta"])){
          if($_GET["ruta"]=="grabaciones"||
          $_GET["ruta"]=="ghuerfanas"||
          $_GET["ruta"]=="lnegra"||
          $_GET["ruta"]=="salir"||
          $_GET["ruta"]=="administrador"||
          $_GET["ruta"]=="sms"||
          $_GET["ruta"]=="usuarios"||
          $_GET["ruta"]=="productos"||
          $_GET["ruta"]=="subproductos"||
          $_GET["ruta"]=="servicios"||
          $_GET["ruta"]=="crm"||
          $_GET["ruta"]=="ingtipificacion"||
          $_GET["ruta"]=="datostipificacion"||
          $_GET["ruta"]=="sucursal"||
          $_GET["ruta"]=="clientes"||
          $_GET["ruta"]=="canalpago"||
          $_GET["ruta"]=="inicio"
        
          
          ){
            
            include "modulos/".$_GET["ruta"].".php";
          }
        }

        include "modulos/footer/footer.php";

        echo "</div>";

      }else{
        include "modulos/login.php";
      }

      ?>



</body>

</html>