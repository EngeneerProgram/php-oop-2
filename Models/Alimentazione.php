<?php

class AlimentazioneAnimale extends Prodotto{
    public $dosaggio;

    public function __construct(String $marca_prodotto, String $tipologia_prodotto,
    String $genere_prodotto, Int $prezzo_prodotto, String $dosaggio){


        parent:: __construct($marca_prodotto, $tipologia_prodotto,
         $genere_prodotto, $prezzo_prodotto);
         $this->dosaggio=$dosaggio;
    }
}