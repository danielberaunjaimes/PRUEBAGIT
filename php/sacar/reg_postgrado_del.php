<?php
	session_start();
	require("../utiles/config.php");
	require("../utiles/mysqldatabase.php");
	$promo = $_GET['promo'];
	$data = new MySqlDatabase(DATASERVER, DATACATALOG, USERNAME, USERPWD);
    $data->Connect();
	$q = "SELECT SUM(areapost.idpost) FROM postgrado INNER JOIN areapost ON postgrado.idpost = areapost.idpost WHERE postgrado.idpost=$promo";
	$data->ExecuteRowFetcher($q);
	$aux = $data->Row['SUM(areapost.idpost)'];
	//echo $aux;
	if ($aux==0)
	{
		$q = "DELETE FROM postgrado WHERE idpost = $promo";
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