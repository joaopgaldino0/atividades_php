<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 1 - Tabuada</title>
</head>
<body>
    <header>
        <h1>Tabuada</h1>
    </header>
    <nav><a href="./index.php">Home</a></nav>
    <main>
        <?php 
        for ($i=1; $i <= 10 ; $i++) { //primeiro for para a tabuada
            echo "<h2>Tabuada do $i</h2>";
            echo "<ul>";
            for ($j=1; $j <= 10; $j++) { //segundo for (faz as contas da tabuada)
                ?>
                    <li><?= $i ?> X <?= $j ?> = <?= ($i * $j) ?></li> <!-- que linguagem insana de confusa -->
                <?php
            }
            echo "</ul>";
        }
        ?>
    </main>
</body>
</html>
<!-- Exercício 1 - Tabuada:
• Crie uma página em PHP para gerar uma tabuada, use uma estrutura de repe�ção (por exemplo, for ou while) para
calcular e exibir a tabuada.
• Ao entrar na página devem ser exibidas as tabuadas do 1 até o 10. -->