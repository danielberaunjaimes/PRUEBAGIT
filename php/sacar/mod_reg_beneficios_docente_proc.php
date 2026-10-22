<?php
	session_start();
	require("../utiles/config.php");
	require("../utiles/mysqldatabase.php");
	$fecharben = $_POST['fecharben1'];
	$nomben = $_POST['nomben1'];
	$resolucionben = $_POST['resolucionben1'];
	$promo = $_GET['promo'];
	$nomben = strtoupper($nomben);
	$resolucionben = strtoupper($resolucionben);
	$data = new MySqlDatabase(DATASERVER, DATACATALOG, USERNAME, USERPWD);
    $data->Connect();
	$q = "UPDATE beneficiosdoc SET fecharben='".$fecharben."', nomben='".$nomben."', resolucionben='".$resolucionben."' WHERE idben = $promo";
    $data->ExecuteQuery($q);
	echo '<script>javascript:window.close();</script>';
?>