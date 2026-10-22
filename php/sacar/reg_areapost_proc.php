<?php
	session_start();
	require("../utiles/config.php");
	require("../utiles/mysqldatabase.php");
	$fecharareapost = $_POST["fecharareapost1"];
	$idpost = $_POST["idpost1"];
	$nomareapost = $_POST["nomareapost1"];
	$resolucionareapost = $_POST["resolucionareapost1"];
 	$nomareapost = strtoupper($nomareapost);
	$resolucionareapost = strtoupper($resolucionareapost);
	$data = new MySqlDatabase(DATASERVER, DATACATALOG, USERNAME, USERPWD);
    $data->Connect();
	$q = "INSERT INTO areapost VALUES (NULL, '$fecharareapost', '$idpost',  '$nomareapost', '$resolucionareapost')";
    $data->ExecuteQuery($q);
	echo '<script>javascript:window.close();</script>';
?>