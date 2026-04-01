<?php
    //$juros = 1.1;
    define("_TAXA_JUROS", 1.1);
    //const TAXA = 1.1;

    function par_ou_impar($numero) {
        if($numero %2 == 0) {
            return "Par";
        }
        return "Impar";
    }

    function calcular_juros($valor, $numMeses){
        return $valor * _TAXA_JUROS * $numMeses;
    }

    function formatarNomes($nomes) {
        return array_map(function($item){
            $partes = explode(" ", $item);
            return $partes[1] . ", " . $partes[0];
        }, $nomes);
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 3</title>
</head>
<body>
    <header>
        <h1> Exercícios PHP </h1>
        <nav><a href="./index.php">Home</a></nav>
    </header>

    <main>
        <? 
            echo "<p>O numero 7 é" . par_ou_impar(7) ."</p>";
            echo "<p>O total com juros é R$ " . calcular_juros(1200, 20) . "</p>";

            $teste = function() {
                return "<hr><p>Teste</p>";
            };

            function exibirFuncao($func) {
                if(is_callable($func)) {
                    echo $func() . "<hr>";
                }
            };

            exibirFuncao($teste);

            $vetorNomes = ["João Silva", "José Neto", "Pedro Oliveira"];
            echo "Vetor de nomes formatados <br>"
            vardump(formatNomes($vetorNomes));
        ?>
    </main>
</body>
</html>