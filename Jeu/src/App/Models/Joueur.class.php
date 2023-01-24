<?php

require_once 'Utilisateur.class.php';

class Joueur extends Utilisateur
{
    public function __construct(
        public ?int $id = null,
        public ?string $login = null,
        public ?string $mdp = null,
        public ?string $droit = null,
    ){
        parent::__construct($id, $login, $mdp, $droit);
    }

    public function inscription(): void
    {
        echo $this->login . ' s\'est inscrit.<br>';
    }

    public function connexion(): bool
    {
        echo $this->login . ' s\'est connecté. Le jeu commence <br>';
        return true;
    }

    public function deconnexion(): bool
    {
        echo $this->login . ' s\'est déconnecté';
        return false;
    }

    public function lancerPartie(): void
    {
        echo $this->login . ' lance les dés<br>';
    }
}