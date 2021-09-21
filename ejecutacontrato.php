<?php
    require_once "nusoap/lib/nusoap.php";
    require_once "conexiones/ClassService.php"; 

    $q = $_POST["q"];  	 
    $json=$q;

    $JSon= utf8_encode($json);          
    $Contrato="GetPrueba";

    $direccion="";
    $direccion = WebServJSon($Contrato,$JSon);  
    $strCadena="";
    $i=0; 
    foreach ($direccion as $key => $value ) 
         {
            $datos= json_decode(utf8_encode($value), true);
            $count=count($datos, COUNT_RECURSIVE);
            print_r($value);            
         }
       

   
?>
