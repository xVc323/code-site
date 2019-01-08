<html>
<head>
  <META http-equiv="Content-Language" content="fr">
  <META http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
  <META NAME="Author" CONTENT="L'Equipe PHPDébutant.org (webmaster@phpdebutant.org)">
  <META name="Description" content="Apprendre le PHP par l'exemple, facilement et simplement. Réservé d'abord aux débutants.">
  <META name="Keywords" content="php4, php3, php, mysql, débuter, programmes, php2, dynamiques, programmation, webmasters, webmestres, developpeurs, tutoriaux, tutorial, tutoriels, scripts, trucs, astuces, trucs et astuces, downloads, faq, telechargements, phpmyadmin,tutorial">
  <META NAME="Identifier-URL" CONTENT="http://www.phpdebutant.org">
  <META NAME="Date-Creation-yyyymmdd" content="20000910">
  <META NAME="Robots" CONTENT="index,follow,all">
  <META NAME="revisit-after" CONTENT="3 days">
  <META NAME="Reply-to" CONTENT="webmaster@phpdebutant.org">
  <meta name="verify-v1" content="oUNhyTBKkYdvH9/mzDLEKw3pI3WqXNIFY46N3KBRXeg=" />
  <LINK REL=stylesheet TYPE="text/css" HREF="system/templates/css/css_marron.css">
  <title>Bienvenue sur PHP Débutant</title>

<SCRIPT LANGUAGE="JavaScript">
function addSidebar() {
      if ((typeof window.sidebar == "object") && (typeof window.sidebar.addPanel == "function"))
      {
	 window.sidebar.addPanel ("phpDebutant.org","http://www.phpdebutant.org/article83.xml","");
      }
      else
      {
	 var rv = window.confirm ("Pour utiliser la Sidebar phpdebutant, vous devez possedez un navigateur comme Mozilla ou Netscape 6" + "Voulez-vous téléchargez Mozilla ? :-)");
	 if (rv)
	    document.location.href = "http://www.mozilla.org";
      }
   }
 </SCRIPT>
</head>


<BODY TOPMARGIN="0" LEFTMARGIN="0" TEXT="#000000" MARGINHEIGHT="0" MARGINWIDTH="0" MARGINRIGHT="0" class="background">
<div style="width: 0px; height: 0px; display: none; padding: 0; margin: 0;">
<a href="http://www.wdmedia-hebergement.net/" target="_blank" title="Hébergement du site en PHP et Mysql par WDMédia-hébergement" class="hebergement">Hébergement du site en PHP et Mysql par WDMédia-hébergement</a>
</div>
<div style="padding:1px;">
	<div style="padding:1px;" class="bordure">
			<table border="0" cellpadding="1" cellspacing="0" width="100%" class="fond_menu" height="60">
				<tr>
					<td width="33%"><a href="http://vpontier.free.fr"><img src="system/images/elephpants/logo_marron.gif" border=0 alt="Vous aussi adpotez les éléPHPants de Vincent Pontier !"></a></td>
					<td width="33%" valign="middle" align="center">
						<!--/*
  *
  * Revive Adserver Javascript Tag
  * - Generated with Revive Adserver v3.2.2
  *
  */-->
<script type='text/javascript'><!--//<![CDATA[
   var m3_u = (location.protocol=='https:'?'https://bannieres.wdmedia.net/www/sendit/ajs.php':'http://bannieres.wdmedia.net/www/sendit/ajs.php');
   var m3_r = Math.floor(Math.random()*99999999999);
   if (!document.MAX_used) document.MAX_used = ',';
   document.write ("<scr"+"ipt type='text/javascript' src='"+m3_u);
   document.write ("?zoneid=11");
   document.write ('&amp;cb=' + m3_r);
   if (document.MAX_used != ',') document.write ("&amp;exclude=" + document.MAX_used);
   document.write (document.charset ? '&amp;charset='+document.charset : (document.characterSet ? '&amp;charset='+document.characterSet : ''));
   document.write ("&amp;loc=" + escape(window.location));
   if (document.referrer) document.write ("&amp;referer=" + escape(document.referrer));
   if (document.context) document.write ("&context=" + escape(document.context));
   if (document.mmm_fo) document.write ("&amp;mmm_fo=1");
   document.write ("'><\/scr"+"ipt>");
//]]>--></script><noscript><a href='http://bannieres.wdmedia.net/www/sendit/ck.php?n=a4fdaebd&amp;cb=1261561' target='_blank'><img src='http://bannieres.wdmedia.net/www/sendit/avw.php?zoneid=11&amp;cb=15616846541654&amp;n=a4fdaebd' border='0' alt='' /></a></noscript>

					</td>
					<td width="33%" valign="top" align="right">
						&nbsp;
					</td>

				</tr>
			</table>
	</div>
</div>


<!-- MENU HAUT ------------------------------------------------------------------------------>
<div style="padding:1px;padding-bottom:2px;">
	<div style="padding-left:1px;" class="bordure">
		<div style="width:100%;text-align:center;font-size:16px;" class="fond_menu">
			<a href="index.php" class="menu8">News</a> |
			<a href="article115.php" class="menu8">Documentations</a> |
			<a href="theme19.php" class="menu8">Astuces</a> |
			<a href="annuaire20.php" class="menu8">Téléchargements</a> |
			<a href="http://forum.phpdebutant.org/" class="menu8">Forum</a> |
			<a href="article15.php" class="menu8">Chat</a> |
			<a href="article19.php" class="menu8">Wall</a> |
			<a href="livredor1.php" class="menu8">Livre d'or</a> |
			<a href="forum3.php" class="menu8">Suggestions</a> |
			<a href="annuaire32.php" class="menu8">Liens</a> |
			<a href="article123.php" class="menu8">Stats</a> |
			<a href="article12.php" class="menu8">Contact</a> |
			<a href="article80.php" class="menu8">RSS / Sidebar</a> |
			<a href="article140.php" class="menu8">Association</a>
		</div>
	</div>
</div>

