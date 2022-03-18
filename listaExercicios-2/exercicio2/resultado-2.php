<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>RESULTADO 1</title>
  </head>
  <body class="container">
    <h1>RESULTADO 1</h1>

    <?php
    for ($i = 1; $i <= 1; $i++) {
        $vetor[$i] = $_POST["valor$i"];
    }

    foreach($vetor as $chave => $valor){
        echo "POSIÇÃO DO VALOR: $valor INFORMADO É: $chave";
        echo "<br>";
        
    }

    ?>
    <div class="col">
        <label for="valor2" class="label-control mt-4"> <!-- "for="valor1<?= $i ?>" significa <?php echo $i; ?> -->
          INFORME O VALOR E DESCUBRA EM QUE POSIÇÃO ESTA LOCALIZADO:
        </label>
        <input type="number" step="any" name="valor2" placeholder="1, 2, 3..." 
          id="valor2" class="form-control" />
      </div>

      <div class="row mt-3">
        <div class="col">
          <button type="submit" class="btn btn-danger">
            RESULTADO
          </button>
        </div>
      </div>

      <?php
    $valor2 = $_POST["valor2"];

    for ($i = 1; $i <= 1; $i++) {
        $vetor[$i] = $_POST["valor$i"];
     
    }

    foreach($vetor as $v => $valor2){
        echo "POSIÇÃO DO VALOR: $valor INFORMADO É: $valor2";
        echo "<br>";
        
    }

    ?>


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