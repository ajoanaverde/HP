<header id="header2">
    <div  class="row">
        <h1 class="titre col-12">Poudlard</h1>
    </div>
    <div class="row">
        <h2 class="titre col-12">
        <?php
            include_once('../CONTROL/UTILS/local.php');
            $local = new LocalVisite;
            $local->check_entete();
        ?>
        </h2>
    </div>
</header>