<table border="0" cellpadding="0" cellspacing="0" width="100%">
	<tr>
		<td class=m10 width="130" valign="top">
			<table border="0" cellpadding="1" cellspacing="0" width="130" class="bordure">
				<tr>
					<td class=m10 width="130" valign="top">
						<table border="0" cellpadding="0" cellspacing="0" width="130" class="fond_menu">
							<tr>
								<td class=m10 width="130" valign="top">
									<table border="0" cellspacing="0" cellpadding="0" width="100%">
										<!-- Concours  -->
										<tr>
											<td width="100%" class="color_titre_menu" align="center" height="20" valign="middle">
												<div class="color_titre_menu">CONCOURS</div>
											</td>
										</tr>
										<tr>
											<td>&nbsp;</td>
										</tr>
										<tr>
											<td width="100%" class="menu8" height="14">
												&nbsp;&nbsp;<a href="article125.php" class="menu8">Une bannière pour</a><br />
												&nbsp;&nbsp;<a href="article125.php" class="menu8">PHPDébutant (fini)</a>
												&nbsp;&nbsp;[<a href="article126.php" class="menu8">résultats</a>]
											</td>
										</tr>
										<tr>
											<td>&nbsp;</td>
										</tr>
										<!-- + DE PHP  -->
										<tr>
											<td width="100%" class="color_titre_menu" align="center" height="20" valign="middle">
												<div class="color_titre_menu">PLUS DE PHP</div>
											</td>
										</tr>
										<tr>
											<td>&nbsp;</td>
										</tr>
										
										<tr>
											<td width="100%" class="menu8" height="14">
												&nbsp;&nbsp;<a href="article11.php" class="menu8"><nobr>Array</nobr></a>
											</td>
										</tr>
										
										<tr>
											<td width="100%" class="menu8" height="14">
												&nbsp;&nbsp;<a href="article109.php" class="menu8"><nobr>Templates</nobr></a>
											</td>
										</tr>
										
										<tr>
											<td width="100%" class="menu8" height="14">
												&nbsp;&nbsp;<a href="article40.php" class="menu8"><nobr>Cookies</nobr></a>
											</td>
										</tr>
										
										<tr>
											<td width="100%" class="menu8" height="14">
												&nbsp;&nbsp;<a href="article41.php" class="menu8"><nobr>Les fonctions</nobr></a>
											</td>
										</tr>
										
										<tr>
											<td width="100%" class="menu8" height="14">
												&nbsp;&nbsp;<a href="article42.php" class="menu8"><nobr>Classes et objets I</nobr></a>
											</td>
										</tr>
										
										<tr>
											<td width="100%" class="menu8" height="14">
												&nbsp;&nbsp;<a href="article43.php" class="menu8"><nobr>Classes et objets II</nobr></a>
											</td>
										</tr>
										
										<tr>
											<td width="100%" class="menu8" height="14">
												&nbsp;&nbsp;<a href="article44.php" class="menu8"><nobr>Classes et objets III</nobr></a>
											</td>
										</tr>
										
										<tr>
											<td width="100%" class="menu8" height="14">
												&nbsp;&nbsp;<a href="article144.php" class="menu8"><nobr>Les mises au point</nobr></a>
											</td>
										</tr>
										
										<tr>
											<td>&nbsp;</td>
										</tr>
										<!--  + DE JS  -->
										<tr>
											<td width="100%" align="center" class="color_titre_menu" height="20" valign="middle">
											<div class="color_titre_menu">PLUS DE JAVASCRIPT</div></td>
										</tr>
										<tr>
											<td>&nbsp;</td>
										</tr>
										
										<tr>
											<td width="100%" class="menu8" height="14">
											&nbsp;&nbsp;<a href="article45.php" class="menu8"><nobr>Premiers pas</nobr></a>
											</td>
										</tr>
										
										<tr>
											<td width="100%" class="menu8" height="14">
											&nbsp;&nbsp;<a href="article46.php" class="menu8"><nobr>Contrôles</nobr></a>
											</td>
										</tr>
										
										<tr>
											<td width="100%" class="menu8" height="14">
											<img src="system/images/sep/13px_larg.gif" border="0"></td>
										</tr>


										<!-- COMMENT CA MARCHE -->
										<tr>
											<td width="100%" align="center" class="color_titre_menu" height="20" valign="middle">
											<div class="color_titre_menu">COMMENT CA MARCHE</div></td>
										</tr>
										<tr>
											<td>&nbsp;</td>
										</tr>
										
										<tr>
											<td width="100%" class="menu8" height="14">
											&nbsp;&nbsp;<a href="article47.php" class="menu8"><nobr>Espace membres</nobr></a>
											</td>
										</tr>
										
										<tr>
											<td width="100%" class="menu8" height="14">
											&nbsp;&nbsp;<a href="article48.php" class="menu8"><nobr>Site multi-couleurs</nobr></a>
											</td>
										</tr>
										
										<tr>
											<td width="100%" class="menu8" height="14">
											&nbsp;&nbsp;<a href="article49.php" class="menu8"><nobr>Statistique</nobr></a>
											</td>
										</tr>
										
										<tr>
											<td width="100%" class="menu8" height="14">
											&nbsp;&nbsp;<a href="article95.php" class="menu8"><nobr>Livre d'or</nobr></a>
											</td>
										</tr>
										
										<tr>
											<td width="100%" class="menu8" height="14">
											&nbsp;&nbsp;<a href="article107.php" class="menu8"><nobr>Site multi-langues</nobr></a>
											</td>
										</tr>
										
										<tr>
											<td>&nbsp;</td>
										</tr>

										<!-- EXPLIQUE - MOI -->

										<tr>
											<td width="100%" align="center" class="color_titre_menu" height="20" valign="middle">
											<div class="color_titre_menu">EXPLIQUE-MOI</div></td>
										</tr>
										<tr>
											<td>&nbsp;</td>
										</tr>
										
										<tr>
											<td width="100%" class="menu8" height="14">
											&nbsp;&nbsp;<a href="article50.php" class="menu8"><nobr>Les Chmod</nobr></a>
											</td>
										</tr>
										
										<tr>
											<td width="100%" class="menu8" height="14">
											&nbsp;&nbsp;<a href="article51.php" class="menu8"><nobr>Le .htaccess</nobr></a>
											</td>
										</tr>
										
										<tr>
											<td width="100%" class="menu8" height="14">
											&nbsp;&nbsp;<a href="article52.php" class="menu8"><nobr>Le debuggage</nobr></a>
											</td>
										</tr>
										
										<tr>
											<td>&nbsp;</td>
										</tr>
										
										<tr>
											<td width="100%" align="center" class="color_titre_menu" height="20" valign="middle">
											<div class="color_titre_menu">NEWS LETTER</font></td>
										</tr>
										<tr>
											<td>&nbsp;</td>
										</tr>
										<tr>
											<td width="100%" align="center" class="m8">
												<form method="post" action="system/post/add_email.php" name="mailling">
														<input type="hidden" name="email_ok" value="article39.php">
														<div style="text-align:center"><input type="text" onfocus="this.value='';" name="email" size="15" value="votre e-mail ici.." maxlength="250"><br/>
														<input type="submit" value="Ajouter"></div>
												</form>
											</td>
										</tr>
										<tr>
											<td>&nbsp;</td>
										</tr>
										<!--<tr>
											<td width="100%" align="center" class="color_titre_menu" height="20" valign="middle">
											<div class="color_titre_menu">PHPWORKGROUP</font></td>
										</tr>
										<tr>
											<td>&nbsp;</td>
										</tr>
										<tr>
											<td width="100%" align="left" class="m8" style="padding-left: 4px;" class="menu8">
												<font class="text8">
												Principe du phpworkgroup :<br />
												<br />
												Le but est de regrouper et faire travailler ensemble des personnes de niveaux différents,
												de débutant à confirmé, autour de projets développés en PHP.
												La motivation est le seul critère d'adhésion...<br />
												<br />
												Plus d'info sur le site du <a href="http://www.phpworkgroup.org" target="_blank" class="menu8"><u>phpworkgroup</u></a>
												</font>
											</td>
										</tr>
										<tr>
											<td>&nbsp;</td>
										</tr>-->
									
										<tr>
											<td width="100%" align="center" class="color_titre_menu" height="20" valign="middle">
											<div class="color_titre_menu">PARTENAIRES</font></td>
										</tr>
										<tr>
											<td>&nbsp;</td>
										</tr>
										<tr>
											<td width="100%" align="center" class="m8">
												<a href="http://classes.scriptsphp.org/" target="_blank" title="Découvrez scriptsphp.org"><img border="0" src="system/images/partenaires/litbancsp.png" alt="Découvrez scriptsphp.org" vspace="4"></a><br />
												<a href="http://www.phpteam.net" target="_blank" title="Découvrez phpteam.net"><img border="0" src="system/images/partenaires/phpteam.gif" alt="Découvrez phpteam.net" vspace="4"></a><br />
												<a href="http://www.expreg.com/" target="_blank" title="Tout sur les expressions régulières"><img border="0" src="system/images/partenaires/expreg3.gif" alt="Tout sur les expressions régulières" vspace="4"></a><br />
												<a href="http://frenchmozilla.sourceforge.net" target="_blank" title="IE sucks :-)"><img border="0" src="system/images/navigateurs/mozilla.png" alt="IE sucks :-)" vspace="4"></a>
											</td>
										</tr>
										<tr>
											<td>&nbsp;</td>
										</tr>
										
										<tr>
											<td width="100%" align="center" class="color_titre_menu" height="20" valign="middle">
											<div class="color_titre_menu">DESIGN DU SITE</font></td>
										</tr>
										<tr>
											<td>&nbsp;</td>
										</tr>
										<tr>
											<td width="100%" class="menu8" height="14" align="center">

												<a href="system/post/send_design.php3?color=marron" class="menu8">
												<img src="system/images/palettes/marron.gif" border="0"></a>
												<br>

												<a href="system/post/send_design.php3?color=blue" class="menu8">
												<img src="system/images/palettes/bleu.gif" border="0"></a>
												<br>

												<a href="system/post/send_design.php3?color=green" class="menu8">
												<img src="system/images/palettes/vert.gif" border="0"></a>
												<br>

												<a href="system/post/send_design.php3?color=red" class="menu8">
												<img src="system/images/palettes/rouge.gif" border="0"></a>
												<br>

												<a href="system/post/send_design.php3?color=violet" class="menu8">
												<img src="system/images/palettes/violet.gif" border="0"></a>
												<br>

												<a href="system/post/send_design.php3?color=gray" class="menu8">
												<img src="system/images/palettes/gris.gif" border="0"></a>
												<br>
											</td>
										</tr>
									</table>
								</td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
		</td>
		<td class=m10 valign="top" width="90%">
			<table border="0" cellpadding="1" cellspacing="0" width="100%">
				<tr>
					<td class=m10 width="100%" valign="top">




