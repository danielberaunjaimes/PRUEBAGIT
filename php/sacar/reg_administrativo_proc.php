<?php
	session_start();
	require("../utiles/config.php");
	require("../utiles/mysqldatabase.php");
	$fecharadm = $_POST["fecharadm1"];
	$nomadm = $_POST["nomadm1"];
	$resolucionadm = $_POST["resolucionadm1"];
 	$nomadm = strtoupper($nomadm);
	$resolucionadm = strtoupper($resolucionadm);
	$data = new MySqlDatabase(DATASERVER, DATACATALOG, USERNAME, USERPWD);
    $data->Connect();
	$q = "INSERT INTO administrativo VALUES (NULL, '$fecharadm',  '$nomadm', '$resolucionadm')";
    $data->ExecuteQuery($q);
	echo '<script>javascript:window.close();</script>';
?>