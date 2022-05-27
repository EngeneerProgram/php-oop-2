<?php

class Utente extends Utenti{
    use nome;
    //login
    public $username_utente;
    public $password_utente;
    public $identificazione;

    
/**
 * Nuovo utente
 *
 * @param String $name
 * @param String $cognome
 * @param String $data_nascita
 * @param Bool $carta_credito
 * @param String $email
 * @param Int $sconto
 * @param Bool $utente_registrato
 * @param string $username_utente
 * @param String $password_utente
 * @param Int $identificazione
 */
    public function __construct(String $name, String $cognome,
    String $data_nascita, Bool $carta_credito, String $email, Int $sconto,Bool $utente_registrato, string $username_utente, String $password_utente, Int $identificazione){
        parent:: __construct($name,  $cognome,
         $data_nascita,$carta_credito,  $email, $sconto,$utente_registrato);
         $this->username_utente =$username_utente;
         $this->password_utente = $password_utente;
         $this->identificazione = $identificazione;
    }

    public function registrazioneUtente(){
        $this->utente_registrato = true;
    }

    public function registraUtente(){
        return $this->utente_registrato;
    }
}