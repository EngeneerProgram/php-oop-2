<?php

class Prodotto {
    public $marca_prodotto;
    public $tipologia_prodotto;
    public $genere_prodotto;
    public $prezzo_prodotto;
    public $scandenza_prodotto;
    public $disponibilita;
    public $quantita;

    function __construct (String $marca_prodotto, String $tipologia_prodotto,
    String $genere_prodotto, String $prezzo_prodotto, String $scandenza_prodotto,
    String $disponibilita, String $quantita){
        $this->marca_prodotto = $marca_prodotto;
        $this->tipologia_prodotto = $tipologia_prodotto;
        $this->genere_prodotto = $genere_prodotto;
        $this->prezzo_prodotto = $prezzo_prodotto;
        $this->scandeza_prodotto = $scandenza_prodotto;
        $this->disponibilita = $disponibilita;
        $this->quantita = $quantita;
    }

}