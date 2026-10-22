<?php
	session_start();
	require("../utiles/config.php");
	require("../utiles/mysqldatabase.php");
	$promo = $_GET['promo'];
	$data = new MySqlDatabase(DATASERVER, DATACATALOG, USERNAME, USERPWD);
    $data->Connect();
	$q = "SELECT SUM(areacepre.idcepre) FROM cepreunas INNER JOIN areacepre ON cepreunas.idcepre = areacepre.idcepre WHERE cepreunas.idcepre=$promo";
	$data->ExecuteRowFetcher($q);
	$aux = $data->Row['SUM(areacepre.idcepre)'];
	//echo $aux;
	if ($aux==0)
	{
		$q = "DELETE FROM cepreunas WHERE idcepre = $promo";
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