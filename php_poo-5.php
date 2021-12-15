<?php
require_once("php_poo_controlador-5.php");
class ControleRemoto{
    private $Volume;
    private $Ligado;
    private $Tocando;

    //metodo construtor
    public function __construc()
    {
        $this->Volume=20;
        $this->Ligado=false;
        $this->Tocando=false;
    }

    //volume da tv
    public function setVolume($v)
    {
        $this->Volume=$v;
    }
    public function getVolume()
    {
        return $this->Volume;
    }

    //ligar e desligar a tv
    public function setLigado($l)
    {
        $this->Ligado=$l;
    }
    public function getLigado()
    {
        return $this->Ligado;
    }

    //tocando ou mudo
    public function setTocando($t)
    {
        $this->Tocando=$t;
    }
    public function getTocando()
    {
        return $this->Tocando;
    }

    //ligado e desligado
    public function Ligado()
    {
        $this->setLigado(true);
    }
    public function Desligado()
    {
        $this->setLigado(false);
    }

    //volume da tv
    public function Aumentar($v)
    {
        if ($this->Ligado() == true) {
            $this->Ligado =+ $v;
        }
    }
    public function Diminuir($v)
    {
        if ($this->Ligado()== true) {
            $this->Ligado =- $v;
        }
    }

    //botao mudo e nao mudo
    public function Mudo()
    {
        if ($this->Ligado() == true && $this->Volume >= 1) {
             $this->Volume = $this->Volume = 0;
        }else{
            print "esse comando nao pode ser utilizado no momento";
        }
    }
    public function NaoMudo()
    {
        if ($this->Ligado() == true && $this->Volume == 0) {
            $this->Volume = $this->Volume + 20;
        }else{
            print "esse comando nao pode ser utilizado no momento";
        }
    }
}
?>