<?php
$tab = array();
 
$tab['toto'] = 'la tête à toto';
$tab['titi'] = 'la tête à titi';
$tab['tata'] = 'la tête à tata';
 
//nom du fichier
$monfichier = 'monfichier.txt';
 
//écriture du tableau sérialisé dans le fichier
file_put_contents($monfichier, serialize($tab));
 
//lecture du fichier
$lecture_fichier = file_get_contents($monfichier);
 
// récupère la structure du tableau
$tab_recup = unserialize($lecture_fichier);
 
echo isset($tab_recup['titi']) ? $tab_recup['titi'] : '';
// affiche 'la tête à titi'
?>
/***************    1è version boutik.php   **********/

<div id="main-btk" class="col-10 offset-1">
    <div class="row rayons">
<?php
    $lines = file('exemple.txt');
    $articles=array();
    for ($x = 0; $x <=  count($lines)-1; $x++) {
        $articles[] = $lines[$x];
    }
    $num_art[]=array_chunk($articles,5);
    //print_r($num_art);
    
    foreach($num_art as $art) { ?> ?>
        <figure class="col-2">
            <figcaption class="btk">
                <?= $art[0][1]; ?>
            </figcaption>
            <div class="container">
                <!-- Button to Open the Modal -->
                <a href="localhost/HP/VUE/boutik.php?id=a-<?= $x ?>" 
                target="_blank" rel="noopener noreferrer">
                    Voir
                </a>
                <form action="localhost/HP/VUE/boutik.php?id=a-<?= $x ?>" method="get" target="_blank">
                    <button type="button" class="btn btn-primary bold" data-toggle="modal" data-target="#art-1">
                        Voir
                    </button>
                </form>
                <!-- The Modal -->
                <div class="modal" id="art-1">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        
                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">
                                    <figcaption>
                                        <?= $art[0][1]; ?>
                                    </figcaption>
                                </h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            
                            <!-- Modal body -->
                            <div class="modal-body">
                                <img src="<?= $art[0][2]; ?>" width="200px">
                            </div>
                            
                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <img src="<?= $art[0][2]; ?>">
            <p class="left"><?= $art[0][3]; ?></p>
            <p class="categ"><?= $art[0][4]; ?></p>
        </figure>
    </div>
</div>
    <?php } ?>

/***************    brouillons pourFile  *************/
<?php
//home/morgan/internet/HP/VUE/pourFile.php
//echo $_SERVER['REQUEST_URI'];

$lines = file('exemple.txt');
$articles=array();
for ($x = 0; $x < count($lines); $x++) {
    $articles[] = $lines[$x];
}
$num_art[]=array_chunk($articles,5);
//print_r($num_art);

