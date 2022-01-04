<?php
abstract class animal{
    protected $Peso;
    protected $Idade;
    protected $Membros;

    public abstract function Locomover();
    public abstract function Alimentar();
    public abstract function EmitirSom();

    //colocando peso
    public function setPeso($pe)
    {
        $this->peso=$pe;
    }
    public function getPeso()
    {
        return $this->Peso;
    }

    //colocando idade
    public function setIdade($id)
    {
        $this->idate=$id;
    }
    public function getIdade()
    {   
        return $this->Idade;
    }

    //colocar quantidad de membros
    public function setMembros($me)
    {
        $this->Membros=$me;
    }
    public function getMembros()
    {
        return $this->Membros;
    }
}
?>