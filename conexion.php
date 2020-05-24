<?php

$usu = 'root';
$ser = 'localhost';
$pas = '';
$bad = 'correo';
	
function conectarse(){
    global $ser,$usu,$pas,$bad;
    $link= mysqli_connect($ser,$usu,$pas);
    mysqli_select_db($link, $bad);
    
    if(!($link))
    {
        echo "Error al conectar con la base de datos.<br>";
        exit();
    }
    if (!mysqli_select_db($link, $bad)) 
     { 
        echo "Error seleccionando la base de datos.<br>"; 
        exit(); 
     }
  return $link; 
}
?>