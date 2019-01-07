<?php
// définition du nombre de messages par page
$nombreDeMessagesParPage = 5 ;

// on initialise les variables de gestion des erreurs
$nbre_erreur = 0 ;
$erreur = '' ;

// on se connecte à notre base de données
$connexion = @mysql_connect ('localhost', 'root', '') ;

if($connexion) {
	$base = @mysql_select_db('livre_dor',$connexion) ;
	if(!($base)) {
		$nbre_erreur = 1 ;
		$erreur = 'Erreur de s&eacute;lection de la base de donn&eacute;es' ;
	}
}
else {
	$nbre_erreur = 1 ;
	$erreur = 'Erreur de connexion à la base de donn&eacute;es' ;
}
?>