<?php
	session_start();
	require("../utiles/config.php");
	require("../utiles/mysqldatabase.php");
	$fecharconadm = $_POST['fecharconadm1'];
	$nomconadm = $_POST['nomconadm1'];
	$resolucionconadm = $_POST['resolucionconadm1'];
	$promo = $_GET['promo'];
	$nomconadm = strtoupper($nomconadm);
	$resolucionconadm = strtoupper($resolucionconadm);
	$data = new MySqlDatabase(DATASERVER, DATACATALOG, USERNAME, USERPWD);
    $data->Connect();
	$q = "UPDATE controladm SET fecharconadm='".$fecharconadm."', nomconadm='".$nomconadm."', resolucionconadm='".$resolucionconadm."' WHERE idconadm = $promo";
    $data->ExecuteQuery($q);
	echo '<script>javascript:window.close();</script>';
?>