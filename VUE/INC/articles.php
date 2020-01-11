<?php
$lines = file('exemple.txt');
$num_art[]=array_chunk($lines,5);
$test=(count($lines)/5);    ?>
<div class="row">
    <?php
foreach($num_art as $art) {
    for($x=0;$x<$test;$x++) {     ?>
    
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

