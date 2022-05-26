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
require __DIR__ . "/Models/Utente.php";
require __DIR__ . "/Models/Carta_di_credito.php";


$cane1 = new AlimentazioneCane('Monge', 'Croccantini', 'Cibo per cani' , '15€', 'scandeza: 07/2022', 'disponibile', '12 unità', '0.15g Proteine per 100g');

$rosario = new Utente('Rosario Garufi', 'gjrbjrebgbjb', '45346463367357', 'utente premium', "sconto effettuato");
$gatto2 = new AlimentazioneGatto('Purina', 'Boccouncini umidi', 'Alimento per gatti', '5€', '10/2022','disponibile', '22 unità', ['lettiera standard', 'lettiera misto truciolato' , 'lettiera pallet']);
$carta_credito = new Carta_di_credito('245246637', '204', '10/10/2025', 'visa');
var_dump($gatto2);

var_dump($rosario);
var_dump($carta_credito);
$rosario->cartaCredito($carta_credito);