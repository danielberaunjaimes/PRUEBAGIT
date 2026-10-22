
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
    	<td width="218" height="23" bgcolor="#EDEDED"><strong>&nbsp;&nbsp;Registro Tipo de Personal </strong></td>
    	<td width="110" bgcolor="#EDEDED"><p>&nbsp;</p></td>
    	<td width="58" bgcolor="#EDEDED"></td>
    	<td width="154" align="center" valign="middle" bgcolor="#EDEDED">
			<div align="center">
    			<input name="tipo" type="button" class="texto" id="tipo" onclick="reg_tipo()" value="Registrar Tipo"/>
    		</div>
		</td>
  	</tr>
</table>
<br />
<div id="socios">
<div class="marco4">
  <div class="titulo">
    <p>TOTAL DE FACULTADES REGISTRADOS </p>
  </div>
  <div class="izq">
    <table width="546" border="0" cellpadding="0" >
      <tr>
        <td width="77" class="th_1">Codigo</td>
        <td width="260" class="th_1">&nbsp;Nombre Tipo de Personal </td>
        <td width="94" class="th_1">&nbsp;Registrar Tipo </td>
        <td colspan="60" class="th_1">&nbsp;Opcion</td>
      </tr>
      <?php
				$q = "SELECT * FROM tipo ORDER BY idtipo";
		    	$data->ExecuteRowFetcher($q);
		    	while($data->Row != 0)
				{
			?>
      <tr>
        <td style=" border-bottom:solid 0px #000000;" class="th_2"><div align="center"> <?php echo ($data->Row['idtipo']) ?> </div></td>
        <td style=" border-bottom:solid 0px #000000;" class="th_2"><div align="left"> <?php echo ($data->Row['nomtipo']) ?> </div></td>
        <td class="th_2" width="94">
			<a href="javascript:startPop('reg_nivel.php?promo=<?php echo $data->Row['idtipo']; ?>','350','150','320','190');"> seleccionar </a> </td>
        <td class="th_2" width="32">
		  <a href="ver_tipo.php?promo=<?php echo $data->Row['idtipo'];?>" onclick="return hs.htmlExpand(this,{objectType: 'iframe'})"> 
	    <img src="../imagenes/b_select.png" width="16" height="16" border="0" /> </a> </td>
        <td class="th_2" width="30">
		  <a href="javascript:startPop('mod_reg_tipo.php?promo=<?php echo $data->Row['idtipo']; ?>','395','205','320','190');"> 
	    <img src="../imagenes/b_usredit.png" width="16" height="16" border="0" /> </a> </td>
        <td class="th_2" width="30">
		  <a href="reg_tipo_del.php?promo=<?php echo $data->Row['idtipo']; ?>" onclick="return confirm('Esta seguro de eliminar la Facultad')"> 
	    <img src="../imagenes/b_usrdrop.png" width="16" height="16" border="0" /> </a> </td>
      </tr>
      <?php
					$data->FetchRow();
				}			
			?>
    </table>
  </div>
</div>
