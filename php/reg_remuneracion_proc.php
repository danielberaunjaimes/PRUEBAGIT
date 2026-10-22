<?php
	session_start();
	require("../utiles/config.php");
	require("../utiles/mysqldatabase.php");
	$fecharremu = $_POST["fecharremu1"];
	$nomremu = $_POST["nomremu1"];
	$montoremu = $_POST["montoremu1"];
	$resolucionremu = $_POST["resolucionremu1"];
 	$nomremu = strtoupper($nomremu);
	$resolucionremu = strtoupper($resolucionremu);
	$data = new MySqlDatabase(DATASERVER, DATACATALOG, USERNAME, USERPWD);
    $data->Connect();
	$q = "INSERT INTO remuneracion VALUES (NULL, '$fecharremu',  '$nomremu', '$montoremu', '$resolucionremu')";
    $data->ExecuteQuery($q);
	echo '<script>javascript:window.close();</script>';
?>