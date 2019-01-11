<html>
<head>
<title>Ajout d'un utilisateur</title>
</head>
<body>
<?php
$bdd = new PDO('mysql:host=localhost;dbname=acheter', 'root', '');
$req = $bdd->prepare('INSERT INTO achat2(NOM,Prénom,Adresse,Téléphone,Moyen de paiement désiré)
VALUES(?,?,?,?,?)');
$req->execute(array($_POST['NOM'], $_POST['Prénom'], $_POST['Adresse'], $_POST['Téléphone'], $_POST['Moyen de paiement désiré']));
echo "Vous (".$_POST['Prénom']." ".$_POST['Nom'].") avez bien été enregistré dans nos fichiers et vous allez recevoir un mail de confirmation ainsi qu'un lien de paiement pour votre nouel acquisition.";
?>
</body>
</html>
