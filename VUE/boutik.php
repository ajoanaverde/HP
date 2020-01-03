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

                <figure class="col-2">
                    <figcaption class="btk">
                        <?= $art[1][1]; ?>
                    </figcaption>
                    <div class="container">
                        <!-- Button to Open the Modal -->
                        <button type="button" class="btn btn-primary bold" data-toggle="modal" data-target="#art-2">
                            Voir
                        </button>
                        <!-- The Modal -->
                        <div class="modal" id="art-2" style="width:600px">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                
                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title">
                                            <figcaption>
                                                <?= $art[1][1]; ?>
                                            </figcaption>
                                        </h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    
                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        <img src="<?= $art[1][2]; ?>" width="200px">
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
                    <img src="<?= $art[1][2]; ?>">
                    <p class="left"><?= $art[1][3]; ?></p>
                    <p class="categ"><?= $art[1][4]; ?></p>
                </figure>
                
                <figure class="col-2">
                    <figcaption class="btk">
                        <?= $art[2][1]; ?>
                    </figcaption>
                    <div class="container">
                        <!-- Button to Open the Modal -->
                        <button type="button" class="btn btn-primary bold" data-toggle="modal" data-target="#art-3">
                            Voir
                        </button>
                        <!-- The Modal -->
                        <div class="modal" id="art-3" style="width:600px">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title">
                                            <figcaption>
                                                <?= $art[2][1]; ?>
                                            </figcaption>
                                        </h4>
                                        <button type="button" class="close" data-dismiss="modal">
                                            &times;
                                        </button>
                                    </div>
                                    
                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        <img src="<?= $art[2][2]; ?>" width="200px">
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
                    <img src="<?= $art[2][2]; ?>">
                    <p class="left"><?= $art[2][3]; ?></p>
                    <p class="categ"><?= $art[2][4]; ?></p>
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

            <!--div class="row rayons">
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
            </!--div>

            <div-- class="row rayons">
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
            </div-->
        <?php } ?>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>