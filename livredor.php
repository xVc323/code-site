
<!DOCTYPE HTML
    PUBLIC "-//W3C//DTD XHTML 1.0 Strict //EN"
   "http://www.w3.org/TR/xhtml11/DTD/xhtml11-strick.dtd">
<html lang="fr">

<head>
  <title>Fast+ ! Le smartphone le plus rapide au monde</title>
  <meta charset="utf-8">
  <meta name="description" content="TP CSS Thierry ARDIZIO & Patrick CHEURFA">
  <meta name="keywords" content="HTML, XHTML, ICN, TP, CSS">
  <meta name="author" content="Thierry ARDIZIO & Patrick CHEURFA">
  <meta charset="utf-8">
  <link rel="stylesheet" href="monstyle4.css" />
</head>

<header>

  <div class="img">
    <img src="images/bannieretop.png">
  </div>

</header>

<body>


    <div id="menu">
        <ul>
            <li><a href="index.html">Acceuil</a></li>
            <li><a href="cts.html">Caractéristiques</a></li>
            <li><a href="acheter.html">Acheter</a></li>
            <li><a href="panier.php">Panier</a></li>
      <li><a href="livredor.php">Livre d'or</a></li>
        </ul>
    </div>

  <h3> Livredor </h3>
<form method="post" action="livredor.php">
    <div>
    <label>NOM :</label>
    <input type="text" name="NOM" placeholder="exemple : DUPONT" size="20" required>
    </div>

    <div>
    <label>Prenom :</label>
    <input type="text" name="Prenom" size="10" required>
    </div>

    <div>
    <label>Commentaire :</label>
    <input type="text" name="Commentaire" placeholder="Ce produit est super bien !" size="40" required>
    </div>

    <input type="submit" value="Envoyer"/></p>
</form>

<?php

$bdd = new PDO('mysql:host=127.0.0.1;port=8889;dbname=achat', 'root', 'root');

$req = $bdd->prepare('INSERT INTO message (NOM,Prenom,Commentaire) VALUES(?,?,?)');
$req->bindParam(1, $_POST['NOM']);
$req->bindParam(2, $_POST['Prenom']);
$req->bindParam(3, $_POST['Commentaire']);
$req->execute();

$req = $bdd->prepare('select * from message');
$req->execute();

foreach ($req->fetchAll() as $value){
    print ' '.$value['NOM']. '   '. $value['Prenom'] .' '.  $value['Commentaire'] . "<br>";
}


?>

    <div class="mention">
    <p> © Copyright ARDIZIO & CHEURFA </p>
    <p> <b> <u> Informations légales </b> </u> </p>
  </div>

</body>

</html>
