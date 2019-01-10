<?
session_start();
require("/Volumes/Macintosh HD/Users/patrickcheurfa/Library/Mobile Documents/com~apple~CloudDocs/ICN - Bachelor 2/ICN - Semestre 3/Informatique de gestion/site/code-site/panier/function.php");
$valide = array("add","del","aff","modif");
if(isset($_GET['action']) and in_array($_GET['action'],$valide))
{
        switch ($_GET['action'])
        {
                case "add":
                add($_GET['ref'],$_GET['qte']);
                aff();
                break;
                case "aff":
                aff();
                break;
                case "del":
                del($_GET['ref']);
                aff();
                break;
                case "modif":
                modif($_GET['ref'],$_GET['qte']);
                aff();
                break;
        }
}
else
{
        echo'<a href="panier.php?action=add&ref=123456&qte=3">123465 qte 3add</a><br />
        <a href="panier.php?action=add&ref=547866&qte=235">547866 qte 235add</a><br />';
}
?>
