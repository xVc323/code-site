<?php
include('config.php') ;

//on vérifie si $_GET['page']  existe
if (isset($_GET['page'])) {
	$page = $_GET['page'] ;
}
else {
	$page = 1 ;
}

//on verifie si $_GET['action'] existe et sa valeur
if (isset($_GET['action']) AND ($nbre_erreur==0)) {
	if ($_GET['action'] == 'supprimer') {
		//On efface le message
		$sql_1 = 'DELETE FROM message WHERE id=' . $_GET['id_message'] ;
		}
	else if ($_GET['action'] == 'modifier') {
		//On modifie le message
		if (get_magic_quotes_gpc()==1) {
			$message = mysql_real_escape_string(stripslashes($_POST['message'])) ;
			$reponse_webmaster = mysql_real_escape_string(stripslashes($_POST['reponse_webmaster'])) ;
		}
		else{
			$message = mysql_real_escape_string($_POST['message']) ;
			$reponse_webmaster = mysql_real_escape_string($_POST['reponse_webmaster']) ;
		}
		$sql_1 = 'UPDATE message SET texte = "'. $message .'" , reponse_webmaster = "'. $reponse_webmaster .'"WHERE id = '. $_POST['id_message'] .' ;' ;
	}
	$retour = mysql_query($sql_1) ;
	if(mysql_error()) {
			$nbre_erreur = 1 ;
			$erreur = 'Erreur de la requ&ecirc;te' . $sql . '<br />' . mysql_error() ;
		}
}

//on compte le nombre de messages présents dans la base
if ($nbre_erreur == 0) {
	$sql_2 = 'SELECT COUNT(*) AS nbre_entrees FROM message;' ;
	$retour_sql_2 = @mysql_query($sql_2) ;
	if(mysql_error()) {
		$nbre_erreur = 1 ;
		$erreur = 'Erreur de la requ&ecirc;te : ' . $sql_2 . '<br />' . mysql_error() ;
	}
	else {
		$donnee_sql_2 = mysql_fetch_array($retour_sql_2) ;
		$nombre_messages = $donnee_sql_2['nbre_entrees'] ;
	}
}

// préparation de la requete  
$sql_3 = 'SELECT * FROM message ORDER BY id DESC LIMIT '. (($page - 1) * $nombreDeMessagesParPage) .', '.($nombreDeMessagesParPage) .';' ;  

// on lance la requête (mysql_query) et on impose un message d'erreur si la requête ne se passe pas bien (or die)  
if ($nbre_erreur == 0) {
	$retour_sql_3 = @mysql_query($sql_3) ;
	if(mysql_error()) {
		$nbre_erreur = 1 ;
		$erreur = 'Erreur de la requ&ecirc;te : ' . $sql_3 . '<br />' . mysql_error() ;
	}
}  

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<title>Administration du livre d'or</title>
	</head>
	<body>

	<h1>Administration du livre d'or</h1>

	<p><a href="../">retour au livre d'or</a></p>

<?php
echo '<p>page : ' , $page , '</p><hr />' ;

if($nbre_erreur == 0) {
// on va scanner tous les tuples un par un
	while ($donnee_sql_3 = mysql_fetch_array($retour_sql_3)) {
// on affiche le nom de l'auteur de sujet
		echo '<p>' , htmlspecialchars($donnee_sql_3['auteur']);
		
		echo ' (' , $donnee_sql_3['mail'] , ') ' ;
		
// on affiche la date de la réponse 
		echo ' le ' , $donnee_sql_3['date'] ;
		
//On affiche la localisation si elle est rempli
		if ($donnee_sql_3['localisation'] != '') {
			echo ' de ' , $donnee_sql_3['localisation'] ;
		}
		
		echo '</p><p>' , nl2br(htmlspecialchars($donnee_sql_3['texte'])) , '</p>' ;
		
		if ($donnee_sql_3['reponse_webmaster']!='') {
			echo '<p>R&eacute;ponse du Webmaster : </p><p>' , $donnee_sql_3['reponse_webmaster'] , '</p>' ;
		}
// Menu d'édition des messages
?>
<p><a href="modifier.php?id_message=<?php echo $donnee_sql_3['id']; ?>">Modifier le message</a>
<a href="repondre.php?id_message=<?php echo $donnee_sql_3['id']; ?>">R&eacute;pondre au message</a>
<a href="administration.php?action=supprimer&amp;id_message=<?php echo $donnee_sql_3['id']; ?>"
onclick="if (window.confirm('Vous &ecirc;tes sur de vouloir supprimer le message ?'))    
                                   {return true;}
                else {return false;}">Supprimer le message</a></p>
				<hr />
<?php

	}
	$i = 1;
// Lien vers les pages du livre d'or si on a plus de messages que le nombre maximum par page
	if($nombre_messages > $nombreDeMessagesParPage) {
		echo '<p>' ;
		do {
			echo '<a href="administration.php?page=' , $i.'">' , $i , '</a> ' ;
			$i = $i + 1 ;
		} while ($nombre_messages > (($i - 1) * $nombreDeMessagesParPage)) ;
		echo '</p>' ;
	}

}
else {
	echo '<p>Il y a une erreur : <br />' , $erreur , '</p>' ;
}
?>
	</body>
</html>
<?php
if($connexion) {
	if($base) {// on libère l'espace mémoire alloué pour ces requêtes
		if (is_resource($retour_sql_2)) {
			mysql_free_result($retour_sql_2) ;
		}
		if (is_resource($retour_sql_3)) {
			mysql_free_result($retour_sql_3) ;
		}
	}
// on ferme la connexion à la base de données. 
	mysql_close() ;
}
?>