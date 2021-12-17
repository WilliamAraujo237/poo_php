<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relacionamento entre Classes</title>
</head>
<body>
    <pre>
        <?php
            require_once("php_poo-6.php");
            $c1= new lutador("william","Brasil",20,1.73,64.50,"leve",99,1,0);
            $c1->Apresentar();
            $c1->Status();
            $c1->Perderluta();
            $c2= new lutador("wagner","Brasil",20,1.90,74.50,"leve",100,0,0);
            $c2->Apresentar();
            $c2->Status();
            $c2->Ganharluta();
            $c3= new lutador("Ewerton","Brasil",20,1.60,50.03,"leve",30,50,20);
            $c3->Apresentar();
            $c3->Status();
            $c3->Empatar();
            print_r($c1);
            print_r($c2);
            print_r($c3);
        ?>
    </pre>
</body>
</html>