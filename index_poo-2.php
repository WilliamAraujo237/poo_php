<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visibilidade de atributos e metodos</title>
</head>
<body>
    <pre> 
        <?php
        require_once("php_poo-2.php"); //requerimento da pasta apenas uma vez
        $c1=new caneta; //objeto
        $c1->modelo="bic cristal"; //atributo
        $c1->tampar(); //metodo
        var_dump($c1);
        $c1->rabiscar();//metodo
        $c1->escrever();//metodo
        $c1->pintar();//metodo
        ?>
    </pre>

</body>
</html>