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
    <form action="ejercicio1.php" method="POST">
    <div class="form-row">
        <div class="form-group col-md-6">
        <label for="n1">Número 1</label>
        <input type="number" step="any" name="n1" class="form-control" id="n1" placeholder="Digite número 1" required>
        </div>
        <div class="form-group col-md-6">
        <label for="n2">Número 2</label>
        <input type="number" step="any" name="n2" class="form-control" id="n2" placeholder="Digite número 2" required>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-12">
        <label for="operacion">Operación a realizar</label>
        <select id="operacion" name="ope" class="form-control" required>
            <option value="">Seleccione una operación...</option>
            <option value="1">Suma</option>
            <option value="2">Resta</option>
            <option value="3">Multiplicación</option>
            <option value="4">División</option>
        </select>
        </div>
    </div>
    <button type="submit" name="operar" class="btn btn-primary">Operar</button>
    </form>

     <?php
    
    if (isset($_POST['operar'])) {
        $n1 = $_POST['n1'];
        $n2 = $_POST['n2'];
        $ope = $_POST['ope'];

        switch ($ope) {
            case '1':
                $total = $n1 + $n2;
                $ope2 = 'suma'; 
                break;
            case '2':
                $total = $n1 - $n2;
                $ope2 = 'resta';
                break;
            case '3':
                $total = $n1 * $n2;
                $ope2 = 'multiplicación';
                break;
            case '4':
                $total = $n1 / $n2;
                $ope2 = 'división';
                break;
        }

        echo '<h1>El resultado de la '.$ope2.' entre el número '.$n1.' y el número '.$n2.' es igual a = '.$total.'</h1>';
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