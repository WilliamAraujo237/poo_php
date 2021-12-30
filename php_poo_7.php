<?php
class pessoa{
    private $Nome;
    private $Idade;
    private $Sexo;
    
    public function __construct($No,$Id,$Se)
    {
        $this->nome=$No;
        $this->Idade=$Id;
        $this->Sexo=$Se;
    }
    public function FazerAniversario()
    {
        $this->idade += 1;
    }

}
?>