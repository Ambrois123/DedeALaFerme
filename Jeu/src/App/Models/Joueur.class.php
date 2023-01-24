<?php

require_once 'Utilisateur.class.php';

class Joueur extends Utilisateur
{
    public function __construct(
         ?int $id = null,
         ?string $login = null,
         ?string $mdp = null,
         ?string $droit = null,
    ){
        parent::__construct($id, $login, $mdp, $droit);
    }

    public function inscription(): void
    {
        echo $this->login . ' s\'est inscrit.<br>';
    }

    public function displayInfo(): void
    {
        echo $this->id;
        echo $this->login;
        echo $this->mdp;
        echo $this->droit;
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