<?php


$host="localhost";
$db="proveedores";
$User="root";
$Password="";

$Conexion = mysqli_connect($host, $User, $Password, $db);

if(!$Conexion){
    echo "Conexion Fallida";
}