<script LANGUAGE="JavaScript">
function ChangeExo(formulaire){
	if (formulaire.Exercices.selectedIndex != 0){
		window.top.location.href = formulaire.Exercices.options[formulaire.Exercices.selectedIndex].value;
	}else{
		alert('Veuillez choisir un exercice.');
	}
}
</SCRIPT>

<div style="padding:2px;" class="bordure">
	<div style="width:100%;text-align:center;font-size:16px;font-weight:bold;color:white;" class="news_entete"><a href="system/post/pdf/generatepdf.php?id=§§zs:fichier§§"><img src="system/images/pictos/pdf.png" border="0" align="right" hspace="5"></a><a href="article_printer§§zs:fichier§§"><img src="system/images/pictos/imprimante.gif" border="0" align="right" hspace="5"></a>Récupérer les valeurs d'un formulaire</div>
	<div style="padding-top:10px;padding-left:5px;padding-right:5px;font-size:12px" class="fond_news">
		<div style="text-align:center;font-weight:bold;color:blue">empty(), strtolower(), strpos(), substr()<br>Tuto écrit par LionZion, revu en août 2004 par Molokai et Raf</div>
		<div style="padding-top:5px;text-align:center;">
			<form>
			<select NAME="Exercices" SIZE=1 onChange="ChangeExo(this.form)">
				<option SELECTED VALUE="">------- Liste des exercices -------</option>
				
				<option value="article118.php">&nbsp;0.&nbsp;Introduction</option>
				
				<option value="article14.php">&nbsp;1.&nbsp;Afficher une phrase ou une image</option>
				
				<option value="article53.php">&nbsp;2.&nbsp;Afficher la date et l'heure</option>
				
				<option value="article54.php">&nbsp;3.&nbsp;PHP dans du code HTML</option>
				
				<option value="article55.php">&nbsp;4.&nbsp;La concaténation</option>
				
				<option value="article56.php">&nbsp;5.&nbsp;Récupérer les valeurs d'un formulaire</option>
				
				<option value="article57.php">&nbsp;6.&nbsp;Les structures de contrôle</option>
				
				<option value="article58.php">&nbsp;7.&nbsp;Ecrire et lire dans un fichier texte</option>
				
				<option value="article59.php">&nbsp;8.&nbsp;Les fonctions utilisateurs</option>
				
				<option value="article60.php">&nbsp;9.&nbsp;Les variables d'environnement</option>
				
				<option value="article61.php">&nbsp;10.&nbsp;Quelques fonctions utiles</option>
				
				<option value="article62.php">&nbsp;11.&nbsp;SQL/MySQL (Create, Alter & Drop)</option>
				
				<option value="article63.php">&nbsp;12.&nbsp;SQL/MySQL (Insert et Select)</option>
				
				<option value="article64.php">&nbsp;13.&nbsp;SQL/MySQL (Delete et Update)</option>
				
				<option value="article117.php">&nbsp;14.&nbsp;SQL/MySQL (Where)</option>
				
				<option value="article65.php">&nbsp;15.&nbsp;Fonctions PHP pour mySQL</option>
				
				<option value="article66.php">&nbsp;16.&nbsp;Interroger une table MySQL</option>
				
				<option value="article67.php">&nbsp;17.&nbsp;Alimenter une ou plusieurs tables mySQL</option>
				
				<option value="article68.php">&nbsp;18.&nbsp;Les pseudos-frames</option>
				
				<option value="article69.php">&nbsp;19.&nbsp;Les sessions php4</option>
				
				<option value="article84.php">&nbsp;20.&nbsp;Affichage page par page</option>
				
				<option value="article111.php">&nbsp;21.&nbsp;Images dynamiques</option>
				
				<option value="article112.php">&nbsp;22.&nbsp;Ca marche pas ?</option>
				
				<option value="article113.php">&nbsp;23.&nbsp;Variables globales à OFF</option>
				
				<option value="article119.php">&nbsp;24.&nbsp;Les variables dynamiques</option>
				
			</select>
			</form>
		</div>
		<hr style="width:90%" />
		<div> <table border="0" cellpadding="0" cellspacing="0" width="100%">
