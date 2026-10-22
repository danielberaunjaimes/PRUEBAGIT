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
    	<td height="23" bgcolor="#EDEDED"><p>REGISTRO DOCUMENTOS DE CONTROL Y REGISTRO </p></td>
    </tr>
</table>
<br />
<div id="socios">
<div class="marco">
  <div class="titulo">
    <p>TOTAL DE DOCUMENTOS DE CONTROL Y REGISTROS </p>
  </div>
  <div class="izq">
    <table width="800" border="0" cellpadding="0" >
      <tr>
        <td width="291" class="th_1">&nbsp;Nombre Facultad</td>
        <td width="47" class="th_1">Fecha</td>
        <td width="228" class="th_1">Nombre Actividad Control y Registro </td>
        <td width="149" class="th_1">Resolucion Control </td>
        <td colspan="59" class="th_1">&nbsp;Opcion</td>
      </tr>
      <?php
				$q = "SELECT facultad.idfacu, controldoc.idcon, controldoc.idfacu, facultad.nomfacu, controldoc.fecharcon, controldoc.nomcon, controldoc.resolucioncon FROM facultad INNER JOIN controldoc ON facultad.idfacu = controldoc.idfacu ORDER BY controldoc.idcon";
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
				<?php echo ($data->Row['fecharcon']) ?>			</span>		</td>
        <td style=" border-bottom:solid 0px #000000;" class="th_2">
			<?php echo ($data->Row['nomcon']) ?>		</td>
        <td style=" border-bottom:solid 0px #000000;" class="th_2">
			<div align="left">
				<span class="th_2" style=" border-bottom:solid 0px #000000;">
					<?php echo ($data->Row['resolucioncon']) ?>				</span>			</div>		</td>
        <td width="23" class="th_2">
			<a href="ver_control_docente.php?promo=<?php echo $data->Row['idcon'];?>" onclick="return hs.htmlExpand(this,{objectType: 'iframe'})"> 
				<img src="../imagenes/b_select.png" width="16" height="16" border="0" />			</a>		</td>
        <td class="th_2" width="23">
			<a href="javascript:startPop('mod_reg_control_docente.php?promo=<?php echo $data->Row['idcon']; ?>','502','222','200','190');"> 	
				<img src="../imagenes/b_usredit.png" width="16" height="16" border="0" />			</a>		</td>
        <td class="th_2" width="23">
			<a href="reg_control_docente_del.php?promo=<?php echo $data->Row['idcon']; ?>" onclick="return confirm('Esta seguro de eliminar la Facultad')"> 
				<img src="../imagenes/b_usrdrop.png" width="16" height="16" border="0" />			</a>		</td>
      </tr>
      <?php
					$data->FetchRow();
				}			
			?>
    </table>
  </div>
</div>
