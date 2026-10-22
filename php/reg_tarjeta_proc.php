<?php
	session_start();
	require("../utiles/config.php");
	require("../utiles/mysqldatabase.php");
	$dni = $_POST['dni1'];
	$codtar = $_POST['codtar1'];
 	$data = new MySqlDatabase(DATASERVER, DATACATALOG, USERNAME, USERPWD);
    $data->Connect();
	$q = "INSERT INTO tarjeta VALUES (NULL, '$dni', '$codtar')";
    $data->ExecuteQuery($q);
	echo '<script>javascript:window.close();</script>';
?>