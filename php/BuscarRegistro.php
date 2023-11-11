<?php

include "DataBase.php";

if (isset($_POST['Buscar'])){
    $busqueda = $_po ['Bus_NIT'];
    
    $Sql="SELECT * FROM proveedores WHERE NIT == '$busqueda'";
    
    $resultado = $Conexion->query($Sql);

    $NIT = $resultado ['NIT'];
    


          

    
}