<?php
	require("../utiles/config.php");
	require("../utiles/mysqldatabase.php");
	$data = new MySqlDatabase(DATASERVER, DATACATALOG, USERNAME, USERPWD);
	$data->Connect();
?>
<html>
	<head>
		<link href="../css/estilos.css" rel="stylesheet" type="text/css" />
		<link type="text/css" rel="stylesheet" href="../calendario/estilo.css" media="screen"></LINK>
		<SCRIPT type="text/javascript" src="../calendario/java.js?random=20060118"></script>
		<title>REGISTRO REMUNERACION</title>
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
	<form method="post" name="form1" action="reg_remuneracion_proc.php">
	  	<table width="402" height="240" border="0" align="center" class="th_5">
        	<tr class="th_5">
          		<td colspan="3"><div align="center">REGISTRAR REMUNERACION</div></td>
        	</tr>
        	<tr>
          		<td rowspan="3" width="6%" class="th_5">&nbsp;</td>
       		  	<td width="88%">
					<table width="100%" border="0">
               		  <tr class="th_1">
               			<td width="40%">FECHA REGISTRO <img src="imagenes/Calendar.gif" width="20" height="21" onClick="displayCalendar(document.forms[0].fecharremu1,'yyyy-mm-dd',this)" border="0" align="absmiddle"/></td>
               			<td width="60%" class="th_2"><input name="fecharremu1" type="text" id="fecharremu1" size="15" />           			    </td>
               		  </tr>
              		</table>			  </td>
          		<td rowspan="3" width="6%" class="th_5">&nbsp;</td>
        	</tr>
        	<tr>
          		<td>
					<table width="100%" border="0">
                		<tr class="th_1">
                   		  <td width="41%"><div align="center">NOMBRE REMUNERACION </div></td>
                    		<td width="59%" class="th_2"><div align="left"><input name="nomremu1" type="text" id="nomremu1" size="25" />
                   		  </div></td>
        	          	</tr>
        	          	<tr class="th_1">
        	          	  <td><div align="center">MONTO REMUNERACION</div></td>
        	          	  <td class="th_2"><input name="montoremu1" type="text" id="montoremu1" size="25" /></td>
      	          	  </tr>
        	          	<tr class="th_1">
        	            	<td><div align="center">RESOLUCION</div></td>
        	            	<td class="th_2"><div align="left"><input name="resolucionremu1" type="text" id="resolucionremu1" size="25" />
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
  	  </table>
    </form>
	</body>
</html>