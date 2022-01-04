<?php
require_once'php_poo-9-1.php';
class mamifero extends animal{
    private $CordoPelo;

    public function Locomover()
    {
        echo "<p>correr</p>";
    }
    public function Alimentar()
    {
        echo "<p>tomando leite</p>";
    }
    public function EmitirSom()
    {
        echo"<p>som de mamifero</p>";
    }

    public function setCordoPelo($CP)
    {
        $this->CordoPelo=$CP;
    }
    public function getCordoPelo()
    {
        return $this->CordoPelo;
    }
}
?>