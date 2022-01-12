<?php
require_once'php_poo_interface_10.php';
class video implements Videos{
private $Titulo;
private $Avaliacao;
private $Views;
private $Curtidas;
private $Reproduzindo;

public function __construct($Ti)
{
    $this->Titulo=$Ti;
    $this->Avaliacao=0;
    $this->Views=0;
    $this->Curtidas=0;
    $this->Reproduzindo=false;
    $this->like=0;
}

//colocar titulo
public function setTitulo($Ti)
{
    $this->Titulo=$Ti;
}
public function getTitulo()
{
    return $this->Titulo;
}

//colocar avaliacao
public function setAvaliacao($av)
{
    $this->Avaliacao=$av;
}
public function getAvaliacao()
{
    return $this->Avaliacao;
}

//colocar views
public function setViews($vi)
{
    $this->Views=$vi;
}
public function getViews()
{
    return $this->Views;
}

//colocar curtidas
public function setCurtidas($Cr)
{
    $this->Curtidas=$Cr;
}
public function getCurtidas()
{
    return $this->Curtidas;
}

//colocar para reproduzir video
public function setReproduzir($Re)
{
    $this->Reproduzindo=$Re;
}
public function getReproduzir()
{
    return $this->Reproduzindo;
}

//dar play no video
public function Play()
{
   echo "o video esta rolando!!";
}

//dar apuse no video 
public function pause()
{
    echo"o video parou !! ";
}

//dar like
public function like()
{
    $this->like+=1;
}
}
?>