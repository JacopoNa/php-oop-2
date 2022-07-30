<?php 

class Utente {
    public $nome;
    public $sconto = 0;
    public $saldo = 0;
    public $listaProdotti = [];

    public function __construct($_nome) {
        $this->nome = $_nome;
    }

    public function prodottoNelCarrello($item) {
        $this->listaProdotti [] = $item;
    }

    public function ottieniLista() {
        return $this->listaProdotti;
    }

    public function prezzoDaPagare() {
        $somma = 0;
        foreach ($this->listaProdotti as $item) {
            $somma += $item->prezzo;
        }

        $somma -= $somma * $this->sconto;

        return $somma;
    }

    public function pagamento($saldoCartaPrepagata) {
        $prezzo = $this->prezzoDaPagare();

        if ($prezzo > $saldoCartaPrepagata) {
            throw new Exception('Saldo non disponibile');
        } else {
            return 'pagamento a buon fine';
        }
    }
}

?>