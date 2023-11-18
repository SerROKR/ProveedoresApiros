<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/Login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <header>
        <div id="banner">
            <img src="../Img/Footer.png" alt="frame">
        </div>
        <div id="Titulo">
            <h1 id="nombre">Proveedores <br> Apiros</h1>
            <section id="logo"><img src="../Img/Logo.png" alt="Logo"></section>
        </div>
    </header>
    <main>
        <div class="card">
            <div class="card-header">
                Acceso al Sistema
            </div>
            <form action="IniciarSesion.php" method="POST">
                <hr>
                <?php
                    if (isset($_GET['error'])){
                        ?>
                <p class="error">
                    <?php
                        echo $_GET['error']
                        ?>
                </p>
                <?php
                    }
                ?>
                <hr>
                <div class="card-body">
                    <div class="mb-3">
                        <i class="fa-solid fa-user-tie fa-xl"></i>
                        <label>Usuario</label>
                        <input type="text" class="form-control" name="Usuario" id="Usuario" aria-describedby="helpId"
                            placeholder="">
                        <i class="fa-solid fa-key fa-xl"></i>
                        <label>Contraseña</label>
                        <input type="password" class="form-control" name="Contrasena" id="Contrasena"
                            aria-describedby="helpId">
                        <button type="submit" class="btn btn-primary" id="Boton">Agregar</button>
                    </div>
                </div>
            </form>
    </main>
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