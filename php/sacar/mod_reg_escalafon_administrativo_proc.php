<?php
	session_start();
	require("../utiles/config.php");
	require("../utiles/mysqldatabase.php");
	$fecharesca = $_POST['fecharesc1'];
	$nomesca = $_POST['nomesc1'];
	$resolucionesca = $_POST['resolucionesc1'];
	$promo = $_GET['promo'];
	$nomesca = strtoupper($nomesca);
	$resolucionesca = strtoupper($resolucionesca);
	$data = new MySqlDatabase(DATASERVER, DATACATALOG, USERNAME, USERPWD);
    $data->Connect();
	$q = "UPDATE escalafonadm SET fecharesca='".$fecharesca."', nomesca='".$nomesca."', resolucionesca='".$resolucionesca."' WHERE idesca = $promo";
    $data->ExecuteQuery($q);
	echo '<script>javascript:window.close();</script>';
?>