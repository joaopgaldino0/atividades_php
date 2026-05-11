<?php
    $clientes = [ //criação da variável "clientes "
        1 => [ //índice 1
            "nome" => "Pedro", //cada parte disso é a organização das informações da variável
            "sobrenome" => "Silva", //tipo aqui, sobrenome = Silva
            "ddd" => "21",
            "telefone" => "123456789",
        ],
        2 => [ //índice 2
            "nome" => "Andre",
            "sobrenome" => "Souza",
            "ddd" => "33",
            "telefone" => "789456123",
        ],
        3 => [ //índice 3
            "nome" => "José",
            "sobrenome" => "Silva",
            "ddd" => "41",
            "telefone" => "456123789",
        ],
    ]
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 2 - Usuario</title>
    <style>
        table{
            border-collapse: collapse;
            width: 80%;
            margin: auto;
        }
        th,td{
            border: 1px solid #ddd;
            padding: 8px;
        }
        th{
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <header>
        <h1>Usuarios</h1>
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
foreach ($clientes as $id => $cliente) {
    /*$nome = $cliente["nome"];
    $sobrenome = $cliente["sobrenome"];
    $ddd = $cliente["ddd"];
    $telefone = $cliente["telefone"];*/

    [$nome, $sobrenome, $ddd, $telefone] = array_values($cliente);


    echo "<tr>
        <td>$id</td>
        <td>$nome</td>
        <td>$sobrenome</td>
        <td>$ddd</td>
        <td>$telefone</td>
    </tr>";
}

?>
            </tbody>
        </table>
    </main>
</body>
</html>
<!-- Exercício 2 - Tabela:
• Crie uma página em PHP para gerar uma tabela de usuário.
• A tabela deve conter uma linha com os �tulos id, nome, sobrenome, ddd e telefone.
• Os dados dos usuários devem ser armazenados em um vetor (crie no mínimo 3 usuários). -->