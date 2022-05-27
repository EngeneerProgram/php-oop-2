<?php

class Prodotto {
    public $marca_prodotto;
    public $tipologia_prodotto;
    public $genere_prodotto;
    public $prezzo_prodotto;
    

    function __construct (String $marca_prodotto, String $tipologia_prodotto,
    String $genere_prodotto, Int $prezzo_prodotto){
        $this->marca_prodotto = $marca_prodotto;
        $this->tipologia_prodotto = $tipologia_prodotto;
        $this->genere_prodotto = $genere_prodotto;
        $this->prezzo_prodotto = $prezzo_prodotto;
        
    }

}