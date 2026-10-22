<?php
	session_start();
	require("../utiles/config.php");
	require("../utiles/mysqldatabase.php");
	$promo = $_GET['promo'];
	$data = new MySqlDatabase(DATASERVER, DATACATALOG, USERNAME, USERPWD);
    $data->Connect();
	$q = "SELECT SUM(nivel.idtipo) FROM tipo INNER JOIN nivel ON tipo.idtipo = nivel.idtipo WHERE tipo.idtipo=$promo";
	$data->ExecuteRowFetcher($q);
	$aux = $data->Row['SUM(nivel.idtipo)'];
	//echo $aux;
	if ($aux==0)
	{
		$q = "DELETE FROM tipo WHERE idtipo = $promo";
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