<?php
	session_start();
	require("../utiles/config.php");
	require("../utiles/mysqldatabase.php");
	$idtipo = $_POST["idtipo1"];
	$nomasig = $_POST["nomasig1"];
 	$nomasig = strtoupper($nomasig);
	$data = new MySqlDatabase(DATASERVER, DATACATALOG, USERNAME, USERPWD);
    $data->Connect();
	$q = "INSERT INTO asignacion VALUES (NULL, '$idtipo', '$nomasig')";
    $data->ExecuteQuery($q);
	echo '<script>javascript:window.close();</script>';
?>