<HTML>
<HEAD>
	<TITLE>Livre d'or</TITLE>
</HEAD>
<BODY background="images/filigrane.bmp" bgproperties="fixed">
<H1>Livre d'or</H1>
<table border="0" width="100%">
<a href="/Volumes/Macintosh HD/Users/patrickcheurfa/Library/Mobile Documents/com~apple~CloudDocs/ICN - Bachelor 2/ICN - Semestre 3/Informatique de gestion/site/code-site/livredor/livredor_enregistrer.php" class=lien>Insérer un commentaire</a>
<?php
//on ouvre le dossier
$dossier = "/Volumes/Macintosh HD/Users/patrickcheurfa/Library/Mobile Documents/com~apple~CloudDocs/ICN - Bachelor 2/ICN - Semestre 3/Informatique de gestion/site/code-site/livredor/";
$dir = opendir("$dossier");
//Pendant que la variable file peut prendre la valeur de readdir($dir)
While ($file=readdir($dir)) {
	//on demande le type du fichier (lettres a partir du point)
	$filetype = strstr("$file",".");
	//si le fichier est un document texte
	if ($filetype=='.txt') {
		//On récupère les données inclues dans le nom (pseudo,date d'écriture, commentaire/email)
		$date_ecrit=strtok($file,'_');
		$pseudo_2=strtok('_');
		$type=strtok('_');
		//Si c'est un fichier contenant l'e-mail
		if ($type=="aemail.txt") {
			echo("<TR><TD colspan=\"2\"><HR></TD></TR><TR><TD valign=top bgcolor=\"#99CCFF\">$pseudo_2</TD><TD valign=top>$date_ecrit");
			//on l'ouvre (dans le dossier 'livredor'),
			$fichier = "$dossier"."$file";
			$fpe = fopen("$fichier","r+");
			//et on récupère le contenu du fichier (pas besoin de tester la fin du fichier, un e-mail tient sur une ligne)
			$size_email=filesize("$fichier");
			$size_email++;
			$email = fgets($fpe,$size_email);
			stripslashes($email);
			fclose($fpe);
			if ($email) {
				echo " <a href=\"mailto:$email\" class=lien><img src=\"images/envoyer.bmp\" border=\"0\"></img></TD>";
			}
		//Si c'est un fichier contenant le commentaire
		} else if ($type=="bcommentaire.txt") {
			//on l'ouvre (dans le dossier 'livredor'),
			$fichier = "$dossier"."$file";
			$fpcomm = fopen("$fichier","r+");
			//et on insere le contenu du fichier dans la variable commentaire, en testant la fin du fichier.
			while (!feof($fpcomm)) {
			//Si c'est un fichier contenant les commentaires
			if ($commentaire) {
				$commentaire = "$commentaire"."<br>";
			}
			$size_comm=filesize("$fichier");
			$size_comm++;
			$commentaire_part = "$commentaire".fgets($fpcomm,$size_comm);
			$commentaire = "$commentaire_part";
			}
			//On enlève les anti-slashes, qui perturbent tout
			stripslashes($commentaire);
			//On ferme le fichier
			fclose($fpcomm);
			echo "</TR><TR><TD></TD><TD valign=top>$commentaire</TD></TR>";
			$commentaire='';
		}
	}
}
closedir($dir)
?>
</table>
</BODY>
</HTML>
