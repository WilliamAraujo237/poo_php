<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ler livro</title>
</head>
<body>
    <pre>
        <?php
        require_once'php_poo_7.php';
        require_once'php_poo-7.php';
        require_once'php_poo_controlador.php';

        $c1=new pessoa('william',20,'masculino');
        $c2=new pessoa('wagner',20,'Masculino');
        $c3=new pessoa ('Luciana',54,'feminino');


        $c4=new livro('o lobo','ze jojo',70);
        $c5=new livro('dragon-ball', 'aquira',1000);
        $c6=new livro('50 tons','alguem',1200);
        print_r($c1);
        print_r($c2);
        print_r($c3);
        print_r($c4);
        print_r($c5);
        print_r($c6);
        ?>
    </pre>
</body>
</html>