<?php
    include_once('./INC/head.php');
?>
<body id="boutik">
<div id="homebtk" class="home">
    <div id="bgBoutik" class="bg-gris4 row">
        <?php
        //$_SERVER['REQUEST_URI']; 
        include_once('./INC/entete.php');
    ?>
        <div id="main-btk" class="col-10 offset-1">
            <div class="row rayons">
        <?php
            $lines = file('exemple.txt');
            $articles=array();
            for ($x = 0; $x < count($lines); $x++) {
                $articles[] = $lines[$x];
            }
            $num_art[]=array_chunk($articles,5);
            foreach($num_art as $art) {
                for($x=0;$x<count($articles);$x++) {     ?>
                
                <figure class="col-2">
                    <figcaption class="btk">
                        <?= $art[$x][1] ?>
                    </figcaption>
                    <div class="container">
                        <!-- Button to Open the Modal -->
                        <a href="localhost/HP/VUE/boutik.php?id=a-<?= ($x+1) ?>" 
                        target="_blank" rel="noopener noreferrer">
                            Voir
                        </a>    <?php   /*
                        <form action="localhost/HP/VUE/boutik.php?id=a-<?= $x ?>" method="get" target="_blank">
                            <button type="button" class="btn btn-primary bold" data-toggle="modal" data-target="#art-1">
                                Voir
                            </button>
                        </form>     */  ?>
                        <!-- The Modal -->
                        <div class="modal" id="art-1">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                
                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title">
                                            <figcaption>
                                                <?=$art[$x][1];?>
                                            </figcaption>
                                        </h4>
                                        <button type="button" class="close" data-dismiss="modal">
                                            &times;
                                        </button>
                                    </div>
                                    
                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        <img src="<?=$art[$x][2];?>" width="200px">
                                    </div>
                                    
                                    <!-- Modal footer -->
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">
                                            Close
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <img src="<?=$art[$x][2];?>">
                    <p class="left"><?= $art[$x][3]; ?></p>
                    <p class="categ"><?= $art[$x][4]; ?></p>
                </figure>       <?php
                }
            }     ?>

            </div>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>