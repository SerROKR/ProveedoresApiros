<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- DataTable -->
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css" />
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.3.3/css/buttons.bootstrap5.min.css" />
  <link rel="stylesheet" type="text/css" href="../css/Informe.css">
  <!-- Bootstrap-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>Document</title>
</head>

<body>
  <header>
    <div id="banner">
      <img src="../Img/Footer.png" alt="frame">
    </div>
    <nav class="navbar navbar-expand">
      <ul class="nav navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" href="Menu.php" aria-current="page">Inicio <span class="visually-hidden">(current)</span></a>
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
  <div class="container my-5">
    <table id="example" class="table" style="width: 80%">

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
          </tr>
        <?php } ?>
      </tbody>

    </table>
  </div>
  <!-- JQuery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <!-- DataTable -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.3.3/js/dataTables.buttons.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.3.3/js/buttons.bootstrap5.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.3.3/js/buttons.html5.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.3.3/js/buttons.print.min.js"></script>
  <!-- Bootstrap-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="./script.js"></script>
  <footer>
    <div id="Iconos_Decorativos">
      <img src="../Img/Decorativos.png" alt="decorativos">
    </div>
    <div id="pie">
      <img src="../Img/Footer.png" alt="footer">
    </div>
  </footer>
</body>

</html>





<!-- Required meta tags -->
<!-- Bootstrap CSS v5.2.1 -->