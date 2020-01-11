<?php
    include_once('./INC/head.php');
?>
<body id="secrets">
	<div id="home3" class="home homeEp">
        <div class="bg-gris4">
            <?php
                include_once('./INC/entete.php');
            ?>
            <div class="row mb-10" id="carouselEp">
                <div class="col-3" id="siteOff">
                    <a href="https://www.pottermore.com">
                        Site officiel<br>pottermore.com
                    </a>
                </div>
                <div class="col-6 item2" id="videoEp">
                    <figure><!--class="video2"-->
                        <figcaption class="videoEp">
                            Bande annonce <span>Harry Potter et le Prisonnier d'Azkaban [Fr]</span>
                        </figcaption>
                        <div id="videoEp">
                            <video id="videoAccueil" width="" height="300" controls 
                                source src="./vid/Harry potter et le prisonnier d'azkaban (VF) - Bande Annonce.mp4" type="video/mp4">
                                Votre navigateur ne peut pas lire cette vidéo
                            </video>
                        </div>
                    </figure>
                </div>
                <div class="col-3" id="liensEp">
                    <div class="row">
                        <a class="liensEp col-10 offset-1" id="lien1Ep" href="coupeDeFeu.php">
                            Suis la visite :<br>
                            Harry Potter et la Coupe de Feu
                        </a>
                    </div>
                    <div class="row">
                        <a class="liensEp  col-10 offset-1" id="lienChoixEp" href="choixEp.php">Choisis un épisode</a>
                    </div>
                </div>
            </div>

            <div id="PrezEpisode" class="row">
                <h2 class="center bold">
                    Vous entrez en 3è année à Poudlard !
                </h2>
                <div class="col-8 offset-2">
                    <p>
                        Vous avez sans doute entendu la nouvelle de l'évasion de 
                        <span class="bold">Sirius Black</span> de la prison d'Azkaban 
                        durant l'été.
                        Afin d'assurer votre sécurité, des détraqueurs feront des rondes 
                        autour du château de Poudlard. Mais rassurez-vous, aucun d'eux 
                        n'a l'autorisation de s'introduire à l'intérieur, ni de 
                        s'approcher des élèves.
                    </p><p>
                        Cette année, votre professeur de défense contre les forces du 
                        mal sera <span class="bold">Remus Lupin</span>.
                    </p><p>
                        Les professeurs et moi ferons notre possible pour que cette 
                        année se passe au mieux, et que la présence des 
                        détraqueur ne soit pas visible. 
                    </p><p class="center bold">
                        Pour le moment, profitez de ce repas de fête, et bon retour à 
                        Poudlard !
                    </p>
                </div>
            </div>

            <hr>

            <div class="row" id="entreesMaisons">
                <div class="col-3" id="gridItem7">
                    <h4 class="emblemes" id="gryff">
                        <a href="#">
                            <img src="emblemes/gryph_final.png" alt="Emblême Gryffindor" height="445px">
                        </a>
                    </h4>
                </div>
                <div class="col-3" id="gridItem8">
                    <a href="#">
                        <h4 class="emblemes" id="slyth">
                            <img src="emblemes/slyth_final.png" alt="Emblême Slytherin" height="445px">
                        </h4>
                    </a>
                </div>  
                <div class="col-3" id="gridItem9">
                    <a href="#">
                        <h4 class="emblemes" id="huff">
                            <img src="emblemes/raven_final.png" alt="Emblême Hufflepuff" height="445px">
                        </h4>
                    </a>
                </div>
                <div class="col-3" id="gridItem10">
                    <a href="#">
                        <h4 class="emblemes" id="rav">
                            <img src="emblemes/huff_final.png" alt="Emblême Ravenclaw" height="445px">
                        </h4>
                    </a>
                </div>
            </div>

            <a href="boutik.php">
                <img id="enseigneBoutik" src="./IMG/copie-poudlardExpress4.png">
            </a>

            <div id="prezBoutik">
                <div class="row rayons">
                <?php
                include_once('./INC/articles.php');
                ?>
    
            </div>

            <p id="FooterLienShop" class="text-center">
                <a href="https://www.harrypotterplatform934.com/" target="_blank">
                    La vraie boutique officielle
                </a>
            </p>
        </div>
    </div>

<!--form action="salleDeBanquet.php" id="formEntree" method="GET">
    <label for="motDePasse">Donnez le mot de passe :</label>
    <input type="password" name="motDePasse" id="motDePasse"><br>
    <button type="submit" name="entrer" id="entrer">Tentez d'entrer</button>
</!--form -->

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="./JS/hp.js"></script>
</body>
</html>



















