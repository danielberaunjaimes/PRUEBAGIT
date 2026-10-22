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
  <table width="550" border="1" align="center" bordercolor="D8F8C9" bgcolor="#F7F7F7" class="th_1">
  <?php 
				$q = "SELECT* FROM capacitacion WHERE idcap = $promo ";
	    		$data->ExecuteRowFetcher($q);
		   	 	while($data->Row != 0)
				{
			?>
    <tr>
      <th width="179" scope="col">Codigo</th>
      <th width="126" align="left" scope="col"><span class="th_2"><?php echo $data->Row['idcap'] ?></span></th>
      <th width="86" scope="col">Fecha</th>
      <th width="131" align="left" scope="col"><span class="th_2"><?php echo ($data->Row['fecharcap']); ?></span></th>
    </tr>
    <tr>
      <th scope="row">Capacitacion Personal  </th>
      <td colspan="3"><span class="th_2"><?php echo ($data->Row['nomcap']); ?></span></td>
    </tr>
	<tr>
      <th scope="row">Resolucion</th>
      <td colspan="3"><span class="th_2"><?php echo ($data->Row['resolucioncap']); ?></span></td>
    </tr>
	<?php 
			$data->FetchRow();
				}
			?>
  </table>
</form>
</body>
</html>
