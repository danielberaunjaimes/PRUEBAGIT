<?php
	session_start();
	require("../utiles/config.php");
	require("../utiles/mysqldatabase.php");
	$fecharcap = $_POST["fecharcap1"];
	$nomcap = $_POST["nomcap1"];
	$resolucioncap = $_POST["resolucioncap1"];
 	$nomcap = strtoupper($nomcap);
	$resolucioncap = strtoupper($resolucioncap);
	$data = new MySqlDatabase(DATASERVER, DATACATALOG, USERNAME, USERPWD);
    $data->Connect();
	$q = "INSERT INTO capacitacion VALUES (NULL, '$fecharcap',  '$nomcap', '$resolucioncap')";
    $data->ExecuteQuery($q);
	echo '<script>javascript:window.close();</script>';
?>