<?php
class Prodotti{
    private $nome;
    private $prezzo;

    public function __construct($_nome,$_prezzo)
    {
        $this->setNome($_nome);
        $this->setPrezzo($_prezzo);
    }

    public function setNome($_nome){
        $this->nome = $_nome;
    }


    public function setPrezzo($_prezzo){
        $this->nome = $_prezzo;
    }

}
?>