<?php
	session_start();
	require("../utiles/config.php");
	require("../utiles/mysqldatabase.php");
	$promo = $_GET['promo'];
	$data = new MySqlDatabase(DATASERVER, DATACATALOG, USERNAME, USERPWD);
    $data->Connect();
	$q = "SELECT SUM(areaidiomas.ididi) FROM idiomas INNER JOIN areaidiomas ON idiomas.ididi = areaidiomas.ididi WHERE idiomas.ididi=$promo";
	$data->ExecuteRowFetcher($q);
	$aux = $data->Row['SUM(areaidiomas.ididi)'];
	//echo $aux;
	if ($aux==0)
	{
		$q = "DELETE FROM idiomas WHERE ididi = $promo";
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