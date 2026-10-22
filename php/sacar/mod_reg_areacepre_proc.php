<?php
	session_start();
	require("../utiles/config.php");
	require("../utiles/mysqldatabase.php");
	$fecharareacepre = $_POST['fecharareacepre1'];
	$nomareacepre = $_POST['nomareacepre1'];
	$resolucionareacepre = $_POST['resolucionareacepre1'];
	$promo = $_GET['promo'];
	$nomareacepre = strtoupper($nomareacepre);
	$resolucionareacepre = strtoupper($resolucionareacepre);
	$data = new MySqlDatabase(DATASERVER, DATACATALOG, USERNAME, USERPWD);
    $data->Connect();
	$q = "UPDATE areacepre SET fecharareacepre='".$fecharareacepre."', nomareacepre='".$nomareacepre."', resolucionareacepre='".$resolucionareacepre."' WHERE idareacepre = $promo";
    $data->ExecuteQuery($q);
	echo '<script>javascript:window.close();</script>';
?>