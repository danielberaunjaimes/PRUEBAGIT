<?php
	/*session_start();
	if ($_SESSION['rol'] != "Estudiante")
	{
		echo '<script>window.location="../index.php";</script>';
	}*/
	require("../utiles/config.php");
	require("../utiles/mysqldatabase.php");
	$promo = $_GET['promo'];
	$data = new MySqlDatabase(DATASERVER, DATACATALOG, USERNAME, USERPWD);
	$data->Connect();
?>
<html>
	<head>
		<link href="../css/estilos.css" rel="stylesheet" type="text/css" />
		<link type="text/css" rel="stylesheet" href="../calendario/estilo.css" media="screen">
		<SCRIPT type="text/javascript" src="../calendario/java.js?random=20060118"></script>
		<title>INGRESAR AREA POSTGRADO</title>
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
	<form method="post" enctype="multipart/form-data" name="form1" action="reg_areapost_proc.php">
	  	<table width="480" border="0" align="center">
        	<tr class="th_5">
          		<td colspan="3"><div align="center">REGISTRO AREA POSTGRADO</div></td>
        	</tr>
        	<tr>
          		<td rowspan="3" width="6%" class="th_5">&nbsp;</td>
       		  	<td width="88%">
					<table width="100%" border="0">
               		  <tr class="th_1">
               			<td width="39%">FECHA REGISTRO <img src="../imagenes/Calendar.gif" width="20" height="21" onClick="displayCalendar(document.forms[0].fecharareapost1,'yyyy-mm-dd',this)" border="0" align="absmiddle"/></td>
               			<td width="61%" class="th_2"><input name="fecharareapost1" type="text" id="fecharareapost1" size="8" value="<?php echo date("Y-m-d");?>" />           			    </td>
               		  </tr>
              		</table>			  </td>
          		<td rowspan="3" width="6%" class="th_5">&nbsp;</td>
        	</tr>
        	<tr>
          		<td>
					<table width="105%" border="0">
                		<?php  
							$q = "SELECT * FROM postgrado WHERE idpost = $promo";
							$data->ExecuteRowFetcher($q);
							while($data->Row != 0)
							{ 
						?>
						<tr class="th_1">
                		  <td><div align="center">CODIGO POSTGRADO</div></td>
                		  <td class="th_2"><input name="idpost1" type="text" id="idpost1" size="8" value="<?php echo $data->Row["idpost"]; ?>" /></td>
              		  	</tr>
                		<tr class="th_1">
                		  <td><div align="center">NOMBRE POSTGRADO</div></td>
                		  <td class="th_2"><input name="nompost1" type="text" id="nompost1" size="40" value="<?php echo $data->Row["nompost"]; ?>" /></td>
                		</tr>
                		<tr class="th_1">
                   		  <td width="39%"><div align="center">NOMBRE AREA </div></td>
                    		<td width="61%" class="th_2"><div align="left"><input name="nomareapost1" type="text" id="nomareapost1" size="40" />
                   		  </div></td>
        	          	</tr>
        	          	<tr class="th_1">
        	            	<td><div align="center">RESOLUCION</div></td>
        	            	<td class="th_2"><div align="left"><input name="resolucionareapost1" type="text" id="resolucionareapost1" size="30" />
        	            	</div></td>	
        	          	</tr>
						<?php 
								$data->FetchRow();
							}
						?>
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
  	  </table>
    </form>
	</body>
</html>