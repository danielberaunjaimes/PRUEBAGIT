<?php
	session_start();
	require("../utiles/config.php");
	require("../utiles/mysqldatabase.php");
	$promo = $_GET['promo'];
	$data = new MySqlDatabase(DATASERVER, DATACATALOG, USERNAME, USERPWD);
    $data->Connect();
	$q = "SELECT SUM(eap.idfacu) FROM facultad INNER JOIN eap ON facultad.idfacu = eap.idfacu WHERE facultad.idfacu=$promo";
	$data->ExecuteRowFetcher($q);
	$aux = $data->Row['SUM(eap.idfacu)'];
	//echo $aux;
	if ($aux==0)
	{
		$q = "DELETE FROM facultad WHERE idfacu = $promo";
    	$data->ExecuteQuery($q);
		echo '<script>window.location="home.php";</script>';
		$data->FetchRow();	
		//echo "eliminar dato sin eap";
	}
	else
	{
		//echo "no elimina por tener datos";
		echo '<script>window.location="home.php";</script>';
	}
	$data->FetchRow()
?>