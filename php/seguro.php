
<?php /*
	require("../utiles/config.php");
	require("../utiles/mysqldatabase.php");
	$data = new MySqlDatabase(DATASERVER, DATACATALOG, USERNAME, USERPWD);
	$data->Connect();
*/?>
<link href="../css/estilos.css" rel="stylesheet" type="text/css" />
<style type="text/css">
	<!--
.Estilo4 {font-size: 12px}
	-->
</style>
<table width="540" height="33" border="0" cellpadding="0" cellspacing="0" class="tabla1">
	<tr>
    	<td width="218" height="23" bgcolor="#EDEDED"><strong>&nbsp;&nbsp;Registro de Remuneracion </strong></td>
    	<td width="110" bgcolor="#EDEDED"><p>&nbsp;</p></td>
    	<td bgcolor="#EDEDED">
			<div align="center">
    			<input name="Submit" type="button" class="texto" value="Registrar Seguro" onclick="reg_seguro()"/>
   		</div></td>
   	</tr>
</table>
<br />
<div id="socios">
<div class="marco4">
  <div class="titulo">
    <p>REGISTRO DE REMUNERACION VIGENTE </p>
  </div>
  <div class="izq">
    <table width="543" border="0" cellpadding="0" >
      <tr>
        <td width="60" class="th_1">Fecha Reg </td>
        <td width="192" class="th_1"> Nombre Seguro </td>
        <td width="58" class="th_1">&nbsp;Tasa  </td>
        <td width="151" class="th_1">Resolucion</td>
        <td colspan="60" class="th_1">&nbsp;Opcion</td>
      </tr>
      <?php
			$q = "SELECT * FROM seguro ORDER BY idseg";
			$data->ExecuteRowFetcher($q);
			while($data->Row != 0)
			{
		?>
      <tr>
        <td style=" border-bottom:solid 0px #000000;" class="th_2"><div align="center"><?php echo ($data->Row['fecharseg']) ?> </div>
            <div align="center"></div></td>
        <td style=" border-bottom:solid 0px #000000;" class="th_2"><div align="left"><?php echo ($data->Row['nomseg']) ?> </div></td>
        <td style=" border-bottom:solid 0px #000000;" class="th_2"><div align="center"><?php echo ($data->Row['tasaseg']) ?> % </div></td>
        <td style=" border-bottom:solid 0px #000000;" class="th_2"><div align="left"><?php echo ($data->Row['resolucionseg']) ?> </div></td>
        <td class="th_2" width="23"><a href="ver_seguro.php?promo=<?php echo $data->Row['idseg'];?>" onclick="return hs.htmlExpand(this,{objectType: 'iframe'})"> <img src="imagenes/b_select.png" width="16" height="16" border="0" /> </a> </td>
        <td class="th_2" width="20"><a href="javascript:startPop('mod_reg_seguro.php?promo=<?php echo $data->Row['idseg']; ?>','395','205','320','190');"> <img src="imagenes/b_usredit.png" width="16" height="16" border="0" /> </a> </td>
        <td class="th_2" width="23"><a href="reg_seguro_del.php?promo=<?php echo $data->Row['idseg']; ?>" onclick="return confirm('Esta seguro de eliminar la Facultad')"> <img src="imagenes/b_usrdrop.png" width="16" height="16" border="0" /> </a> </td>
      </tr>
      <?php
				$data->FetchRow();
			}			
		?>
    </table>
  </div>
</div>
