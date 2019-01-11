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
            <li><a href="index4.html">Acceuil</a></li>
            <li><a href="cts.html">Caractéristiques</a></li>
            <li><a href="acheter.html">Acheter</a></li>
            <li><a href="RGPD.html">RGPD</a></li>
      <li><a href="livredor.php">Livre d'or</a></li>
        </ul>
    </div>

  <h3> Acheter le Fast+ </h3>
<form method="post" action="acheter2.php">
<p><label>NOM :</label> : <input type="text" name="NOM" placeholder="exemple : DUPONT" size="20" /></p>
<p><label>Prénom :</label> : <input type="text" name="Prénom" size="10" /></p>
<p><label>Adresse :</label> : <input type="text" name=" Adresse" placeholder="exemple : 12 Rue du Chemin" size="40" /></p>
<p><label>Téléphone :</label> : <input type="text" name="Téléphone" placeholder="exemple : +33 (0)699086633" size="30" /></p>
<p><label for="Moyen de paiement désiré">Sélectionnez votre moyen de paiement que vous désirez utiliser :</label><br>
<select name="Moyen de paiement désiré">
<option value="Paypal">Paypal</option>
<option value="CB">Carte Bancaire</option>
<option value="Skrill"> Skrill </option>
<option value="Chèque"> Chèque </option>
</select></p>
<p> Pourquoi avez-vous choisi Fast+ :<br>
<textarea name="description" rows="3" cols="30"></textarea></p>
<p> Il ne vous reste plus qu'à cliquer sur ce dernier bouton si vous vous sentez prêts à passer à la vitesse supérieure. :<br>
<input type="submit" value="Envoyer"/></p>
</form>


  <div class="mention">
    <p> © Copyright ARDIZIO & CHEURFA </p>
    <p> <b> <u> Informations légales </b> </u> </p>
  </div>

</body>

</html>
