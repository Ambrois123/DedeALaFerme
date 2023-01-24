<?php

// namespace App\Models;
class JeuDeDes 
{
    public function __construct(
        public ?int $nb_Des = 5,
        public ?int $nb_Lancer_Des = 3,
        public ?array $tabDeParLancer = null,
    ){}

    public function lancerDes(): void
    {
        $tabDeParLancer = [
            $De_1 = '<img src="../images/dice-1.png" alt="">',
            $De_2 = '<img src="../images/dice-2.png" alt="">',
            $De_3 = '<img src="../images/dice-3.png" alt="">',
            $De_4 = '<img src="../images/dice-4.png" alt="">',
            $De_5 = '<img src="../images/dice-5.png" alt="">',
            $De_6 = '<img src="../images/dice-6.png" alt="">',
        ];
    
            echo $tabDeParLancer[rand(0, count($tabDeParLancer) -1)];
            echo "<br>";

    }
}


