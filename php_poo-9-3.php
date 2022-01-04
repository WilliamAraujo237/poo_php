<?php
require_once'php_poo-9-1.php';
class reptil extends animal{
    private $CorEscama;

    public function Alimentar()
    {
        echo"<p>comer insetos</p>";
    }
    public function EmitirSom()
    {
        echo "<p>emitir som de reptil</p>";
    }
    public function Locomover()
    {
        echo "<p>se arrastar</p>";
    }


    //colocando a cor da escama
    public function setCorEscama($Es)
    {
        $this->CorEscama=$Es;
    }
    public function getCorEscama()
    {
       return $this->CorEscama;
    }
}
?>