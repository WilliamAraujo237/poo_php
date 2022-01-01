<?php
require_once'php_poo-8-3.php';
class bolsista extends aluno{
    private $bolsa;

    public function RenovarBolsa()
    {
        echo '<p>Bolsa renovada</p>';
    }

    public function PagarMatricula()
    {
        echo '<p> seu pagamento foi feito com sucesso</p>';
    }

    //colocar bolsa
    public function setBolsa($bo)
    {
        $this->bolsa=$bo;
    }
    public function getBolsa()
    {
        return $this->bolsa;
    }
}
?>