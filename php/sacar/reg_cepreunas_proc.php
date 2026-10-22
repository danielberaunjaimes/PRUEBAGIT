<?php
	session_start();
	require("../utiles/config.php");
	require("../utiles/mysqldatabase.php");
	$fecharcepre = $_POST["fecharcepre1"];
	$nomcepre = $_POST["nomcepre1"];
	$resolucioncepre = $_POST["resolucioncepre1"];
 	$nomcepre = strtoupper($nomcepre);
	$resolucioncepre = strtoupper($resolucioncepre);
	$data = new MySqlDatabase(DATASERVER, DATACATALOG, USERNAME, USERPWD);
    $data->Connect();
	$q = "INSERT INTO cepreunas VALUES (NULL, '$fecharcepre',  '$nomcepre', '$resolucioncepre')";
    $data->ExecuteQuery($q);
	echo '<script>javascript:window.close();</script>';
?>