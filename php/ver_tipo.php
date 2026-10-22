<?php
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
			$q = "SELECT* FROM tipo WHERE idtipo = $promo ";
	    	$data->ExecuteRowFetcher($q);
		   	while($data->Row != 0)
			{
		?>
    		<tr>
      			<th colspan="3" scope="col">
					CODIGO
				</th>
      			<th width="253" align="left" scope="col">
					<span class="th_2">
						<?php echo ($data->Row['idtipo']); ?>
					</span>
				</th>
    		</tr>
    		<tr>
      			<th width="117" scope="row">
					NOMBRE TIPO 
				</th>
      			<td colspan="3">
					<span class="th_2">
						<?php echo ($data->Row['nomtipo']); ?>
					</span>
				</td>
    		</tr>
		<?php
				$data->FetchRow();
			}			
		?>	
  		</table>
	</form>
</body>
</html>