<?php
class caneta{
    public $cor; //pode ser modificado
    public $carga; //pode ser modificado
    private $ponta; //nao pode ser modificado
    public $modelo; //pode ser modificado
    protected $tampada; //pode ser modificado apenas pelo proprio codigo


    public  function escrever(){
        if ($this->tampada == true) {
            echo"Erro, a caneta esta tampada</br>";
        }else{
            echo"estou escrevendo...</br>";
        }  
    }
    public function rabiscar()
    {
        echo"estou rabiscando...</br>";
    }
    public function pintar()
    {
        echo"estou pintando...</br>";
    }
    public function tampar(){
        $this->tampada=true;
    }
    public function destampada(){
        $this->tampada=false;
    }
}
?>