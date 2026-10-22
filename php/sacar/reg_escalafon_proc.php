<?php
	session_start();
	require("../utiles/config.php");
	require("../utiles/mysqldatabase.php");
	$fecharesc = $_POST["fecharesc1"];
	$idfacu = $_POST["idfacu1"];
	$nomesc = $_POST["nomesc1"];
	$resolucionesc = $_POST["resolucionesc1"];
 	$nomesc = strtoupper($nomesc);
	$resolucionesc = strtoupper($resolucionesc);
	$data = new MySqlDatabase(DATASERVER, DATACATALOG, USERNAME, USERPWD);
    $data->Connect();
	$q = "INSERT INTO escalafon VALUES (NULL, '$fecharesc', '$idfacu',  '$nomesc', '$resolucionesc')";
    $data->ExecuteQuery($q);
	echo '<script>javascript:window.close();</script>';
?>