<?php
    namespace App\Controller;
    use App\Util\Functions as Util;
    use App\Model\Cliente;
    use App\Dal\ClienteDao;

    class clienteController{
        public static ?string $msg = null;

        public static function cadastrar() : void {
            if($_SERVER['REQUEST_METHOD'] === "POST" && isset($_POST["nome"])){
                [$nome, $sobrenome]
            }
        }
    }
?>