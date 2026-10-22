<?php
	session_start();
	require("../utiles/config.php");
	require("../utiles/mysqldatabase.php");
	$nomtipo = $_POST["nomtipo1"];
	$nomtipo = strtoupper($nomtipo);
	$data = new MySqlDatabase(DATASERVER, DATACATALOG, USERNAME, USERPWD);
    $data->Connect();
	$q = "INSERT INTO tipo VALUES (NULL, '$nomtipo')";
    $data->ExecuteQuery($q);
	echo '<script>javascript:window.close();</script>';
?>