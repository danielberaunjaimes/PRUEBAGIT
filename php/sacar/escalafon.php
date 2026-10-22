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
<title>DEPARTAMENTO</title><table width="540" height="33" border="0" cellpadding="0" cellspacing="0" class="tabla1">
	<tr>
    	<td height="23" bgcolor="#EDEDED"><p>Registros de Documentos Escalofanarios </p></td>
    </tr>
</table>
<br />
<div id="socios">
<div class="marco">
  <div class="titulo">
    <p>TOTAL DE DEPARTAMENTO REGISTRADOS </p>
  </div>
  <div class="izq">
    <table width="791" border="0" cellpadding="0" >
      <tr>
        <td width="280" class="th_1">&nbsp;Nombre Facultad</td>
        <td width="44" class="th_1">Fecha</td>
        <td width="189" class="th_1">Nombre Actividad Escalofanaria </td>
        <td width="140" class="th_1">Resolucion Escalofanaria</td>
        <td colspan="59" class="th_1">&nbsp;Opcion</td>
      </tr>
      <?php
				$q = "SELECT facultad.idfacu, escalafon.idesc, escalafon.idfacu, facultad.nomfacu, escalafon.fecharesc, escalafon.nomesc, escalafon.resolucionesc FROM facultad INNER JOIN escalafon ON facultad.idfacu = escalafon.idfacu ORDER BY escalafon.idesc";
		    	$data->ExecuteRowFetcher($q);
		    	while($data->Row != 0)
				{
			?>
      <tr>
        <td style=" border-bottom:solid 0px #000000;" class="th_2">
			<div align="left"> 
				<?php echo ($data->Row['nomfacu']) ?>			</div>		</td>
        <td style=" border-bottom:solid 0px #000000;" class="th_2">
			<span class="th_2" style=" border-bottom:solid 0px #000000;">
				<?php echo ($data->Row['fecharesc']) ?>			</span>		</td>
        <td style=" border-bottom:solid 0px #000000;" class="th_2">
			<?php echo ($data->Row['nomesc']) ?>		</td>
        <td style=" border-bottom:solid 0px #000000;" class="th_2">
			<div align="left">
				<span class="th_2" style=" border-bottom:solid 0px #000000;">
					<?php echo ($data->Row['resolucionesc']) ?>				</span>			</div>		</td>
        <td width="24" class="th_2">
			<a href="ver_escalafon.php?promo=<?php echo $data->Row['idesc'];?>" onclick="return hs.htmlExpand(this,{objectType: 'iframe'})"> 
				<img src="../imagenes/b_select.png" width="16" height="16" border="0" />			</a>		</td>
        <td class="th_2" width="22">
			<a href="javascript:startPop('mod_reg_escalafon.php?promo=<?php echo $data->Row['idesc']; ?>','502','222','200','190');"> 	
				<img src="../imagenes/b_usredit.png" width="16" height="16" border="0" />			</a>		</td>
        <td class="th_2" width="31">
			<a href="reg_escalafon_del.php?promo=<?php echo $data->Row['idesc']; ?>" onclick="return confirm('Esta seguro de eliminar la Facultad')"> 
				<img src="../imagenes/b_usrdrop.png" width="16" height="16" border="0" />			</a>		</td>
      </tr>
      <?php
					$data->FetchRow();
				}			
			?>
    </table>
  </div>
</div>
