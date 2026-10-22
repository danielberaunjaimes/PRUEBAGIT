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
        <td width="133" class="th_1">Tipo Personal </td>
        <td width="142" class="th_1">Asignacion</td>
        <td width="341" class="th_1">&nbsp;Nombre Dependencia </td>
        <td width="99" class="th_1">&nbsp;Registrar</td>
        <td width="74" colspan="57" class="th_1">&nbsp;Opcion</td>
      </tr>
      <tr>
        <?php
			$q = "SELECT tipo.idtipo, asignacion.idasig, asignacion.idtipo, tipo.nomtipo, asignacion.nomasig, dependencia.fechardepe, dependencia.nomdepe, dependencia.resoluciondepe, dependencia.iddepe FROM (tipo INNER JOIN asignacion ON tipo.idtipo = asignacion.idtipo) INNER JOIN dependencia ON asignacion.idasig = dependencia.idasig";
			$data->ExecuteRowFetcher($q);
			while($data->Row != 0)
			{
		?>
        <td style=" border-bottom:solid 0px #000000;" class="th_2"><div align="center"> 
			<?php echo ($data->Row['nomtipo']) ?> </div></td>
        <td style=" border-bottom:solid 0px #000000;" class="th_2"><div align="center"> 
			<?php echo ($data->Row['nomasig']) ?> </div></td>
        <td style=" border-bottom:solid 0px #000000;" class="th_2"><div align="left"> 
			<?php echo ($data->Row['nomdepe']) ?> </div></td>
        <td style=" border-bottom:solid 0px #000000;" class="th_2"> <div align="center">
			<a href="javascript:startPop('reg_area.php?promo=<?php echo $data->Row['iddepe']; ?>','450','230','320','190');"> seleccionar 
			</a> </div></td>
        <td class="th_2"><div align="center">
			<a href="ver_facultad.php?promo=<?php echo $data->Row['iddepe'];?>" onclick="return hs.htmlExpand(this,{objectType: 'iframe'})"> <img src="imagenes/b_select.png" width="16" height="16" border="0" /> </a> </div></td>
      </tr>
      <?php
					$data->FetchRow();
				}			
			?>
    </table>
  </div>
</div>
