<?php

class Utente{
    protected $nome_completo;
    protected $codice_fiscale;
    protected $carta_credito = [];
    protected $tipo_utente;
    protected $sconto;


    public function __construct(String $nome_completo, String $codice_fiscale,
    String $tipo_utente, String $sconto){
        $this->nome_completo = $nome_completo;
        $this->codice_fiscale = $codice_fiscale;
        $this->tipo_utente= $tipo_utente;
        $this->sconto = $sconto;
    }


    public function cartaCredito($carta_credito){
        array_push($this->carta_credito, $Carta_di_credito);
    }
}