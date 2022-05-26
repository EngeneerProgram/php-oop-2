<?php

class AlimentazioneCane extends Prodotto {
    protected $proteine;
    function __construct(String $marca_prodotto, String $tipologia_prodotto,
    String $genere_prodotto, String $prezzo_prodotto, String $scandenza_prodotto,
    String $disponibilita, String $quantita, String $proteine){
        parent::__construct($marca_prodotto, $tipologia_prodotto,
         $genere_prodotto,  $prezzo_prodotto, $scandenza_prodotto,
         $disponibilita, $quantita);


         $this->proteine = $proteine;
    }

    public function getProteine(){
        return $this->proteine;
    }
}