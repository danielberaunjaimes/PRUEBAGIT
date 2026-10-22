<?php /*
	require("../utiles/config.php");
	require("../utiles/mysqldatabase.php");
	$data = new MySqlDatabase(DATASERVER, DATACATALOG, USERNAME, USERPWD);
	$data->Connect();
*/ ?>
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
    	<td width="218" height="23" bgcolor="#EDEDED"><strong>&nbsp;&nbsp;REGISTRO DEPENDENCIA</strong></td>
    	<td width="110" bgcolor="#EDEDED"><p>&nbsp;</p></td>
    	<td width="58" bgcolor="#EDEDED"></td>
   	  <td width="154" align="center" valign="middle" bgcolor="#EDEDED">&nbsp;</td>
  	</tr>
</table>
<br />
<div id="socios">
<div class="marco">
  <div class="titulo">
    <p>TOTAL DE FACULTADES REGISTRADOS </p>
  </div>
  <div class="izq">
    <table width="801" border="0" cellpadding="0" >
      <tr>
        <td width="97" class="th_1">Tipo Personal </td>
        <td width="97" class="th_1">Asignacion</td>
        <td width="97" class="th_1">Fecha Reg </td>
        <td width="288" class="th_1">&nbsp;Nombre Dependencia </td>
        <td width="158" class="th_1">&nbsp;Resolucion</td>
        <td colspan="60" class="th_1">&nbsp;Opcion</td>
      </tr>
      <tr>
        <?php
			$q = "SELECT tipo.idtipo, asignacion.idasig, asignacion.idtipo, tipo.nomtipo, asignacion.nomasig, dependencia.fechardepe, dependencia.nomdepe, dependencia.resoluciondepe, dependencia.iddepe FROM (tipo INNER JOIN asignacion ON tipo.idtipo = asignacion.idtipo) INNER JOIN dependencia ON asignacion.idasig = dependencia.idasig";
			$data->ExecuteRowFetcher($q);
			while($data->Row != 0)
			{
		?>
        <td style=" border-bottom:solid 0px #000000;" class="th_2"><div align="center"> <?php echo ($data->Row['nomtipo']) ?> </div></td>
        <td style=" border-bottom:solid 0px #000000;" class="th_2"><div align="center"> <?php echo ($data->Row['nomasig']) ?> </div></td>
        <td style=" border-bottom:solid 0px #000000;" class="th_2"><div align="center"> <?php echo ($data->Row['fechardepe']) ?> </div></td>
        <td style=" border-bottom:solid 0px #000000;" class="th_2"><div align="left"> <?php echo ($data->Row['nomdepe']) ?> </div></td>
        <td style=" border-bottom:solid 0px #000000;" class="th_2"><div align="left"> <?php echo ($data->Row['resoluciondepe']) ?> </div></td>
        <td class="th_2" width="22">
			<a href="ver_dependencia.php?promo=<?php echo $data->Row['iddepe'];?>" onclick="return hs.htmlExpand(this,{objectType: 'iframe'})"> 
				<img src="imagenes/b_select.png" width="16" height="16" border="0" /> </a> </td>
        <td class="th_2" width="19">
			<a href="javascript:startPop('mod_reg_dependencia.php?promo=<?php echo $data->Row['iddepe']; ?>','395','205','320','190');"> 
				<img src="imagenes/b_usredit.png" width="16" height="16" border="0" /> </a> </td>
        <td class="th_2" width="24">
			<a href="reg_dependencia_del.php?promo=<?php echo $data->Row['iddepe']; ?>" onclick="return confirm('Esta seguro de eliminar la Facultad')"> 	
				<img src="imagenes/b_usrdrop.png" width="16" height="16" border="0" /> </a> </td>
      </tr>
      <?php
					$data->FetchRow();
				}			
			?>
    </table>
  </div>
</div>