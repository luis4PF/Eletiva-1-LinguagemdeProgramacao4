<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <br>
    <title>EXERCICIO 5</title>
  </head>
  <body class="container">
    <h1>EXERCICIO 5</h1>
    <form method="post" action="resultado2.5.php">
    <b> INFORME 10 VALORES E DESCUBRA SUA ORDEM CRESCENTE E DECRESCENTE </b>
    <?php
        for ($i = 1; $i <= 10; $i++) {
    ?>
      <div class="col">
        <label for="valor<?= $i ?>" class="label-control"> <!-- "for="valor1<?= $i ?>" significa <?php echo $i; ?> -->
          INFORME UM VALOR:
        </label>
        <input type="number" step="any" name="valor<?= $i ?>" placeholder="1, 2, 3..." 
          id="valor<?= $i ?>" class="form-control" />
      </div>
      <?php
        }
      ?>

      <div class="row mt-3">
        <div class="col">
          <button type="submit" class="btn btn-danger">
            RESULTADO
          </button>
        </div>
      </div>
    </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>