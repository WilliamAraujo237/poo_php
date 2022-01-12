<?php
require_once'php_poo_10-2.php';
class gafanhoto extends pessoa{ 
    private $Login;
    private $TotalAssistidos;
     

    public function __construct($no,$id,$se,$Login)
    {
        parent::__construct($no,$id,$se);
        $this->Login=$Login;
        $this->TotalAssistidos=0;
    }

    //colocar login
    public function setLogin($Lo)
    {
        $this->Login=$Lo;
    }
    public function getLogin()
    {
        return $this->Login;
    }

    //colocar total assistido
    public function setTotalAssistidos($tot)
    {
        $this->TotalAssistidos=$tot;
    }
    public function getTotalAssistidos()
    {
        return $this->TotalAssistidos;
    }

    
    public function ViuMaisUm()
    {
        $this->TotalAssistidos += 1;
    }
}
?>