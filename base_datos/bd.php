<?php

$servidor = "localhost";
$bd = "jome";
$usuario = "root";
$clave = "656096";

try {

    $conexion = new PDO("mysql:host=$servidor;dbname=$bd",$usuario,$clave);

} catch(Exception $ex) { 
    
    header("Location: error.php");

}
?>