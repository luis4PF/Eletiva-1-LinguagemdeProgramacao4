<!doctype html>
<html lang="pt-br">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>EXERCÍCIO 1</title>
</head>

<body class="container">
  <br>
  <h1>RESULTADO</h1>
  <?php
  $produto1 = $_POST["produto1"];
  $valor1 = $_POST["valor1"];
  
  $troco = ($valor1 - $produto1);

  if ($valor1 == $produto1)
    echo "NÃO HÁ TROCO";

  else if ($valor1 < $produto1)
    echo "VALOR PAGO É INSUFICIENTE FALTA: R$" . ($produto1 - $valor1);
  
  ?>
  <form method="post">
    <div class="row">
      <div class="col">
        <label for="resultValor1" class="label-control">
          VALOR PAGO:
        </label>
        <input type="text" name="resultValor1" value="R$<?php echo $valor1; ?>" 
          id="resultValor1" class="form-control" />
      </div>

      <div class="col">
        <label for="resultProduto1" class="label-control">
          VALOR DO PRODUTO:
        </label>
        <input type="text" name="resultProduto1" value=R$<?php echo $produto1; ?> 
          id="resultProduto1" class="form-control" />
      </div>
      <div class="col">
        <label for="resultTroco1" class="label-control">
          TROCO:
        </label>
        <input type="text" name="resultTroco1" value="R$<?php echo ($troco); ?>" 
          id="resultTroco" class="form-control" />
      </div>
    </div>
  </form>
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