foreach($num_art as $art) {
    for($x=0;$x<count($articles);$x++) {
        var_dump($x);
            echo $art[$x][1].'<br>';
    }
}   // affiche les noms des articles
/*  ?>
        <figcaption><?=$art?></figcaption>
        <p>Article n°<?=$art?></p>
        <img src="<?=$art?>">
        <p>Descr<?=$art?></p>
        <p>Categ<?=$art?></p>  <?php
//    }
}

/*  For + déterminer et affecter à des variables l'$articleNum et 
la $ligneNum pour chaque ligne  */
/* $lines = file('exemple.txt');
for ($x = 0; $x <=  count($lines); $x++) {

    //  echo count($lines);
}
*/
/*  test for + switch avec tout le html des figure dans chaque cas : marche pas   
$lines = file('exemple.txt');   ?>
<div class="row">
<?php
for ($x = 0; $x <=  count($lines); $x++) {  ?>
<figure class="col-2">  <?php
    switch($x%5) {
        case 0:
            echo $x.'-> id : '.$lines[$x].'<br>';
        break;
        case 1: ?>
            <figcaption class="btk">
                <?= $lines[$x]; ?>
            </figcaption>   <?php
        break;
        case 2: ?>
            <img src="<?= $lines[$x]; ?>">  <?php
        break;
        case 3: ?>
            <p class="left">
                <?= $lines[$x]; ?>
            </p>    <?php
        break;
        case 4: ?>
            <p class="categ">
            <?= $lines[$x]; ?>
        </p>    <?php
        break;
        default:
            echo $x.' -> pas de données<br>';
    }  ?>

          ?>
</figure>
<?php   }   
/*  dernière étape avant d'avoir trouvé, repartir de là.
    il faut ouvrir un nouvel onglet avec l'url +?id=a-<?= art[$x] ?>
        où $x est la ligne 0 : le numéro de l'article.
    Ensuite récupérer le numéro après "-" dans l'url pour afficher le bon 
    article en entier.
*/  /*
$lines = file('exemple.txt');   ?>
<div class="row">
<?php
*/
//$handle = file_get_contents('exemple.txt');
/*
$handle = fopen("./exemple.txt", "r+");
$lines = fgets($handle, 2096);
*/
/*
$lines = file('exemple.txt');
for($x=0;$x<count($lines);$x++) {
    echo ($lines[$x])
}
?>
<figure class="col-2">
    <figcaption class="btk">
        <?= $lines[1]; ?>
    </figcaption>
    <div class="container">
        <!-- Button to Open the Modal -->
        <a href="localhost/HP/VUE/boutik.php?id=a-<?= $x ?>" 
        target="_blank" rel="noopener noreferrer">
            Voir
        </a>
        <form action="localhost/HP/VUE/boutik.php?id=a-<?= $x ?>" method="get" target="_blank">
            <button type="button" class="btn btn-primary bold" data-toggle="modal" data-target="#art-1">
                Voir
            </button>
        </form>
        <!-- The Modal -->
        <div class="modal" id="art-1">
            <div class="modal-dialog">
                <div class="modal-content">
                
                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">
                            <figcaption>
                                <?= $art[0][1]; ?>
                            </figcaption>
                        </h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    
                    <!-- Modal body -->
                    <div class="modal-body">
                        <img src="<?= $art[0][2]; ?>" width="200px">
                    </div>
                    
                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <img src="<?= $art[0][2]; ?>">
    <p class="left"><?= $art[0][3]; ?></p>
    <p class="categ"><?= $art[0][4]; ?></p>
</figure>   <?php

/*
echo $lines[5*2+3];
for ($x = 0; $x < 15; $x++) {
//    echo '<p>'.($x * 2 + 1).'</p>';
    echo '<figure>'.$x, ($x+1), ($x+2) ,($x+3), ($x+4).'</figure><br>';
}
*/
/*
$num_art[]=array_chunk($lines,5);
//print_r($num_art);
foreach($num_art as $art) {
    for ($y=0;$y<=count($num_art);$y++) {
        echo 'article : '.$num_art[$y/5][$y+1].'<br>';
        echo '<img src="'.$num_art[$y/5][$y+2].'"><br>';
    }
}   */
/*    for ($x%5===0; $x <= count($lines); $x++) {
        echo $x%5;
    /*        for($y=$x%5;$y <= 4;$y++) {
                echo $y.'<br>';
    */    /*}
/*
    for ($x = 0; $x <=  count($lines); $x++) {
        
/*        for($y=$x%5;$y <= 4;$y++) {
            echo $y.'<br>';
*//*          ?>
        <figcaption>
            <?php echo $x%5===1?$lines[$x]:'';   ?>
        </figcaption>
        <img src="<?php echo $x%5===2?$lines[$x]:''; ?>" alt="">
<?php } //}   ?>
</figure>   <?php
//    for($y = 0; $y <5; $y++) {
//        echo 'ligne : '.$lines[$x].'<br>';
//    }
//    $articles[] = $lines[$x];
/*  partie html dans laquelle insérer les variables des articles  */ /* ?>
    <figure class="col-2">
        <figcaption class="btk">
            <?php echo $x%5===1?$lines[$x]:'';   ?>
        </figcaption>
        <?php */ /*
            <!-- Button to Open the Modal -->
            <button type="button" class="btn btn-primary bold" data-toggle="modal" data-target="#art-1">
                Voir
            </button>
            <!-- The Modal -->
            <div class="modal" id="art-1">
                <div class="modal-dialog">
                    <div class="modal-content">
                    
                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">
                                <figcaption>
                                    <?php echo $x%5===1?$lines[$x]:'Article non trouvé';   ?>
                                </figcaption>
                            </h4>
                            <button type="button" class="close" data-dismiss="modal">
                                &times;
                            </button>
                        </div>
                        
                        <!-- Modal body -->
                        <div class="modal-body">
                            <img src="<?php echo $x%5===2?$lines[$x]:'Image non trouvée';   ?>" width="200px">
                        </div>
                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">
                                Close
                            </button>
                        </div>
                    </div>
                </div>
            </div>  */  /* ?>
        <img src="<?php echo $x%5===2?$lines[$x]:'';   ?>">
        <p class="left">
            <?php echo $x%5===3?$lines[$x]:'';   ?>
        </p>
        <p class="categ">
            <?php echo $x%5===4?$lines[$x]:'';   ?>
        </p>
    </figure>
<?php   }   ?>
</div>
<?php   */

/*  for + switch, mais ça ne peut qu'afficher les lignes dans l'ordre en suivant, 
    pas choisir la ligne quand on veut ni l'insérer dans du html
$lines = file('exemple.txt');
for ($x = 0; $x <=  count($lines)-1; $x++) {
    if($x%5===2) {
        echo $lines[$x].'<br>';
    }
switch($x%5) {
    case 0:
        echo $x.'-> id : '.$lines[$x].'<br>';
    break;
    case 1:
        echo $x.'-> art : '.$lines[$x].'<br>';
    break;
    case 2:
        echo $x.'-> <img src="'.$lines[$x].'"><br>';
    break;
    case 3:
        echo $x.'-> descr : '.$lines[$x].'<br>';
    break;
    case 4:
        echo $x.'-> categ : '.$lines[$x].'<br><hr><br>';
    break;
} */


