<?php
class lutador{
    private $Nome;
    private $Nacionalidade;
    private $Idade;
    private $Altura;
    private $Peso;
    private $Categoria;
    private $Vitorias;
    private $Derotas;
    private $Empates;

    public function __construct($No,$Na,$Id,$Al,$Pe,$Ca,$Vi,$De,$Em)
    {
        $this->setNome($No);
        $this->setNacionalidade($Na);
        $this->setIdade($Id);
        $this->setAltura($Al);
        $this->setPeso($Pe);
        $this->setCategoria($Ca);
        $this->setVitorias($Vi);
        $this->setDerotas($De);
        $this->setEmpates($Em);
    }

    //Colocar nome
    public function setNome($No)
    {
        $this->Nome=$No;
    }
    public function getNome()
    {
        return $this->Nome;
    }

    //Colocar nacionalidade
    public function setNacionalidade ($Na)
    {
        $this->Nacionalidade=$Na;
    }
    public function getNacionalidade()
    {
        return $this->Nacionalidade;
    }

    //Colocar Idade
    public function setIdade($Id)
    {
        $this->Idade=$Id;
    }
    public function getIdade()
    {
        return $this->Idade;
    }

    //Colocar altura
    public function setAltura($Al)
    {
        $this->Altura=$Al;
    }
    public function getAltura()
    {
        return $this->Altura;
    }

    //Colocar peso
    public function setPeso($Pe)
    {
        $this->Peso=$Pe;
    }
    public function getPeso()
    {
        return $this->Peso;
    }

    //Colocar categoria
    public function setCategoria($Ca)
    {
        $this->Categoria=$Ca;
    }
    public function getCategoria()
    {
        return $this->Categoria;
    }

    //Colocar vitorias
    public function setVitorias($Vi)
    {
        $this->Vitorias=$Vi;
    }
    public function getVitorias()
    {
        return $this->Vitorias;
    }

    //Colocar derotas
    public function setDerotas($De)
    {
        $this->Derotas=$De;
    }
    public function getDerotas()
    {
        return $this->Derotas;
    }

    //Colocar empates
    public function setEmpates($Em)
    {
        $this->Empates=$Em;
    }
    public function getEmpates()
    {
        return $this->Empates;
    }

    //Apresentar o lutador
    public function Apresentar()
    {
        echo "<p> o seu nome e ". $this->getNome()." ele vem do ". $this->getNacionalidade()."Com apenas ".$this->getIdade()." anos</p>";
        
    }

    //Mostrar estatus do lutador
    public function Status()
    {
        echo"<p>com uma altura de ". $this->getAltura()."pesando ". $this->getPeso()."pussue ". $this->getVitorias()." vitorias " . $this->getDerotas(). " derrotas e ". $this->getEmpates(). " empates </p>";
    }

    //Adicionar vitorias
    public function Ganharluta()
    {
        $this->Vitorias+=1;
        
    }

    //Adicionar derotas
    public function Perderluta()
    {
        $this->Derotas+= 1;
    }

    //Adicionar Empates
    public function Empatar()
    {
        $this->Empates+=1;
    }
}
?>