<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>metodos getter, setter e construtor</title>
</head>
<body>
    <pre>
        <?php
        require_once("php_poo-3.php");
        $c1= new caneta("bic",0.5);
        $c2= new caneta("nike",1.0);
        $c3= new caneta("adidas",0.4);
        //$c1->setModelo("bic");  
        //$c1->setPonta(0.5);

        //print "<p>eu tenho um modelo de caneta {$c1->getModelo()} com ponta {$c1->getPonta()}</p>"
        print_r($c1);
        print_r($c2);
        print_r($c3);
        ?>
    </pre>
</body>
</html>