<?php

class Article {

    private string $title;
    private string $picture;
    private string $accroche;
  

    public function __construct(string $title, string $picture, string $accroche){
        $this->title = $title;
        $this->picture = $picture;
        $this->accroche = $accroche;
    }

   
    public function getTitle(){
        return $this->title;
    }

   
    public function getPicture(){
        return $this->picture;
    }

    public function getAccroche(){
        return $this->accroche;
    }

}


?>