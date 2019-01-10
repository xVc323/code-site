<?php
include('config.php') ;

$sql_1 = 'SELECT * FROM message WHERE id = ' . $_GET['id_message'] ;

if ($nbre_erreur == 0) {
	$retour_sql_1 = @mysql_query($sql_1) ;
	if(mysql_error()) {
		$nbre_erreur = 1 ;
		$erreur = 'Erreur de la requ&ecirc;te : ' . $sql_1 . '<br />' . mysql_error() ;
	}
	else {
		$donnee_sql_1 = mysql_fetch_array($retour_sql_1) ;
	}
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<title>Modification d'un message du livre d'or</title>
	</head>
<body>

<h1>Modification du message</h1>

<p><a href="administration.php">Annuler modification</a></p>

<?php
if($nbre_erreur == 0) {
	echo '<form method="post" action="administration.php?action=modifier"><p>' ;

// on affiche le nom de l'auteur de sujet 
	echo htmlspecialchars($donnee_sql_1['auteur']);

// on affiche la date de la réponse 
	echo 'a post&eacute; le ' , $donnee_sql_1['date'] ;

	echo '<input type="hidden" name="id_message" value="' , $_GET["id_message"] , '" /><br />' ;

// on affiche le message à modifier
	echo '<textarea name="message" rows="8" cols="45">' , htmlspecialchars($donnee_sql_1['texte']) , '</textarea><br />' ;

	if ($donnee_sql_1['reponse_webmaster']!='') {
			echo 'R&eacute;ponse du Webmaster : <br /><textarea name="message" rows="8" cols="45">' , $donnee_sql_1['reponse_webmaster'] , '</textarea>' ;
		}
?>
<br />
<input type="submit" value="modifier" />
<input type="reset" value="re-initialiser" />

</p>
</form>
<?php
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
		if (is_resource($retour_sql_1)) {
			mysql_free_result($retour_sql_1) ;
		}
	}
// on ferme la connexion à la base de données. 
	mysql_close() ;
}
?>