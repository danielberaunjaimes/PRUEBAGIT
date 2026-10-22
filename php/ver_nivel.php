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
<link href="../css/estilos.css" rel="stylesheet" type="text/css" />
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="503" border="1" align="center" bordercolor="D8F8C9" bgcolor="#F7F7F7">
  <?php 
				$q = "SELECT* FROM nivel WHERE idnivel = $promo ";
	    		$data->ExecuteRowFetcher($q);
		   	 	while($data->Row != 0)
				{
			?>
    <tr>
      <th width="89" scope="col">CODIGO</th>
      <th width="138" align="left" scope="col"><span class="th_2">
	  	<?php echo ($data->Row['idnivel']); ?></span></th>
    </tr>
    <tr>
      <th scope="row">NIVEL</th>
      <td colspan="3"><span class="th_2">
	  	<?php echo ($data->Row['nomnivel']); ?></span></td>
    </tr>
	<?php 
			$data->FetchRow();
				}
	?>
  </table>
</form>
</body>
</html>
