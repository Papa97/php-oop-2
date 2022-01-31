<?php

require_once  __DIR__ . "/../traits/CreditCard.php";

class Users {
    protected $nome;
    protected $cognome;
    protected $eta;
    protected $sconto = 0;


    use CreditCard;
    
    public function __construct($_nome, $_cognome, $_eta)
    {
        $this-> setNome($_nome);
        $this-> setCognome($_cognome);
        $this-> setEta($_eta);
    }

    public function setNome($_nome){
        $this->nome = $_nome;
    }

    public function setCognome($_cognome){
        $this->cognome = $_cognome;
    }   
    
    public function setEta($_eta){
        $this->eta = $_eta;
    }




    public function getNome(){
        return $this->nome;
    }

    public function getCognome(){
        return $this->cognome;
    }

    public function getEta(){
        return $this->eta;
    }

    public function setSconto($_eta){
        if($_eta > 70) {
            $this->sconto = 30;
        }
    }

}

?>