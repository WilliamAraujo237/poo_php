<?php
require_once'php_poo-9-1.php';
class ave extends animal{
    private $CordaPena;

    public function Locomover()
    {
        echo "<p> a ave esta voando</p>";
    }
    public function Alimentar()
    {
        echo "<p> a ave esta se alimentando</p>";
    }
    public function EmitirSom()
    {
        echo "<p>a ave esta cantando</p>";
    }

    //colocar a cor da pena
    public function setCordaPena($Cp)
    {
        $this->CordaPena=$Cp;
    }
    public function getCordaPena()
    {
        return $this->CordaPena;
    }
}
?>