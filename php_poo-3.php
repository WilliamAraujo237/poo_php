<?php
class caneta{
    private $modelo;
    private $ponta;
    private $tampa;

    public function __construct($m,$p,){ //construtor, para construir um modelo basico na criacao de um objeto
        $this->tampar();
        $this->ponta=($p);
        //$this->modelo=($m);
        $this->setModelo($m);
    }

    public function getModelo(){
        return $this->modelo;
    }

    public function setModelo($m) {
        $this->modelo=$m;
    }

    public function getPonta(){
        return $this->ponta;
    }

    public function setPonta($p){
        $this->ponta=$p;
    }
    
    public function tampar(){
        $this->tampa=true;
    }
    
    public function destampar(){
        $this->tampa=false;
    }
}
?>