<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <br>
  <title>RESULTADO 5</title>
</head>
<body class="container">
  <h1>RESULTADO 5</h1>
  <?php
  for ($i = 1; $i <= 10; $i++) {
    $vetor[$i] = $_POST["valor$i"];
  }
  $ordem = 0;
  $maior = 1;
  while ($maior == 1) {
    $maior = 0;
    for ($i = 1; $i < 3; $i++) {
      if ($vetor[$i] > $vetor[$i + 1])
        $ordem = $vetor[$i];
        $vetor[$i] = $vetor[$i + 1];
        $vetor[$i + 1] = $ordem;
        $maior = 1;
    }
  }
  echo "<b> CRESCENTE </b><br>";
  foreach ($vetor as $chave => $valor)
    echo "[$chave] $valor <br>";
  echo "<br>";

  $ordem = 0;
  $maior = 1;
  while ($maior == 1) {
    $maior = 0;
    for ($i = 1; $i < 3; $i++) {
      if ($vetor[$i] < $vetor[$i + 1])
        $ordem = $vetor[$i];
        $vetor[$i] = $vetor[$i + 1];
        $vetor[$i + 1] = $ordem;
        $maior = 1;
    }
  }
  echo "<b> DECRESCENTE </b><br>";
  foreach ($vetor as $chave1 => $valor1)
    echo "[$chave1] $valor1 <br>";
  echo "<br>";
  ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>