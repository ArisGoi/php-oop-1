<?php

// Definire una classe Movie
class Movie{
    // dichiarare variabili d'istanza
    private $titolo;
    private $regista;
    private $anno;
    private $durata;
    private $lingua;
    private $prezzo;

    // definire un costruttore
    function __construct($_titolo, $_regista, $_anno, $_durata, $_lingua, $_prezzo)
    {
        $this->titolo = $_titolo;
        $this->regista = $_regista;
        $this->anno = $_anno;
        $this->durata = $_durata;
        $this->lingua = $_lingua;
        $this->prezzo = $_prezzo;
    }

    // definire almeno un metodo
    function getPrezzo($userEta){
        if($userEta < 20){
            $prezzoFinale = $this->prezzo - ($this->prezzo * 0.50);
            return number_format($prezzoFinale, 2, '.', ',');
        } else if ($userEta > 60){
            $prezzoFinale = $this->prezzo - ($this->prezzo * 0.25);
            return number_format($prezzoFinale, 2, '.', ',');
        } else {
            $prezzoFinale = $this->prezzo;
            return number_format($prezzoFinale, 2, '.', ',');
        }
    }

    function getInfo($what){
        $info = [
            "titolo" => $this->titolo,
            "regista" => $this->regista,
            "anno" => $this->anno,
            "durata" => $this->durata,
            "lingua" => $this->lingua,
        ];
        return $info[$what];
    }
}

?>