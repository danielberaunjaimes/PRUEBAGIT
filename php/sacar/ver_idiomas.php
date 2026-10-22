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
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="503" border="1" align="center" bordercolor="D8F8C9" bgcolor="#F7F7F7">
  <?php 
				$q = "SELECT* FROM idiomas WHERE ididi = $promo ";
	    		$data->ExecuteRowFetcher($q);
		   	 	while($data->Row != 0)
				{
			?>
    <tr>
      <th width="116" scope="col">FECHA  </th>
      <th width="142" align="left" scope="col"><span class="th_2"><?php echo $data->Row['fecharidi'] ?></span></th>
      <th width="89" scope="col">CODIGO</th>
      <th width="138" align="left" scope="col"><span class="th_2"><?php echo ($data->Row['ididi']); ?></span></th>
    </tr>
    <tr>
      <th scope="row">FACULTAD</th>
      <td colspan="3"><span class="th_2"><?php echo ($data->Row['nomidi']); ?></span></td>
    </tr>
	<tr>
      <th scope="row">RESOLUCION</th>
      <td colspan="3"><span class="th_2"><?php echo ($data->Row['resolucionidi']); ?></span></td>
    </tr>
	<?php 
		$data->FetchRow();
		}
		 	$q = "SELECT idiomas.ididi, areaidiomas.resolucionareaidi, areaidiomas.nomareaidi, areaidiomas.ididi FROM idiomas INNER JOIN areaidiomas ON idiomas.ididi = areaidiomas.ididi WHERE idiomas.ididi = $promo";
	    	$data->ExecuteRowFetcher($q);
		   	while($data->Row != 0)
			{
	?>
    <tr>
      <th scope="row">ESPECIALIDAD</th>
      <td colspan="3"><span class="th_2"><strong><?php echo ($data->Row['nomareaidi']); ?></strong></span></td>
    </tr>
    <tr>
      <th scope="row">RESOLUCION</th>
      <td colspan="3"><span class="th_2"><?php echo ($data->Row['resolucionareaidi']); ?></span></td>
    </tr>

	<?php 
			$data->FetchRow();
				}
			?>
  </table>
</form>
</body>
</html>
