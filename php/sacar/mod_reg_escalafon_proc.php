<?php
	session_start();
	require("../utiles/config.php");
	require("../utiles/mysqldatabase.php");
	$fecharesc = $_POST['fecharesc1'];
	$nomesc = $_POST['nomesc1'];
	$resolucionesc = $_POST['resolucionesc1'];
	$promo = $_GET['promo'];
	$nomesc = strtoupper($nomesc);
	$resolucionesc = strtoupper($resolucionesc);
	$data = new MySqlDatabase(DATASERVER, DATACATALOG, USERNAME, USERPWD);
    $data->Connect();
	$q = "UPDATE escalafon SET fecharesc='".$fecharesc."', nomesc='".$nomesc."', resolucionesc='".$resolucionesc."' WHERE idesc = $promo";
    $data->ExecuteQuery($q);
	echo '<script>javascript:window.close();</script>';
?>