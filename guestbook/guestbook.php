<html>
 	 <head>
 	 <title>Mon livre d'or</title>
 	 <!-- Ici on met la fonction javascript qui nous servira à
 	      Valider l'adresse e-mail -->

        <script language="JavaScript">
<!--
function verif(lemail) {
    var arobase = lemail.indexOf("@"); var point = lemail.lastIndexOf(".")
    if((arobase < 3)||(point + 2 > lemail.length)||(point < arobase+3))
        return false
        return true
}

function testform(lenom,mail,comment) {
    if(lenom.value=="") {
        lenom.focus();
        return false
    }
    if(!verif(mail.value)) {
        mail.value="";
        mail.focus();
        return false
    }
    return true
}
//-->
</script>
 	 </head>
 	 <body>
 	 <?php
 	 include('config.inc.php');
 	 // Ici on ouvre une connexion au serveur MySQL
 	 // Voir le tutorial sur ce sujet

 	 // Si le formulaire à été soumis, $ajout vaudra true
 	 if ($ajout) {
 	     // Ici se trouve le script d'ajout du message
 	     // En base de données, guestbook1.php
 	 }

 	 // Ici se trouve le script permettant d'afficher la liste de messages
	 // guestbook3.php

 	 // Ici se trouve le formulaire d'ajout de message
 	 // guestbook2.php

 	 // Et ici on ferme la connexion à la base de données
 	 @mysql_close();
 	 ?>
</body></html>
