<?php  

	$min				= $_POST['min'];
	$max				= $_POST['max']; 

	require_once '../conexion/conexion.php';

	$sql = "SELECT * FROM grabaciones_referidos_huerfanas WHERE fecha  BETWEEN '$min' AND '$max'";  
	$setRec = mysqli_query($conn, $sql);  


	$columnHeader = '';  
	$columnHeader = 
	"SESSION_ID" . "\t" . 
	"RECORD_URL" . "\t" . 
	"PHONE" . "\t".
	"CAMPANA" . "\t" .  
    "NOMBRE AGENTE" . "\t" .
    "RUT AGENTE" . "\t" .
    "NUMERO AGENTE" . "\t" .
    "EMAIL AGENTE" . "\t" .
	"FECHA_GRABACION" . "\t" . 
	"FECHA" . "\t" ;
	
	
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
	header("Content-Disposition: attachment; filename=ventas_en_frio_referidos_huerfanas.xls");  
	header("Pragma: no-cache");  
	header("Expires: 0");  

	echo ucwords($columnHeader) . "\n" . $setData . "\n";  
?> 
 