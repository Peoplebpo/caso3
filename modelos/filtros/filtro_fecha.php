<?php  

	$min				= $_POST['min'];
	$max				= $_POST['max']; 

	require_once '../conexion/conexion.php';

	$sql = "SELECT * FROM homo_movil_ob WHERE fecha  BETWEEN '$min' AND '$max'";  
	$setRec = mysqli_query($conn, $sql);  


	$columnHeader = '';  
	$columnHeader = 
	"SESSION_ID" . "\t" . 
	"RECORD_URL" . "\t" . 
	"PHONE" . "\t".
	"CAMPANA" . "\t" .  
	"FECHA_GRABACION" . "\t" . 
	"FECHA" . "\t" .
	"NOMBRE_AGENTE" . "\t" .
	"RUT_AGENTE" . "\t" .
	"FECHA_INGRESO" . "\t" .
	"HORA_INGRESO" . "\t" .
	"PCS" . "\t" .
	"TIPO" . "\t" .
	"CAMPANA_T" . "\t" .  
	"PRODUCTO" . "\t" .  
    "TIPO_CLIENTE" . "\t" . 
	"RUT_CLIENTE" . "\t". 
    "DNI_CLIENTE" . "\t".
    "NOMBRE_CLIENTE" . "\t".
    "APELLIDO_CLIENTE" . "\t".
    "EMPRESA" . "\t".
    "FECHA_NACIMIENTO" . "\t".
    "EDAD" . "\t".
    "SEXO" . "\t".
    "EMAIL" . "\t".
    "DIRECCION" . "\t".
    "ACCION" . "\t".
    "CANTIDAD" . "\t".
    "FORMA_ENTREGA" . "\t".
    "SUCURSAL" . "\t".
    "REGION" . "\t".
    "CIUDAD" . "\t".
    "DIRECCION_ENTREGA" . "\t".
    "TIPO_VENTA" . "\t".
    "ORIGEN" . "\t".
    "NUMERO_ORDEN" . "\t".
    "OBSERVACION" . "\t". 
    "SUB PRODUCTO" . "\t";
	
	$setData = '';  

	function eliminar_simbolos($string){
 
    $string = trim($string);
 
    $string = str_replace(
        array('Ã¡', 'Ã ', 'Ã¤', 'Ã¢', 'Âª', 'Ã', 'Ã€', 'Ã‚', 'Ã„'),
        array('a', 'a', 'a', 'a', 'a', 'A', 'A', 'A', 'A'),
        $string
    );
 
    $string = str_replace(
        array('Ã©', 'Ã¨', 'Ã«', 'Ãª', 'Ã‰', 'Ãˆ', 'ÃŠ', 'Ã‹'),
        array('e', 'e', 'e', 'e', 'E', 'E', 'E', 'E'),
        $string
    );
 
    $string = str_replace(
        array('Ã­', 'Ã¬', 'Ã¯', 'Ã®', 'Ã', 'ÃŒ', 'Ã', 'ÃŽ'),
        array('i', 'i', 'i', 'i', 'I', 'I', 'I', 'I'),
        $string
    );
 
    $string = str_replace(
        array('Ã³', 'Ã²', 'Ã¶', 'Ã´', 'Ã“', 'Ã’', 'Ã–', 'Ã”'),
        array('o', 'o', 'o', 'o', 'O', 'O', 'O', 'O'),
        $string
    );
 
    $string = str_replace(
        array('Ãº', 'Ã¹', 'Ã¼', 'Ã»', 'Ãš', 'Ã™', 'Ã›', 'Ãœ'),
        array('u', 'u', 'u', 'u', 'U', 'U', 'U', 'U'),
        $string
    );
 
    $string = str_replace(
        array('Ã±', 'Ã‘', 'Ã§', 'Ã‡'),
        array('n', 'N', 'c', 'C',),
        $string
    );
 
    $string = str_replace(
        array("\\", "Â¨", "Âº", "~",
             "#", "@", "|", "!", "\"",
             "Â·", "$", "%", "&",
             "(", ")", "'", "Â¡",
             "Â¿", "[", "^", "<code>", "]",
             "+", "}", "{", "Â¨", "Â´",
             ">", "< ", ";", " "),
        ' ',
        $string
    );
return $string;
} 
 
	  while ($rec = mysqli_fetch_row($setRec)) {  
	    $rowData = '';  
	    foreach ($rec as $value) {  
	        $value = '"' . mb_convert_encoding(eliminar_simbolos($value),'ISO-8859-1','utf-8') . '"' . "\t";  
	        $rowData .= $value;  
	    }  
	    $setData .= trim($rowData) . "\n";  
	}  
	  
	header('Content-Type: application/vnd.ms-excel');
	header("Content-Disposition: attachment; filename=ventas_en_frio.xls");  
	header("Pragma: no-cache");  
	header("Expires: 0");  

	echo ucwords($columnHeader) . "\n" . $setData . "\n";  
?> 
 