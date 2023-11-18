<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <link rel="stylesheet" href="//cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">



</head>

<body>
  <header>
    <!-- place navbar here -->
  </header>
  <main>
    <div class="container">
      <br>
      <div class="table-responsive-xl">
        <table class="table table-primary">
          <thead>
            <tr>
              <th scope="col">Registro</th>
              <th scope="col">NIT</th>
              <th scope="col">Razón Social</th>
              <th scope="col">Correo</th>
              <th scope="col">RUT</th>
              <th scope="col">Camara de comercio</th>
              <th scope="col">Certificación Bancaria</th>
              <th scope="col">Sarlaft</th>
              <th scope="col">Ultima Actualización</th>
              <th scope="col">Proxima Actualización</th>
              <th scope="col">Acción</th>
            </tr>
          </thead>
          <tbody>
            <?php
            include "DataBase.php";

            $Sql = "SELECT * FROM proveedores";
            $resultado = $Conexion->query($Sql);

            foreach ($resultado as $registro) { ?>
              <tr>
                <td scope="row"><?php echo $registro['Registro']; ?></td>
                <td scope="row"><?php echo $registro['NIT']; ?></td>
                <td scope="row"><?php echo $registro['Razon_Social']; ?></td>
                <td scope="row"><?php echo $registro['Correo_Notificacion']; ?></td>
                <td scope="row"><?php echo $registro['Fecha_Rut']; ?></td>
                <td scope="row"><?php echo $registro['Fecha_Comercio']; ?></td>
                <td scope="row"><?php echo $registro['Fecha_Bancaria']; ?></td>
                <td scope="row"><?php echo $registro['Fecha_Sagrilaft']; ?></td>
                <td scope="row"><?php echo $registro['Ultima_Actualizacion']; ?></td>
                <td scope="row"><?php echo $registro['Proxima_Actualizacion']; ?></td>

                <td class="accion">
                  <a name="" id="boton" class="btn btn-success" href="#" role="button">Notificar</a>
                  <a name="" id="botonModificar" class="btn btn-success" href="Editar.php?id=<?= $registro['Registro'] ?>" button>Modificar</a>
                  <a name="" id="botonEliminar" class="btn btn-primary" href="#" role="button">Eliminar</a>
                </td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="//cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js-"></script>
  <script>
    $(document).ready(function() {
      $('#myTable').DataTable();
    });
  </script>
</body>

</html>