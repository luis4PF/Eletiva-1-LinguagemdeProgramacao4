<!doctype html>
<html lang="pt-br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>EXERCICIO 2</title>
</head>

<body class="container">
    <br>
    <h1>EXERCÍCIO 2</h1>
    <b> DESCUBRA O MENOR VALOR </b>
    <form method="post" action="resultado3.4.php" class="row">
        <?php
        for ($i = 1; $i <= 5; $i++) {
        ?>
            <div class="col-3 mt-3">
                <label for="valor<?= $i ?>" class="label-control">
                    <!-- "for="valor1<?= $i ?>" significa <?php echo $i; ?> -->
                    INFORME 5 NÚMERO E DESCUBRA A SOMA DE SEUS DIVISORES:
                </label>
                <input type="text" step="any" name="valor<?= $i ?>" placeholder="1, 2, 3..." 
                    id="valor<?= $i ?>" class="form-control"/>
            </div>
        <?php
        }
        ?>
        <div class="row">
            <div class="col mt-3">
                <button type="submit" class="btn btn-danger">
                    RESULTADO
                </button>
            </div>
        </div>
        <br> <br>
    </form>
</body>
</html>