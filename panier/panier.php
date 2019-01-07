<?
session_start();
require("function.php");
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