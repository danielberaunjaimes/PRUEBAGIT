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
    	<td height="23" bgcolor="#EDEDED"><p>ASIGNACION</p></td>
    </tr>
</table>
<br />
<div id="socios">
<div class="marco5">
  <div class="titulo">
    <p>ASIGNACION</p>
  </div>
  <div class="izq">
    <table width="665" border="0" cellpadding="0" >
      <tr>
        <td width="155" class="th_1"> Tipo Personal </td>
        <td width="405" class="th_1">Nombre Asignacion </td>
        <td colspan="59" class="th_1">&nbsp;Opcion</td>
      </tr>
      <?php
				$q = "SELECT tipo.idtipo, asignacion.idasig, asignacion.idtipo, tipo.nomtipo, asignacion.nomasig FROM tipo INNER JOIN asignacion ON tipo.idtipo = asignacion.idtipo ORDER BY asignacion.idasig";
		    	$data->ExecuteRowFetcher($q);
		    	while($data->Row != 0)
				{
			?>
      <tr>
        <td style=" border-bottom:solid 0px #000000;" class="th_2"><div align="left"> <?php echo ($data->Row['nomtipo']) ?> </div></td>
        <td style=" border-bottom:solid 0px #000000;" class="th_2"><?php echo ($data->Row['nomasig']) ?></td>
        <td width="33" class="th_2"><a href="ver_asignacion.php?promo=<?php echo $data->Row['idasig'];?>" onclick="return hs.htmlExpand(this,{objectType: 'iframe'})"> <img src="imagenes/b_select.png" width="16" height="16" border="0" /> </a> </td>
        <td class="th_2" width="28"><a href="javascript:startPop('mod_reg_asignacion.php?promo=<?php echo $data->Row['idasig']; ?>','380','210','320','190');"> <img src="imagenes/b_usredit.png" width="16" height="16" border="0" /> </a> </td>
        <td class="th_2" width="32"><a href="reg_asignacion_del.php?promo=<?php echo $data->Row['idasig']; ?>" onclick="return confirm('Esta seguro de eliminar la Facultad')"> <img src="imagenes/b_usrdrop.png" width="16" height="16" border="0" /> </a> </td>
      </tr>
      <?php
					$data->FetchRow();
				}			
			?>
    </table>
  </div>
</div>
