<?php include('header.php'); ?>

    <!-- ------------ MAIN ------------- -->
    <main id="main-page">
        <!-- présentation de la ville et h1 -->
        <div class="presentation container">
            <H1>Bienvenue sur le site de la ville de Tenirac</H1>
            <p>Idéalement située en Bretagne sud et bordée par la petite mer de Gâvres, Tenirac saura vous accueillir, 
                que se soit pour un jour ou pour toujours. <br>
                Nous mettons tout en oeuvre sur ce site pour que vous puissiez assouvir votre 
                curiosité à propos de notre commune ou si vous recherchez une information en particulier. <br>
                 Et si vous n'y arrivez pas, on est à votre écoute à la page <a href="contact.php" title="Accéder à la page contact">contact</a>. Prenez soin de vous et bonne visite!
            </p>
        </div>
        <div id="faro"><img src="images/phare.jpg" alt="image d'un phare"></div>
        
        <!-- les actualités -->
        <section class="actus container">              
            <h2 class="titre-actus">Actualités</h2>
            <div class="bloc-actus">
                <!-- <article class="une-actu">
                    <a href="actualites.php">
                        <img src="images/covid.jpg" alt="ville de tenirac">
                        <h3>Santé</h3>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laborum, modi recusandae. Sunt dolorem iste dolore nemo hic. Debitis, sed error?</p>
                        <div class="lire-plus">Lire la suite</div>
                    </a>                    
                </article>
                <article class="une-actu">
                    <a href="#">
                        <img src="images/marchedenoel.jpg" alt="ville de tenirac">
                        <h3>Festivités</h3>
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
                </article>
                <article class="une-actu">
                    <a href="#">
                        <img src="images/expo.jpg" alt="ville de tenirac">
                        <h3>Exposition</h3>
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
                
                <a href="actualites.php"><div class="voir-plus">
                    Plus d'actus
                </div></a>
            </div>        
      </section>
        
      
          <!-- liens de navigation -->
        <nav>
            <ul>
                <li><a href="vielocale.php">Vie locale</a></li>
                <li><a href="actualites.php">Actualités</a></li>
                <li><a href="mairie.php">Mairie</a></li>
                <li><a href="decouvrir.php">Découvrir</a></li>              
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>

    </main>


  
    <!-- --------------FOOTER---------------- -->

<?php include('footer.php'); ?>