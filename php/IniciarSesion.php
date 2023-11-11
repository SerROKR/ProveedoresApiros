<?php
session_start();
include ('DataBase.php');


if (isset($_POST['Usuario'])&& isset($_POST['Contrasena'])){
    function validate ($data){
        $data= trim($data);
        $data= stripslashes($data);
        $data= htmlspecialchars($data);
        return $data;
    }
    $Usuario = validate ($_POST['Usuario']) ;
    $Contrasena = validate($_POST['Contrasena']);

    if (empty($Usuario)){
        header("Location: Login.php?error=Favor Ingresar el nombre de usuario");
        exit();
        }elseif(empty($Contrasena)){
            header("Location: Login.php?error=Favor Ingresar la contraseña");
            exit();
        }else{
            //$Contrasena = md5($Contrasena);
            $Sql = "SELECT * FROM usuario WHERE Usuario = '$Usuario' AND Contrasenia = '$Contrasena'";
            $result = mysqli_query($Conexion, $Sql);

            if (mysqli_num_rows($result)===1){
                $row = mysqli_fetch_assoc($result);
                if ($row['Usuario']=== $Usuario && $row['Contrasenia']===$Contrasena){
                    $_SESSION['Usuario']=$row['Usuario'];
                    $_SESSION['ID']=$row['ID'];
                    $_SESSION['Nombres']=$row['Nombres'];
                    $_SESSION['Apellidos']=$row['Apellidos'];
                    $_SESSION['Cargo']=$row['Cargo'];
                    header("Location: Menu.php");
                    exit();
                }else{
                    header("Location: Login.php?error=El Usuario o la Contraseña son incorrectas");
                exit();
            }
        }else{
            header("Location: Login.php?error=El Usuario o la Contraseña son incorrectas");
         exit();
        }
    }
}else{
    header("Location: Login.php");
}