<tr>

<td height="15">
<font face="Arial"><font size="2">Quand l'un de vos

          visiteurs entre les informations dans un formulaire, celle-ci sont

          récupérées sous forme de variables.<br>

          Le nom de ces variables dépend de la méthode d'envoi du formulaire.<br>

          Comme dans notre exemple suivant la méthode d'envoi est POST,

          il faut mettre comme nom <font color="#0000FF">$_POST['nom_du_champ']</font>.<br>

          Pour les anciens qui exploitaient les variables de facon <font color="#0000FF">$nom_du_champ</font>

          au lieu de <font color="#0000FF">$_POST['nom_du_champ']</font>, je conseille de lire de toute urgence <a href="article113.php">le tutoriel de flyingcow</a> sur les variables 

          globales à OFF et surtout d'arrêter de coder ainsi.<br>

          Cette variable contient ce qu'a entré

          le visiteur dans le champ, oops :). Allez, un exemple me paraît plus

          simple, ci-dessous le <font color="#0000FF">

name=&quot;<b>nom</b>&quot;</font>

devient </font><b>

<font size="2" color="#0000FF">

$_POST['nom']</font></b><font size="2">

et <font color="#0000FF">

name=&quot;<b>prenom</b>&quot;</font>

devient </font><b><font size="2" color="#0000FF">$_POST['prenom']</font></b><font size="2" face="Arial" color="#000000">,

          il ne reste plus qu'à faire un </font><font size="2" face="Arial" color="#0000FF">print()</font><font size="2" face="Arial" color="#000000">

des variables et le tour est joué !<br>

Pour simplifier le nom des variables, dans notre exemple, on fait <font color="#0000FF">$nom = $_POST['nom']</font><br>

et <font color="#0000FF">$prenom = $_POST['prenom']</font> pour assigner la valeur de la variable <font color="#0000FF">$_POST['prenom']</font> a <font color="#0000FF">$prenom</font> et idem pour <font color="#0000FF">$_POST['nom']</font>
</font><font size="1" face="Verdana" color="#FF6600">(attention un nom de variable ne doit pas contenir d'espace et ne doit pas commencer par un chiffre alors n'en mettez pas dans vos nom de champ)</font><font size="1" face="Verdana" color="#000000">.</font></font>
<table border="1"  width="100%">
  <tr>
    <td width="50%" bgcolor="#999999">
      <p align="center"><font face="Arial" size="2"><b>Le code HTML du
      formulaire<br>
      </b><font face="Arial" color="#009933" size="1">(ne copiez/collez pas ce
      code dans votre éditeur, retapez-le ou gare aux erreurs...)</font></font></td>
    <td width="50%" bgcolor="#999999">
      <p align="center"><b><font face="Arial" size="2">Donne comme résultat à
      l'écran</font></b></td>
  </tr>
  <tr>
    <td width="50%" bgcolor="#CCCCCC"><code><font color="#000000">
&lt;html&gt;&lt;body&gt;
<br />&lt;form method="post" action="verif.php"&gt;
<br />Nom : &lt;input type="text" name="nom" size="12"&gt;&lt;br&gt;
<br />Prénom : &lt;input type="text" name="prenom" size="12"&gt;
<br />&lt;input type="submit" value="OK"&gt;
<br />&lt;/form&gt;&lt;/body&gt;&lt;/html&gt;</font>
</code></td>
    <td width="50%" bgcolor="#CCCCCC"><center>Nom:<input type="text"><br>Prénom:<input type="text"><br><input type="submit" value="OK"></center></td>
  </tr>
  <tr>
    <td width="50%" bgcolor="#999999">
      <p align="center"><font face="Arial" size="2"><b>Le code PHP de verif.php<br>
      </b><font face="Arial" color="#009933" size="1">(ne copiez/collez pas ce
      code dans votre éditeur, retapez-le ou gare aux erreurs...)</font></font></td>
    <td width="50%" bgcolor="#999999">
      <p align="center"><b><font face="Arial" size="2">Donne comme résultat à
      l'écran après envoi &quot;OK&quot;</font></b></td>
  </tr>
  <tr>
    <td width="50%" bgcolor="#CCCCCC"><code><font color="#000000">
<font color="#0000BB">&lt;?php
<br />$prenom&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">$_POST</font><font color="#007700">[</font><font color="#DD0000">'prenom'</font><font color="#007700">];
<br /></font><font color="#0000BB">$nom&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">$_POST</font><font color="#007700">[</font><font color="#DD0000">'nom'</font><font color="#007700">];
<br />print(</font><font color="#DD0000">"&lt;center&gt;Bonjour&nbsp;$prenom&nbsp;$nom&lt;/center&gt;"</font><font color="#007700">);
<br /></font><font color="#0000BB">?&gt;
<br /></font>
</font>
</code></td>
    <td width="50%" bgcolor="#CCCCCC"><center><code><font color="#000000">
Bonjour Thaal Rasha</font>
</code></center></td>
  </tr>
</table>
<br>
<font size="2" face="Arial">Il va bien sûr maintenant falloir

        contrôler les informations que rentre le visiteur pour éviter au

        maximum les erreurs. La première fonction que nous utiliserons est <font color="#0000FF">empty()</font>,

        qui permet de contrôler si un champs est vide. Ensuite nous allons

        contrôler que <b><font color="#0000FF">$_POST['url']</font></b> commence bien

        par <font color="#0000FF">http://</font> à l'aide des deux fonctions <font color="#0000FF">strtolower()</font>

et <font color="#0000FF">substr()</font>.</font>

<table border="1" width="100%">
  <tr>
    <td width="50%" bgcolor="#999999"><font face="Arial" size="2"><b><center>Le code HTML du
      formulaire<br>
      </b><font face="Arial" color="#009933" size="1">(ne copiez/collez pas ce
      code dans votre éditeur, retapez-le ou gare aux erreurs...)</font></font></td>

    <td width="50%" bgcolor="#999999">
      <p align="center"><b>Donne comme résultat à l'écran</b></p>
    </td>
  </tr>
  <tr>
    <td width="50%" bgcolor="#CCCCCC">
    <code><font color="#000000">
