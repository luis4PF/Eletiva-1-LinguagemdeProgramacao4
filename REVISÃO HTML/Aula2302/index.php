<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <title>PHP </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- PÁRA INICIAR O SERVIDOR PHP - Control shift P = serve project  -->
    <title>Hello, world!</title>
  </head>
  <body>
    <h1>
        Olá, hoje é dia 
        <?php echo "<p>".date('d/m/Y')."</p>";
        //print("Vai Corinthians"); // maior custo computacional
        $umaVariavel = 20;
        $umaVariavel = "Vanessa";
        //echo "Meu nome é: " .$umaVariavel;
        //echo "Meu nome é: $umaVariavel";
        echo 'Meu nome é: $umaVariavel'; // apenas com aspas duplas o conteúdo da variavel é apresentado
        $total = 30 * 10 / 2 - 4 + 1;
        $total++;
        $total--;
        --$total; // no primeiro laço da repetição o valor ja é alterado 
        echo $total;
        ?>
        <!-- $umaVariavel - usar cifrão para representar uma variável-->
        <!-- Y maiusculo para exibir o ano com 4 digitos --> 
        <!-- M maiusculo para exibir o nome do mês -->

    </h1>

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