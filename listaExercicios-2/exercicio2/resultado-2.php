<!doctype html>
<html lang="pt-br">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>RESULTADO 2</title>
</head>
<br>

<body class="container">
  <h1>RESULTADO 2</h1>

  <?PHP
  $result1 = $_POST["result1"];

  for ($i = 1; $i <= 3; $i++) {
    $vetor[$i] = $_POST["valor$i"];
  }

  ?>

  <?php
  if ($result1 > 10 || $result1 < 1)
    echo "Valor informado não é válido";

  else  {
    $nao_existe = true;
    foreach ($vetor as $chave => $valor) {
      if ($result1 == $valor) {
        $nao_existe = false;
        echo "O VALOR INFORMADO ESTÁ LOCALIZADO NA $chave POSIÇÃO";
        echo "<br>";
      }
    }

    if ($nao_existe)
      echo "O valor informado não existe no vetor!";
  }
  ?>

  <br> <br>
  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>