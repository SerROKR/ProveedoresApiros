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

</head>

<body>
    <form action="ejercicio4.php" method="POST">
    <div class="form-row">
        <div class="form-group col-md-6">
        <label for="fecha">Fecha de nacimiento</label>
        <input type="date" step="any" name="fecha" class="form-control" id="fecha" required>
        </div>
    </div>
    
    <button type="submit" name="calcular" class="btn btn-primary">Calcular</button>
    </form>


    <?php
    
    if (isset($_POST['calcular'])) {
        $fecha_n = $_POST['fecha'];
        $fecha = new DateTime($_POST['fecha']);
        $fecha_act_n = date('Y-m-d');
        $fecha_act = new DateTime(date('Y-m-d'));
        $diff = $fecha->diff($fecha_act);
        $año = $diff->y;
        $mes = $diff->m;
        $dia = $diff->d;

        echo 'Fecha de nacimiento = '.$fecha_n.'<br>'.
             'Fecha actual = '.$fecha_act_n.'<br>'.
             'Edad = '.$año.' año(s) '.$mes.' mese(s) y '.$dia.' dia(s)';
    }

    ?>

  <footer>
    <!-- place footer here -->
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