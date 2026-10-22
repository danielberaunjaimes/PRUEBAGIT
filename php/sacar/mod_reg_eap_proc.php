<?php
	session_start();
	require("../utiles/config.php");
	require("../utiles/mysqldatabase.php");
	$fechareap = $_POST['fechareap1'];
	$nomeap = $_POST['nomeap1'];
	$resolucioneap = $_POST['resolucioneap1'];
	$promo = $_GET['promo'];
	$nomeap = strtoupper($nomeap);
	$resolucioneap = strtoupper($resolucioneap);
	$data = new MySqlDatabase(DATASERVER, DATACATALOG, USERNAME, USERPWD);
    $data->Connect();
	$q = "UPDATE eap SET fechareap='".$fechareap."', nomeap='".$nomeap."', resolucioneap='".$resolucioneap."' WHERE ideap = $promo";
    $data->ExecuteQuery($q);
	echo '<script>javascript:window.close();</script>';
?>