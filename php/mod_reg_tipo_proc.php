<?php
	session_start();
	require("../utiles/config.php");
	require("../utiles/mysqldatabase.php");
	$nomtipo = $_POST['nomtipo1'];
	$promo = $_GET['promo'];
	$nomtipo = strtoupper($nomtipo);
	$data = new MySqlDatabase(DATASERVER, DATACATALOG, USERNAME, USERPWD);
    $data->Connect();
	$q = "UPDATE tipo SET nomtipo='".$nomtipo. "' WHERE idtipo = $promo";
    $data->ExecuteQuery($q);
	echo '<script>javascript:window.close();</script>';
?>