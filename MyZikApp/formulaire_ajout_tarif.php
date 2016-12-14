<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Ajouter des donn&eacute;es</title>
<style type="text/css">
<!--
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
.Style5 {color: #FFFFFF}
-->
</style>
</head>


<body>
<br /> <br />

<table width="764" border="1" align="center" cellspacing="0">
  <tr>
    <td width="758" height="39" bgcolor="#33CCFF"><table width="740" border="0" align="center" cellspacing="2">
      <tr>
        <td width="154"><span class="Style5"><a href="index.php">[ Afficher les donn&eacute;es ]</a></span> </td>
        <td width="576"><div align="center" class="Style4">TARIF HT - DEGROUPAGE 2016 - CONCEPTEL</div></td>
      </tr>
    </table></td>
  </tr>
  
  <tr>
    <td height="246" valign="top"><form id="form1" name="form1" method="post" action="">
      
	  <br />
	  <table width="692" border="0" align="center">
        <tr>
          <td width="105">Prestation</td>
          <td width="577">
              <input name="prestation" type="text" id="prestation" size="60" />         </td>
        </tr>
        <tr>
          <td>Descriptif</td>
          <td>
              <input name="descriptif" type="text" id="descriptif" size="60" />      </td>
        </tr>
        <tr>
          <td>Nbr. &eacute;l&eacute;ment </td>
          <td>
              <input name="nombreElement" type="text" id="nombreElement" size="20" />          </td>
        </tr>
        <tr>
          <td>Nbr. prestation </td>
          <td>
            <input name="nombrePrestation" type="text" id="nombrePrestation" size="10" />          </td>
        </tr>
        <tr>
          <td>Plage horaire </td>
          <td><input name="plageHoraire" type="text" id="plageHoraire" size="10" /></td>
        </tr>
        <tr>
          <td>Tarif</td>
          <td><input name="tarif" type="text" id="tarif" size="10" /></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>
		  <br />
		  
		  <table width="442" border="0" cellspacing="0">
            <tr>
			
              <td width="156"><input type="submit" name="boutonOK" value="         Enregistrer        " /></td>
              <td width="282"><label>
                <input type="reset" name="boutonEffacer" value="            Effacer          " />
              </label></td>
            </tr>
          </table></td>
        </tr>
      </table>
        </form>
    </td>
  </tr>
</table>
</body>
</html>

<?php

include('_connexion.php');


          function err($ind,$tab){
	          echo $tab[$ind];
			  $_POST[$ind]="";
			}
			
          $tab=array();
		  
         if (isset($_POST['boutonOK'])){
			    // Récupération normale des informations
                $prestation=trim(addslashes($_POST['prestation']));
			    $descriptif=trim(addslashes($_POST['descriptif']));
			    $nombreElement=trim(addslashes($_POST['nombreElement']));
			    $nombrePrestation=trim(addslashes($_POST['nombrePrestation']));
				$plageHoraire=trim(addslashes($_POST['plageHoraire']));
			    $tarif=trim(addslashes($_POST['tarif']));
		
				
				   $requete="INSERT INTO 
				     `tab_prestation_indoor`(
					 `prestation` ,
					 `descriptif`,
					 `nbr_element`,
					 `nbr_prestation`,
					 `plage_horaire`,
					 `tarif`
					 					)
					 			VALUES(
								'$prestation',
								'$descriptif',
								'$nombreElement',
								'$nombrePrestation',
								'$plageHoraire',
								'$tarif'
										)";
										
										
				   mysql_query($requete) or die(mysql_error());
				   mysql_close();
				}
?>