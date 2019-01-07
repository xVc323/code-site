<html>
<head>
	<META http-EQUIV="Refresh" CONTENT="1; url=http://www.votresite.com/livredor.php">
	<title>Livre d'or</title>
</head>
<body>
<?php
global $pseudo;
global $commentaire;
global $email;

//On récupère les variables du formulaire
$pseudo = $HTTP_POST_VARS['pseudo'];
$commentaire = $HTTP_POST_VARS['commentaire'];

if ($HTTP_POST_VARS['email']!='') {
	$email = $HTTP_POST_VARS['email'];
}

//On récupère la date
$date =   date("j");
     if (strlen($date)    <   2)  {   $date =   "0".$date;    }
     $date .=  date("-m-Y");

//On définit un nom de fichier (date_pseudo_noaemail)
$nom = "$date"."_$pseudo"."_noaemail";
//On le crée (avec l'option ériture)
$fp = fopen($nom.'.txt','w+');
//On se place en début de fichier
fseek($fp,0);
//On écrit l'e-mail à l'intérieur
fputs($fp,$email);
//On le ferme
fclose($fp);

//On définit un nom de fichier (date_pseudo_nobcommentaire)
$nom = "$date"."_$pseudo"."_nobcommentaire";
//On le crée (avec l'option ériture)
$fp = fopen($nom.'.txt','w+');
//On se place en début de fichier
fseek($fp,0);
//On écrit le commentaire à l'intérieur
fputs($fp,$commentaire);
//On le ferme
fclose($fp);

mail("vous@votresite.com","Un commentaire dans le livre dor","Un commentaire a été inséré dans le livre d'or de votre site","From:robot-livredor@votresite.com\nReply-To: no@reply.com");
?>
</body>
</html>