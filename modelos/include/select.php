<?php

	

	require "../conexion/conexion.php";

	

	$producto = (isset($_POST['producto'])) ? $_POST['producto'] : '';

	

	$queryM = "SELECT s_producto FROM sub_producto WHERE nombre = '$producto'";

	$resultadoM = $conn->query($queryM);

	

	$html= "<option>Seleccione</option>";

	

	while($rowM = $resultadoM->fetch_assoc())

	{

		$html.= "<option value='".$rowM['s_producto']."'>".$rowM['s_producto']."</option>";

	}

	

	echo $html;

?>