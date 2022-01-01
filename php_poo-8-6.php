<?php
require_once'php_poo-8-3.php';
class tecnico extends aluno{
    private $registro_proficional;

    public function praticar()
    {
        echo '<p>estou praticando</p>';
    }

    public function setRegistro($re)
    {
        $this->registro_proficional=$re;
    }
    public function getRegistro ()
    {
        return $this->registro_proficional;
    }
}
?>