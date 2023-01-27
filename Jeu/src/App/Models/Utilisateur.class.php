<?php

namespace App\Models;

abstract class Utilisateur 
{
    public function __construct(
        private ?int $id = null,
        private ?string $login = null,
        private ?string $mdp = null,
        private ?string $droit = null,
    ){}

    public function __get($name)
    {
        return match($name){
            "id" => $this->id,
            "login" => $this -> login,
            "mdp" => "******",
            "droit" => $this -> droit,
            default => null
        };
        
    }

    public function __set($name, $value)
    {
        return match ($name){
            "id" => $this->id = $value,
            "login"=> $this->login = $value,
            "mdp" => $this ->mdp = password_hash($value, PASSWORD_BCRYPT),
            "droit" => $this -> droit = $value,
            default => $this->$name = $value

        };
    }

    abstract public function inscription(): bool;

    abstract public function connexion(): bool;

    abstract public function deconnexion(): bool;
}