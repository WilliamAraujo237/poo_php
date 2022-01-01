<?php
 abstract class pessoa{
    private $nome;
    private $idade;
    private $sexo;
    
    public function FazerAniversario()
    {
        $this->idade ++;
    }

    //colocar nome
    public function setNome($no)
    {
        $this->nome = $no;
    }
    public function getNome()
    {
        return $this->nome;
    }

    //colocar idade
    public function setIdade($id)  
    {
        $this->idade=$id;
    }
    public function getIdade()
    {
        return $this->idade;
    }

    //colocar sexo
    public function setSexo($se)
    {
        $this->sexo=$se;
    }
    public function getSexo()
    {
        return $this->sexo;
    }

}
?>