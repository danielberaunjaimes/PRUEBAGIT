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
				$q = "SELECT* FROM facultad WHERE idfacu = $promo ";
	    		$data->ExecuteRowFetcher($q);
		   	 	while($data->Row != 0)
				{
			?>
    <tr>
      <th width="116" scope="col">FECHA  </th>
      <th width="142" align="left" scope="col"><span class="th_2"><?php echo $data->Row['fecharfacu'] ?></span></th>
      <th width="89" scope="col">CODIGO</th>
      <th width="138" align="left" scope="col"><span class="th_2"><?php echo ($data->Row['idfacu']); ?></span></th>
    </tr>
    <tr>
      <th scope="row">FACULTAD</th>
      <td colspan="3"><span class="th_2"><?php echo ($data->Row['nomfacu']); ?></span></td>
    </tr>
	<tr>
      <th scope="row">RESOLUCION</th>
      <td colspan="3"><span class="th_2"><?php echo ($data->Row['resolucionfacu']); ?></span></td>
    </tr>
	<?php 
		$data->FetchRow();
		}
		 	$q = "SELECT facultad.idfacu, eap.ideap, eap.resolucioneap, eap.nomeap FROM facultad INNER JOIN eap ON facultad.idfacu = eap.idfacu WHERE facultad.idfacu = $promo";
	    	$data->ExecuteRowFetcher($q);
		   	while($data->Row != 0)
			{
	?>
    <tr>
      <th scope="row">ESPECIALIDAD</th>
      <td colspan="3"><span class="th_2"><strong><?php echo ($data->Row['nomeap']); ?></strong></span></td>
    </tr>
    <tr>
      <th scope="row">RESOLUCION</th>
      <td colspan="3"><span class="th_2"><?php echo ($data->Row['resolucioneap']); ?></span></td>
    </tr>

	<?php 
			$data->FetchRow();
				}
			?>
  </table>
</form>
</body>
</html>
