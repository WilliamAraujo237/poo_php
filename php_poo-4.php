<?php
class ContaBanco{
public $NumConta;
protected $Tipo;
private $Dono;
private $saldo;
private $status;

public function __construct($d,$Num)
{
    $this->aberto();
    $this->setDono=($d);
    $this->NumConta=($Num);
}

//sacar dinheiro da conta
public function sacar($V){
    if($this->saldo >= $V){
        $this->saldo= $this->saldo - $V;
        echo"voce sacou".$V."  ";
    }else{
        echo "voce nao tem saudo para isso";
    }
}

//colocando dinheiro na conta
public function deposito($s){
    if ($this->status == true){
        $this->saldo=$this->saldo+$s;
    }
}

//Abertura da conta
public function aberto(){
    $this->status=true;
}

//fechamento da conta
public function fechado(){
    $this->status=false;
}

//criando uma conta 
public function AbrirConta($T){
    $this->setTipo=($T);
    $this->aberto();

    if ($T == "cc") {
        $this->saldo= $this->saldo + 50;
    }else{
        $this->saldo= $this->saldo +20;
    }
}
}
?>