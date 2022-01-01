<?php
require_once'php_poo-8.php';
class professor extends pessoa{
    private $especialidade;
    private $salario;

    public function ReceberAumento($au)
    {
        $this->salario+= $au;
    }

    //colocando especialidade
    public function setEspecialidade($es)
    {
        $this->especialidade=$es;
    }
    public function getEspecialidade()
    {
       return $this->especialidade;
    }

    //colocando salario
    public function setSalario($sa)
    {
        $this->salario=$sa;
    }
    public function getSalario()
    {
        return $this->salario;
    }
}
?>