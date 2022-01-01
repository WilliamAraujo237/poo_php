<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Heranca</title>
</head>
<body>
    <pre>
        <?php
            require_once'php_poo-8-2.php';
            require_once'php_poo-8-3.php';
            require_once'php_poo-8-4.php';
            require_once'php_poo-8-5.php';
            require_once'php_poo-8-6.php';

            $c1[0]=new aluno("william",20,"masculino");
            $c1[0]->setNome('william');
            $c1[0]->setIdade(20);
            $c1[0]->setSexo("masculino");
            $c1[0]->setCurso("engenharia da computcao");
            $c1[0]->setMatricula(923748923);

            $c1[1]=new bolsista("wagner",20,"masculino");
            $c1[1]->setNome('wagner');
            $c1[1]->setIdade(20);
            $c1[1]->setSexo("masculino");
            $c1[1]->setCurso("engenharia");
            $c1[1]->setMatricula(923748923);
            
            $c1[2]=new visitante("ewerton",20,"masculino");
            $c1[3]=new professor("flavio",55,"masculino");
            $c1[4]=new tecnico("luciana",53,"feminio");
            print_r($c1);
        ?>
    </pre>
</body>
</html>