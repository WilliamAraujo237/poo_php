<?php
interface controlador{
    public function Ligar();
    public function Desligar();
    public function AbrirMenu();
    public function FecharMenu();
    public function MaisVolume();
    public function MenosVolume();
    public function LigarMudo();
    public function DesligarMudo();
    public function Play();
    public function Pause();
}
?>