&lt;html&gt;&lt;body&gt;
<br />&lt;form method="post" action="verif.php"&gt;
<br />Titre : &lt;input type="text" name="titre" size="12"&gt;&lt;br&gt;
<br />URL : &lt;input type="text" name="url" size="12" value="http://"&gt;
<br />&lt;input type="submit" value="OK"&gt;
<br />&lt;/form&gt;&lt;/body&gt;&lt;/html&gt;</font>
</code></td>
    <td width="50%" bgcolor="#CCCCCC"><center>Titre:<INPUT TYPE="TEXT"><br>URL:<INPUT TYPE="TEXT"><br><INPUT TYPE="SUBMIT"  value="OK"></td>
  </tr>
  <tr>
    <td width="50%" bgcolor="#999999"><font face="Arial" size="2"><b><center>Le code PHP de
      verif.php<br>
      </b><font face="Arial" color="#009933" size="1">(ne copiez/collez pas ce
      code dans votre éditeur, retapez-le ou gare aux erreurs...)</font></font></td>
    <td width="50%" bgcolor="#999999">
      <p align="center"><b>Donne comme résultat à l'écran après envoi
      &quot;OK&quot;</b></p>
    </td>
  </tr>
  <tr>
    <td width="50%" bgcolor="#CCCCCC"><code><font color="#000000">
<font color="#0000BB">&lt;?php
<br />$titre&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">$_POST</font><font color="#007700">[</font><font color="#DD0000">'titre'</font><font color="#007700">];
<br /></font><font color="#0000BB">$url&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">$_POST</font><font color="#007700">[</font><font color="#DD0000">'url'</font><font color="#007700">];
<br />if(empty(</font><font color="#0000BB">$titre</font><font color="#007700">))
<br />{
<br />print(</font><font color="#DD0000">"&lt;center&gt;Le '&lt;b&gt;Titre&lt;/b&gt;' est vide !&lt;/center&gt;"</font><font color="#007700">);
<br />exit();
<br />}
<br /></font><font color="#FF8000">// vérification du début de l'url
<br /></font><font color="#0000BB">$verif_url&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">strtolower</font><font color="#007700">(</font><font color="#0000BB">$url</font><font color="#007700">);
<br /></font><font color="#0000BB">$verif_url&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">substr</font><font color="#007700">(</font><font color="#DD0000">"$verif_url"</font><font color="#007700">,&nbsp;</font><font color="#0000BB">0</font><font color="#007700">,&nbsp;</font><font color="#0000BB">7</font><font color="#007700">);
<br /></font><font color="#FF8000">// on verifie les 7 premiers caractères
<br /></font><font color="#007700">if&nbsp;(</font><font color="#0000BB">$verif_url</font><font color="#007700">!=</font><font color="#DD0000">"http://"</font><font color="#007700">)
<br />{
<br />print(</font><font color="#DD0000">"L'URL doit commencer par &lt;b&gt;http://&lt;/b&gt;"</font><font color="#007700">);
<br />exit();
<br />}
<br />else
<br />{
<br />print(</font><font color="#DD0000">"$titre&nbsp;: &lt;a&nbsp;href=</font><font color="#007700">\"</font><font color="#DD0000">$url</font><font color="#007700">\"</font><font color="#DD0000">&gt;$url&lt;/a&gt;"</font><font color="#007700">);
<br />}
<br /></font><font color="#0000BB">?&gt;</font>
</font>
</code></td>
    <td width="50%" bgcolor="#CCCCCC"><center><font size="2"><i><font color="#FF6600">Erreur

                  n°1 :</font></i>

<center>Le '<b>Titre</b>' est vide !</center></font></p>

<p align="center"><font size="2"><i><font color="#FF6600">Erreur

                  n°2 :</font></i>

L'URL doit commencer par <b>http://</b></font></p>

<p align="center"><font size="2"><i><font color="#FF6600">Si

                  pas d'erreur :</font></i>

phpdebutant : <a href="http://www.phpdebutant.org">http://www.phpdebutant.org</a></font></center></td>
  </tr>

</table>

<font size="2" face="Arial">Avec cet exemple nous commençons à

        attaquer les conditions, c'est un aspect primordial dans tous les

        langages. La première vérification porte sur le champ '<font color="#0000FF">titre</font>',

        la fonction <font color="#0000FF">empty()</font> permet de contrôler si

        celui-ci est vide ou non. Ce qui nous donne :&nbsp;</font>

<ul>

<li><font face="Arial"><b><font size="2" color="#008000">if(</font><font face="Courier New" size="2" color="#FF0000">empty</font><font face="Courier New" size="2" color="#008000">(</font><font face="Courier New" size="2" color="#663300">$titre</font><font size="2" color="#008000">))</font></b><font size="2"><font color="#008000" face="Arial"><b>{

            </b></font><font face="Arial" color="#FF0000">print(</font><font color="#DD0000">"&lt;center&gt;Le '&lt;b&gt;Titre&lt;/b&gt;' est vide !&lt;/center&gt;"</font><font color="#007700">);
exit()</font><font color="#008000" face="Arial"><b>;

            }</b></font><b><font color="#008000">

</font></b></font><b><font size="2" color="#008000">:</font></b><font face="Courier New" size="2" color="#008000">

</font><font size="2" face="Arial">Si la variable <font color="#0000FF"><b>$titre</b></font>

est vide alors j'affiche le message : <font color="#0000FF">'Le

            titre est vide' </font><font color="#000000"><i>(placé entre

            accolades) </i></font>et j'arrête l'exécution du reste du code

            avec la commande <font color="#0000FF">exit()</font>.</font></font></li>

<li><font size="2" face="Arial">Par contre si la variable n'est pas

            vide, l'exécution ne prend pas en compte ce qui se trouve entre

            accolades et continue.</font></li>

</ul>

