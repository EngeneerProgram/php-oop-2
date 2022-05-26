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
include __DIR__ . "/Models/CartaDiCredito.php";

$cane1 = new AlimentazioneCane('Monge', 'Croccantini', 'Cibo per cani' , '15€', 'scandeza: 07/2022', 'disponibile', '12 unità', '0.15g Proteine per 100g');
$cane2 = new AlimentazioneCane('Pro-Plan', 'carne umida', 'Cibo per cani' , '35€', 'scandeza: 09/2022', 'non disponibile', '7 unità', '0.20g Proteine per 100g');
$accessori_cane = New AccessoriCane('Seresto', 'Collare Antipulci', 'Insetticida Cane', '40€', '09/2022', 'disponibile', '100 unita', ['collare piccolo','collare medio', 'collare grande'], 'Pipetta pulci');
$gatto1 = new AlimentazioneGatto('Purina', 'Boccouncini umidi', 'Alimento per gatti', '5€',  '10/2022',  'non disponibile', '22 unità', ['lettiera standard', 'lettiera misto truciolato' , 'lettiera pallet']);
$gatto2 = new AlimentazioneGatto('Purina', 'Boccouncini umidi', 'Alimento per gatti', '5€', '10/2022','disponibile', '22 unità', ['lettiera standard', 'lettiera misto truciolato' , 'lettiera pallet']);

var_dump("*** ALimentazione Cane ****");
var_dump($cane1);
var_dump($cane2);
var_dump($accessori_cane);
var_dump($accessori_cane->getSverminazione());
;
var_dump($cane1->getProteine());
var_dump($cane2->getProteine());

var_dump("*** ALimentazione Gatto ****");
var_dump($gatto1);
var_dump($gatto2);

