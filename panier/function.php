<?
function add($ref,$qte)
{
        $_SESSION['achats'][] = array ("ref" => $ref,"qte" => $qte);
}

function del($ref)
{       
        $count = count($_SESSION['achats']);
        for ($i=0; $i < $count; $i++)
        {
                if ($_SESSION['achats'][$i]['ref'] == $ref)
                {
                        array_splice($_SESSION['achats'], $i, 1);
                }
        }
}

function modif($ref,$qte)
{
        $count = count($_SESSION['achats']);
        for ($i=0;$i < $count;$i++)
        {
                if ($_SESSION['achats'][$i]['ref'] == $ref)
                {
                        $_SESSION['achats'][$i]['qte'] = $qte;
                }
        }
}

function aff()
{
        $count = count($_SESSION['achats']);
        if($count ==0)
        {
                echo"panier vide";
        }
        else
        {
                for($i=0;$i<$count;$i++)
                {
                        $ref = $_SESSION['achats'][$i]['ref'];
                        $qte = $_SESSION['achats'][$i]['qte'];
                        echo "$ref qt $qte <a href='panier.php?action=del&ref=$ref'>supprimer</a> <a href='panier.php?action=modif&ref=$ref&qte=$qte+3'>modifier</a><br />";
                }
        }
}


?>