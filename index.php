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
// print_r($jeuBateau->getDisplayInfo());
echo"</pre>";

$partie = new Partie();


$jeu_de_des1 = new JeuDeDES(
    nb_Des: 5,
    nb_Lancer_Des: 1,
    tabDeParLancer: [],
);
// echo "<pre>"; 
// print_r($jeu_de_des1->lancerDes());
// echo"</pre>";

$tabDeParLancer = [
    $De_1 = '<img src="../images/dice-1.png" alt="">',
    $De_2 = '<img src="../images/dice-2.png" alt="">',
    $De_3 = '<img src="../images/dice-3.png" alt="">',
    $De_4 = '<img src="../images/dice-4.png" alt="">',
    $De_5 = '<img src="../images/dice-5.png" alt="">',
    $De_6 = '<img src="../images/dice-6.png" alt="">',
];

    // echo "<img src='../images/dice-1.png' alt=''>", "<br>";
    // $De_2 = '../images/dice-2.png';
    // $De_3 = '../images/dice-3.png';
    // $De_4 = '../images/dice-4.png';
    // $De_5 = '../images/dice-5.png';
    // $De_6 = '../images/dice-6.png';

    echo $tabDeParLancer[array_rand($tabDeParLancer)];
    echo "<br>";

 

// echo "<pre>"; 
// print_r($tabDeParLancer);
// echo"</pre>";

// $arr_length = count($tabDeParLancer);
// for($i=0;$i<$arr_length;$i++){
//     echo $tabDeParLancer[$i];
//     echo "<br>";
// }









echo "----------------***************-----------------<br>";


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Jeu du bateau</h1>

    <p>Processus du jeu par joueur :</p>

    <div class="box_joueur" style="display: flex; gap: 40px; 
    align-items: center; justify-content: center;">
<div class="box_joueur1" style="border: 1px solid blue; padding: 20px;">
    <?php

            $joueur1 = new Joueur(
                id: 1,
                login: 'axel',
                mdp: 123456,
                droit: 'joueur',
            );

            // echo "<table>";
            // echo "<tr>";
            // echo "<th>ID</th>";
            // echo "<th>Login</th>";
            // echo "<th>Mdp</th>";
            // echo "<th>Droit</th>";
            // echo "</tr>";
            // echo "<tr>";
            // echo "<td>".$joueur1->id."</td>";
            // echo "<td>".$joueur1->login."</td>";
            // echo "<td>".$joueur1->mdp."</td>";
            // echo "<td>".$joueur1->droit."</td>";
            // echo "<tr>";
            // echo "</table>";
            $joueur1->inscription();
            $joueur1->connexion();
            $partie->getDisplayDate();
            echo "------------********-----------<br>";
            $jeu = new Jeu(
                regles: "Les règles du jeu sont affichées: <br>
                <<
                - Avoir dasn l'ordre un 6, 5 et 4.
                - 6 est le capitaine<br>
                - 5 est le bateau<br>
                - 4 est l'équipage<br>
                - Alors l'équipage est complet<br>
                - Si équipage complet alors compter les points<br>
                - Si le nombre de point est le plus élevé alors le joueur a gagné.
                >><br>",
            );
            print_r($jeu->displayRules());

            echo "------------********-----------<br>";

            echo "La partie a commencé : ". $partie->dateTime = $partie->getDisplayDate()."<br>";


            $joueur1->lancerPartie();
    ?>
</div>
<div class="box_joueur2" style="border: 1px solid green; padding: 20px;">
     <?php
            $joueur2 = new Joueur(
                id: 2,
                login: 'Jean Dupont',
                mdp: 'azerty',
                droit: 'joueur',
            );


            // echo "<table>";
            // echo "<tr>";
            // echo "<th>ID</th>";
            // echo "<th>Login</th>";
            // echo "<th>Mdp</th>";
            // echo "<th>Droit</th>";
            // echo "</tr>";
            // echo "<tr>";
            // echo "<td>".$joueur2->id."</td>";
            // echo "<td>".$joueur2->login."</td>";
            // echo "<td>".$joueur2->mdp."</td>";
            // echo "<td>".$joueur2->droit."</td>";
            // echo "<tr>";
            // echo "</table>";
    
            $joueur2->inscription();
            $joueur2->connexion();
            // $partie->getDisplayInfoDemarrage();
            echo "------------********-----------<br>";
            $jeu = new Jeu(
                regles: "Les règles du jeu sont affichées: <br>
                <<
                - Avoir dasn l'ordre un 6, 5 et 4.
                - 6 est le capitaine<br>
                - 5 est le bateau<br>
                - 4 est l'équipage<br>
                - Alors l'équipage est complet<br>
                - Si équipage complet alors compter les points<br>
                - Si le nombre de point est le plus élevé alors le joueur a gagné.
                >><br>",
            );
            print_r($jeu->displayRules());

            echo "------------********-----------<br>";

            echo "La partie a commencé : ". $partie->dateTime = $partie->getDisplayDate()."<br>";

            $joueur2->lancerPartie();
     ?>       
</div>
    
</body>
</html>