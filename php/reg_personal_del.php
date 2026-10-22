<?php
	session_start();
	require("../utiles/config.php");
	require("../utiles/mysqldatabase.php");
	$promo = $_GET['promo'];
	$data = new MySqlDatabase(DATASERVER, DATACATALOG, USERNAME, USERPWD);
    $data->Connect();
	$q = "DELETE FROM personal WHERE dni = $promo";
    $data->ExecuteQuery($q);
	echo '<script>window.location="home.php";</script>';
?>