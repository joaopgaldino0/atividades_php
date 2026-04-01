<?php
    $clientes = [
        1 => [
            "nome" => "Pedro",
            "sobrenome" => "Silva",
            "ddd" => "21",
            "telefone" => "123456789",
        ],
        2 => [
            "nome" => "Andre",
            "sobrenome" => "Souza",
            "ddd" => "33",
            "telefone" => "789123456",
        ],
        3 => [
            "nome" => "José",
            "sobrenome" => "Silva",
            "ddd" => "41",
            "telefone" => "456789123",
        ],
    ]
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{ 
            width: 80%;
            margin: auto;
        }
        td, th{
            border: 1px, solid, #ddd;
            padding: 8px;
        }
        th{
            background-color: #aaa;
        }
    </style>
</head>
<body>
    <header>

    </header>

    <nav><a href="./index.php">Home</a></nav>

    <main>
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nome</th>
                    <th>Sobrenome</th>
                    <th>DDD</th>
                    <th>Telefone</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($clientes as $id => $clientes) {
                        $nome = $clientes["nome"];
                        $sobrenome = $clientes["sobrenome"];
                        $ddd = $clientes["ddd"];
                        $telefone = $clientes["telefone"];
                    }

                    echo "<tr>
                    <td>$id</td>
                    <td>$nome</td>
                    <td>$sobrenome</td>
                    <td>$ddd</td>
                    <td>$telefone</td>
                    </tr>"
                ?>
            </tbody>
        </table>
    </main>
</body>
</html>