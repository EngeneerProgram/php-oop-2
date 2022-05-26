<!-- provate ad immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche.
L'e-commerce vende prodotti per gli animali.
I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
L'utente potrà sia comprare i prodotti senza registrarsi, oppure iscriversi e ricevere il 20% di sconto su tutti i prodotti.
Il pagamento avviene con la carta di credito, che non deve essere scaduta.
BONUS: Alcuni prodotti (es. antipulci) avranno la caratteristica che saranno disponibili solo in un periodo particolare (es. da maggio ad agosto).
Tips:
Qualora aveste bisogno di passare ad un metodo un tipo di dato particolare, come ad esempio un oggetto che avete creato voi, potete usarlo come facciamo di solito al posto di Type $variable.
Infondo anche le nostre classi sono dei tipi di dato.
Ad esempio
public function functionName( MyClass $variable, String $variable2, Int $variable3 ) {
# Implementazione
}  -->

<?php

require_once __DIR__ . "/Models/Prodotto.php";
include __DIR__ . "/Models/AlimentazioneCane.php";
include __DIR__ . "/Models/AlimentazioneGatto.php";
include __DIR__ . "/Models/AccessoriCane.php";

$cane1 = new AlimentazioneCane('Monge', 'crocchette', 'alimentazione cane', '12', '02/2022', '15kg', '13');
$cane2 = new AlimentazioneCane('Pro Plan', 'Carne disidratata', 'alimentazione cane', '12', '07/2022', '4kg', '13');
$accessori_cane = New AccessoriCane('Seresto', 'Accessori Cane', 'Collare Antiparassitario'. '35€', '09/2023', '0.2g', ['Collare Taglia piccola', 'Collare Taglia media', 'Collare Taglia Grande', 'Pipetta Sverminazione durata 1 mese'], 'Pillola Vermi Fugo');
$gatto1 = new AlimentazioneGatto('Pro Plan', 'Tonno umido', 'alimentazione gatto', "6", '07/2022', "0.8g", ['lettiera standard', 'sabbia', 'pallet profumato']);
$gatto2 = new AlimentazioneGatto('Purina', 'Carne in scatola', 'alimentazione gatto', "2", '11/2022', "1kg", ['lettiera standard', 'sabbia', 'pallet profumato']);

var_dump("*** ALimentazione Cane ****");
var_dump($cane1);
var_dump($cane2);
var_dump($accessori_cane);
var_dump($accessori_cane->getSverminazione());
var_dump($accessori_cane->getAntiparassitario());
var_dump($cane1->getProteine());
var_dump($cane2->getProteine());
var_dump($gatto1->getLettiera());
var_dump($gatto2->getLettiera());
var_dump("*** ALimentazione Gatto ****");
var_dump($gatto1);
var_dump($gatto2);
