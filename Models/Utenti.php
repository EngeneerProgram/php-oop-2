<?php

class Utenti {
    public $name;
    public $cognome;
    public $data_nascita;
    public $carta_credito;
    public $email;
    public $sconto;
    public $utente_registrato = false;

    public function __construct(String $name, String $cognome,
    String $data_nascita, Bool $carta_credito, String $email, Int $sconto,Bool $utente_registrato ){
        $this->name = $name;
        $this->cognome = $cognome;
        $this->data_nascita = $data_nascita;
        $this->carta_credito = $carta_credito;
        $this->email = $email;
        $this->sconto = $sconto;
        $this->utente_registrato = $utente_registrato;
    }


    public function calcolaSconto($utente_registrato){
        if($utente_registrato == true){
            $this->sconto = 0.20;
        }
    }

    public function getSconto(){
        return $this->sconto;
    }
}