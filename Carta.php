<?php

class  Carta {
    public $nomeTitolare;
    public $numero;
    public $cvv;
    public $saldoCarta = 15;

    public function __construct($_nomeTitolare, $_numero, $_cvv) {
        $this->nomeTitolare = $_nomeTitolare;
        $this->numero = $_numero;
        $this->cvv = $_cvv;
    }
}

?>