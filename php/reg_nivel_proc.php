<?php
	session_start();
	require("../utiles/config.php");
	require("../utiles/mysqldatabase.php");
	$idtipo = $_POST["idtipo1"];
	$nomnivel = $_POST["nomnivel1"];
 	$nomnivel = strtoupper($nomnivel);
	$data = new MySqlDatabase(DATASERVER, DATACATALOG, USERNAME, USERPWD);
    $data->Connect();
	$q = "INSERT INTO nivel VALUES (NULL, '$idtipo', '$nomnivel')";
    $data->ExecuteQuery($q);
	echo '<script>javascript:window.close();</script>';
?>