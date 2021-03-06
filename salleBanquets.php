<!DOCTYPE html>
<head>
	<meta charset="utf-8">
    <title>Poudlard | Salle Des Banquets</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.dafont.com/fr/harry-p.font">
    <link rel="stylesheet" type="text/css" href="./CSS/stylesBS.css">
</head>
<body id="banquets">
	<div id="home1" class="home homeEp">
        <div class="bg-gris4">
            <header id="header2">
                <div  class="row">
                    <h1 class="titre col-12">Poudlard</h1>
                </div>
                <div class="row">
                    <h2 class="titre col-10 offset-1">Accueil Dans La Salle Des Banquets</h2>
                </div>
            </header>

            <div class="row mb-10" id="carouselEp">
                <div class="col-3" id="siteOff">
                    <a href="https://www.pottermore.com">
                        Site officiel<br>pottermore.com
                    </a>
                </div>
                <div class="col-6 item2" id="videoEp">
                    <figure><!--class="video2"-->
                        <figcaption class="videoEp">
                            Bande annonce <span>Harry Potter à l'école des sorciers [Fr]</span>
                        </figcaption>
                        <div id="videoEp">
                            <video id="videoAccueilBanquets" width="720" height="300" controls 
                                source src="./vid/Harry Potter à l'école des Sorciers - Bande Annonce VF.mp4" type="video/mp4">
                                Texte alternatif
                            </video>
                        </div>
                    </figure>
                </div>
                <div class="col-3" id="liensEp">
                    <div class="row">
                        <a class="liensEp col-10 offset-1" id="lien1Ep" href="ep2.html">Suis la visite</a>
                    </div>
                    <div class="row">
                        <a class="liensEp  col-10 offset-1" id="lienChoixEp" href="choixEp.html">Choisis un épisode</a>
                    </div>
                </div>
            </div>

            <div id="PrezEpisode" class="row">
                <div class="col-10 offset-1">
                    <h2 class="center bold">
                        Bienvenue Nouvel élève de Poudlard !
                    </h2>
                    <p>
                        Tu as reçu ta lettre d'inscription au collège Poudlard, l'Ecole de 
                        Sorcellerie. Tous les professeurs de Poudlard te souhaitent la 
                        bienvenue. Tu verras, Poudlard est comme une grande famille, même si 
                        les élèves sont répartis en 4 "Maisons".
                    </p><p>
                        Poudlard a été construit par 4 grands sorciers : <span class="bold">
                            Godric Gryffondor</span>, <span class="bold">Salazar Serpentard
                            </span>, <span class="bold">Rowena Serdaigle</span> et
                            <span class="bold">Helga Poufsoufle</span>. Mais aucun n'aurait 
                            pu le faire sans les 3 autres. C'est pourquoi, au sein du 
                            collège, tous doivent être unis, quelle que soit leur Maison.
                    </p><p>
                        Durant l'année scolaire, tous les cours sont obligatoires, mais vous 
                        ferez des sorties (la visite du village de Pré-au-Lard, par exemple), 
                        des fêtes au collège, et le tournoi de Quidditch. Le quidditch est 
                        le sport international des sorciers, évidemment on le pratique à 
                        Poudlard. Chaque Maison a son équipe. Un tournoi est organisé au 
                        sein de l'école, et l'équipe vainqueure participe au tournoi 
                        international qui se déroule à la fin de l'année scolaire, juste 
                        avant les BUSE.
                    </p><p>
                        Les BUSE (Brevet Universel de Sorcellerie Elémentaire) valident 
                        votre année d'étude. Au cas où l'idée te prendrait d'essayer de 
                        tricher aux examens, sache que la sanction est l'exclusion 
                        définitive de l'école, et pour les 1è et 2è années, une condamnation 
                        par le Ministère de la Magie pour la pratique non autorisée de la 
                        magie hors des heures de cours.
                    </p><p class="center bold">
                        Tu as compris que les règles sont importantes ici à Poudlard, mais 
                        maintenant, place à la fête et au bon repas !<br>
                        Encore bienvenue à tous et régalez-vous bien !
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
            <?php
                $lines = file('exemple.txt');
                $articles=array();
                for ($x = 0; $x <=  count($lines)-1; $x++) {
                    $articles[] = $lines[$x];
                }
                $num_art[]=array_chunk($articles,4);

                foreach($num_art as $art) { ?>
                <div class="row rayons">
                    <figure class="col-2">
                        <figcaption class="btk">
                            <?= $art[1][1]; ?>
                        </figcaption>
                        <img src="<?= $art[0][2]; ?>">
                        <p><?= $art[0][3]; ?></p>
                    </figure>
                    <figure class="col-2">
                        <figcaption><?= $art[1][1]; ?></figcaption>
                        <img src="<?= $art[1][2]; ?>">
                        <p><?= $art[1][3]; ?></p>
                    </figure>
                    <figure class="col-3">
                        <img>
                        <figcaption class="btk">
                            13
                        </figcaption>
                    </figure>
                    <figure class="col-2">
                        <img>
                        <figcaption class="btk">
                            14
                        </figcaption>
                    </figure>
                    <figure class="col-2">
                        <img>
                        <figcaption class="btk">
                            15
                        </figcaption>
                    </figure>
                </div>
    
                <div class="row rayons">
                    <figure class="col-2">
                        <img>
                        <figcaption class="btk">
                            16
                        </figcaption>
                    </figure>
                    <figure class="col-2">
                        <img>
                        <figcaption class="btk">
                            17
                        </figcaption>
                    </figure>
                    <figure class="col-2">
                        <img>
                        <figcaption class="btk">
                            18
                        </figcaption>
                    </figure>
                    <figure class="col-3">
                        <img>
                        <figcaption class="btk">
                            19
                        </figcaption>
                    </figure>
                    <figure class="col-2">
                        <img>
                        <figcaption class="btk">
                            20
                        </figcaption>
                    </figure>
                </div>

                <div class="row rayons">
                    <figure class="col-2">
                        <img>
                        <figcaption class="btk">
                            21
                        </figcaption>
                    </figure>
                    <figure class="col-3">
                        <img>
                        <figcaption class="btk">
                            22
                        </figcaption>
                    </figure>
                    <figure class="col-2">
                        <img>
                        <figcaption class="btk">
                            23
                        </figcaption>
                    </figure>
                    <figure class="col-2">
                        <img>
                        <figcaption class="btk">
                            24
                        </figcaption>
                    </figure>
                    <figure class="col-2">
                        <img>
                        <figcaption class="btk">
                            25
                        </figcaption>
                    </figure>
                </div>
                <?php } ?>
            </div>
            

            <!--div id="video2">
                <video id="videoAccueilBanquets" width="720" height="300" controls 
                    source src="Harry Potter à l'école des Sorciers - Bande Annonce VF.mp4" type="video/mp4">
                    Texte alternatif
                </video>
            </!--div -->

            
            <p>M</p>
            <p>M</p>
            <p>M</p>
            <p>M</p>
            <p>M</p>
            <p>M</p>
            <p>M</p>
            <p>M</p>
            <p>M</p>
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
<script src="./hp.js"></script>
</body>
</html>



















