<?php

class JeuBateau 
{
    public function __construct(
        public ?bool $a_un_capitaine = null,
        public ?bool $a_un_equipage = null,
        public ?bool $a_un_bateau = null,
        public ?bool $equipage_complet = null,
    ){}

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