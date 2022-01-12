<?php
abstract class pessoa{
    protected $Nome;
    protected $Idade;
    protected $Sexo;
    protected $Experiencia;

    public function __construct($no,$id,$se)
    {
        $this->Nome=$no;
        $this->Idade=$id;
        $this->Sexo=$se;
        $this->Experiencia=0;
    }
    //colocar nome
    public function setNome($no)
    {
        $this->Nome=$no;
    }
    public function getNome()
    {
        return $this->Nome;
    }
    //colocar idade
    public function setIdade($id)
    {
        $this->Idade=$id;
    }
    public function getIdade()
    {
        return $this->Idade;
    }

    //colocar sexo
    public function setSexo($se)
    {
        $this->Sexo=$se;
    }
    public function getSexo()
    {
        return $this->Sexo;
    }

    //colocar experiencia
    public function setExperiencia($ex)
    {
        $this->Experiencia=$ex;
    }
    public function getExperiencia()
    {
        return $this->Experiencia;
    }

    
    public function GanharExperiencia()
    {
        $this->Experiencia += 1;
    }
}
?>