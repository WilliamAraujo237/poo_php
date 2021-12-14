<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo pratico coo poo Banco</title>
</head>
<body>
    <pre>
        <?php
        require_once("php_poo-4.php");
        $c1=new ContaBanco("william",13);
        $c1->AbrirConta("cc");
        print_r($c1)
        ?>
    </pre>
</body>
</html>