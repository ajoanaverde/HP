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
			case '/HP/VUE/index.php':
				echo '<title>Accueil | L\'univers d\'Harry Potter</title>';
				break;
            case '/HP/VUE/salleBanquets.php':
                echo '<title>L\'école des sorciers | L\'univers d\'Harry Potter</title>';
                break;
			case '/HP/VUE/chambreSecrets.php':
			    echo '<title>La chambre des secrets | L\'univers d\'Harry Potter</title>';
				break;
			case '/HP/VUE/prisonnierAzkaban.php':
				echo '<title>Le prisonnier d\'Azkaban | L\'univers d\'Harry Potter</title>';
				break;
			case '/HP/VUE/coupeDeFeu.php':
				echo '<title>La coupe de feu | L\'univers d\'Harry Potter</title>';
				break;
			case '/HP/VUE/ordreDuPhenix.php':
				echo '<title>L\'Ordre du Phénix | L\'univers d\'Harry Potter</title>';
				break;
			case '/HP/VUE/princeSangMele.php':
				echo '<title>Le Prince de Sang-Mêlé | L\'univers d\'Harry Potter</title>';
				break;
			case '/HP/VUE/reliquesDeLaMort.php':
				echo '<title>Les reliques de la mort | L\'univers d\'Harry Potter</title>';
				break;
			case '/HP/VUE/boutik.php':
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
			case '/HP/VUE/index.php':
				echo 'Ecole De Sorcellerie';
                break;
			case '/HP/VUE/salleBanquets.php':
			    echo 'Accueil Dans La Salle Des Banquets';
                break;
            case '/HP/VUE/chambreSecrets.php':
                echo 'La chambre des secrets';
				break;
			case '/HP/VUE/prisonnierAzkaban.php':
				echo 'Le prisonnier d\'Azkaban';
				break;
			case '/HP/VUE/coupeDeFeu.php':
				echo 'La coupe de feu';
				break;
			case '/HP/VUE/ordreDuPhenix.php':
				echo 'L\'Ordre du Phénix';
				break;
			case '/HP/VUE/princeSangMele.php':
				echo 'Le Prince de Sang-Mêlé';
				break;
			case '/HP/VUE/reliquesDeLaMort.php':
				echo 'Les reliques de la mort';
				break;
            case '/HP/VUE/boutik.php':
                echo 'Bienvenue à la boutique de souvenirs<br>Dervish & Banges';
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
/*	public $a;
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
//			default :
			   	//echo 'Vous n\'�tes nulle part';
//			     echo "-";	//$this->a;
//		}
//	}
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
	public function check_head(){
        $this->a = $_SERVER["REQUEST_URI"];
        $this->b = explode("/", $this->a);
        switch ($this->a) {
			case '/HP/VUE/index.php':
				echo '<title>Accueil | L\'univers d\'Harry Potter</title>';
				break;
            case '/HP/VUE/salleBanquets.php':
                echo '<title>L\'école des sorciers | L\'univers d\'Harry Potter</title>';
                break;
			case '/HP/VUE/ep2.php':
			    echo '<title>La chambre des secrets | L\'univers d\'Harry Potter</title>';
				break;
			case '/HP/VUE/boutik.php':
				echo '<title>La boutique de souvenirs | L\'univers d\'Harry Potter</title>';
				break;
			default :
            echo '<title>Erreur | L\'univers d\'Harry Potter</title>';
		}
    }
	public function check_entete(){
		$this->a = $_SERVER["REQUEST_URI"];
		//echo $this->a;
        switch ($this->a) {
			case '/HP/VUE/index.php':
				echo 'Ecole De Sorcellerie';
                break;
			case '/HP/VUE/salleBanquets.php':
			    echo 'Accueil Dans La Salle Des Banquets';
                break;
            case '/HP/VUE/ep2.php':
                echo 'La chambre des secrets';
                break;
            case '/HP/VUE/boutik.php':
                echo 'Bienvenue à la boutique de souvenirs<br>Dervish & Banges';
				break;
			default :
				echo 'Erreur 404';
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





