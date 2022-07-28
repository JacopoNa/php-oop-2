<?php 

require_once __DIR__ . './Prodotto.php';

class Gioco extends Prodotto {
    public $nome;
    public $materiale;

    public function __construct($_prezzo, $_marca, $_nome, $_materiale) {
        $this->prezzo = $_prezzo;
        $this->marca = $_marca;
        $this->nome = $_nome;
        $this->materiale = $_materiale;
    }
}

?>