<p><font size="2" face="Arial">La seconde vérification est plus fine

        puisqu'il s'agit de vérifier que les 7 premiers caractères qui ont

        été entrés par le visiteur sont bien <font color="#000000"><b>http://</b></font>.

        Pour commencer nous utilisons la fonction <font color="#0000FF">strtolower()

        </font>qui permet de transformer tous les caractères en minuscules (ex. <font color="#0000FF">HTTP://www.MONsite.CoM</font>

devient <font color="#0000FF">http://www.monsite.com</font> ). Puis à

        l'aide de la fonction <font color="#0000FF">substr()</font>, nous

        sélectionnons les 7 premiers caractères <font color="#FF6600"><i>(<b>0</b>

est toujours le premier caractère d'une chaine - le second chiffre ' <b>7

        </b>' étant le nombre de caractères à sélectionner)</i></font><font color="#000000">,

        puis nous les comparons à ce que nous avons dans notre condition if :</font></font></p>

<ul>

<li><font size="2" face="Arial"><b><font color="#FF6600"><font color="#008000">if</font><font color="#000000">&nbsp;</font><font color="#008000">(</font></font><font color="#006666">$verif_url</font><font color="#FF6600"><font color="#000000">!</font><font color="#008000">=</font><font color="#0000ff">&quot;http://&quot;</font><font color="#008000">)</font></font></b></font><font size="2"><font color="#008000" face="Arial"><b>{

            </b></font><font face="Arial" color="#FF0000">print(</font><font color="#DD0000">"L'URL doit commencer par &lt;b&gt;http://&lt;/b&gt;"</font><font color="#007700">);
exit()</font><font color="#008000" face="Arial"><b>;

            }</b></font></font><font size="2" face="Arial"><b><font color="#008000">

:</font></b></font><b><font color="#008000" size="2" face="Courier New">

</font></b><font color="#000000" size="2" face="Arial">Si les 7

            premiers caractères sont différents ( signe:</font><font size="2" face="Arial" color="#FF6600">

<b>!=</b> </font><font size="2" face="Arial" color="#000000">)</font><font size="2" face="Arial" color="#FF6600">

</font><font color="#000000" size="2" face="Arial">de </font><font size="2" face="Arial" color="#0000FF">http://</font><font color="#000000" size="2" face="Arial">,

            alors on exécute ce qui ce trouve entre accolades <i>(en l'occurrence

            on affiche un message d'erreur)</i>, puis nous arrêtons le </font><font size="2" face="Arial">reste

            du code avec la commande <font color="#0000FF">exit()</font>.</font></li>

<li><font size="2" face="Arial">Par contre si le résultat est

            correct, PHP ignore ce qui ce trouve entre accolades et exécute le

            reste du code.</font></li>

</ul>

<p><font size="2" face="Arial">Vous pourrez faire autant de tests que

        vous voudrez sur les champs, mais ne soyez pas trop draconien car les

        visiteurs n'aiment pas trop que l'on empiète sur leur liberté :). Les

        contrôles les plus fréquents s'effectuent sur les URL et email pour

        savoir si l'email comporte bien un &quot;<font color="#0000FF">@</font>&quot;

et un <font color="#0000FF">point</font>.</font>

<table border="1" width="100%">
  <tr>
    <td width="50%" bgcolor="#999999"><font face="Arial" size="2"><b><center>Le code HTML du
      formulaire<br>
      </b><font face="Arial" color="#009933" size="1">(ne copiez/collez pas ce
      code dans votre éditeur, retapez-le ou gare aux erreurs...)</font></font></td>

    <td width="50%" bgcolor="#999999">
      <p align="center"><b>Donne comme résultat à l'écran</b></p>
    </td>
  </tr>
  <tr>
    <td width="50%" bgcolor="#CCCCCC">
    <code><font color="#000000">
&lt;html&gt;&lt;body&gt;
<br />&lt;form method="post" action="verif.php"&gt;
<br />Votre email : &lt;input type="text" name="email" size="20"&gt;
<br />&lt;input type="submit" value="OK"&gt;
<br />&lt;/form&gt;&lt;/body&gt;&lt;/html&gt;</font>
</code></td>
    <td width="50%" bgcolor="#CCCCCC"><center>Votre email:<INPUT TYPE="TEXT"><br><INPUT TYPE="SUBMIT"  value="OK"></td>
  </tr>
  <tr>
    <td width="50%" bgcolor="#999999"><font face="Arial" size="2"><b><center>Le code PHP de
      verif.php<br>
      </b><font face="Arial" color="#009933" size="1">(ne copiez/collez pas ce
      code dans votre éditeur, retapez-le ou gare aux erreurs...)</font></font></td>
    <td width="50%" bgcolor="#999999">
      <p align="center"><b>Donne comme résultat à l'écran après envoi
      &quot;OK&quot;</b></p>
    </td>
  </tr>
  <tr>
    <td width="50%" bgcolor="#CCCCCC"><code><font color="#000000">
<font color="#0000BB">&lt;?php
<br />$email&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">$_POST</font><font color="#007700">[</font><font color="#DD0000">'email'</font><font color="#007700">];
<br /></font><font color="#0000BB">$point&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">strpos</font><font color="#007700">(</font><font color="#0000BB">$email</font><font color="#007700">,</font><font color="#DD0000">"."</font><font color="#007700">);
<br /></font><font color="#0000BB">$aroba&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">strpos</font><font color="#007700">(</font><font color="#0000BB">$email</font><font color="#007700">,</font><font color="#DD0000">"@"</font><font color="#007700">);
<br />
<br />if(</font><font color="#0000BB">$point</font><font color="#007700">==</font><font color="#DD0000">''</font><font color="#007700">)
<br />{
<br />echo&nbsp;</font><font color="#DD0000">"Votre email doit comporter un &lt;b&gt;point&lt;/b&gt;"</font><font color="#007700">;
<br />}
<br />elseif(</font><font color="#0000BB">$aroba</font><font color="#007700">==</font><font color="#DD0000">''</font><font color="#007700">)
<br />{
<br />echo&nbsp;</font><font color="#DD0000">"Votre email doit comporter un &lt;b&gt;'@'&lt;/b&gt;"</font><font color="#007700">;
<br />}
<br />else
<br />{
<br />echo&nbsp;</font><font color="#DD0000">"Votre email est: '&lt;a href=\"mailto:"</font><font color="#007700">.</font><font color="#DD0000">"$email"</font><font color="#007700">.</font><font color="#DD0000">"</font><font color="#007700">\"</font><font color="#DD0000">&gt;&lt;b&gt;$email&lt;/b&gt;&lt;/a&gt;'"</font><font color="#007700">;
<br />}
<br /></font><font color="#0000BB">?&gt;</font>
</font>
</code></td>
    <td width="50%" bgcolor="#CCCCCC"><center><font size="2"><i><font color="#FF6600">Erreur

                  n°1 :</font></i>

Votre email doit comporter un <b>point</b> !</font></p>

<p align="center"><font size="2"><i><font color="#FF6600">Erreur

                  n°2 :</font></i>

Votre email doit comporter un '<b>@</b>' !</font></p>

<p align="center"><font size="2"><i><font color="#FF6600">Si

                  pas d'erreur :</font></i>

Votre email est : <b><a href="mailto:email@email.com">email@email.com</a></b></font></td>
  </tr>

</table>

<font size="2" face="Arial">Comme son nom l'indique, la fonction <font color="#0000FF">strpos()</font>

retourne la position d'un caractère dans une chaîne si celui-ci existe,

        autrement <font color="#0000FF">strpos()</font> retourne

        &quot;rien&quot;. C'est ce que nous utilisons pour savoir si les <font color="#0000FF">point</font>

et <font color="#0000FF">@</font> sont bien présents dans l'email.</font>

<p><font size="2" face="Arial"><b>Exemple </b>: Si <font color="#0000FF">strpos()</font>

retourne &quot;<font color="#0000FF">10</font>&quot; cela veut dire que

        le premier caractère recherché est placé juste après les 10 premiers

        caractères donc en <font color="#0000FF">11e position</font> dans la

        chaîne, puisque vous devez toujours vous rappeler que php commence à

        compter à <b><font color="#0000FF">0</font></b> et non pas <font color="#0000FF"><b>1</b></font><font color="#000000">.</font></font>

</td>

</tr>

</table></div>
	</div>
</div>
<br /><br />

<form action="system/post/article_msg.php" method="post">
	<input type="hidden" name="article" value="56">
	<input type="hidden" name="idsite" value="1">
<table border="0" cellpadding="1" cellspacing="0" align="center">

	<tr>

		<td class="bordure">

			<table border="0" cellpadding="6" cellspacing="0" class="fond_news">

				<tr>

					<td class="news_entete" style="text-align:center;color:#E2E3B1;">Ajouter une r&eacute;ponse</td>

				</tr>

				<tr>

					<td><input type="text" name="auteur" size="38" value=""> Nom</td></tr>

				<tr>

					<td><input type="text" name="email" size="38" value=""> Email</td>

				</tr>

				<tr>

					<td><input type="text" name="titre" size="38" value=""> Titre</td>

				</tr>

				<tr>

					<td valign="top"><textarea rows="10" name="contenu" cols="43" WRAP="virtual"></textarea></td>

				</tr>
            <tr>
               <td>			<p class="forumpara">Mise en forme : gras = [b]...[/b], italic = [i]...[/i], soulign&eacute; = [u]...[/u],
         citation = [quote]...[/quote], lien = [url]liens_externe[/url] ou [url nom=texte]liens_externe[/url],
         code source : [code]...[/code]
         </p>
</td>
            </tr>
				<tr>

					<td>M&eacute;moriser mon nom et mon email :

						<input type="radio" name="memorisation" value="1" checked>Oui

						<input type="radio" name="memorisation" value="0"> Non

					</td>

				</tr>

				<tr>

					<td align="center"><input type="submit" value="Poster le message ..."></td>

				</tr>

			</table>

		</td>

	</tr>

</table>


</form>

					</td>
				</tr>
				<tr>
					<td class=m10 width="100%" valign="top" height="22">
					<div class="m8" style="text-align:center;color:#969090;padding-top:20px;">www.phpdebutant.org © 2019 - L'équipe de phpDebutant - Hébergement : <a href="http://www.wdmedia-hebergement.net" target="_blank" class="hebergement">WDMédia-hébergement</a></div>
<a href="system/post/aspiro_sucks.php"><img src="system/images/blank.gif" border="0" width="1px" height="1px"/></a>

					</td>
				</tr>
			</table>
		</td>
		<!-- debut colonne de droite -->
		<td class=m10 width="130" valign="top">
			<table border="0" cellpadding="1" cellspacing="0" width="130" class="bordure">
				<tr>
					<td class=m10 width="130" valign="top">
						<table border="0" cellpadding="0" cellspacing="0" width="100%" class="fond_menu">
							<tr>
								<td width="100%" align="center" class="news_entete" height="20" valign="middle">
									<div class="color_titre_menu">DEBUTEZ !</div></b>
								</td>
							</tr>
							<tr>
								<td>&nbsp;</td>
							</tr>
							<tr>
								<td>
									
									<table border="0" cellpadding="0" cellspacing="0" width="100%">
										<tr>
											<td align="left" valign="top">&nbsp;&nbsp;0.&nbsp;</td>
											<td align="left"><a href="article118.php" target="_self" class="menu8">Introduction</td>
										</tr>
										<tr>
											<td colspan="2"></td>
										</tr>
									</table>
									
									<table border="0" cellpadding="0" cellspacing="0" width="100%">
										<tr>
											<td align="left" valign="top">&nbsp;&nbsp;1.&nbsp;</td>
											<td align="left"><a href="article14.php" target="_self" class="menu8">Afficher une phrase ou une image</td>
										</tr>
										<tr>
											<td colspan="2"></td>
										</tr>
									</table>
									
									<table border="0" cellpadding="0" cellspacing="0" width="100%">
										<tr>
											<td align="left" valign="top">&nbsp;&nbsp;2.&nbsp;</td>
											<td align="left"><a href="article53.php" target="_self" class="menu8">Afficher la date et l'heure</td>
										</tr>
										<tr>
											<td colspan="2"></td>
										</tr>
									</table>
									
									<table border="0" cellpadding="0" cellspacing="0" width="100%">
										<tr>
											<td align="left" valign="top">&nbsp;&nbsp;3.&nbsp;</td>
											<td align="left"><a href="article54.php" target="_self" class="menu8">PHP dans du code HTML</td>
										</tr>
										<tr>
											<td colspan="2"></td>
										</tr>
									</table>
									
									<table border="0" cellpadding="0" cellspacing="0" width="100%">
										<tr>
											<td align="left" valign="top">&nbsp;&nbsp;4.&nbsp;</td>
											<td align="left"><a href="article55.php" target="_self" class="menu8">La concaténation</td>
										</tr>
										<tr>
											<td colspan="2"></td>
										</tr>
									</table>
									
									<table border="0" cellpadding="0" cellspacing="0" width="100%">
										<tr>
											<td align="left" valign="top">&nbsp;&nbsp;5.&nbsp;</td>
											<td align="left"><a href="article56.php" target="_self" class="menu8">Récupérer les valeurs d'un formulaire</td>
										</tr>
										<tr>
											<td colspan="2"></td>
										</tr>
									</table>
									
									<table border="0" cellpadding="0" cellspacing="0" width="100%">
										<tr>
											<td align="left" valign="top">&nbsp;&nbsp;6.&nbsp;</td>
											<td align="left"><a href="article57.php" target="_self" class="menu8">Les structures de contrôle</td>
										</tr>
										<tr>
											<td colspan="2"></td>
										</tr>
									</table>
									
									<table border="0" cellpadding="0" cellspacing="0" width="100%">
										<tr>
											<td align="left" valign="top">&nbsp;&nbsp;7.&nbsp;</td>
											<td align="left"><a href="article58.php" target="_self" class="menu8">Ecrire et lire dans un fichier texte</td>
										</tr>
										<tr>
											<td colspan="2"></td>
										</tr>
									</table>
									
									<table border="0" cellpadding="0" cellspacing="0" width="100%">
										<tr>
											<td align="left" valign="top">&nbsp;&nbsp;8.&nbsp;</td>
											<td align="left"><a href="article59.php" target="_self" class="menu8">Les fonctions utilisateurs</td>
										</tr>
										<tr>
											<td colspan="2"></td>
										</tr>
									</table>
									
									<table border="0" cellpadding="0" cellspacing="0" width="100%">
										<tr>
											<td align="left" valign="top">&nbsp;&nbsp;9.&nbsp;</td>
											<td align="left"><a href="article60.php" target="_self" class="menu8">Les variables d'environnement</td>
										</tr>
										<tr>
											<td colspan="2"></td>
										</tr>
									</table>
									
									<table border="0" cellpadding="0" cellspacing="0" width="100%">
										<tr>
											<td align="left" valign="top">&nbsp;&nbsp;10.&nbsp;</td>
											<td align="left"><a href="article61.php" target="_self" class="menu8">Quelques fonctions utiles</td>
										</tr>
										<tr>
											<td colspan="2"></td>
										</tr>
									</table>
									
									<table border="0" cellpadding="0" cellspacing="0" width="100%">
										<tr>
											<td align="left" valign="top">&nbsp;&nbsp;11.&nbsp;</td>
											<td align="left"><a href="article62.php" target="_self" class="menu8">SQL/MySQL (Create, Alter & Drop)</td>
										</tr>
										<tr>
											<td colspan="2"></td>
										</tr>
									</table>
									
									<table border="0" cellpadding="0" cellspacing="0" width="100%">
										<tr>
											<td align="left" valign="top">&nbsp;&nbsp;12.&nbsp;</td>
											<td align="left"><a href="article63.php" target="_self" class="menu8">SQL/MySQL (Insert et Select)</td>
										</tr>
										<tr>
											<td colspan="2"></td>
										</tr>
									</table>
									
									<table border="0" cellpadding="0" cellspacing="0" width="100%">
										<tr>
											<td align="left" valign="top">&nbsp;&nbsp;13.&nbsp;</td>
											<td align="left"><a href="article64.php" target="_self" class="menu8">SQL/MySQL (Delete et Update)</td>
										</tr>
										<tr>
											<td colspan="2"></td>
										</tr>
									</table>
									
									<table border="0" cellpadding="0" cellspacing="0" width="100%">
										<tr>
											<td align="left" valign="top">&nbsp;&nbsp;14.&nbsp;</td>
											<td align="left"><a href="article117.php" target="_self" class="menu8">SQL/MySQL (Where)</td>
										</tr>
										<tr>
											<td colspan="2"></td>
										</tr>
									</table>
									
									<table border="0" cellpadding="0" cellspacing="0" width="100%">
										<tr>
											<td align="left" valign="top">&nbsp;&nbsp;15.&nbsp;</td>
											<td align="left"><a href="article65.php" target="_self" class="menu8">Fonctions PHP pour mySQL</td>
										</tr>
										<tr>
											<td colspan="2"></td>
										</tr>
									</table>
									
									<table border="0" cellpadding="0" cellspacing="0" width="100%">
										<tr>
											<td align="left" valign="top">&nbsp;&nbsp;16.&nbsp;</td>
											<td align="left"><a href="article66.php" target="_self" class="menu8">Interroger une table MySQL</td>
										</tr>
										<tr>
											<td colspan="2"></td>
										</tr>
									</table>
									
									<table border="0" cellpadding="0" cellspacing="0" width="100%">
										<tr>
											<td align="left" valign="top">&nbsp;&nbsp;17.&nbsp;</td>
											<td align="left"><a href="article67.php" target="_self" class="menu8">Alimenter une ou plusieurs tables mySQL</td>
										</tr>
										<tr>
											<td colspan="2"></td>
										</tr>
									</table>
									
									<table border="0" cellpadding="0" cellspacing="0" width="100%">
										<tr>
											<td align="left" valign="top">&nbsp;&nbsp;18.&nbsp;</td>
											<td align="left"><a href="article68.php" target="_self" class="menu8">Les pseudos-frames</td>
										</tr>
										<tr>
											<td colspan="2"></td>
										</tr>
									</table>
									
									<table border="0" cellpadding="0" cellspacing="0" width="100%">
										<tr>
											<td align="left" valign="top">&nbsp;&nbsp;19.&nbsp;</td>
											<td align="left"><a href="article69.php" target="_self" class="menu8">Les sessions php4</td>
										</tr>
										<tr>
											<td colspan="2"></td>
										</tr>
									</table>
									
									<table border="0" cellpadding="0" cellspacing="0" width="100%">
										<tr>
											<td align="left" valign="top">&nbsp;&nbsp;20.&nbsp;</td>
											<td align="left"><a href="article84.php" target="_self" class="menu8">Affichage page par page</td>
										</tr>
										<tr>
											<td colspan="2"></td>
										</tr>
									</table>
									
									<table border="0" cellpadding="0" cellspacing="0" width="100%">
										<tr>
											<td align="left" valign="top">&nbsp;&nbsp;21.&nbsp;</td>
											<td align="left"><a href="article111.php" target="_self" class="menu8">Images dynamiques</td>
										</tr>
										<tr>
											<td colspan="2"></td>
										</tr>
									</table>
									
									<table border="0" cellpadding="0" cellspacing="0" width="100%">
										<tr>
											<td align="left" valign="top">&nbsp;&nbsp;22.&nbsp;</td>
											<td align="left"><a href="article112.php" target="_self" class="menu8">Ca marche pas ?</td>
										</tr>
										<tr>
											<td colspan="2"></td>
										</tr>
									</table>
									
									<table border="0" cellpadding="0" cellspacing="0" width="100%">
										<tr>
											<td align="left" valign="top">&nbsp;&nbsp;23.&nbsp;</td>
											<td align="left"><a href="article113.php" target="_self" class="menu8">Variables globales à OFF</td>
										</tr>
										<tr>
											<td colspan="2"></td>
										</tr>
									</table>
									
									<table border="0" cellpadding="0" cellspacing="0" width="100%">
										<tr>
											<td align="left" valign="top">&nbsp;&nbsp;24.&nbsp;</td>
											<td align="left"><a href="article119.php" target="_self" class="menu8">Les variables dynamiques</td>
										</tr>
										<tr>
											<td colspan="2"></td>
										</tr>
									</table>
									
								</td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
		</td>
	</tr>
</table>
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-4665318-5");
pageTracker._trackPageview();
} catch(err) {}</script>
</body>
</html>



<!-- Page générée par zionSys sur c1web521.wdmedia.net en 0,0473 s  avec cache-->