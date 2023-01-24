<?php

abstract class Utilisateur 
{
    public function __construct(
        public ?int $id = null,
        public ?string $login = null,
        public ?string $mdp = null,
        public ?string $droit = null,
    ){}

    public abstract function inscription(): void;

    public abstract function connexion(): bool;

    public abstract function deconnexion(): bool;
}