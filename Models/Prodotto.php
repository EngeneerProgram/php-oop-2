<?php

class Prodotto {
    protected $marca_prodotto;
    protected $tipologia_prodotto;
    protected $genere_prodotto;
    protected $prezzo_prodotto;
    protected $scandenza_prodotto;
    protected $peso_prodotto;

    function __construct (String $marca_prodotto, String $tipologia_prodotto,
    String $genere_prodotto, String $prezzo_prodotto, String $scandenza_prodotto,
    String $peso_prodotto){
        $this->marca_prodotto = $marca_prodotto;
        $this->tipologia_prodotto = $tipologia_prodotto;
        $this->genere_prodotto = $genere_prodotto;
        $this->prezzo_prodotto = $prezzo_prodotto;
        $this->scandeza_prodotto = $scandenza_prodotto;
        $this->peso_prodotto = $peso_prodotto;
    }

}