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
<title>DEPARTAMENTO</title><table width="796" height="33" border="0" cellpadding="0" cellspacing="0" class="tabla1">
	<tr>
    	<td height="23" bgcolor="#EDEDED"><p>Escuela Academica Profesional </p></td>
    </tr>
</table>
<br />
<div id="socios">
<div class="marco6">
  <div class="titulo">
    <p>TOTAL DE DEPARTAMENTO REGISTRADOS </p>
  </div>
  <div class="izq">
    <table width="895" border="0" cellpadding="0" >
      <tr>
        <td width="83" class="th_1">Tipo </td>
        <td width="195" class="th_1">Asignacion</td>
        <td width="230" class="th_1">dependencia</td>
        <td width="309" class="th_1">Nombre Area </td>
        <td colspan="59" class="th_1">&nbsp;Opcion</td>
      </tr>
      <?php
				$q = "SELECT tipo.idtipo, asignacion.idasig, asignacion.idtipo, tipo.nomtipo, asignacion.nomasig, dependencia.fechardepe, dependencia.nomdepe, dependencia.resoluciondepe, dependencia.iddepe, area.fechararea, area.nomarea, area.resolucionarea
				FROM tipo
        		INNER JOIN asignacion ON tipo.idtipo = asignacion.idtipo
				INNER JOIN dependencia ON dependencia.idasig = asignacion.idasig
				INNER JOIN area ON dependencia.iddepe = area.iddepe;";
		    	$data->ExecuteRowFetcher($q);
		    	while($data->Row != 0)
				{
			?>
      <tr>
        <td style=" border-bottom:solid 0px #000000;" class="th_2"><div align="left"> <?php echo ($data->Row['nomtipo']) ?> </div></td>
        <td style=" border-bottom:solid 0px #000000;" class="th_2"><div align="left"> <?php echo ($data->Row['nomasig']) ?> </div></td>
        <td style=" border-bottom:solid 0px #000000;" class="th_2"><div align="left"> <?php echo ($data->Row['nomdepe']) ?> </div></td>
        <td style=" border-bottom:solid 0px #000000;" class="th_2"><?php echo ($data->Row['nomarea']) ?> </td>
        <td width="22" class="th_2"><a href="ver_eap.php?promo=<?php echo $data->Row['idarea'];?>" onclick="return hs.htmlExpand(this,{objectType: 'iframe'})"> <img src="imagenes/b_select.png" width="16" height="16" border="0" /> </a> </td>
        <td class="th_2" width="20"><a href="javascript:startPop('mod_reg_eap.php?promo=<?php echo $data->Row['idarea']; ?>','502','222','200','190');"> <img src="imagenes/b_usredit.png" width="16" height="16" border="0" /> </a> </td>
        <td class="th_2" width="20"><a href="reg_eap_del.php?promo=<?php echo $data->Row['idarea']; ?>" onclick="return confirm('Esta seguro de eliminar la Facultad')"> <img src="imagenes/b_usrdrop.png" width="16" height="16" border="0" /> </a> </td>
      </tr>
      <?php
					$data->FetchRow();
				}			
			?>
    </table>
  </div>
</div>
