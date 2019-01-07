<SCRIPT language="JavaScript">
<!--
function ControleVide_lo()
{
        if(document.Livredor.pseudo.value=='') {
        	alert('Vous devez indiquer votre pseudo');
                document.Livredor.pseudo.focus();
        } else if(document.Livredor.commentaire.value=='') {
        	alert('Vous devez mettre un commentaire');
                document.Livredor.commentaire.focus();
        } else {
		document.Livredor.method = "POST";
                document.Livredor.action = "livredor/livredor_inser.php";
                document.Livredor.submit();
	}
}
//-->
</script>
<html>
<head>
	<title>Livre d'or de Fast+</title>
</head>
<body background="images/filigrane.bmp" bgproperties="fixed">
<H1>Livre d'or de Fast+</H1>
<H2>Suite à un immense sentiment de satisfaction que vous procure votre Fast+, vous ne pouvez vous empêcher de laisser un commentaire :</H2>
<table width="100%">
<form Name="Livredor" action="livredor/livredor_inser.php">
    <TR>
	<TD>Pseudo ou prénom :</TD>
        <TD><Input Type="text" Name="pseudo" Size="50" Maxlength="100"></TD>
    </TR>
    <TR>
	<TD>E-mail* :</TD>
        <TD><Input Type="text" Name="email" Size="50" Maxlength="100"></TD>
    </TR>
    <TR>
    	<TD valign=top>Commentaire :</TD>
        <TD><Textarea Name="commentaire" Rows="10" Cols="70"></Textarea></TD>
    </TR>
    <TR>
    	<TD colspan="2"><div align="center"><Input Type="button" OnClick="ControleVide_lo()" Value="Envoyer"></TD>
    </TR>
</table>
</form>
*facultatif<br>
NB: Vous ne pouvez enregistrer plus d'un commentaire par jour, sinon, le deuxi&egrave;me commentaire effacera le pr&eacute;c&eacute;dent.
</body>
</html>
