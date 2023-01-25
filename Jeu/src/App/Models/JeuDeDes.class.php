<?php

namespace App\Models;

abstract class JeuDeDes extends Jeu
{
    public function __construct(
        protected ?int $nb_Des = 5,
        protected ?int $nb_Lancer_Des = 3,
        protected ?array $tabDeParLancer = null,
        protected ?array $jet_de_des = null,
    ){}

    public function _get($name){
        return match($name){
            "nb_Des"=>$this->nb_Des,
            "nb_Lancer_Des"=>$this->nb_Lancer_Des,
            "tabDeParLancer"=>$this->tabDeParLancer,
            "jet_de_des"=>$this->jet_de_des,
            default =>null,
        };
    }

    public function _set($name, $value){
        return match ($name){
            "nb_Des"=>$this->nb_Des = $value,
            "nb_Lancer_Des"=>$this->nb_Lancer_Des = $value,
            "tabDeParLancer"=>$this->tabDeParLancer = $value,
            "jet_de_des"=>$this->jet_de_des = $value,
            default=>$this->$name=$value,
        };
    }

    public function __toString()
    {
        $str  = "<pre>";
        $str .= "\n\$nb_des : ".var_export($this->nb_Des, true);
        $str .= "\n\$nb_de_lancer : ".var_export($this->nb_Lancer_Des, true);
        $str .= "\n\$tab_de_des_par_lancer : ".var_export($this->tabDeParLancer, true);
        $str .= "\n</pre>";

        return $str;
    }

    abstract protected function traitementLancer();

    public function lancerDes()
    {
        $array_Une_Lance =[];
        for ($i=0; $i < $this->nb_Des; $i++) { 
            $array_Une_Lance [] = rand(1, 6);
        };
        echo "<pre>";
        print_r ($array_Une_Lance);
        echo "</pre>";
        
    }


    public function jouerTour(){
        while($this->nb_Lancer_Des > 0){
            $this->tabDeParLancer[] = $this->lancerDes();
            $this->traitementLancer();
            $this->nb_Lancer_Des--;
        }
        
    }
}





        
        
      
        