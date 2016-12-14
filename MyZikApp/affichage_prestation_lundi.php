
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

<table width="773" border="1" align="center" cellspacing="0">
  <tr>
    <td width="767" height="39" bgcolor="#33CCFF"><table width="740" border="0" align="center" cellspacing="2">
      <tr>
        <td width="154"><span class="Style5"><a href="prestation.php">[ Afficher les donn&eacute;es ]</a></span> </td>
        <td width="576"><div align="center" class="Style4">prestation lundi</div></td>
      </tr>
    </table></td>
  </tr>
  
  <tr>
    <td height="246" valign="top"><form id="form1" name="form1" method="post" action="">
      
	  <br />
	  <table width="692" border="0" align="center">
        <tr>
          <td width="105">departement</td>
          <td width="577">
              <input name="departement" type="text" id="departement" size="60" />         </td>
        </tr>
        <tr>
          <td>RSR</td>
          <td>
              <input name="RSR" type="text" id="RSR" size="60" />      </td>
        </tr>
        <tr>
          <td>Rendez-vous</td>
          <td>
              <input name="Rendezvous" type="text" id="Rendezvous" size="60" />          </td>
        </tr>
        <tr>
          <td>contact N3 </td>
          <td>
            <input name="contactN3" type="text" id="contactN3" size="60" />          </td>
        </tr>
        <tr>
          <td>Contact conceptel </td>
          <td><input name="contactconceptel" type="text" id="contactconceptel" size="60" /></td>
        </tr>
        <tr>
          <td height="31">Horaire</td>
          <td><input name="Horaire" type="text" id="Horaire" size="20" /></td>
        </tr>
		 <tr>
          <td height="31">vehicules</td>
          <td><input name="vehicules" type="text" id="vehicules" size="20" /></td>
        </tr>
		 
        <tr>
          <td>&nbsp;</td>
          <td>
		  <br />
		  
		  <table width="442" border="0" cellspacing="0">
            <tr>
			
              <td width="156"><input type="submit" name="boutonOK" value="         Enregistrement        " /></td>
              <td width="282"><label>
                <input type="reset" name="boutonEffacer" value="            Effacement         " />
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

include('connexion2.php');


          function err($ind,$tab){
	          echo $tab[$ind];
			  $_POST[$ind]="";
			}
			
          $tab=array();
		  
         if (isset($_POST['boutonOK'])){
			    // Récupération normale des informations
                $departement=trim(addslashes($_POST['departement']));
			    $RSR=trim(addslashes($_POST['RSR']));
			    $Rendezvous=trim(addslashes($_POST['Rendezvous']));
			    $contactN3=trim(addslashes($_POST['contactN3']));
				$contactconceptel=trim(addslashes($_POST['contactconceptel']));
				$Horaire=trim(addslashes($_POST['Horaire']));
			    $Horaire=trim(addslashes($_POST['vehicules']));
		
				
				   $requete="INSERT INTO 
				     `tab_préstationlundi`(
					 `departement` ,
					 `RSR`,
					 `Rendez-vous`,
					 `contact N3`,
					 `contact conceptel`,
					 `Horaire`,
					 `vehicules`
					 					)
										
					 			VALUES(
								'$departement',
								'$RSR',
								'$Rendezvous',
								'$contactN3',
								'$contactconceptel',
								'$Horaire',
								'$vehicules'
								
										)";
										
										
				   mysql_query($requete) or die(mysql_error());
				   mysql_close();
				}
?>
