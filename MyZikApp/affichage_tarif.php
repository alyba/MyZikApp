
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Affichage Tarif</title>
<style type="text/css">
<!--
.Style1 {color: #FFFFFF}
.Style2 {font-weight: bold}
.Style4 {color: #000000}
a:link {
	color: #FFFFFF;
	text-decoration: none;
}
a:visited {
	text-decoration: none;
	color: #FFFFFF;
}
a:hover {
	text-decoration: underline;
	color: #FFCC66;
}
a:active {
	text-decoration: none;
	color: #FFFFFF;
}
-->
</style>
</head>

<body>
<br />
<br />
<table width="940" border="1" align="center" cellspacing="0">
  <tr>
    <td height="39" colspan="6" bgcolor="#33CCFF"><div align="center" class="Style1">
      <table width="910" border="0" cellspacing="2">
        <tr>
          <td width="191"><span class="Style1"><a href="formulaire_ajout.php">[ Faire une nouvelle saisie ]</a></span> </td>
          <td width="709"><div align="center" class="Style4">TARIF HT - DEGROUPAGE 2016 - CONCEPTEL</div></td>
        </tr>
      </table>
    </div></td>
  </tr>
  <tr>
    <td height="38" colspan="6" bgcolor="#FFCC99"><div align="center" class="Style2">Prestation Indoor </div></td>
  </tr>
  <tr>
    <td width="245" rowspan="2"><div align="center"><strong>Prestation</strong></div></td>
    <td width="311" rowspan="2"><div align="center"><strong>Descriptif</strong></div></td>
    <td width="87" rowspan="2"><div align="center"><strong>Nbr &eacute;l&eacute;ment </strong></div></td>
    <td width="110" rowspan="2"><div align="center"><strong>Nbr Prestation </strong></div></td>
    <td width="91" rowspan="2"><div align="center"><strong>Plage horaire </strong></div></td>
    <td width="70" height="31"><div align="center"><strong>Tarif</strong></div></td>
  </tr>
  <tr>
    <td height="31"><div align="center"><strong>Euro HT</strong></div></td>
  </tr>
   <!-- debut Ligne contenu -->
  <?php
include('_connexion.php');			   				   
$requete = mysql_query('SELECT  prestation , descriptif, nbr_element, nbr_prestation, plage_horaire,tarif FROM tab_prestation_indoor');
while ($donnees = mysql_fetch_array($requete))
{
?>
  
  <tr>
    <td height="25"><div align="center"><?php echo stripslashes($donnees['prestation']); ?></div></td>
    <td height="25"><div align="center"><?php echo stripslashes($donnees['descriptif']); ?></div></td>
    <td height="25"><div align="center"><?php echo stripslashes($donnees['nbr_element']); ?></div></td>
    <td height="25"><div align="center"><?php echo stripslashes($donnees['nbr_prestation']); ?></div></td>
    <td height="25"><div align="center"><?php echo stripslashes($donnees['plage_horaire']); ?></div></td>
    <td height="25"><div align="center"><?php echo stripslashes($donnees['tarif']); ?></div></td>
	

	<!-- fin Ligne contenu -->
  </tr>
  	<?php
} 
?>
</table>

<!-- FIN TABLEAU CONTENU -->

</body>
</html>




