<?php
class caneta{
    var $cor;
    var $carga;
    var $tampada;
    var $ponta;
    function escrever(){
        if ($this->tampada == true) {
            echo"Erro, a caneta esta tampada";
        }else{
            echo"estou escrevendo...";
        }  
    }
    function tampar(){
        $this->tampada=true;
    }
    function destampada(){
        $this->tampada=false;
    }
}
?>