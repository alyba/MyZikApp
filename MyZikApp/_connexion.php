
<?php
// connexion a la BD
// Param�tres persos
$host 	= "localhost"; 	// voir h�bergeur
$user 	= "root"; 	// identifiant de votre BD (vide ou "root" en local)
$pass 	= ""; 	// mot de passe de votre BD (vide en local)
$bdd 	= "bd_tarif"; 	// nom de la BD
// --------------------------------
// connexion
@mysql_connect($host,$user,$pass) or die("Impossible de se connecter");
@mysql_select_db("$bdd") or die("Impossible de se connecter");
// --------------------------------
?>
