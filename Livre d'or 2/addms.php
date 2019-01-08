<?
//print("<center>Bonjour $nom $url</center>");
?>
<?php
$date = date("d-m-Y");
$heure = date("H:i");
$timed = $date." � ".$heure;
$db = mysql_connect('localhost', 'login', 'password');
mysql_select_db('aprimexpert_db',$db);
$sql = "INSERT INTO guest VALUES('','$nom','$timed','$des')";
$req = mysql_query($sql) ;
mysql_close();
?>
