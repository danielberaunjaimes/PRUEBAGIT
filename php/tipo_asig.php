<?php
	/*session_start();
	require("../utiles/config.php");
	require("../utiles/mysqldatabase.php");
	$data = new MySqlDatabase(DATASERVER, DATACATALOG, USERNAME, USERPWD);
	$data->Connect();*/
	date_default_timezone_set ( 'UTC' ); 
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
<table width="559" height="33" border="0" cellpadding="0" cellspacing="0" class="tabla1">
	<tr>
    	<td width="557" height="23" bgcolor="#EDEDED"><strong>&nbsp;&nbsp;REGISTRO TIPO &amp; ASIGNACION </strong></td>
   	</tr>
</table>
<br />
<div id="socios">
<div class="marco4">
  <div class="titulo">
    <p>REGISTRAR &amp; ASIGNACION</p>
  </div>
  <div class="izq">
    <table width="546" border="0" cellpadding="0" >
      <tr>
        <td width="79" class="th_1">Codigo</td>
        <td width="262" class="th_1">&nbsp;Nombre Tipo </td>
        <td width="96" class="th_1">&nbsp;Registrar Tipo </td>
        <td colspan="58" class="th_1">&nbsp;Opcion</td>
      </tr>
      <?php
				$q = "SELECT * FROM tipo ORDER BY idtipo";
		    	$data->ExecuteRowFetcher($q);
		    	while($data->Row != 0)
				{
			?>
      <tr>
        <td style=" border-bottom:solid 0px #000000;" class="th_2"><div align="center"> <?php echo ($data->Row['idtipo']) ?> </div></td>
        <td style=" border-bottom:solid 0px #000000;" class="th_2"><div align="left"> <?php echo ($data->Row['nomtipo']) ?> </div></td>
        <td class="th_2" width="96"><a href="javascript:startPop('reg_asignacion.php?promo=<?php echo $data->Row['idtipo']; ?>','350','150','320','190');"> seleccionar </a> </td>
        <td class="th_2"><div align="center"> <a href="ver_tipo_asig.php?promo=<?php echo $data->Row['idtipo'];?>" onclick="return hs.htmlExpand(this,{objectType: 'iframe'})"> <img src="imagenes/b_select.png" width="16" height="16" border="0" /> </a> </div></td>
      </tr>
      <?php
					$data->FetchRow();
				}			
			?>
    </table>
  </div>
</div>
