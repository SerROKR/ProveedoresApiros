<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        <title>Administración Proveedores Apiros</title>
        <link rel="stylesheet" type="text/css" href="../css/Registro.css">
        <link rel="stylesheet" type="text/css" href="bootstrap-5.3.2-dist/css/bootstrap.css">
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"
            integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="//cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
        <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
</head>

<body>
    <header>
        <div id="banner">
            <img src="../Img/Footer.png" alt="frame">
        </div>
        <nav class="navbar navbar-expand">
            <ul class="nav navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="Menu.php" aria-current="page">Inicio <span
                            class="visually-hidden">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Cerrar Sesión</a>
                </li>
            </ul>
        </nav>
        <div id="Titulo">
            <h1 id="nombre">Proveedores <br> Apiros</h1>
            <section id="logo"><img src="../Img/Logo.png" alt="Logo"></section>
        </div>
    </header>
    <div class="card-body">
        <form action="AgregarRegistro.php" method="POST" enctype="multipart/form-data">

            <div class="mb-3">
                <input type="text" class="form-control" name="NIT" id="NIT" aria-describedby="helpId"
                    placeholder="Ingrese el NIT">
                <input type="text" class="form-control" name="Razon_Social" id="Razon_Social" aria-describedby="helpId"
                    placeholder="Ingrese el nombre del tercero">
                <input type="text" class="form-control" name="Correo_Electronico" id="Correo_Electronico"
                    aria-describedby="helpId" placeholder="Ingrese el correo eléctronico">
                <input onfocus="(this.type='date')" class="form-control" name="RUT" id="RUT"
                    placeholder="Ingrese la fecha de expedición del RUT">
                <input onfocus="(this.type='date')" class="form-control" name="Camara_Comercio" id="Camara_Comercio"
                    placeholder="Ingrese la fecha de camara de comercio">
                <input onfocus="(this.type='date')" class="form-control" name="Cert_Bancaria" id="Cert_Bancaria"
                    placeholder="fecha de expedición del certificado bancario">
                <input onfocus="(this.type='date')" class="form-control" name="Sagrilaft" id="Sagrilaft"
                    placeholder="Ingrese fecha de consulta sagrilaft">
                <input onfocus="(this.type='date')" class="form-control" name="ultima_actualizacion"
                    id="ultima_actualizacion" placeholder="Ultima fecha de actualización del proveedor">
                <input onfocus="(this.type='date')" class="form-control" name="Proxima_actualizacion"
                    id="Proxima_actualizacion" placeholder="Proxima fecha de actualización">
                <button type="submit" class="btn btn-primary" id="Boton">Agregar</button>
                <a name="Enlace" id="Boton2" class="btn btn-primary" href="Menu.php" role="button">Cancelar</a>
            </div>

        </form>
    </div>

    <footer>
        <div id="Iconos_Decorativos">
            <img src="../Img/Decorativos.png" alt="decorativos">
        </div>
        <div id="pie">
            <img src="../Img/Footer.png" alt="footer">
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