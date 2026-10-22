<?php
	require("../utiles/config.php");
	require("../utiles/mysqldatabase.php");
	$promo = $_GET['promo'];
	$data = new MySqlDatabase(DATASERVER, DATACATALOG, USERNAME, USERPWD);
	$data->Connect();
?>
<html>
	<head>
		<link href="../css/estilos.css" rel="stylesheet" type="text/css" />
		<link type="text/css" rel="stylesheet" href="../calendario/estilo.css" media="screen"></LINK>
		<SCRIPT type="text/javascript" src="../calendario/java.js?random=20060118"></script>
		<title>MODIFICAR FACULTAD</title>
		<script language="javascript">
		</script>
		<style type="text/css">
		<!--
			.Estilo2 {color: #FF0000}
			body 
			{
				background-color: #FFFFFF;
				background-image: url();
			}
			.Estilo4 {font-family: "Agency FB"}
			.Estilo11 {font-family: Arial, Helvetica, sans-serif; font-size: 14px; }
			.Estilo17 {font-size: 14px}
			.Estilo18 {font-family: Arial, Helvetica, sans-serif; }
			.Estilo22 {font-family: "Agency FB"; font-size: 18px; font-weight: bold; }
			.Estilo25 {font-size: 18px}
			.Estilo37 
			{
				font-family: Arial, Helvetica, sans-serif;
				font-size: 18px;
				color: #FF0000;
				font-weight: bold;
			}
			.Estilo38 {
				font-size: 18px;
				color: #FF0000;
				font-weight: bold;
			}
			.Estilo40 {color: #FF0000; font-weight: bold; }
			.Estilo42 {font-size: 18px; font-family: Arial, Helvetica, sans-serif; font-weight: bold; }
			.Estilo44 {font-size: 18px; font-weight: bold; }
		-->
		</style>
	</head>
	<body>
	<form method="post" enctype="multipart/form-data" name="form1" action="mod_reg_cepreunas_proc.php?promo=<?php echo $_GET['promo'] ?>">
	  	<table width="350" border="0" align="center">
		<?php
					$q = "SELECT * FROM cepreunas WHERE idcepre = $promo";
					$data->ExecuteRowFetcher($q);
					while($data->Row != 0)
					{
			?>
        	<tr class="th_5">
          		<td colspan="3"><div align="center">MODIFICAR CEPREUNAS </div></td>
        	</tr>
        	<tr>
          		<td rowspan="3" width="6%" class="th_5">&nbsp;</td>
       		  	<td width="88%">
					<table width="100%" border="0">
               		  <tr class="th_1">
               			<td width="40%"><div align="center">FECHA  <img src="../imagenes/Calendar.gif" width="20" height="21" onClick="displayCalendar(document.forms[0].fecharcepre1,'yyyy-mm-dd',this)" border="0" align="absmiddle"/></div></td>
               			<td width="60%" class="th_2"><input name="fecharcepre1" type="text" id="fecharcepre1" value="<?php echo $data->Row['fecharcepre'] ?>" size="8" />           			    </td>
               		  </tr>
              		</table>			  </td>
          		<td rowspan="3" width="6%" class="th_5">&nbsp;</td>
        	</tr>
        	<tr>
          		<td>
					<table width="100%" border="0">
                		<tr class="th_1">
                   		  <td width="41%"><div align="center">NOMBRE FACULTAD </div></td>
                    		<td width="59%" class="th_2"><div align="left"><input name="nomcepre1" type="text" id="nomcepre1" value="<?php echo $data->Row['nomcepre'] ?>" size="25" />
                   		  </div></td>
        	          	</tr>
        	          	<tr class="th_1">
        	            	<td><div align="center">RESOLUCION</div></td>
        	            	<td class="th_2"><div align="left"><input name="resolucioncepre1" type="text" id="resolucioncepre1" value="<?php echo $data->Row['resolucioncepre'] ?>" size="25" />
        	            	</div></td>	
        	          	</tr>
                	</table>				</td>
       	 	</tr>
        	
        	<tr class="th_1">
          		<td><div align="center"><strong>
          		  <input name="limpiar" type="reset" id="limpiar" value="Limpiar">
          		</strong><strong>
          		<input name="registrar" type="submit" id="registrar" value="Registrar">
          		</strong></div></td>
        	</tr>
        	<tr>
          		<td colspan="3" class="th_5">&nbsp;</td>
        	</tr>
				 <?php
		   			$data->FetchRow();
				}	
			?>
  	  </table>
    </form>
	</body>
</html>