<?php

class AlimentazioneGatto extends Prodotto{
    protected $lettiera;
    function __construct (String $marca_prodotto, String $tipologia_prodotto,
    String $genere_prodotto, String $prezzo_prodotto, String $scandenza_prodotto,
    String $peso_prodotto, Array $lettiera){
        parent::__construct( $marca_prodotto,  $tipologia_prodotto,
         $genere_prodotto, $prezzo_prodotto, $scandenza_prodotto,
         $peso_prodotto);
    }

    public function getLettiera(){
        return $this->lettiera;
    }
}