<?php

// controladores
require_once "controllers/plantilla.controlador.php";
require_once "controllers/login.controlador.php";



// modelos
require_once "modelos/login.modelo.php";



$plantilla= new ControladorPlantilla ();
$plantilla->cplantilla();

