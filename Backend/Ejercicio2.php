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
    <form action="ejercicio2.php" method="POST">
    <div class="form-row">
        <div class="form-group col-md-12">
        <label for="edad">Edad</label>
        <input type="number" name="edad" class="form-control" id="edad" placeholder="Edad" required>
        </div>
    </div>
    <button type="submit" name="calcular" class="btn btn-primary">Calcular</button>
    </form>


    <?php
    
    if (isset($_POST['calcular'])) {
        $edad = $_POST['edad'];

        if ($edad >= 18 && $edad <=100) {
            echo '<h1>Es mayor de 18 años</h1>';
        }if ($edad > 100){
            echo '<h1>La esperanza de vida no es tan alta</h1>';
        }if ($edad < 18 && $edad > 0){
            echo '<h1>Es menor de edad</h1>';
        }if ($edad <= 0){
            echo '<h1>No ha nacido</h1>';
        }
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