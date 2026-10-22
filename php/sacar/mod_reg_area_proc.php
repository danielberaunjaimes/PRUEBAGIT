<?php
	session_start();
	require("../utiles/config.php");
	require("../utiles/mysqldatabase.php");
	$fechararea = $_POST['fechararea1'];
	$nomarea = $_POST['nomarea1'];
	$resolucionarea = $_POST['resolucionarea1'];
	$promo = $_GET['promo'];
	$nomarea = strtoupper($nomarea);
	$resolucionarea = strtoupper($resolucionarea);
	$data = new MySqlDatabase(DATASERVER, DATACATALOG, USERNAME, USERPWD);
    $data->Connect();
	$q = "UPDATE area SET fechararea='".$fechararea."', nomarea='".$nomarea."', resolucionarea='".$resolucionarea."' WHERE idarea = $promo";
    $data->ExecuteQuery($q);
	echo '<script>javascript:window.close();</script>';
?>