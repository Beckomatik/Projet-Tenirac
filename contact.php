<?php include('header.php'); ?>


    <!-- ------------Main---------------- -->

    <main id="contact" class="container">
        <div id="titre-main">
            <h1 id="titre-contact">Contact</h1>
        </div>
        <div class="photo-top"><img src="images/mairie.jpg" alt="mairie de Tenirac"></div>

        <div id="petites-infos">
            <address><i class="fas fa-map-marker-alt"></i>9 rue de la Fontaine<br>56666 Tenirac</address>

            <p id="telephone"><a href="+33297335566"><i class="fas fa-phone"></i> 02 97 33 55 66</a></p>

            <p id="horaires"><i class="far fa-clock"></i>
                Du lundi au vendredi <br>9h-12h et 13h30-17h<br>
                Le samedi matin 9h-12h <br>
                Fermée le dimanche
            </p>
        </div>


        <form action="envoyerform.php" method="post">
            <h2 id="ancre">Nous contacter :</h2>
            <div class="coordonnees">
                <p>
                    <label for="nom">Nom <span class="asterisque">*</span></label>
                    <input type="text" name="nom" placeholder="Tapez votre nom" id="nom">
                </p>
                <p>
                    <label for="prenom">Prénom <span class="asterisque">*</span></label>
                    <input type="text" name="prenom" placeholder="Tapez votre prénom" id="prenom">
                </p>
                <p>
                    <label for="email">E-mail <span class="asterisque">*</span></label>
                    <input type="email" name="email" placeholder="Tapez votre email" id="email">
                </p>


                <p>
                    <label for="message">Votre Message <span class="asterisque">*</span></label>
                </p>
                <p>
                    <textarea name="message" id="message" placeholder="votre message" rows="5"></textarea>
                </p>
            </div>
            <div class="message-rgpd">
                <div class="bloc-rgpd">
                    <p id="clic-rgpd">
                        <p>RGPD <span class="asterisque">*</span></p>
                        <input type="checkbox" name="objet" id="inscription" value="inscription">
                        <label for="inscription" class="petit">J'accepte la politique de confidentialité</label>
                    </p>
                    <p id="confidentiel">
                        En cochant cette case et en soumettant ce formulaire, j'accepte que mes données personnelles
                        soient
                        utilisées pour me recontacter dans le cadre de ma demande indiquée dans ce formulaire. Les
                        informations
                        recueillies ne feront pas l’objet d’un traitement informatique autre que les finalités acceptées
                        ci-dessus.
                    </p>
                </div>

                <div id="envoi">
                    <p id="obligation"><span class="asterisque">✱</span><span id="champs">: champs obligatoires</span></p>
                    <input type="submit" value="Envoyer">
                    <input type="reset" value="Annuler">
                </div>
            </div>
        </form>


        <div class="geomap">
            <h2>Nous trouver :</h2>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1422.1180533931808!2d-3.3110695235099743!3d47.71157928333164!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe33b0f4d5fe84689!2sMairie!5e0!3m2!1sfr!2sfr!4v1637345379537!5m2!1sfr!2sfr"
                allowfullscreen="" loading="lazy"></iframe>
        </div>


    </main>

<?php include('footer.php'); ?>