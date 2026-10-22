<?php
	session_start();
	require("../utiles/config.php");
	require("../utiles/mysqldatabase.php");
	$nomnivel = $_POST['nomnivel1'];
	$promo = $_GET['promo'];
	$nomnivel = strtoupper($nomnivel);
	$data = new MySqlDatabase(DATASERVER, DATACATALOG, USERNAME, USERPWD);
    $data->Connect();
	$q = "UPDATE nivel SET nomnivel='".$nomnivel."' WHERE idnivel = $promo";
    $data->ExecuteQuery($q);
	echo '<script>javascript:window.close();</script>';
?>