<!DOCTYPE html>
<html lang="en">

<head>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        <title>Administración Proveedores Apiros</title>
        <link rel="stylesheet" type="text/css" href="http://localhost/proyecto/ProveedoresApiros/css/Menu.css">
        <link rel="stylesheet" type="text/css" href="bootstrap-5.3.2-dist/css/bootstrap.css">
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"
            integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="//cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
        <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
    </head>
</head>
<header>
    <div id="banner">
        <img src="http://localhost/proyecto/ProveedoresApiros/Img/Footer.png" alt="frame">
    </div>
    <nav class="navbar navbar-expand">
        <ul class="nav navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="CerrarSesion.php">Cerrar Sesión</a>
            </li>
        </ul>
    </nav>
    <div id="Titulo">
        <h1 id="nombre">Proveedores <br> Apiros</h1>
        <section id="logo"><img src="http://localhost/proyecto/ProveedoresApiros/Img/Logo.png" alt="Logo"></section>
    </div>

</header>

<body>
    <ul id="menu">
        <div class="opciones">
            <li>
                <a href="./Registro.php"><img class="iconos" src="http://localhost/proyecto/ProveedoresApiros/Img/Registro.svg" alt="">
                    <p><b>Registro</b></p>
                </a>

            </li>
            <li>
                <span class="separador"></span><a href="./Informe.php"><img class="iconos" src="http://localhost/proyecto/ProveedoresApiros/Img/Informe.svg"
                        alt="Informe">
                    <p><b>Informe</b></p>
                </a>
            </li>
            <li>
                <span class="separador"></span><a href="Editar.php"><img class="iconos" src="http://localhost/proyecto/ProveedoresApiros/Img/Editar.svg" alt="Editar">
                    <p><b>Editar</b></p>
                </a>
            </li>
        </div>
    </ul>
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