<?php

namespace App\Models;

class JeuBateau extends JeuDeDes
{
    /* Définition de constante pour notre jeu
    */
    public const VALEUR_CAPITAINE = 6;
    public const VALEUR_EQUIPAGE = 5;
    public const VALEUR_DE_BATEAU = 4;

    public const NB_DES_BATEAU = 5;
    public const NB_LANCER_BATEAU = 3;

    public function __construct(
        protected bool $a_un_capitaine = FALSE,
        protected bool $a_un_equipage = False,
        protected bool $a_un_bateau = False,
        protected bool $equipage_complet = False,
        
    ){
        parent::__construct(self::NB_DES_BATEAU, self::NB_LANCER_BATEAU);
    }

    public function _get($name){
        return match($name){
            "a_un_capitaine"=>$this->a_un_capitaine,
            "a_un_equipage"=> $this->a_un_equipage,
            "a_un_bateau"=>$this->a_un_bateau,
            "equipage_complet"=>$this->equipage_complet,
            default=>null
        };
    }

    public function _set($name, $value){
        return match($name){
            "a_un_capitaine"=>$this->a_un_capitaine = $value,
            "a_un_equipage"=>$this->a_un_equipage = $value,
            "a_un_bateau"=>$this->a_un_bateau = $value,
            "equipage_complet"=>$this->equipage_complet = $value,
            default =>$this->$name = $value,
        };
    }

    public function traitementDe($De){
        $De = [1,2,3,4,5,6];
        switch($De){
            case 6:
                echo self::VALEUR_CAPITAINE;
                break;
            case 5:
                echo self::VALEUR_EQUIPAGE;
                break;
            case 4:
                echo self::VALEUR_DE_BATEAU;
                break;
            case 3:
                echo 3;
                break;
            case 2:
                echo 2;
                break;
            case 1:
                echo 1;
                break; 
            default:
                echo "Erreur";
                break;

        }
        return $De;
    }


    public function traitementLancer()
    {
        $this->nb_Des--;
    }
   

}