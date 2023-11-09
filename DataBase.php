<?php


$Servidor="localhost";
$Base_Datos="proveedores";
$Usuario="root";
$Contrasena="";

try{
    $Conexion = new PDO("mysql:host=$Servidor;dbname=$Base_Datos",$Usuario,$Contrasena);
}catch(Exception $ex){
    echo $ex->getMessage();
}


?>