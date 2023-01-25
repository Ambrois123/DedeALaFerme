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
        protected ?bool $a_un_capitaine = null,
        protected ?bool $a_un_equipage = null,
        protected ?bool $a_un_bateau = null,
        protected ?bool $equipage_complet = null,
        
    ){
        parent::__construct(self::NB_DES_BATEAU,self::NB_LANCER_BATEAU);
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

    public function traitementLancer()
    {
        $this->nb_Des--;
    }

    public function getDisplayInfo(): string
    {
        $info = '';
        if ($this->a_un_capitaine) {
            $info .= 'Le capitaine est là. ';
        } else {
            $info .= 'Le capitaine n\'est pas là. ';
        }
        if ($this->a_un_equipage) {
            $info .= 'L\'équipage est là. ';
        } else {
            $info .= 'L\'équipage n\'est pas là. ';
        }
        if ($this->a_un_bateau) {
            $info .= 'Le bateau est là. ';
        } else {
            $info .= 'Le bateau n\'est pas là. ';
        }
        if ($this->equipage_complet) {
            $info .= 'L\'équipage est complet. ';
        } else {
            $info .= 'L\'équipage n\'est pas complet. ';
        }
        return $info;

    }

}