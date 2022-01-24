<?php

class Article {

    private int $humeur;
    private int $faim;
    private int $energie;
    private string $nom;

    public function __construct(int $humeur, int $faim, int $energie, string $nom = ""){
        $this->humeur = $humeur;
        $this->faim = $faim;
        $this->energie = $energie;
        $this->nom = $nom;
    }

}

?>