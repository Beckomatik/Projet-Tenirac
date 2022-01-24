<?php
require_once("Class/Article.php");

$article1 = new Article("Santé", "images/covid.jpg", "La commune de Tenirac propose des crénaux de vaccinations les mercredi après midi et samedi matin...");
$article2 = new Article("Festivités", "images/marchedenoel.jpg", "Rendez-vous le 17 avril à 10h pour fêter Pâques et chasser les oeufs...");
$article3 = new Article("Travaux", "images/travaux.jpg", "Du 8 au 14 févirer, la rue des fontaines sera en travaux, circulation alternée...");
$article4 = new Article("Exposition", "images/expo.jpg", "La médiathèque accueille jusqu'au 15 avril une exposition consacrée aux...");

$allArticles = [$article1, $article2, $article3, $article4];

?>