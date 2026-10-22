<?php
	/*session_start();
	require("../utiles/config.php");
	require("../utiles/mysqldatabase.php");
	$data = new MySqlDatabase(DATASERVER, DATACATALOG, USERNAME, USERPWD);
	$data->Connect();*/
	date_default_timezone_set ( 'America/Lima' ); 
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
<table width="784" height="33" border="0" cellpadding="0" cellspacing="0" class="tabla1">
	<tr>
    	<td width="378" height="23" bgcolor="#EDEDED"><strong>&nbsp;&nbsp;TARJETAS REGISTRADAS </strong></td>
   	</tr>
</table>
<br />
<div id="socios">
<div class="marco">
  <div class="titulo">
    <p>TARJETAS REGISTRADAS </p>
  </div>
  <div class="izq">
    <table width="796" border="0" cellpadding="0" >
      <tr>
        <td width="52" class="th_1">DNI</td>
        <td width="165" class="th_1">Apellidos</td>
        <td width="165" class="th_1">Nombres</td>
        <td width="162" class="th_1">Codigo Tarjeta </td>
        <td colspan="60" class="th_1">Opcion</td>
      </tr>
      <?php
				$q = "SELECT personal.dni, personal.apellidos, personal.nombres, tarjeta.codtar FROM personal INNER JOIN tarjeta ON personal.dni = tarjeta.dni ORDER BY personal.apellidos";
		    	$data->ExecuteRowFetcher($q);
		    	while($data->Row != 0)
				{
			?>
      <tr>
        <td style=" border-bottom:solid 0px #000000;" class="th_2"><?php echo ($data->Row['dni']) ?></td>
        <td style=" border-bottom:solid 0px #000000;" class="th_2"><?php echo ($data->Row['apellidos']) ?></td>
        <td style=" border-bottom:solid 0px #000000;" class="th_2"><?php echo ($data->Row['nombres']) ?></td>
        <td style=" border-bottom:solid 0px #000000;" class="th_2"><?php echo ($data->Row['codtar']) ?></td>
        <td class="th_2" width="29">
		  <a href="ver_personal.php?promo=<?php echo $data->Row['dni'];?>" onclick="return hs.htmlExpand(this,{objectType: 'iframe'})"> 
	    <img src="imagenes/b_select.png" width="16" height="16" border="0" /> </a> </td>
        <td class="th_2" width="21">
		  <a href="javascript:startPop('mod_reg_personal.php?promo=<?php echo $data->Row['dni']; ?>','630','477','120','100');"> 
	    <img src="imagenes/b_usredit.png" width="16" height="16" border="0" /> </a> </td>
        <td class="th_2" width="24">
		  <a href="reg_personal_del.php?promo=<?php echo $data->Row['dni']; ?>" onclick="return confirm('Esta seguro de eliminar la Facultad')"> 
	    <img src="imagenes/b_usrdrop.png" width="16" height="16" border="0" /> </a> </td>
      </tr>
      <?php
					$data->FetchRow();
				}			
			?>
    </table>
  </div>
</div>