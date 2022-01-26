<?php
require_once("Class/Actu.php");

$actu1 = new Actu("Santé", "images/covid.jpg", "La commune de Tenirac propose des crénaux de vaccinations les mercredi après midi et samedi matin...");
$actu2 = new Actu("Festivités", "images/marchedenoel.jpg", "Rendez-vous le 17 avril à 10h pour fêter Pâques et chasser les oeufs...");
$actu3 = new Actu("Travaux", "images/travaux.jpg", "Du 8 au 14 février, la rue des fontaines sera en travaux, circulation alternée...");
$actu4 = new Actu("Exposition", "images/expo.jpg", "La médiathèque accueille jusqu'au 15 avril une exposition consacrée aux...");

$allActus = [$actu1, $actu2, $actu3, $actu4];

?>