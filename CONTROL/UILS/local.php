<?php
//  echo "ici local";
class LocalVisite{
	public $a;
	public $head;
	public $head_title;
	public $bddconnect;
    public $bdd;
    public $b;
	public $c;
	public $page;

	public function check_head(){
        $this->a = $_SERVER["REQUEST_URI"];
        $this->b = explode("/", $this->a);

        switch ($this->a) {
			case 'index.php':
				echo '<title>Accueil | L\'univers d\'Harry Potter</title>';
				break;
            case 'salleBanquets.php':
                echo '<title>L\'école des sorciers | L\'univers d\'Harry Potter</title>';
                break;
			case 'ep2.php':
			    echo '<title>La chambre des secrets | L\'univers d\'Harry Potter</title>';
				break;
			case 'boutik.php':
				echo '<title>La boutique de souvenirs | L\'univers d\'Harry Potter</title>';
				break;
			default :
            echo '<title>Erreur | L\'univers d\'Harry Potter</title>';
		}
    }
	public function check_entete(){
        $this->a = $_SERVER["REQUEST_URI"];
        $this->b = explode("/", $this->a);
//        var_dump($this->b[4]);
        switch ($this->a){
			case 'index.php':
				echo 'Ecole De Sorcellerie';
                break;
			case 'salleBanquets.php':
			    echo 'Accueil Dans La Salle Des Banquets';
                break;
            case 'ep2.php':
                echo 'La chambre des secrets';
                break;
            case 'boutik.php':
                echo 'Bienvenue à la boutique de souvenirs Dervish & Banges';
				break;
			default :
				echo 'Erreur 404';
		}
    }
/*
	public function check_article() {
        if(!isset($_REQUEST['page'])){
            include_once('./VUE/accueil.php');
        } else {
            $this->page=$_REQUEST['page'];
        $this->a = $_SERVER["REQUEST_URI"];
        switch ($this->a) {
            case 'index.php':
                include_once('./VUE/accueil.php');
                break;
            case 'salleBanquets.php':
                include_once('./VUE/tout.php');
                break;
            case 'gestion':
                include_once('./VUE/gestion.php');
                break;
            default:
                include_once('./VUE/erreur.php');
            }
        }
    }
*/
}
class LocalAdmin{
	public $a;
	public $co;
	public function check_entete(){
		$this->a = $_SERVER["REQUEST_URI"];
        switch ($this->a) {
			case '/PROJETS/aloeilDos/aloeil/ADM/index.php':
			case '/PROJETS/aloeilDos/aloeil/ADM/':
			case '/PROJETS/aloeilDos/aloeil/ADM':
			    echo 'Acc&agrave;s admin.';
			    break;
			//case '/PROJETS/aloeilDos/aloeil/ADM/VUE/topcollect.php':
			case '/PROJETS/aloeilDos/aloeil/ADM/VUE/layout_adm.php':
			case '/PROJETS/aloeilDos/aloeil/ADM/VUE/article_new.php':
			case '/PROJETS/aloeilDos/aloeil/ADM/VUE/article_edit.php':
			    echo 'Admin';
			    break;
			case '/PROJETS/aloeilDos/aloeil/ADM/VUE/article_preview_plus.php':
				echo 'Pr&eacute;visualisation article';
			    break;
			default :
			   	//echo 'Vous n\'�tes nulle part';
			     echo "-";	 //$this->a;
		}
	}
	public function check_head(){
		$this->a = $_SERVER["REQUEST_URI"];
        switch ($this->a){
			case '/PROJETS/aloeilDos/aloeil/ADM/index.php':
			case '/PROJETS/aloeilDos/aloeil/ADM/':
			case '/PROJETS/aloeilDos/aloeil/ADM':
			    echo '<title>Connexion admin</title>';
			    break;
			case '/PROJETS/aloeilDos/aloeil/ADM/VUE/layout_adm.php':
			//case '/PROJETS/aloeilDos/aloeil/ADM/VUE/topcollect.php':
			    echo '<title>Aux doigts et &agrave; l\'oeil | Admin</title>';
			    break;
			case '/PROJETS/aloeilDos/aloeil/ADM/VUE/article_new.php':
			    echo '<title>Aux doigts et &agrave; l\'oeil | Nouvel article</title>';
			    break;
			case '/PROJETS/aloeilDos/aloeil/ADM/VUE/article_preview_plus.php':
			    echo '<title>Pr&eacute;visualiser article</title>';
			    break;
			case '/PROJETS/aloeil/web/ADM/VUE/article_edit.php':
				echo '<title>Aux doigts et &agrave; l\'oeil | Modifier un article</title>';
				break;
			/*case '/PROJETS/aloeil/web/ADM/VUE/index.php':
			    echo 'Groupe Info | Connexion admin';
			    break;
				*/
			/*case '/PROJETS/aloeil/web/site/VUE/finances.php':
			    echo 'Groupe Info | Etats';
			    break;
			case '/PROJETS/aloeil/web/admin/VUE/topcollect.php':
			    echo 'Groupe Info | Accueil admin';
			    break;
				*/
			default :
			   	//echo 'Vous n\'�tes nulle part';
			     echo "-";	//$this->a;
		}
	}
	/*
	*	public function incl_page(){
	*		$this->a = $_SERVER["REQUEST_URI"];
	*		switch ($this->a) {
	*			case '/PROJETS/aloeil/web/ADM/VUE/topcollect.php':
	*				include("../../site/VUE/INCL/indexInfo.php");
	*				break;
	*			default:
	*				# code...
	*				break;
	*		}
	*	}
	*/
	/* public function incl_pubs(){
		$this->a = $_SERVER["REQUEST_URI"];
		switch ($this->a) {
			case '/PROJETS/aloeil/web/site/VUE/index.php':
				include("INCL/pubs.php");
				break;
			/*case '/PROJETS/aloeil/web/site/VUE/sante.php':
				include("INCL/pubsSante.php");
				break;
			case '/PROJETS/aloeil/web/site/VUE/finances.php':
				include("INCL/pubsFinances.php");
				break;
			case '/PROJETS/aloeil/web/site/VUE/etats.php':
				include("INCL/pubsEtats.php");
				break;
				*/
			/* default:
				echo $this->a;
				break;
		}
	}*/
}

