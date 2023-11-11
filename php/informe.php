<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Administración Proveedores Apiros</title>
    <link rel="stylesheet" type="text/css" href="Informe.css">
    <link rel="stylesheet" type="text/css" href="bootstrap-5.3.2-dist/css/bootstrap.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
</head>

<body>
    <header>
        <div id="banner">
            <img src="Img/Header.png" alt="frame">
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
            <section id="logo"><img src="Img/Logo.png" alt="Logo"></section>
        </div>
    </header>
    <main>
        <div class="Contenedor">
            <div id="consulta">
                <form>
                    <fieldset>
                        <h2>Rango de fechas a consultar</h2>
                        <legend><b>Fecha Inicial</b></legend>
                        <input type="date" class="form-control" id="Fecha_Inicial">
                        <br>
                        <legend><b>Fecha Final</b></legend>
                        <input type="date" class="form-control" id="Fecha_Final">
                        <br>
                        <button type="button" id="Buscar" class="btn btn-success">Buscar</button>
                        <button type="button" id="Buscar" class="btn btn-light">Limpiar</button>
                    </fieldset>
                </form>
            </div>
            <div class="card">
                <div class="card-header">
                    Resultados
                </div>
                <div class="card-body">
                    <div id="Informe">
                        <div class="table-responsive-sm">
                            <table class="table table-bordered" id="tabla_id">
                                <thead>
                                    <tr>
                                        <th scope="col">Registro</th>
                                        <th scope="col">NIT</th>
                                        <th scope="col">RAZÓN SOCIAL</th>
                                        <th scope="col">PROXIMA ACTUALIZACIÓN</th>
                                        <th scope="col">ACCION A REALIZAR</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                include "DataBase.php";

                                $Sql = "SELECT Registro, NIT, Razon_Social, Proxima_Actualizacion FROM proveedores";
                                $resultado = $Conexion->query($Sql);



                                    foreach ($resultado as $registro) { ?>
                                    <tr class="">
                                        <td scope="row"><?php echo $registro['Registro'];?></td>
                                        <td scope="row"><?php echo $registro['NIT'];?></td>
                                        <td><?php echo $registro['Razon_Social'];?></td>
                                        <td><?php echo $registro['Proxima_Actualizacion'];?></td>
                                        <td class="accion">
                                            <a name="" id="boton" class="btn btn-success" href="#"
                                                role="button">Notificar</a>
                                            <a name="" id="botonModificar" class="btn btn-success" href="Editar.php?id=<?=$registro ['Registro']?>"button>Modificar</a>
                                            <a name="" id="botonEliminar" class="btn btn-primary" href="#"
                                                role="button">Eliminar</a>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <div id="Iconos_Decorativos">
            <img src="Img/Decorativos.png" alt="decorativos">
        </div>
        <div id="pie">
            <img src="Img/footer.png" alt="footer">
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="//cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    < script >
        $(document).ready(function() {
            $("#tabla_id").DataTable();
        });
    </script>
</body>

</html>