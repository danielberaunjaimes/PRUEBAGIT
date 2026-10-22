<?php
	session_start();
	require("../utiles/config.php");
	require("../utiles/mysqldatabase.php");
	$promo = $_GET['promo'];
	$data = new MySqlDatabase(DATASERVER, DATACATALOG, USERNAME, USERPWD);
    $data->Connect();
	$q = "SELECT SUM(area.idadm) FROM administrativo INNER JOIN area ON administrativo.idadm = area.idadm WHERE administrativo.idadm=$promo";
	$data->ExecuteRowFetcher($q);
	$aux = $data->Row['SUM(area.idadm)'];
	//echo $aux;
	if ($aux==0)
	{
		$q = "DELETE FROM administrativo WHERE idadm = $promo";
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