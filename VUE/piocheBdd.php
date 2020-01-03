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
