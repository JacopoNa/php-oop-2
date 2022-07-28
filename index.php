<!-- CONSEGNA
Definire classi necessarie per creare uno shop online con le seguenti caratteristiche.
L'e-commerce vende prodotti per gli animali.
I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
L'utente potrà sia comprare i prodotti senza registrarsi, oppure iscriversi e ricevere il 20% di sconto su tutti i prodotti. -->
<?php 

require_once __DIR__ . './Snack.php';
require_once __DIR__ . './Gioco.php';
require_once __DIR__ . './Farmaco.php';
require_once __DIR__ . './UtenteStandard.php';
require_once __DIR__ . './UtenteRegistrato.php';

$DogSnack = new Snack(2.99, 'LIFE PET CARE', '100gr', 'Carne essiccata');

$DogGioco = new Gioco(13.50, 'Imac', 'Peluche con anello', 'Gomma naturale');

$DogFarmaco = new Farmaco(18.90, 'Frontline Homegard', '250ml', 'antiparassitario');

$GiovanniRossi = new UtenteRegistrato('Giovanni Rossi');
$GiovanniRossi->prodottoNelCarrello($DogFarmaco);
echo $GiovanniRossi->pagamento();

$ValeBianchi = new UtenteStandard('Vale Bianchi');
$ValeBianchi->prodottoNelCarrello($DogGioco);
echo $ValeBianchi->pagamento();


?>