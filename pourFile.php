<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
<link rel="stylesheet" href="style.css">
<title>Title</title>
</head>
<body>

<?php

$lines = file('exemple.txt');
//  $tableau = array();
/*
foreach ($lines as $line_num => $line) {
//    echo "Line #<b>{$line_num}</b> : " . htmlspecialchars($line) . "<br />\n";
    $tableau.array_push($tableau,$line_num);
}
*/
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
<?php   }   ?>


<?php
//  print_r($tableau);

/*
$fp = fopen("texte.txt", "c+");   // r+
fseek($fp, 0);
$nbvisites = fgets($fp, 0);
$nbvisites++;
//  fseek($fp, 7);
fputs($fp, $nbvisites);
*/
?>
<hr>
<!--

-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>


<?php

//pourFile.php

//echo getcwd();
//  file_put_contents
//On écrit un premier texte dans notre fichier  
//file_put_contents('/home/morgpion/internet/HP/exemple.txt', 'Ecriture dans un fichier');
            
//On récupère le contenu du fichier
//$texte = file_get_contents('exemple.txt');

//On ajoute notre nouveau texte à l'ancien
//$texte .= "\n**NOUVEAU TEXTE**";

//On écrit tout le texte dans notre fichier
//file_put_contents('exemple.txt', $texte);

/*
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

?>



