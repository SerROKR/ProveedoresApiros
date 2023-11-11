<?php

include "DataBase.php";

$NIT = $_POST["NIT"];
$Razon_Social = $_POST["Razon_Social"];
$Correo_Electronico = $_POST["Correo_Electronico"];
$RUT = $_POST["RUT"];
$Camara_Comercio = $_POST["Camara_Comercio"];
$Cert_Bancaria = $_POST["Cert_Bancaria"];
$Sagrilaft = $_POST["Sagrilaft"];
$ultima_actualizacion = $_POST["ultima_actualizacion"];
$Proxima_actualizacion = $_POST["Proxima_actualizacion"];

$sql =  "INSERT INTO proveedores (
    Registro, NIT, Razon_Social, Correo_Notificacion, Fecha_Rut, Fecha_Comercio, Fecha_Bancaria, Fecha_Sagrilaft, Ultima_Actualizacion, Proxima_Actualizacion)
     VALUES (NULL,'$NIT','$Razon_Social','$Correo_Electronico','$RUT','$Camara_Comercio',
     '$Cert_Bancaria','$Sagrilaft','$ultima_actualizacion','$Proxima_actualizacion')";

$resultado = $Conexion ->  query ($sql);

if ($resultado){
    header('Location: Menu.php');
}else{
    echo "No se Guardo el registro";
}