class DistantVisite{
	public $a;
	// public $co;
	public $head;
	public $head_title;
	public $bddconnect;
	public $bdd;
	public function bddco_dis(){
		try { 
			$this->bdd = new PDO('mysql:host=sql01.ouvaton.coop;dbname=07039_zetm', '07039_zetm', 'partird5spr0duitsiSu', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
		} catch(Exception $e) {
			die('Erreur : '.$e->getMessage());
		}
	}
	public function check_head(){
		$this->a = $_SERVER["REQUEST_URI"];
        switch ($this->a){
			case '/site/VUE/index.php':
			    echo '<title>Aux doigts et &agrave; l\'oeil</title>';
			    break;
			case '/site/VUE/pubs.php':
			    echo '<title>Nos pubs | Aux doigts et &agrave; l\'oeil</title>';
			    break;
			case '/site/VUE/Ecologie.php':
			case '/site/VUE/ecologie.php':
			    echo '<title>Aux doigts et &agrave; l\'oeil | Ecologie</title>';
			    break;
			case '/site/VUE/vieprivee.php':
			case '/site/VUE/Vieprivee.php':
			case '/site/VUE/ViePrivee.php':
			    echo '<title>Aux doigts et &agrave; l\'oeil | Vie priv&eacute;e</title>';
			    break;
			case '/site/VUE/entraide.php':
			case '/site/VUE/Entraide.php':
			    echo '<title>Aux doigts et &agrave; l\'oeil | Entraide locale</title>';
			    break;
			case '/site/VUE/reflexions.php':
			case '/site/VUE/Reflexions.php':
			    echo '<title>Aux doigts et &agrave; l\'oeil | Reflexions</title>';
			    break;
			case '/site/VUE/apropos.php':
			    echo '<title>Aux doigts et &agrave; l\'oeil | A propos</title>';
			    break;
			case '/site/VUE/fiches.php':
			    echo '<title>Aux doigts et &agrave; l\'oeil | Les fiches</title>';
			    break;
			case '/site/VUE/news.php':
			    echo '<title>Aux doigts et &agrave; l\'oeil | Les newsletters</title>';
			    break;
			case '/site/VUE/humour.php':
			    echo '<title>Humour | Aux doigts et &agrave; l\'oeil</title>';
			    break;
			case '/site/VUE/sujets.php':
			    echo '<title>Tous les sujets | Aux doigts et &agrave; l\'oeil</title>';
			    break;
			case '/site/VUE/bonnesPratiques.php':
			case '/site/VUE/chiffrement.php':
			case '/site/VUE/cloud.php':
			case '/site/VUE/creation.php':
			case '/site/VUE/consoEnergie.php':
			case '/site/VUE/donnees.php':
			case '/site/VUE/espionnage.php':
			case '/site/VUE/gafam.php':
			case '/site/VUE/geolocalisation.php':
			case '/site/VUE/installations.php':
			case '/site/VUE/parasitage.php':
			case '/site/VUE/libertes.php':
			case '/site/VUE/logicielsProprietaires.php':
			case '/site/VUE/mailsListesMails.php':
			case '/site/VUE/materiel.php':
			case '/site/VUE/moteursRecherche.php':
			case '/site/VUE/outilsLibres.php':
			case '/site/VUE/peer2peer.php':
			case '/site/VUE/panneOrdi.php':
			case '/site/VUE/societeNumerique.php':
			case '/site/VUE/savoirFaire.php':
			case '/site/VUE/savoirTheorique.php':
			case '/site/VUE/savoirVivre.php':
			case '/site/VUE/streaming.php':
			case '/site/VUE/telechargement.php':
			case '/site/VUE/expert.php':
				echo '<title>'.$_SESSION["sujet"].' | Aux doigts et &agrave; l\'oeil</title>';
			    break;
			case '/site/VUE/formContact.php':
			    echo '<title>Contact | Aux doigts et &agrave; l\'oeil</title>';
			    break;
			default :
			   	//echo 'Vous n\'�tes nulle part';
			    echo 'ici : '.$this->a;
		}
	}
	public function check_entete(){
		$this->a = $_SERVER["REQUEST_URI"];
		//echo $this->a;
        switch ($this->a) {
			case '/site/VUE/index.php':
				echo '<h3>Notre r&ocirc;le en tant que groupe local d\'entraide et de r&eacute;flexion est de d&eacutecortiquer
				les probl&egrave;mes pos&eacute;s par le num&eacute;rique et de chercher &agrave; y apporter des
				solutions.<br />
				Nous essayons de trouver des pratiques plus "sobres" - respectueuses de l\'environnement - et plus "lucides" 
				- respectueuses de notre vie priv&eacute;e.</h3>';
			    break;
			case '/site/VUE/Ecologie.php':
			case '/site/VUE/ecologie.php':
			    echo '<h3>Menu Ecologie</h3>';
			    break;
			case '/site/VUE/vieprivee.php':
			case '/site/VUE/Vieprivee.php':
			case '/site/VUE/ViePrivee.php':
			    echo '<h3>Menu Vie priv&eacute;e</h3>';
			    break;
			case '/site/VUE/entraide.php':
			case '/site/VUE/Entraide.php':
			    echo '<h3>Menu Entraide locale</h3>';
			    break;
			case '/site/VUE/reflexions.php':
			case '/site/VUE/Reflexions.php':
			    echo '<h3>Menu Reflexions</h3>';
			    break;
			case '/site/VUE/pubs.php':
			    echo '<h3>Nos pubs de sites int&eacute;ressants</h3>';
			    break;
			case '/site/VUE/bonnesPratiques.php':
			case '/site/VUE/chiffrement.php':
			case '/site/VUE/cloud.php':
			case '/site/VUE/creation.php':
			case '/site/VUE/consoEnergie.php':
			case '/site/VUE/donnees.php':
			case '/site/VUE/espionnage.php':
			case '/site/VUE/gafam.php':
			case '/site/VUE/geolocalisation.php':
			case '/site/VUE/installations.php':
			case '/site/VUE/parasitage.php':
			case '/site/VUE/libertes.php':
			case '/site/VUE/logicielsProprietaires.php':
			case '/site/VUE/mailsListesMails.php':
			case '/site/VUE/materiel.php':
			case '/site/VUE/moteursRecherche.php':
			case '/site/VUE/outilsLibres.php':
			case '/site/VUE/peer2peer.php':
			case '/site/VUE/panneOrdi.php':
			case '/site/VUE/societeNumerique.php':
			case '/site/VUE/savoirFaire.php':
			case '/site/VUE/savoirTheorique.php':
			case '/site/VUE/savoirVivre.php':
			case '/site/VUE/streaming.php':
			case '/site/VUE/telechargement.php':
			case '/site/VUE/expert.php':
				echo '<h3>Sujet : '.$_SESSION["sujet"].'</h3>';
			    break; 
			case '/site/VUE/sujets.php':
			    echo '<h3>Tous les sujets</h3>';
			    break;
			case '/site/VUE/apropos.php':
			    echo '<h3>A propos</h3>';
			    break;
			case '/site/VUE/fiches.php':
			    echo '<h3>Sommaire des fiches</h3>';
			    break;
			case '/site/VUE/supports.php':
			    echo '<h3>Supports d\'ateliers</h3>';
			    break;
			case '/site/VUE/news.php':
			    echo '<h3>Sommaire des newsletters</h3>';
			    break;
			case '/site/VUE/humour.php':
			    echo '<h3>C\'est pas parce que c\'est grave qu\'on ne peut pas en rire...</h3>';
			    break;
			case '/site/VUE/formContact.php':
			    echo '<h3>Contactez-nous</h3>';
			    break;
			default :
			   	//echo 'Vous n\'�tes nulle part';
			    echo '<p>ici entete : '.$this->a.'</p>';
		}
	}
}
class DistantAdmin{
	public function check_entete(){
		$this->a = $_SERVER["REQUEST_URI"];
        switch ($this->a) {
			case '/ADM/VUE/layout_adm.php':
			case '/ADM/VUE/article_new.php':
			case '/ADM/VUE/article_edit.php':
			    echo 'Admin';
			    break;
			default :
			   	//echo 'Vous n\'�tes nulle part';
			     echo $this->a;
		}
	}
	public function check_head(){
		$this->a = $_SERVER["REQUEST_URI"];
        switch ($this->a){
			case '/ADM/VUE/layout_adm.php':
			    echo '<title>Aux doigts et &agrave; l\'oeil | Admin</title>';
			    break;
			case '/ADM/VUE/article_new.php':
			    echo '<title>Aux doigts et &agrave; l\'oeil | Nouvel article</title>';
			    break;
			case '/ADM/VUE/article_edit.php':
				echo '<title>Aux doigts et &agrave; l\'oeil | Modifier un article</title>';
				break;
			default :
			     echo $this->a;
		}
	}

}





