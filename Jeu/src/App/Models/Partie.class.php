<?php

namespace App\Models;

class Partie 
{
    use Jeu;
    use Joueur;

    public function __construct(
        private $dateTime,
        private $score,
        private $gagner,
        private Jeu $jeu,
        private Joueur $joueur
        
    ){}

    public function _get($name){
        return match($name){
            "dateTime"=> $this->dateTime,
            "score" => $this->score,
            "gagner" => $this->gagner,
            "jeu"=>$this->jeu,
            "joueur" =>$this->joueur
        };
    }

    public function _set($name, $value){
        return match($name){
            "dateTime" => $this->dateTime = $value,
            "score"=>$this->score = $value,
            "gagner"=>$this->gagner = $value,
            "jeu"=>$this->jeu = $value,
            "joueur" =>$this->joueur = $value,
            default =>$this->$name=$value

        };
    }

    public function getDisplayDate(): string
    {
        $timestamp = time();
        $this->dateTime = date('Y-m-d H:i:s', $timestamp);
        

        return $this->dateTime;
    }

    public function __toString()
    {
        return $this->getDisplayDate();
    }
}