<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto final</title>
</head>
<body>
    <pre>
        <?php
        require_once'php_poo_10-1.php';
        require_once'php_poo_10-3.php';
        $v1=new video('deu certo?');
        //$v1->Play();
        $v1->like();
        $v1->pause();
        print_r($v1);

        $ga= new gafanhoto('william',20,'masculino','login');
        print_r($ga);
        ?>
    </pre>
</body>
</html>