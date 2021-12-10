<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>primeiros passos com POO</title>
</head>
<body>
    <?php
    require_once("php_poo-1.php");
    $c1= new caneta;
    $c1->cor="preta";
    $c1->carga=100;
    $c1->ponta=0.5; 
    $c1->destampada();
    $c1->escrever();
    //print_r($c1);
    


    echo"</br>";

    $c2= new caneta;
    $c2->cor="azul";
    $c2->carga=20;
    $c2->ponta=1.0;
    $c2->tampar();
    $c2->escrever();
    //print_r($c2);
    ?>
</body>
</html>