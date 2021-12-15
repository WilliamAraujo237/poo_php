<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emcapsulamento</title>
</head>
<body>
    <pre>
        <?php
            require_once("php_poo-5.php");
            $c= new ControleRemoto();
            $c->setVolume(10);
            $c->Ligado();
            $c->Mudo();
            print_r($c);
        ?>
    </pre>
</body>
</html>