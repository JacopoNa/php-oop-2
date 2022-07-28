<?php 

require_once __DIR__ . './Prodotto.php';

class Farmaco extends Prodotto {
    public $quantità;
    public $tipologia;

    public function __construct($_prezzo, $_marca, $_quantità, $_tipologia) {
        $this->prezzo = $_prezzo;
        $this->marca = $_marca;
        $this->quantità = $_quantità;
        $this->tipologia = $_tipologia;
    }
}

?>