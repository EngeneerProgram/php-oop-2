<?php

class Carta_di_credito{
    protected $numero_carta;
    protected $numero_tre_cifre;
    protected $data_scadenza;
    protected $circuito_utilizzato;


    public function __constructor(String $numero_carta, String $numero_tre_cifre,
    String $data_scadenza, String $circuito_utilizzato){
        $this->numero_carta=$numero_carta;
        $this->numero_tre_cifre = $numero_tre_cifre;
        $this->data_scadenza = $data_scadenza;
        $this->circuito_utilizzato = $circuito_utilizzato;
    }


    
}