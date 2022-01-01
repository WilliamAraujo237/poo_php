<?php
require_once'php_poo-8.php';
class aluno extends pessoa{
    private $Matricula;
    private $Curso;
    
    public function PagarMatricula()
    {
        echo '<p> seu pagamento foi feito com sucesso</p>';
    }

    //colocando matricula
    public function setMatricula($ma)
    {
        $this->Matricula=$ma;
    }
    public function getMatricula()
    {
        return $this->Matricula;
    }

    //colocando curso
    public function setCurso($cu)
    {
        $this->Curso=$cu;
    }
    public function getCurso()
    {
        return $this->Curso;
    }
}
?>