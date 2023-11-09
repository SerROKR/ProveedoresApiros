<?php include("DataBase.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administración Proveedores Apiros</title>
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Onest:wght@200;400&display=swap');
    </style>
    <link rel="stylesheet" href="Registro.css">
    <link rel="stylesheet" type="text/css" href="bootstrap-5.3.2-dist/css/bootstrap.css">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/crud.js"></script>
</head>
<body>
    <header>
        <div id="banner">
            <img src="Img/Header.png" alt="frame">
        </div>
        <nav class="navbar navbar-expand">
            <ul class="nav navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="#" aria-current="page">Inicio <span
                            class="visually-hidden">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Cerrar Sesión</a>
                </li>
            </ul>
        </nav>
        <div id="Titulo">
            <h1 id="nombre">Proveedores <br> Apiros</h1>
            <section id="logo"><img src="Img/Logo.png" alt="Logo"></section>
        </div>
    </header>
            <div class="card-body">
                <form action="" method="post" enctype="multipart/form-data">

                    <div class="mb-3">
                        <input type="text" class="form-control" name="NIT" id="NIT" aria-describedby="helpId"
                            placeholder="Ingrese el NIT">
                        <input type="text" class="form-control" name="Razon_Social" id="Razon_Social"
                            aria-describedby="helpId" placeholder="Ingrese el nombre del tercero">
                        <input type="text" class="form-control" name="Correo_Electronico" id="Correo_Electronico"
                            aria-describedby="helpId" placeholder="Ingrese el correo eléctronico">
                        <input type="text" class="form-control" name="RUT" id="RUT" aria-describedby="helpId"
                            placeholder="Ingrese la fecha de expedición del RUT">
                        <input type="text" class="form-control" name="Camara_Comercio" id="Camara_Comercio"
                            aria-describedby="helpId" placeholder="Ingrese la fecha de camara de comercio">
                        <input type="text" class="form-control" name="Cert_Bancaria" id="Cert_Bancaria"
                            aria-describedby="helpId" placeholder="fecha de expedición del certificado bancario">
                        <input type="text" class="form-control" name="Sagrilaft" id="Sagrilaft"
                            aria-describedby="helpId" placeholder="Ingrese fecha de consulta sagrilaft">
                        <input type="text" class="form-control" name="ultima_actualizacion" id="ultima_actualizacion"
                            aria-describedby="helpId" placeholder="Ultima fecha de actualización del proveedor">
                        <input type="text" class="form-control" name="Proxima_actualizacion" id="Proxima_actualizacion"
                            aria-describedby="helpId" placeholder="Proxima fecha de actualización">
                            <button type="submit" class="btn btn-primary" id="Boton">Agregar</button>
                    <a name="Enlace" id="Boton2" class="btn btn-primary" href="index.php" role="button">Cancelar</a>
                    </div>

                </form>
            </div>
        
    <footer>
        <div id="Iconos_Decorativos">
            <img src="Img\Decorativos.png" alt="decorativos">
        </div>
        <div id="pie">
            <img src="Img\Footer.png" alt="footer">
        </div>
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>