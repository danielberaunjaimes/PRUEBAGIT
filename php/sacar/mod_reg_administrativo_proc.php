<?php
	session_start();
	require("../utiles/config.php");
	require("../utiles/mysqldatabase.php");
	$fecharadm = $_POST['fecharadm1'];
	$nomadm = $_POST['nomadm1'];
	$resolucionadm = $_POST['resolucionadm1'];
	$promo = $_GET['promo'];
	$nomadm = strtoupper($nomadm);
	$resolucionadm = strtoupper($resolucionadm);
	$data = new MySqlDatabase(DATASERVER, DATACATALOG, USERNAME, USERPWD);
    $data->Connect();
	$q = "UPDATE administrativo SET fecharadm='".$fecharadm."', nomadm='".$nomadm. "', resolucionadm='".$resolucionadm."' WHERE idadm = $promo";
    $data->ExecuteQuery($q);
	echo '<script>javascript:window.close();</script>';
?>