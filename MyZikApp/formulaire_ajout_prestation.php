
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Prestation</title>
<style type="text/css">
<!--
.Style1 {color: #FFFFFF}
.Style2 {font-weight: bold}
.Style4 {
	color: #000000;
	font-weight: bold;
}
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
<table width="100%" border="0">
  <tr>
    <td bgcolor="#33CCFF"><table width="1062" border="0" cellspacing="2">
      <tr>
        <td width="191" height="29"><span class="Style1"><a href="Untitled-4.php">[ Faire une nouvelle saisie ]</a></span> </td>
        <td width="861"><div align="center" class="Style4">prestation</div></td>
      </tr>
    </table>
    <div align="center"></div></td>
  </tr>
  
  <tr>
    <td><table width="100%" border="1" align="center" cellspacing="0">
      
      <tr>
        <td width="222"><div align="center"><strong>departement</strong></div></td>
        <td width="222"><div align="center"><strong>RSR</strong></div></td>
        <td width="222"><div align="center"><strong>Rendez-vous</strong></div></td>
        <td width="222"><div align="center"><strong>contact N3</strong></div></td>
		<td width="222"><div align="center"><strong>contact conceptel</strong></div>
        <td width="222"><div align="center"><strong>Horaire</strong></div></td>
        <td width="222"><div align="center"><strong>vehicules</strong></div>
            
        </tr>
      <!-- debut Ligne contenu -->
      <?php
include('_connexion.php');			   				   
$requete = mysql_query('SELECT  departement, RSR, Rendez-vous , conatct N3, contact conceptel,Horaire , vehicules FROM tab_prestationlundi');

while ($donnees = mysql_fetch_array($requete))


?>
      <tr>
        <td height="25"><div align="center"><?php echo stripslashes($donnees['departement']); ?></div></td>
        <td height="25"><div align="center"><?php echo stripslashes($donnees['RSR']); ?></div></td>
        <td height="25"><div align="center"><?php echo stripslashes($donnees['Rendez-vous']); ?></div></td>
        <td height="25"><div align="center"><?php echo stripslashes($donnees['contact N3']); ?></div></td>
        <td height="25"><div align="center"><?php echo stripslashes($donnees['contact conceptel']); ?></div></td>
        <td height="25"><div align="center"><?php echo stripslashes($donnees['Horaire']); ?></div></td>
		<td height="25"><div align="center"><?php echo stripslashes($donnees['vehicules']); ?></div></td>
        <!-- fin Ligne contenu -->
      </tr>
      <?php

?>
    </table></td>
  </tr>
  
  <tr>
    <td><table width="10%" border="1" align="right" cellspacing="0">
     

    </table></td>
  </tr>
</table>
<br />
<br />
<!-- FIN TABLEAU CONTENU -->
</body>
</html>




