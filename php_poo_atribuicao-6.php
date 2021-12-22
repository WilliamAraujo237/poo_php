<?php
require_once('php_poo-6.php');
    class luta{
        private $Desafiado;
        private $Desafiante;
        private $Rounds;
        private $Aprovada;

        public function MarcarLuta($L1,$L2)
        {
            if ($L1->getCategoria() === $L2->getCategoria() && ($L1 != $L2)){
                $this->Aprovada=true;
                $this->Desafiante=$L1;
                $this->Desafiado=$L2;
            }else{
                $this->Aprovada=false;
                $this->Desafiante=null;
                $this->Desafiado=null;
                echo"<p>essa luta nao pode acontecer</p>";
            }
        }

        public function luta()
        {
            if ($this->Aprovada == true) {
                $this->Desafiado->Apresentar();
                $this->Desafiante->Apresentar();
                $vencedor = rand(0,2);
                switch ($vencedor){
                    case 0:
                        echo"empatou ";
                        $this->Desafiado->Empatar();
                        $this->Desafiante->Empatar();
                        break;
                    case 1:
                        echo"vitoria do desafiante ";
                        $this->Desafiante->Ganharluta();
                        $this->Desafiado->Perderluta();
                        break;
                    case 2:
                        echo"vitoria do desafiado ";
                        $this->Desafiado->Ganharluta();
                        $this->Desafiante->Perderluta();
                        break;
                    }
            }
        }

        //colocando desafiante
        public function setDesafiado($De)
        {
            $this->Desafiado=$De;
        }
        public function getDesafiado()
        {
            return $this->Desafiado;
        }

        //Colocando desafiante
        public function setDesafiante($Des)
        {
            $this->Desafiante=$Des;
        }
        public function getDesafiante()
        {
            return $this->Desafiante;
        }

        //Colocar rounds
        public function setRounds($Ro)
        {
            $this->Rounds=$Ro;
        }
        public function getRounds()
        {
            return $this->Rounds;
        }

        //Colocar aprovacao
        public function setAprovada($AP)
        {
            $this->Aprovada=$AP;
        }
        public function getAprovada()
        {
            return $this->Aprovada;
        }
    }   
?>
