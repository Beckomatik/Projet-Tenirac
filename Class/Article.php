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

    public function setTitle($titre){
        $this->title = $titre;
    }
    public function getTitle(){
        return $this->title;
    }

    public function setPicture($picture){
        $this->picture = $picture;
    }
    public function getPicture(){
        return $this->picture;
    }

    public function setAccroche($accroche){
        $this->accroche = $accroche;
    }
    public function getAccroche(){
        return $this->accroche;
    }

}


?>