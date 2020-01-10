<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
<link rel="stylesheet" href="./CSS/stylesBS.css">
<link rel="stylesheet" href="./CSS/stylesBtk.css">
<title>pour file</title>
</head>
<body class="container">
    <h1>tests boutik</h1>
<?php
//home/morgan/internet/HP/VUE/pourFile.php
//echo $_SERVER['REQUEST_URI'];

//  200104
$lines = file('exemple.txt');
$num_art[]=array_chunk($lines,5);
$test=(count($lines)/5);    ?>
<div class="row">
    <?php
foreach($num_art as $art) {
    for($x=0;$x<$test;$x++) {     ?>
    <figure class="col-2 offset-1 mx-3">
        <p>article N°<?=$art[$x][0]?></p>
        <figcaption><?=$art[$x][1]?></figcaption>
        <img src="<?=$art[$x][2]?>" style="max-width:200px">
        <p><?=$art[$x][3]?></p>
        <p>Catégorie : <?=$art[$x][4]?></p>
    </figure>     <?php
    }
}     ?>
</div>
<?php   /*
        <figcaption><?=$art?></figcaption>
        <p>Article n°<?=$art?></p>
        <img src="<?=$art?>">
        <p>Descr<?=$art?></p>
        <p>Categ<?=$art?></p>  <?php
//    }
}


?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>





