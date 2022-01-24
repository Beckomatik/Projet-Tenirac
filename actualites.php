<?php include('header.php'); ?>

<main id="main-page">
     
        <!-- les actualités -->
        <section class="actus container">              
            <div id="titre-main">
                <h1 id="titre-contact">Actualités</h1>
            </div>
            <div class="bloc-actus">
                <!-- <article class="une-actu">
                    <a href="actualites.php">
                        <img src="images/covid.jpg" alt="ville de tenirac">
                        <h2>Santé</h2>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laborum, modi recusandae. Sunt dolorem iste dolore nemo hic. Debitis, sed error?</p>
                        <div class="lire-plus">Lire la suite</div>
                    </a>                    
                </article>
                <article class="une-actu">
                    <a href="#">
                        <img src="images/marchedenoel.jpg" alt="ville de tenirac">
                        <h2>Festivités</h2>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laborum, modi recusandae. Sunt dolorem iste dolore nemo hic. Debitis, sed error?</p>
                        <div class="lire-plus">Lire la suite</div>
                    </a>                    
                </article>
                <article class="une-actu">
                    <a href="actualités.php">
                        <img src="images/travaux.jpg" alt="ville de tenirac">
                        <h3>Travaux</h3>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laborum, modi recusandae. Sunt dolorem iste dolore nemo hic. Debitis, sed error?</p>
                        <div class="lire-plus">Lire la suite</div>
                    </a>                    
                </article> -->
                <?php foreach($allArticles as $allArticle) {?>
                <article class="une-actu">
                    <a href="#">
                        <img src="<?= $allArticle->getPicture() ?>" alt="ville de tenirac">
                        <h3><?= $allArticle->getTitle() ?></h3>
                        <p><?= $allArticle->getAccroche() ?></p>
                        <div class="lire-plus">Lire la suite</div>
                    </a>                    
                </article>
                <?php }; ?>

                <!-- Boucle sur les articles de la class Article-->
                
                <a href="actualites.php"><div class="voir-plus">
                    Plus d'actus
                </div></a>
            </div>        
      </section>



<?php include('footer.php'); ?>