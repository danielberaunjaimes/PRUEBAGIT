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
<title>CEPREUNAS</title><table width="540" height="33" border="0" cellpadding="0" cellspacing="0" class="tabla1">
	<tr>
    	<td height="23" bgcolor="#EDEDED"><p>Area centro Pre Unas  </p></td>
    </tr>
</table>
<br />
<div id="socios">
<div class="marco">
  <div class="titulo">
    <p>REGISTRO DE AREAS DEL CEPREUNAS </p>
  </div>
  <div class="izq">
    <table width="791" border="0" cellpadding="0" >
      <tr>
        <td width="280" class="th_1">&nbsp;Nombre CepreUnas </td>
        <td width="44" class="th_1">Fecha</td>
        <td width="189" class="th_1">Nombre Area CepreUnas </td>
        <td width="140" class="th_1">Resolucion Area </td>
        <td colspan="59" class="th_1">&nbsp;Opcion</td>
      </tr>
      <?php
				$q = "SELECT cepreunas.idcepre, areacepre.idareacepre, areacepre.idcepre, cepreunas.nomcepre, areacepre.fecharareacepre, areacepre.nomareacepre, areacepre.resolucionareacepre FROM cepreunas INNER JOIN areacepre ON cepreunas.idcepre = areacepre.idcepre ORDER BY areacepre.idareacepre";
		    	$data->ExecuteRowFetcher($q);
		    	while($data->Row != 0)
				{
			?>
      <tr>
        <td style=" border-bottom:solid 0px #000000;" class="th_2">
			<div align="left"> 
				<?php echo ($data->Row['nomcepre']) ?>			</div>		</td>
        <td style=" border-bottom:solid 0px #000000;" class="th_2">
			<span class="th_2" style=" border-bottom:solid 0px #000000;">
				<?php echo ($data->Row['fecharareacepre']) ?>			</span>		</td>
        <td style=" border-bottom:solid 0px #000000;" class="th_2">
			<?php echo ($data->Row['nomareacepre']) ?>		</td>
        <td style=" border-bottom:solid 0px #000000;" class="th_2">
			<div align="left">
				<span class="th_2" style=" border-bottom:solid 0px #000000;">
					<?php echo ($data->Row['resolucionareacepre']) ?>				</span>			</div>		</td>
        <td width="24" class="th_2">
			<a href="ver_areacepre.php?promo=<?php echo $data->Row['idareacepre'];?>" onclick="return hs.htmlExpand(this,{objectType: 'iframe'})"> 
				<img src="../imagenes/b_select.png" width="16" height="16" border="0" />			</a>		</td>
        <td class="th_2" width="22">
			<a href="javascript:startPop('mod_reg_areacepre.php?promo=<?php echo $data->Row['idareacepre']; ?>','502','222','200','190');"> 	
				<img src="../imagenes/b_usredit.png" width="16" height="16" border="0" />			</a>		</td>
        <td class="th_2" width="31">
			<a href="reg_areacepre_del.php?promo=<?php echo $data->Row['idareacepre']; ?>" onclick="return confirm('Esta seguro de eliminar')"> 
				<img src="../imagenes/b_usrdrop.png" width="16" height="16" border="0" />			</a>		</td>
      </tr>
      <?php
					$data->FetchRow();
				}			
			?>
    </table>
  </div>
</div>
