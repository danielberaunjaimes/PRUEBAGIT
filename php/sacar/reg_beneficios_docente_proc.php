<?php
	session_start();
	require("../utiles/config.php");
	require("../utiles/mysqldatabase.php");
	$fecharben = $_POST["fecharben1"];
	$idfacu = $_POST["idfacu1"];
	$nomben = $_POST["nomben1"];
	$resolucionben = $_POST["resolucionben1"];
 	$nomben = strtoupper($nomben);
	$resolucionben = strtoupper($resolucionben);
	$data = new MySqlDatabase(DATASERVER, DATACATALOG, USERNAME, USERPWD);
    $data->Connect();
	$q = "INSERT INTO beneficiosdoc VALUES (NULL, '$fecharben', '$idfacu',  '$nomben', '$resolucionben')";
    $data->ExecuteQuery($q);
	echo '<script>javascript:window.close();</script>';
?>