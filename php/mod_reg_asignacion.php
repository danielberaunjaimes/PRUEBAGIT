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
		<title>MODIFICAR ASIGNACION</title>
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
	<form method="post" enctype="multipart/form-data" name="form1" action="mod_reg_asignacion_proc.php?promo=<?php echo $_GET['promo'] ?>">
	  <table width="368" border="0" align="center">
        <?php  
							$q = "SELECT tipo.idtipo, tipo.nomtipo, asignacion.nomasig, asignacion.idasig FROM tipo INNER JOIN asignacion ON tipo.idtipo = asignacion.idtipo WHERE asignacion.idasig = $promo";
							
							$data->ExecuteRowFetcher($q);
							while($data->Row != 0)
							{ 
						?>
        <tr class="th_5">
          <td colspan="4"><div align="center">MODIFICAR ASIGNACION </div></td>
        </tr>
        <tr>
          <td width="20" class="th_5"></td>
          <td><table width="105%" border="0">
              <tr class="th_1">
                <td><div align="center">CODIGO TIPO </div></td>
                <td class="th_2"><input name="idtipo1" type="text" id="idtipo1" size="8" value="<?php echo $data->Row["idtipo"]; ?>" />
                </td>
              </tr>
              <tr class="th_1">
                <td><div align="center">NOMBRE TIPO </div></td>
                <td class="th_2"><input name="nomtipo1" type="text" id="nomtipo1" size="35" value="<?php echo $data->Row["nomtipo"]; ?>" />
                </td>
              </tr>
              <tr class="th_1">
                <td width="39%"><div align="center">NOMBRE ASIGNACION </div></td>
                <td width="61%" class="th_2"><div align="left">
                    <input name="nomasig1" type="text" id="nomasig1" value="<?php echo $data->Row["nomasig"]; ?>" size="35" />
                </div></td>
              </tr>
          </table></td>
          <td width="20" class="th_5"></td>
        </tr>
        <tr class="th_1">
          <td class="th_5">&nbsp;</td>
          <td>
		  <div align="center">
		  	<strong>
              <input name="limpiar" type="reset" id="limpiar" value="Limpiar">
              </strong><strong>
              <input name="registrar" type="submit" id="registrar" value="Registrar">
          </strong></div></td>
        </tr>
        <tr>
          <td colspan="4" class="th_5">&nbsp;</td>
        </tr>
        <?php 
								$data->FetchRow();
							}
						?>
      </table>
	</form>
	</body>
</html>