	<?php
	require("../utiles/config.php");
	require("../utiles/mysqldatabase.php");
	$promo = $_GET['promo'];
	$data = new MySqlDatabase(DATASERVER, DATACATALOG, USERNAME, USERPWD);
	$data->Connect();
	?>
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
    	<td height="23" bgcolor="#EDEDED"><p>AREA ADMINISTRATIVO </p></td>
    </tr>
</table>
<br />
<div id="socios">
<div class="marco">
  <div class="titulo">
    <p>TOTAL AREA REGISTRADO </p>
  </div>
  <div class="izq">
    <table width="756" border="0" cellpadding="0" >
      <tr>
        <td width="210" class="th_1">&nbsp;Nombre Administrativo </td>
        <td width="66" class="th_1">Fecha</td>
        <td width="199" class="th_1">Nombre Area </td>
        <td width="139" class="th_1">Resolucion</td>
        <td colspan="59" class="th_1">&nbsp;Opcion</td>
      </tr>
      <?php
				$q = "SELECT administrativo.idadm, area.idarea, area.fechararea, area.idadm, administrativo.nomadm, area.nomarea, area.resolucionarea FROM administrativo INNER JOIN area ON administrativo.idadm = area.idadm ORDER BY administrativo.nomadm";
		    	$data->ExecuteRowFetcher($q);
		    	while($data->Row != 0)
				{
			?>
      <tr>
        <td style=" border-bottom:solid 0px #000000;" class="th_2">
			<div align="left"> 
				<?php echo ($data->Row['nomadm']) ?>			</div>		</td>
        <td style=" border-bottom:solid 0px #000000;" class="th_2"><span class="th_2" style=" border-bottom:solid 0px #000000;"><?php echo ($data->Row['fechararea']) ?></span></td>
        <td style=" border-bottom:solid 0px #000000;" class="th_2"><?php echo ($data->Row['nomarea']) ?></td>
        <td style=" border-bottom:solid 0px #000000;" class="th_2">
			<div align="left"><span class="th_2" style=" border-bottom:solid 0px #000000;"><?php echo ($data->Row['resolucionarea']) ?></span></div>		</td>
        <td width="24" class="th_2">
			<a href="usuario_pdf.php?promo=<?php echo $data->Row['idarea']; ?>"></a>		
			<a href="ver_facultad.php?promo=<?php echo $data->Row['idarea'];?>" onclick="return hs.htmlExpand(this,{objectType: 'iframe'})"> 
				<img src="../imagenes/b_select.png" width="16" height="16" border="0" />			</a>		</td>
        <td class="th_2" width="23">
			<a href="javascript:startPop('mod_reg_area.php?promo=<?php echo $data->Row['idarea']; ?>','480','240','320','190');"> 
				<img src="../imagenes/b_usredit.png" width="16" height="16" border="0" />			</a>		</td>
        <td class="th_2" width="32">
			<a href="reg_area_del.php?promo=<?php echo $data->Row['idarea']; ?>" onclick="return confirm('Esta seguro de eliminar la Facultad')"> 
				<img src="../imagenes/b_usrdrop.png" width="16" height="16" border="0" />			</a>		</td>
      </tr>
      <?php
					$data->FetchRow();
				}			
			?>
    </table>
  </div>
</div>
