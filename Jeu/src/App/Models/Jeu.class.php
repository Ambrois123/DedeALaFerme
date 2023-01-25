<?php

namespace App\Models;

abstract class Jeu 
{
    protected ?array $list_parties = array();
    public function __construct(
        private ?string $regles = null,
    ){    }

    public function _get($name){
        return match($name){
            "regles"=>$this->regles,
            "list_parties"=>$this->list_parties,
            default=>null,
        };
    }

    public function _set($name, $value){
        return match($name){
            "regles"=>$this->regles = $value,
            "list_parties"=>$this->list_parties = $value,
            default =>$this->$name=$value,
        };
    }

    public function displayRules(): string
    {
        return $this->regles;
    }
}