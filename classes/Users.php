<?php
class Users {
    protected $nome;
    protected $cognome;
    protected $eta;

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
        $this->nome = $_cognome;
    }   
    
    public function setEta($_eta){
        $this->nome = $_eta;
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

}

?>