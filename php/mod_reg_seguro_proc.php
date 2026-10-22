<?php
	session_start();
	require("../utiles/config.php");
	require("../utiles/mysqldatabase.php");
	$fecharseg = $_POST['fecharseg1'];
	$nomseg = $_POST['nomseg1'];
	$tasaseg = $_POST['tasaseg1'];
	$resolucionseg = $_POST['resolucionseg1'];
	$promo = $_GET['promo'];
	$nomseg = strtoupper($nomseg);
	$resolucionseg = strtoupper($resolucionseg);
	$data = new MySqlDatabase(DATASERVER, DATACATALOG, USERNAME, USERPWD);
    $data->Connect();
	$q = "UPDATE seguro SET fecharseg='".$fecharseg."', nomseg='".$nomseg."', tasaseg='".$tasaseg."', resolucionseg='".$resolucionseg."' WHERE idseg = $promo";
    $data->ExecuteQuery($q);
	echo '<script>javascript:window.close();</script>';
?>