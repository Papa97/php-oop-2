<?php


class ProUsers extends Users {

    protected $livello;

    function __construct($_nome, $_cognome, $_eta,$_livello)
    {
        parent::__construct($_nome, $_cognome, $_eta);
        $this->livello = $_livello;
    }

  

    public function setSconto($_eta){
        if($_eta > 70) {
            $this->sconto = 50;
        } else {
            $this->sconto = $this->livello * 10;
        }
    }
}
?>