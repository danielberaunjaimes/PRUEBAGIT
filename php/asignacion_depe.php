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
    	<td height="23" bgcolor="#EDEDED"><p>ASIGNACION &amp; DEPENDENCIA </p></td>
    </tr>
</table>
<br />
<div id="socios">
<div class="marco5">
  <div class="titulo">
    <p>REGISTRAR DEPENDENCIA </p>
  </div>
  <div class="izq">
    <table width="644" border="0" cellpadding="0" >
      <tr>
        <td width="133" class="th_1"> Tipo Personal </td>
        <td width="372" class="th_1">Nombre Asignacion </td>
        <td width="75" class="th_1">Registrar</td>
        <td width="54" colspan="57" class="th_1">&nbsp;Opcion</td>
      </tr>
      <?php
				$q = "SELECT tipo.idtipo, asignacion.idasig, asignacion.idtipo, tipo.nomtipo, asignacion.nomasig FROM tipo INNER JOIN asignacion ON tipo.idtipo = asignacion.idtipo ORDER BY asignacion.idasig";
		    	$data->ExecuteRowFetcher($q);
		    	while($data->Row != 0)
				{
			?>
      <tr>
        <td style=" border-bottom:solid 0px #000000;" class="th_2"><div align="left"> <?php echo ($data->Row['nomtipo']) ?> </div></td>
        <td style=" border-bottom:solid 0px #000000;" class="th_2"><div align="left"><span class="th_2" style=" border-bottom:solid 0px #000000;"> <?php echo ($data->Row['nomasig']) ?></span></div></td>
        <td style=" border-bottom:solid 0px #000000;" class="th_2"><div align="center"> <a href="javascript:startPop('reg_dependencia.php?promo=<?php echo $data->Row['idasig']; ?>','450','230','320','190');"> seleccionar </a></div></td>
        <td class="th_2"><div align="center"> <a href="ver_asignacion_depe.php?promo=<?php echo $data->Row['idasig'];?>" onclick="return hs.htmlExpand(this,{objectType: 'iframe'})"> <img src="imagenes/b_select.png" width="16" height="16" border="0" /> </a> </div></td>
      </tr>
      <?php
					$data->FetchRow();
				}			
			?>
    </table>
  </div>
</div>
