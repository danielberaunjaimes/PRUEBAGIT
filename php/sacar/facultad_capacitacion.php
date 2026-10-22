<?php /*
	require("../utiles/config.php");
	require("../utiles/mysqldatabase.php");
	$data = new MySqlDatabase(DATASERVER, DATACATALOG, USERNAME, USERPWD);
	$data->Connect();
*/?>
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

<br />
<div id="socios">
<div class="marco">
  <div class="titulo">
    <p>TOTAL DE FACULTADES PARA EL AREA DE BENEFICIOS SOCIALES </p>
  </div>
  <div class="izq">
    <table width="801" border="0" cellpadding="0" >
      <tr>
        <td width="58" class="th_1">&nbsp;Codigo </td>
        <td width="99" class="th_1">Fecha Reg </td>
        <td width="290" class="th_1">&nbsp;Nombre Facultad</td>
        <td width="160" class="th_1">&nbsp;Resolucion</td>
        <td width="96" class="th_1">&nbsp;Actividad</td>
        <td colspan="58" class="th_1">&nbsp;Opcion</td>
      </tr>
      <?php
				$q = "SELECT * FROM facultad ORDER BY idfacu";
		    	$data->ExecuteRowFetcher($q);
		    	while($data->Row != 0)
				{
			?>
      <tr>
        <td style=" border-bottom:solid 0px #000000;" class="th_2"><div align="center"> <?php echo ($data->Row['idfacu']) ?> </div></td>
        <td style=" border-bottom:solid 0px #000000;" class="th_2"><div align="center"> <?php echo ($data->Row['fecharfacu']) ?> </div></td>
        <td style=" border-bottom:solid 0px #000000;" class="th_2"><div align="left"> <?php echo ($data->Row['nomfacu']) ?> </div></td>
        <td style=" border-bottom:solid 0px #000000;" class="th_2"><div align="left"> <?php echo ($data->Row['resolucionfacu']) ?> </div></td>
        <td class="th_2" width="96"><a href="javascript:startPop('reg_capacitacion_docente.php?promo=<?php echo $data->Row['idfacu']; ?>','475','240','320','190');"> seleccionar </a> </td>
        <td class="th_2" width="42"><a href="facultad_capacitacion_pdf.php?promo=<?php echo $data->Row['idfacu']; ?>"> <img src="../imagenes/acrobat.gif" width="16" height="16" border="0" /> </a> </td>
        <td width="40" class="th_2"><a href="ver_facultad_capacitacion.php?promo=<?php echo $data->Row['idfacu'];?>" onclick="return hs.htmlExpand(this,{objectType: 'iframe'})"> <img src="../imagenes/b_select.png" width="16" height="16" border="0" /> </a> </td>
      </tr>
      <?php
					$data->FetchRow();
				}			
			?>
    </table>
  </div>
</div>
