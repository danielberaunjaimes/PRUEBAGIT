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
<title>REGISTRO Y CONTROL</title><table width="540" height="33" border="0" cellpadding="0" cellspacing="0" class="tabla1">
	<tr>
    	<td height="23" bgcolor="#EDEDED"><p>REGISTROS DE DOCUMENTOS DE REGISTRO Y CONTROL </p></td>
    </tr>
</table>
<br />
<div id="socios">
<div class="marco">
  <div class="titulo">
    <p>TOTAL DE REGISTRO Y CONTROL REGISTRADOS </p>
  </div>
  <div class="izq">
    <table width="791" border="0" cellpadding="0" >
      <tr>
        <td width="250" class="th_1">&nbsp;Nombre Oficina </td>
        <td width="57" class="th_1">Fecha</td>
        <td width="257" class="th_1">Nombre Actividad Reg. Control </td>
        <td width="138" class="th_1">Resolucion Reg. y Cont.</td>
        <td colspan="59" class="th_1">&nbsp;Opcion</td>
      </tr>
      <?php
				$q = "SELECT administrativo.idadm, capacitacionadm.idadm, capacitacionadm.idcapa, administrativo.nomadm, capacitacionadm.fecharcapa, capacitacionadm.nomcapa, capacitacionadm.resolucioncapa FROM administrativo INNER JOIN capacitacionadm ON administrativo.idadm = capacitacionadm.idadm ORDER BY capacitacionadm.idcapa";
		    	$data->ExecuteRowFetcher($q);
		    	while($data->Row != 0)
				{
			?>
      <tr>
        <td style=" border-bottom:solid 0px #000000;" class="th_2">
			<div align="left"> 
				<?php echo ($data->Row['nomadm']) ?>			</div>		</td>
        <td style=" border-bottom:solid 0px #000000;" class="th_2">
			<span class="th_2" style=" border-bottom:solid 0px #000000;">
				<?php echo ($data->Row['fecharcapa']) ?>			</span>		</td>
        <td style=" border-bottom:solid 0px #000000;" class="th_2">
			<?php echo ($data->Row['nomcapa']) ?>		</td>
        <td style=" border-bottom:solid 0px #000000;" class="th_2">
			<div align="left">
				<span class="th_2" style=" border-bottom:solid 0px #000000;">
					<?php echo ($data->Row['resolucioncapa']) ?>				</span>			</div>		</td>
        <td width="23" class="th_2">
			<a href="ver_capacitacion_administrativo.php?promo=<?php echo $data->Row['idcapa'];?>" onclick="return hs.htmlExpand(this,{objectType: 'iframe'})"> 
				<img src="../imagenes/b_select.png" width="16" height="16" border="0" />			</a>		</td>
        <td class="th_2" width="23">
			<a href="javascript:startPop('mod_reg_capacitacion_administrativo.php?promo=<?php echo $data->Row['idcapa']; ?>','502','222','200','190');"> 	
				<img src="../imagenes/b_usredit.png" width="16" height="16" border="0" />			</a>		</td>
        <td class="th_2" width="27">
			<a href="reg_capacitacion_administrativo_del.php?promo=<?php echo $data->Row['idcapa']; ?>" onclick="return confirm('Esta seguro de eliminar ')"> 
				<img src="../imagenes/b_usrdrop.png" width="16" height="16" border="0" />			</a>		</td>
      </tr>
      <?php
					$data->FetchRow();
				}			
			?>
    </table>
  </div>
</div>
