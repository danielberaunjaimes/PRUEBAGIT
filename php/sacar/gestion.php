
<?php /*
	require("../utiles/config.php");
	require("../utiles/mysqldatabase.php");
	$data = new MySqlDatabase(DATASERVER, DATACATALOG, USERNAME, USERPWD);
	$data->Connect();
*/?>
<link href="../css/estilos.css" rel="stylesheet" type="text/css" />
<style type="text/css">
	<!--
		.Estilo1 
		{
			color: #FF0000;
			font-weight: bold;
		}
	-->
</style>
<table width="540" height="33" border="0" cellpadding="0" cellspacing="0" class="tabla1">
	<tr>
    	<td width="218" height="23" bgcolor="#EDEDED"><strong>&nbsp;&nbsp;Registro de Nueva Gestion </strong></td>
    	<td width="110" bgcolor="#EDEDED"><p>&nbsp;</p></td>
    	<td width="58" bgcolor="#EDEDED"></td>
    	<td width="154" align="center" valign="middle" bgcolor="#EDEDED">
			<div align="center">
    			<input name="Submit" type="button" class="texto" value="Registrar Gestion" onclick="reg_gestion()"/>
    		</div>
		</td>
  	</tr>
</table>
<br />
<div id="socios">
<div class="marco">
  <div class="titulo">
    <p>TOTAL DE GESTIONES ADMINISTRATIVAS </p>
  </div>
  <div class="izq">
    <table width="801" border="0" cellpadding="0" >
      <tr>
        <td width="56" class="th_1">&nbsp;Codigo </td>
        <td width="97" class="th_1">Fecha Reg </td>
        <td width="263" class="th_1">&nbsp;Nombre Gestion Administrativa </td>
        <td width="183" class="th_1">&nbsp;Resolucion</td>
        <td colspan="60" class="th_1">&nbsp;Opcion</td>
      </tr>
      <?php
				$q = "SELECT * FROM gestion ORDER BY idges";
		    	$data->ExecuteRowFetcher($q);
		    	while($data->Row != 0)
				{
			?>
      <tr>
        <td style=" border-bottom:solid 0px #000000;" class="th_2"><div align="center"> <?php echo ($data->Row['idges']) ?> </div></td>
        <td style=" border-bottom:solid 0px #000000;" class="th_2"><div align="center"> <?php echo ($data->Row['fecharges']) ?> </div></td>
        <td style=" border-bottom:solid 0px #000000;" class="th_2"><div align="left"> <?php echo ($data->Row['nomges']) ?> </div></td>
        <td style=" border-bottom:solid 0px #000000;" class="th_2"><div align="left"> <?php echo ($data->Row['resolucionges']) ?> </div></td>
        <td class="th_2" width="23">
			<a href="gestion_pdf.php?promo=<?php echo $data->Row['idges']; ?>"> 
				<img src="../imagenes/acrobat.gif" width="16" height="16" border="0" /> 
			</a> 
		</td>
        <td class="th_2" width="22">
			<a href="ver_gestion.php?promo=<?php echo $data->Row['idges'];?>" onclick="return hs.htmlExpand(this,{objectType: 'iframe'})"> 
				<img src="../imagenes/b_select.png" width="16" height="16" border="0" /> 
			</a> 
		</td>
        <td class="th_2" width="19">
			<a href="javascript:startPop('mod_reg_facultad.php?promo=<?php echo $data->Row['idges']; ?>','390','170','320','190');"> 
				<img src="../imagenes/b_usredit.png" width="16" height="16" border="0" /> 
			</a> 
		</td>
        <td class="th_2" width="24">
			<a href="reg_gestion_del.php?promo=<?php echo $data->Row['idges']; ?>" onclick="return confirm('Esta seguro de eliminar la Gestion Administrativa')"> 
				<img src="../imagenes/b_usrdrop.png" width="16" height="16" border="0" /> 	
			</a> 
		</td>
      </tr>
      <?php
					$data->FetchRow();
				}			
			?>
    </table>
  </div>
</div>
