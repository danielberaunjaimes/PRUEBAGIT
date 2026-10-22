<?php
	session_start();
	require("../utiles/config.php");
	require("../utiles/mysqldatabase.php");
	$fechararea = $_POST["fechararea1"];
	$idadm = $_POST["idadm1"];
	$nomarea = $_POST["nomarea1"];
	$resolucionarea = $_POST["resolucionarea1"];
 	$nomarea = strtoupper($nomarea);
	$resolucionarea = strtoupper($resolucionarea);
	$data = new MySqlDatabase(DATASERVER, DATACATALOG, USERNAME, USERPWD);
    $data->Connect();
	$q = "INSERT INTO area VALUES (NULL, '$fechararea', '$idadm',  '$nomarea', '$resolucionarea')";
    $data->ExecuteQuery($q);
	echo '<script>javascript:window.close();</script>';
?>