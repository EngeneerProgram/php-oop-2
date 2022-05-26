<?php

class CreditCard{
    protected $nome_titolare;
    protected $cognome_titolare;
    protected $numero_carta;
    protected $numero_tre_cifre;
    protected $scadenza_carta;
    protected $circuito;


    public function __construct(String $nome_titolare,String $cognome_titolare,String $numero_carta,String $numero_tre_cifre, String $scadenza_carta,String $circuito ){
        $this->nome_titolare = $nome_titolare;
        $this->cognome_titolare = $cognome_titolare;
        $this->numero_carta=$numero_carta;
        $this->numero_tre_cifre = $numero_tre_cifre;
        $this->scadenza_carta=$scadenza_carta;
        $this->circuito = $circuito;
    }

}