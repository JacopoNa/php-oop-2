<?php 

require_once __DIR__ . './Prodotto.php';

class Snack extends Prodotto {
    public $peso;
    public $composizione;

    public function __construct($_prezzo, $_marca, $_peso, $_composizione) {
        $this->prezzo = $_prezzo;
        $this->marca = $_marca;
        $this->peso = $_peso;
        $this->composizione = $_composizione;
    }
}

?>