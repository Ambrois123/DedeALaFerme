<?php

// require_once __DIR__ . '/autoload.php';

include './Jeu//src/App/Models/JeuBateau.php';
include './Jeu//src/App/Models/Partie.class.php';
include './Jeu//src/App/Models/JeuDeDes.class.php';
include './Jeu//src/App/Models/Jeu.class.php';
include './Jeu//src/App/Models/Joueur.class.php';


// use App\Models\JeuBateau;

$jeuBateau = new JeuBateau(
    a_un_capitaine: true,
    a_un_equipage: true,
    a_un_bateau: true,
    equipage_complet: true,
);
echo "<pre>"; 
print_r($jeuBateau->getDisplayInfo());
echo"</pre>";

$partie = new Partie(
    dateTime: '2021-09-01 12:00:00',
    score: 100,
    gagner: true,
);

echo "<pre>"; 
print_r($partie->getDisplayInfo());
echo"</pre>";







$jeu = new Jeu(
    regles: 'Les règles du jeu sont les suivantes : ...',
);
echo "<pre>"; 
print_r($jeu->displayRules());
echo"</pre>";

$joueur1 = new Joueur(
    id: 1,
    login: 'axel',
    mdp: 123456,
    droit: 'joueur',
);

$joueur1->inscription();

$joueur1->connexion();
$joueur1->lancerPartie();

$jeu_de_des1 = new JeuDeDES(
    nb_Des: 5,
    nb_Lancer_Des: 1,
    tabDeParLancer: [],
);
echo "<pre>"; 
print_r($jeu_de_des1->lancerDes());
echo"</pre>";

echo "----------------***************-----------------<br>";

$joueur2 = new Joueur(
    id: 2,
    login: 'Jean Dupont',
    mdp: 'azerty',
    droit: 'joueur',
);

$joueur2->inscription();
$joueur2->connexion();
$joueur2->lancerPartie();