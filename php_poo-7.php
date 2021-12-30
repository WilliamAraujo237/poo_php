<?php
require_once 'php_poo_7.php';
class livro{
    private $Titulo;
    private $Autor;
    private $TotPaginas;
    private $Aberto;
    private $Leitor;


    //metodo construtor
    public function __construct($Ti,$Au,$To)
    {
        $this->Titulo=$Ti;
        $this->Autor=$Au;
        $this->TotPaginas=$To;
        $this->Aberto=false;
    }
    //pegar o nome do livro
    public function getTitulo()
    {
        return $this->Titulo;
    }

    //pegar o nome do autor
    public function getAutor()
    {
        return $this->Autor;
    }

    //pegar o total de paginas do livro
    public function getTotPaginas()
    {
        return $this->TotPaginas;
    }

    //saber se o livro esta aberto
    public function getAberto()
    {
        return $this->Aberto;
    }

    //nome do leitor
    public function getLeitor()
    {
        return $this->Leitor;
    }

    public function Detalhes()
    {
        echo '<p>o livro'.$this->getTitulo().'do autor'.$this->getAutor().'tem um total de '.$this->getTotPaginas().'paginas</p>';
    }
}
?>