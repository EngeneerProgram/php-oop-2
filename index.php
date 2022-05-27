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
include __DIR__ . "/Models/Alimentazione.php";
include __DIR__ . "/Models/Utenti.php";
include __DIR__ . "/Models/Utenti_registrati.php";


$cibo_cane = new AlimentazioneAnimale('Monge', 'Croccantini', 'Alimentazione cane', 35, '100g');
var_dump($cibo_cane);
$utente_non_registrato = new Utenti('Rosario', 'Garufi', '15/06/95', true, 'saro.garufi1@gmail.com', 0,false);
var_dump($utente_non_registrato);


$utente_registrato = new Utente ('Giovanni', 'pierfranco', '12/04/12', 'true', 0, false, 'pippo@hotmail.com', 'giovanni92', 'rfnf8344mf8', 123567854);

$utente_registrato -> registrazioneUtente();
$utente_registrato ->calcolaSconto(true);

var_dump($utente_registrato);


