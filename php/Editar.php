<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administración Proveedores Apiros</title>
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Onest:wght@200;400&display=swap');
    </style>
    <link rel="stylesheet" href="http://localhost/proyecto/ProveedoresApiros/css/editar.css">
    <link rel="stylesheet" type="text/css" href="bootstrap-5.3.2-dist/css/bootstrap.css">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/crud.js"></script>
</head>

<body>
    <header>
        <div id="banner">
            <img src="http://localhost/proyecto/ProveedoresApiros/Img/Footer.png" alt="frame">
        </div>
        <nav class="navbar navbar-expand">
            <ul class="nav navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="Menu.php" aria-current="page">Inicio <span
                            class="visually-hidden">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Login.php">Cerrar Sesión</a>
                </li>
            </ul>
        </nav>
        <div id="Titulo">
            <h1 id="nombre">Proveedores<br> Apiros</h1>
            <section id="logo"><img src="http://localhost/proyecto/ProveedoresApiros/Img/Logo.png" alt="Logo"></section>
        </div>
    </header>
    <?php
    ?>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive-sm">
                <table class="table table-bordered" id="tabla_id">
                    <thead>
                        <tr>
                            <th scope="col">Registro</th>
                            <th scope="col">NIT</th>
                            <th scope="col">RAZÓN SOCIAL</th>
                            <th scope="col">Correo</th>
                            <th scope="col">RUT</th>
                            <th scope="col">Camara de comercio</th>
                            <th scope="col">Certificación Bancaria</th>
                            <th scope="col">Sagrilaft</th>
                            <th scope="col">Ultima Actualización</th>
                            <th scope="col">Proxima Actualización</th>

                        </tr>
                    </thead>
                    <tbody>

                        <tr class="">
                            <td input type="text" class="form-control" name="Registro">
                            <td input type="text" name="NIT">
                            <td input type="text" name="Razon_Social">
                            </td>
                            <td input type="text" name="Correo_Notificacion">
                            <td input type="date" name="Fecha_Rut"></td>
                            <td input type="date" name="Fecha_Comercio" ></td>
                            <td input type="date" name="Fecha_Bancaria"></td>
                            <td input type="date" name="Fecha_Sagrilaft"></td>
                            <td input type="date" name="Ultima_Actualizacion"></td>
                            <td input type="date" name="Proxima_Actualizacion"></td>


                            <td class="accion">
                                <a name="" id="boton" class="btn btn-success" href="#" role="button">Notificar</a>
                                <a name="" id="botonModificar" class="btn btn-success" href="Editar.php"
                                    role="button">Modificar</a>
                                <a name="" id="botonEliminar" class="btn btn-primary" href="#"
                                    role="button">Eliminar</a>
                            </td>
                        </tr>
                </table>
            </div>
        </div>
    </div>
    <footer>
        <div id="Iconos_Decorativos">
            <img src="http://localhost/proyecto/ProveedoresApiros/Img/Decorativos.png" alt="decorativos">
        </div>
        <div id="pie">
            <img src="http://localhost/proyecto/ProveedoresApiros/Img/Footer.png" alt="footer">
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