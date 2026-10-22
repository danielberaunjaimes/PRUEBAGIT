<?php
	session_start();
	require("../utiles/config.php");
	require("../utiles/mysqldatabase.php");
	$fecharpost = $_POST["fecharpost1"];
	$nompost = $_POST["nompost1"];
	$resolucionpost = $_POST["resolucionpost1"];
 	$nompost = strtoupper($nompost);
	$resolucionpost = strtoupper($resolucionpost);
	$data = new MySqlDatabase(DATASERVER, DATACATALOG, USERNAME, USERPWD);
    $data->Connect();
	$q = "INSERT INTO postgrado VALUES (NULL, '$fecharpost',  '$nompost', '$resolucionpost')";
    $data->ExecuteQuery($q);
	echo '<script>javascript:window.close();</script>';
?>