<?php
trait CreditCard {
    public $number;
    public $scadenza;
    public $cvv;

    public function getCard(){
        return "{$this->number} {$this->scadenza} {$this->cvv}";
    }
}
?>