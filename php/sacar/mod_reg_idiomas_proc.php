<?php
	session_start();
	require("../utiles/config.php");
	require("../utiles/mysqldatabase.php");
	$fecharidi = $_POST['fecharidi1'];
	$nomidi = $_POST['nomidi1'];
	$resolucionidi = $_POST['resolucionidi1'];
	$promo = $_GET['promo'];
	$nomidi = strtoupper($nomidi);
	$resolucionidi = strtoupper($resolucionidi);
	$data = new MySqlDatabase(DATASERVER, DATACATALOG, USERNAME, USERPWD);
    $data->Connect();
	$q = "UPDATE idiomas SET fecharidi='".$fecharidi."', nomidi='".$nomidi. "', resolucionidi='".$resolucionidi."' WHERE ididi = $promo";
    $data->ExecuteQuery($q);
	echo '<script>javascript:window.close();</script>';
?>