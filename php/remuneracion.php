
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
    			<input name="Submit" type="button" class="texto" value="Registrar Remuneracion" onclick="reg_remuneracion()"/>
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
    <table width="544" border="0" cellpadding="0" >
      <tr>
        <td width="65" class="th_1">Fecha Reg </td>
        <td width="128" class="th_1"> Nombre Remuneracion </td>
        <td width="81" class="th_1">&nbsp;Monto</td>
        <td width="165" class="th_1">Resolucion</td>
        <td colspan="60" class="th_1">&nbsp;Opcion</td>
      </tr>
      <?php
			$q = "SELECT * FROM remuneracion ORDER BY idremu";
			$data->ExecuteRowFetcher($q);
			while($data->Row != 0)
			{
		?>
      <tr>
        <td style=" border-bottom:solid 0px #000000;" class="th_2"> <div align="center"><?php echo ($data->Row['fecharremu']) ?> </div></td>
        <td style=" border-bottom:solid 0px #000000;" class="th_2"> <div align="center"><?php echo ($data->Row['nomremu']) ?> </div></td>
        <td style=" border-bottom:solid 0px #000000;" class="th_2"> <div align="center"><?php echo ($data->Row['montoremu']) ?> </div></td>
        <td style=" border-bottom:solid 0px #000000;" class="th_2"> <div align="center"><?php echo ($data->Row['resolucionremu']) ?> </div></td><td class="th_2" width="28">
			<a href="ver_remuneracion.php?promo=<?php echo $data->Row['idremu'];?>" onclick="return hs.htmlExpand(this,{objectType: 'iframe'})"> 
				<img src="imagenes/b_select.png" width="16" height="16" border="0" /> </a> </td>
        <td class="th_2" width="26">
			<a href="javascript:startPop('mod_reg_remuneracion.php?promo=<?php echo $data->Row['idremu']; ?>','395','205','320','190');"> 
				<img src="imagenes/b_usredit.png" width="16" height="16" border="0" /> </a> </td>
        <td class="th_2" width="35">
			<a href="reg_remuneracion_del.php?promo=<?php echo $data->Row['idremu']; ?>" onclick="return confirm('Esta seguro de eliminar la Facultad')"> 
				<img src="imagenes/b_usrdrop.png" width="16" height="16" border="0" /> </a> </td>
      </tr>
      <?php
				$data->FetchRow();
			}			
		?>
    </table>
  </div>
</div>
