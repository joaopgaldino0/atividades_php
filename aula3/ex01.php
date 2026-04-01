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
        for ($i = 1; $i<=10 ; $i++) {         
            echo "<h2> Tabuada do $i</h2>";
            echo "<ul>";
            for ($j = 1; $j <= 10; $j++) { 
                ?>
                    <li> 
                        <?= $i ?> X <?= $j ?> =
                        <?= ($i * $j) ?>
                    </li>
                <?php
            }
            echo "</ul>";
        }
        ?>
    </main>
</body>
</html>