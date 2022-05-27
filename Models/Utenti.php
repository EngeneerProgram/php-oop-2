<?php

class Utenti {

    //use trait
    use nome;
    public $data_nascita;
    public $carta_credito;
    public $email;
    public $sconto;
    public $utente_registrato = false;


     /**
      * Funzione per creare nuovo utente
      *
      * @param String $name -> inserimento nome dell'utente
      * @param String $cognome -> inserimento cognome dell'utente
      * @param String $data_nascita -> inserimento data di nascita dell'utente
      * @param Bool $carta_credito -> inserimento carta di credito dell'utente
      * @param String $email -> inserimento email dell'utente
      * @param Int $sconto -> Specificare se l'utente ha diritto ad uno sconto
      * @param Bool $utente_registrato -> Verificare se l'utente è registrato
      */
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


trait nome{
    public $nome;
    public $cognome;
}