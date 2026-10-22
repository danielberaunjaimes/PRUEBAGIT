<?php
	session_start();
	require("../utiles/config.php");
	require("../utiles/mysqldatabase.php");
	$fecharconadm = $_POST["fecharconadm1"];
	$idadm = $_POST["idadm1"];
	$nomconadm = $_POST["nomconadm1"];
	$resolucionconadm = $_POST["resolucionconadm1"];
 	$nomconadm = strtoupper($nomconadm);
	$resolucionconadm = strtoupper($resolucionconadm);
	$data = new MySqlDatabase(DATASERVER, DATACATALOG, USERNAME, USERPWD);
    $data->Connect();
	$q = "INSERT INTO controladm VALUES (NULL, '$fecharconadm', '$idadm',  '$nomconadm', '$resolucionconadm')";
    $data->ExecuteQuery($q);
	echo '<script>javascript:window.close();</script>';
?>