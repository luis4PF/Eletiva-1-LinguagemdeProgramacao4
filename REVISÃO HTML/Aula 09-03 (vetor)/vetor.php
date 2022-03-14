<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>VETOR
    </title>
  </head>
  <body class="container">
    <h1>VETOR</h1>

    <?php
        $vetor = array(0, 1, 2, 3);
        $vetor[0] = 0;
        $vetor[1] = 1;
        $vetor[2] = 2;
        $vetor[3] = 3;

        $vetor[] = 5; //ao insirar um vetor em uma posição vazia ele será o proximo da lista

        $vetor = [
            'position1' => 0,
            'position2' => 1,
            'position3' => 2,
            4 => 3

        ]; //nomear as posições

        var_dump($vetor);

        foreach($vetor as $v){
            echo "$v\n";
        }
        //foreach = mostra os numeros do vetore = 01235

        echo $vetor["position1"]; //para mostrar apenas uma posição
        echo $vetor[4];

        var_dump($vetor); // var_dumb mostra o o vetor inteiro
    
        foreach($vetor as $v){
            echo $v = $v * 2;
        }
        //multiplicar os vetores
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