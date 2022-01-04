<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>polimorfismo</title>
</head>
<body>
    <pre>
        <?php
            require_once"php_poo-9-2.php";
            require_once"php_poo-9-3.php";
            require_once"php_poo-9-4.php";
            require_once"php_poo-9-5.php";
            require_once"php_poo-9-6.php";
            require_once"php_poo-9-7.php";
            require_once"php_poo-9-8.php";
            require_once"php_poo_9-9.php";
            require_once"php_poo-9-10.php";
            require_once"php_poo-9-11.php";


            $c1[]= new mamifero();
            $c1[]= new reptil();
            $c1[]= new ave();
            $c1[]= new peixe();
            $c1[]= new canguru();   
            $c1[]= new cachorro();
            $c1[]= new tartaruga();
            $c1[]= new cobra();
            $c1[]= new GoldFish();
            $c1[]= new arara();


            print_r($c1);
        ?>
    </pre>
</body>
</html>