<?php
	session_start();
	require("../utiles/config.php");
	require("../utiles/mysqldatabase.php");
	$nomasig = $_POST['nomasig1'];
	$promo = $_GET['promo'];
	$nomasig = strtoupper($nomasig);
	$data = new MySqlDatabase(DATASERVER, DATACATALOG, USERNAME, USERPWD);
    $data->Connect();
	$q = "UPDATE asignacion SET nomasig='".$nomasig."' WHERE idasig = $promo";
    $data->ExecuteQuery($q);
	echo '<script>javascript:window.close();</script>';
?>