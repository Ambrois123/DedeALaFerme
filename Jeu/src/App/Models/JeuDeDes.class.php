<?php

namespace App\Models;

abstract class JeuDeDes extends Jeu
{
    public function __construct(
        protected ?int $nb_Des = 5,
        protected ?int $nb_Lancer_Des = 3,
        protected ?int $De = null,
        protected ?array $tabDeParLancer = null,
        protected ?array $jet_de_des = null,
    ){}

    public function _get($name){
        return match($name){
            "nb_Des"=>$this->nb_Des,
            "nb_Lancer_Des"=>$this->nb_Lancer_Des,
            "tabDeParLancer"=>$this->tabDeParLancer,
            "jet_de_des"=>$this->jet_de_des,
            "De"=>$this->De,
            default =>null,
        };
    }

    public function _set($name, $value){
        return match ($name){
            "nb_Des"=>$this->nb_Des = $value,
            "nb_Lancer_Des"=>$this->nb_Lancer_Des = $value,
            "tabDeParLancer"=>$this->tabDeParLancer = $value,
            "jet_de_des"=>$this->jet_de_des = $value,
            "De"=>$this->De = $value,
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

    abstract protected function traitementDe($De);

    abstract protected function traitementLancer();

    public function lancerDes()
    {
        // $this->traitementDe($this->De);


        $array_Une_Lance =[];
        $stock= 0;
        for ($i=0; $i < $this->nb_Des; $i++) { 
            $array_Une_Lance [] = rand(1, 6);
            If ($array_Une_Lance[$i] !== 6){
                // echo "Il vous reste 2 lancées.";
                // $stock = $stock + ($array_Une_Lance[$i]-1);
                // unset($array_Une_Lance[$i]);
            }else{
                // echo "Vous avez fait un CAPITAINE";
                // $stock = $stock + ($array_Une_Lance[$i]-1);
                // unset($array_Une_Lance[$i]);
            }
        };
        echo "<pre>";
        print_r ($array_Une_Lance);
        echo "</pre>";
        echo $stock;

    }


    public function jouerTour(){
        while($this->nb_Lancer_Des > 0){
            $this->tabDeParLancer[] = $this->lancerDes();
            $this->traitementLancer();
            $this->nb_Lancer_Des--;
        }
        
    }
}





        
        
      
        