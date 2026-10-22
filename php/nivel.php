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
    	<td height="23" bgcolor="#EDEDED"><p>NIVEL</p></td>
    </tr>
</table>
<br />
<div id="socios">
<div class="marco4">
  <div class="titulo">
    <p>NIVEL</p>
  </div>
  <div class="izq">
    <table width="539" border="0" cellpadding="0" >
      <tr>
        <td width="183" class="th_1">&nbsp;Nombre Tipo </td>
        <td width="252" class="th_1">Nombre Nivel </td>
        <td colspan="59" class="th_1">&nbsp;Opcion</td>
      </tr>
      <?php
				$q = "SELECT tipo.idtipo, nivel.idnivel, nivel.idtipo, tipo.nomtipo, nivel.nomnivel FROM tipo INNER JOIN nivel ON tipo.idtipo = nivel.idtipo ORDER BY nivel.idnivel";
		    	$data->ExecuteRowFetcher($q);
		    	while($data->Row != 0)
				{
			?>
      <tr>
        <td style=" border-bottom:solid 0px #000000;" class="th_2">
			<div align="left"> 
				<?php echo ($data->Row['nomtipo']) ?>			</div>		</td>
        <td style=" border-bottom:solid 0px #000000;" class="th_2">
			<?php echo ($data->Row['nomnivel']) ?></td>
        <td width="32" class="th_2">
			<a href="ver_nivel.php?promo=<?php echo $data->Row['idnivel'];?>" onclick="return hs.htmlExpand(this,{objectType: 'iframe'})"> 
				<img src="imagenes/b_select.png" width="16" height="16" border="0" />			</a>		</td>
        <td class="th_2" width="30">
			<a href="javascript:startPop('mod_reg_nivel.php?promo=<?php echo $data->Row['idnivel']; ?>','380','160','320','190');"> 
				<img src="imagenes/b_usredit.png" width="16" height="16" border="0" />			</a>		</td>
        <td class="th_2" width="30">
			<a href="reg_nivel_del.php?promo=<?php echo $data->Row['idnivel']; ?>" onclick="return confirm('Esta seguro de eliminar la Facultad')"> 
				<img src="imagenes/b_usrdrop.png" width="16" height="16" border="0" />			</a>		</td>
      </tr>
      <?php
					$data->FetchRow();
				}			
			?>
    </table>
  </div>
</div>
