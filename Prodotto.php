<?php

require_once __DIR__ . '/Spedizione.php';

class Prodotto {
    public $prezzo;
    public $marca;
    use Spedizione;

    public function __construct($_prezzo, $_marca) {
        $this->prezzo = $_prezzo;
        $this->marca = $_marca;
    }

    public function getProductInfo() {
        return "Marca: $this->marca - Prezzo: $this->prezzo euro";
    }
}

?>