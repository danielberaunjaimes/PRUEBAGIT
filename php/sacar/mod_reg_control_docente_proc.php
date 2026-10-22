<?php
	session_start();
	require("../utiles/config.php");
	require("../utiles/mysqldatabase.php");
	$fecharcon = $_POST['fecharcon1'];
	$nomcon = $_POST['nomcon1'];
	$resolucioncon = $_POST['resolucioncon1'];
	$promo = $_GET['promo'];
	$nomcon = strtoupper($nomcon);
	$resolucioncon = strtoupper($resolucioncon);
	$data = new MySqlDatabase(DATASERVER, DATACATALOG, USERNAME, USERPWD);
    $data->Connect();
	$q = "UPDATE controldoc SET fecharcon='".$fecharcon."', nomcon='".$nomcon."', resolucioncon='".$resolucioncon."' WHERE idcon = $promo";
    $data->ExecuteQuery($q);
	echo '<script>javascript:window.close();</script>';
?>