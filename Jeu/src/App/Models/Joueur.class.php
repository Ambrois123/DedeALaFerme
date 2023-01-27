<?php

namespace App\Models;

class Joueur extends Utilisateur
{
    private ?array $list_partie = array();
    public function __construct(
         int $id,
         string $login,
         string $mdp,
         string $droit,
         
    ){
        parent::__construct($id, $login, $mdp, $droit);
        $this->list_partie = array();

    }

    public function inscription(): bool
    {
        $this->login . ' s\'est inscrit.<br>';
        return TRUE;
    }

    public function displayInfo(): void
    {
        $this->id;
        $this->login;
        $this->mdp;
        $this->droit;
    }

    public function connexion(): bool
    {
        $this->login . ' s\'est connecté. Le jeu commence <br>';
        return true;
    }

    public function deconnexion(): bool
    {
        $this->login . ' s\'est déconnecté';
        return false;
    }

    public function lancerPartie(): void
    {
        $this->login . ' lance les dés<br>';
    }
}