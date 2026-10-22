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
	<form method="post" enctype="multipart/form-data" name="form1" action="mod_reg_personal_administrativo_proc.php?promo=<?php echo $_GET['promo'] ?>">
	  <table width="550" border="0" align="center">
	  <?php
				$q = "SELECT * FROM personal WHERE dniper = $promo";
		    	$data->ExecuteRowFetcher($q);
		    	while($data->Row != 0)
				{
			?>
        <tr class="th_5">
          <td colspan="3">&nbsp;</td>
        </tr>
        <tr>
          <td rowspan="4" width="6%" class="th_5">&nbsp;</td>
          <td width="88%"><table width="100%" border="0">
              <tr class="th_1">
                <td width="16%">DNI</td>
                <td width="24%" class="th_2"><input name="dniper1" type="text" id="dniper1" value="<?php echo $data->Row["dniper"]; ?>" size="10" /></td>
                <td width="33%">FECHA REGISTRO <img src="../imagenes/Calendar.gif" width="20" height="21" onClick="displayCalendar(document.forms[0].fechareg1,'yyyy-mm-dd',this)" border="0" align="absmiddle"/></td>
                <td width="27%" class="th_2"><input name="fecharper1" type="text" id="fecharper1" value="<?php echo $data->Row["fecharper"]; ?>" size="10" />
                </td>
              </tr>
          </table></td>
          <td rowspan="4" width="6%" class="th_5">&nbsp;</td>
        </tr>
        <tr>
          <td><table width="100%" border="0">
              <tr class="th_1">
                <td><div align="center">APELLIDOS</div></td>
                <td class="th_2"><div align="left">
                  <input name="apellidosper1" type="text" id="apellidosper1" value="<?php echo $data->Row["apellidosper"]; ?>" size="47" />
                </div></td>
              </tr>
              <tr class="th_1">
                <td><div align="center">NOMBRES</div></td>
                <td class="th_2"><div align="left">
                  <input name="nombresper1" type="text" id="nombresper1" value="<?php echo $data->Row["nombresper"]; ?>" size="47" />
                </div></td>
              </tr>
              <tr class="th_1">
                <td width="31%"><div align="center">DIRECCION</div></td>
                <td width="69%" class="th_2"><div align="left">
                  <input name="direccionper1" type="text" id="direccionper1" value="<?php echo $data->Row["direccionper"]; ?>" size="47" />
                </div></td>
              </tr>
          </table></td>
        </tr>
        <tr>
          <td><table width="100%" border="0">
              <tr class="th_1">
                <td width="20%"><div align="center">CONTRATO</div></td>
                <td width="27%" class="th_2"><strong>
                  <select name="contratoper1" class="Estilo11" id="contratoper1">
                    <option>NOMBRADO</option>
                    <option>PERMANENTE</option>
                    <option>EVENTUAL</option>
                  </select>
                </strong></td>
                <td width="19%"><div align="center">RESOLUCION</div></td>
                <td width="34%" class="th_2"><strong>
                  <input name="resolucionper1" type="text" id="resolucionper1" value="<?php echo $data->Row["resolucionper"]; ?>" size="17" />
                </strong></td>
              </tr>
              <tr class="th_1">
                <td><div align="center">NIVEL</div></td>
                <td class="th_2"><span class="Estilo18">
                  <select name="nivelper1" class="Estilo11" id="nivelper1">
                    <option>FUNCIONARIO</option>
                    <option>TECNICO</option>
                    <option>SECRETARIA</option>
                    <option> AUXILIAR </option>
                  </select>
                </span></td>
                <td><div align="center">DEPENDENCIA</div></td>
                <td class="th_2"><span class="Estilo22">
                  <select name="dependenciaper1" class="Estilo11" id="dependenciaper1">
                    <option>OFICINAS</option>
                    <option>FACULTAD</option>
                    <option>IDIONAS</option>
                  </select>
                </span></td>
              </tr>
              <tr class="th_1">
                <td><div align="center">TITULO</div></td>
                <td class="th_2"><span class="Estilo22">
                  <select name="tituloper1" class="Estilo11" id="tituloper1">
                    <option>PhD</option>
                    <option>Dr</option>
                    <option>Blgo</option>
                    <option>Mg</option>
                    <option>CPC</option>
                    <option>Ing</option>
                    <option>Abgdo</option>
                    <option>Bach</option>
                    <option>Sec</option>
                    <option>Tec</option>
                  </select>
                </span></td>
                <td><div align="center">REMUNERACION</div></td>
                <td class="th_2"><span class="Estilo38">
                  <select name="remuneracionper1" class="Estilo11" id="remuneracionper1">
                    <option>F - 1</option>
                    <option>F - 2</option>
                    <option>F - 3</option>
                    <option>F - 4</option>
                    <option>SPA</option>
                    <option>SPB</option>
                    <option>SPC</option>
                    <option>SPD</option>
                    <option>STA</option>
                    <option>STB</option>
                    <option>STC</option>
                    <option>STD</option>
                    <option>SAA</option>
                    <option>SAB</option>
                    <option>SAC</option>
                  </select>
                </span></td>
              </tr>
              <tr class="th_1">
                <td><div align="center">GENERO</div></td>
                <td class="th_2"><span class="Estilo2">
                  <select name="generoper1" id="generoper1">
                    <option> Varon </option>
                    <option> Mujer </option>
                  </select>
                </span></td>
                <td><div align="center">TELEFONO</div></td>
                <td class="th_2"><span class="Estilo42">
                  <input name="telefonoper1" type="text" id="telefonoper1" value="<?php echo $data->Row["telefonoper"]; ?>" size="17">
                </span></td>
              </tr>
              <tr class="th_1">
                <td><div align="center">E-MAIL</div></td>
                <td colspan="3" class="th_2"><div align="left"><span class="Estilo44">
                    <input name="emailper1" type="text" id="emailper1" value="<?php echo $data->Row["emailper"]; ?>" size="51">
                </span></div></td>
              </tr>
          </table></td>
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