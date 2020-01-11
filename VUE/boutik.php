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
        include_once('./INC/articles.php');
                 ?>

            </div>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>