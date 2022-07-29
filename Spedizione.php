<?php

trait Spedizione {
    public $spedizioneProdotto = 'Spedizione rapida 1-3 giorni lavorativi';

    public function ottieniSpedizione() {
        return 'Spedizione ed info aggiuntive: ' . $this->spedizioneProdotto;
    }
}

?>