<?php
// d�finition du nombre de messages par page
$nombreDeMessagesParPage = 5 ;

// on initialise les variables de gestion des erreurs
$nbre_erreur = 0 ;
$erreur = '' ;

// on se connecte � notre base de donn�es
$connexion = @mysql_connect ('localhost', 'root', '') ;

if($connexion) {
	$base = @mysql_select_db('livredor',$connexion) ;
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