/*
$num_art[]=array_chunk($articles,5);
//print_r($num_art);

foreach($num_art as $art) {

for($x=1; $x<=count($lines); $x++) {
    echo $line[$x].'<br>';
}

// Un autre exemple, pour obtenir une page web dans une chaîne. Voir aussi la 
    fonction file_get_contents().
//$html = implode('', file('http://www.example.com/'));

/*  for imbriqués, dernière étape avant d'avoir trouvé comment faire.
    Repartir de là.
$lines = file('exemple.txt');
for ($x = 0; $x <=  count($lines); $x++) {
    for($y = 0; $y <5; $y++) {
        echo 'ligne : '.$lines[$x][$y].'<br>';
    }
//    $articles[] = $lines[$x];
}
*/
//print_r($num_art);

/*  tableau exemple trouvé sur le web
$tableau = array();
foreach ($lines as $line_num => $line) {
//    echo "Line #<b>{$line_num}</b> : " . htmlspecialchars($line) . "<br />\n";
    $tableau.array_push($tableau,$line_num);
}
*/
/*  1è version #boutik figure : en tableau avec index à la mano
$lines = file('exemple.txt');
$articles=array();
for ($x = 0; $x <=  count($lines)-1; $x++) {
    $articles[] = $lines[$x];
}
$num_art[]=array_chunk($articles,5);
//print_r($num_art);

foreach($num_art as $art) { ?>
    <figure>
        <figcaption><?= $art[0][1]; ?></figcaption><br>
        <img src="<?= $art[0][2]; ?>" width="200px">
        <p style="width:200px"><?= $art[0][3]; ?></p>
        <p style="width:200px" class="categ"><?= $art[0][4]; ?></p>
        <div class="container" style="width: 200px">
            <h2>Modal Example</h2>
            <!-- Button to Open the Modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                Open modal
            </button>
            <!-- The Modal -->
            <div class="modal" id="myModal" style="width:600px">
                <div class="modal-dialog">
                <div class="modal-content">
                
                    <!-- Modal Header -->
                    <div class="modal-header">
                    <h4 class="modal-title">
                    <figcaption><?= $art[0][1]; ?></figcaption></h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    
                    <!-- Modal body -->
                    <div class="modal-body">
                        <img src="<?= $art[0][2]; ?>" width="200px">
                        <p style="width:200px"><?= $art[0][3]; ?></p>
                        <p style="width:200px" class="categ"><?= $art[0][4]; ?></p>
                    </div>
                    
                    <!-- Modal footer -->
                    <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                    
                </div>
                </div>
            </div>
            
        </div>
    </figure>
    <figure>
        <figcaption><?= $art[1][1]; ?></figcaption><br>
        <img src="<?= $art[1][2]; ?>" width="200px">
        <p style="width:200px"><?= $art[1][3]; ?></p>
        <p style="width:200px" class="categ"><?= $art[1][4]; ?></p>
    </figure>
<?php   }
  print_r($tableau);
*/
/*  compteur sans date
$fp = fopen("texte.txt", "c+");   // r+
fseek($fp, 0);
$nbvisites = fgets($fp, 0);
$nbvisites++;
//  fseek($fp, 7);
fputs($fp, $nbvisites);
*/
?>
<hr>

<?php

//pourFile.php
//echo getcwd();
//  file_put_contents trouvé sur le web
//On écrit un premier texte dans notre fichier  
//file_put_contents('/home/morgpion/internet/HP/exemple.txt', 'Ecriture dans un fichier');
//On récupère le contenu du fichier
//$texte = file_get_contents('exemple.txt');
//On ajoute notre nouveau texte à l'ancien
//$texte .= "\n**NOUVEAU TEXTE**";
//On écrit tout le texte dans notre fichier
//file_put_contents('exemple.txt', $texte);

/*  compteur aloeil avec date
$ojd=date('ymd');
$fp = fopen("./texte.txt", "r+");   // r+
fseek($fp, 0);
$dateCpt = fgets($fp, 7);
//$chars = $dateCpt.' ';
//echo $dateCpt;
if($ojd == $dateCpt){
    fseek($fp, 7);
    $nbvisites = fgets($fp, 6);
    $nbvisites++;
    fseek($fp, 7);
    fputs($fp, $nbvisites);
} else {
    fseek($fp, 0);
    fputs($fp, $ojd);
    fputs($fp, " ");
    $nbvisites = 1;
    fputs($fp, $nbvisites);
    ftruncate($fp, 8);
}
fseek($fp, 7);
$nbvisites = fgets($fp, 1024);
fclose($fp);
echo '<p style="margin:0">'.$nbvisites.' visites aujourdhui';	
*/






