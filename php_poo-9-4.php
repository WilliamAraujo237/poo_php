<?php
require_once'php_poo-9-1.php';
class peixe extends animal{
    private $CordaEscama;

    public function Alimentar()
    {
        echo"<p>comer particulas</p>";
    }
    public function Locomover()
    {
        echo "<p>esta nadando</p>";
    }
    public function EmitirSom()
    {
        echo "<p> peixe nao emite som</p>";
    }

    public function setCordaEscama($Ce)
    {
        $this->CordaEscama=$Ce;
    }
    public function getCordaEscama()
    {
        return $this->CordaEscama;
    }
}
?>