<?php
	session_start();
	require("../utiles/config.php");
	require("../utiles/mysqldatabase.php");
	$codtar = $_GET['tarjeta'];
	$data = new MySqlDatabase(DATASERVER, DATACATALOG, USERNAME, USERPWD);
	$data->Connect();
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
<table width="829" height="33" border="0" cellpadding="0" cellspacing="0" class="tabla1">
	<tr>
    	<td height="23" bgcolor="#EDEDED">
	  		<div class="titulo">
				<p>REGISTAR CONTROL PERSONAL  : <?php echo $codtar ?></p>
		</div></td>
  	</tr>
</table>
<br />
<div id="socios">
<div class="marco">
  <div class="titulo">
    <p>PERSONAL</p>
  </div>
  <div class="izq">
    <table width="796" border="0" cellpadding="0" >
      <tr>
        <td width="52" class="th_1">DNI</td>
		<td width="150" class="th_1">Nº Tajeta</td>
		<td width="123" class="th_1">Registrar Tarjeta </td>
        <td colspan="58" class="th_1">Opcion</td>
      </tr>
      <?php
				$q = "SELECT * FROM tarjeta WHERE 'codtar' LIKE '$codtar'";
		    	$data->ExecuteRowFetcher($q);
		    	while($data->Row != 0)
				{
			?>
      <tr>
	    <td style=" border-bottom:solid 0px #000000;" class="th_2"><?php echo ($data->Row['dni']) ?></td>
        <td style=" border-bottom:solid 0px #000000;" class="th_2"><?php echo ($data->Row['codtar']) ?></td>
		<td style=" border-bottom:solid 0px #000000;" class="th_2"><div align="center"> 
		<a href="javascript:startPop('reg_control_tarjeta.php?promo=<?php echo $data->Row['codtar']; ?>','350','160','320','190');"> seleccionar </a></div></td>
        <td class="th_2">
		  <div align="center">
		  	<a href="ver_personal.php?promo=<?php echo $data->Row['codtar'];?>" onclick="return hs.htmlExpand(this,{objectType: 'iframe'})"> 
          		<img src="imagenes/b_select.png" width="16" height="16" border="0" /> 
			</a>
		  </div>
		</td>
      </tr>
      <?php
					$data->FetchRow();
				}			
			?>
    </table>
  </div>
</div>