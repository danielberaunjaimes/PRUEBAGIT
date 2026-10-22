<?php
	/*session_start();
	if ($_SESSION['rol'] != "Estudiante")
	{
		echo '<script>window.location="../index.php";</script>';
	}*/
	require("../utiles/config.php");
	require("../utiles/mysqldatabase.php");
	$promo = $_GET['promo'];
	$data = new MySqlDatabase(DATASERVER, DATACATALOG, USERNAME, USERPWD);
	$data->Connect();
?>
<html>
<head>
<title>VER FACULTAD</title>
<link href="file:///C|/AppServ/www/mphco/estilos.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.Estilo2 {font-size: 12px}
.Estilo4 {font-size: 12px; font-family: "Trebuchet MS"; }
.Estilo5 {font-family: "Trebuchet MS"}
.Estilo7 {font-weight: bold}
-->
</style>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="455" border="1" align="center" bordercolor="D8F8C9" bgcolor="#F7F7F7">
  <?php 
				$q = "SELECT* FROM remuneracion WHERE idremu = $promo ";
	    		$data->ExecuteRowFetcher($q);
		   	 	while($data->Row != 0)
				{
			?>
    <tr>
      	<th width="178" scope="col"><span class="Estilo4">FECHA  </span></th>
      	<th width="97" align="left" scope="col">
	  		<span class="th_2 Estilo2 Estilo5 Estilo7">
				<?php echo $data->Row['fecharremu'] ?>			</span>		</th>
      	<th width="73" scope="col"><span class="Estilo4">CODIGO</span></th>
      	<th width="79" align="left" scope="col">
			<span class="th_2 Estilo2 Estilo5">
				<?php echo ($data->Row['idremu']); ?>			</span>		</th>
    </tr>
    <tr>
      <th scope="row"><span class="Estilo4">NOMBRE REMUNERACION</span></th>
      <td colspan="3"><span class="th_2 Estilo2 Estilo5"><?php echo ($data->Row['nomremu']); ?></span></td>
    </tr>
	<tr>
	  <th scope="row"><span class="Estilo4">MONTO REMUNERACION</span></th>
	  <td colspan="3"><span class="th_2 Estilo2 Estilo5"><?php echo ($data->Row['montoremu']); ?></span></td>
    </tr>
	<tr>
      <th scope="row"><span class="Estilo4">RESOLUCION</span></th>
      <td colspan="3"><span class="th_2 Estilo2 Estilo5"><?php echo ($data->Row['resolucionremu']); ?></span></td>
    </tr>
	<?php 
			$data->FetchRow();
		}
	?>
  </table>
</form>
</body>
</html>
