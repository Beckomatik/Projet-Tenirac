<?php

class Actu {

    // propriétés ou attributs
    private string $title;
    private string $picture;
    private string $accroche;
  
    // fonction/méthode construct
    public function __construct(string $title, string $picture, string $accroche){
        $this->title = $title;
        $this->picture = $picture;
        $this->accroche = $accroche;
    }

   // Méthodes
    public function getTitle():string{
        return $this->title;
    }

   
    public function getPicture():string{
        return $this->picture;
    }

    public function getAccroche():string{
        return $this->accroche;
    }

}

?>