<?php
	session_start();
	require("../utiles/config.php");
	require("../utiles/mysqldatabase.php");
	$fecharareaidi = $_POST["fecharareaidi1"];
	$ididi = $_POST["ididi1"];
	$nomareaidi = $_POST["nomareaidi1"];
	$resolucionareaidi = $_POST["resolucionareaidi1"];
 	$nomareaidi = strtoupper($nomareaidi);
	$resolucionareaidi = strtoupper($resolucionareaidi);
	$data = new MySqlDatabase(DATASERVER, DATACATALOG, USERNAME, USERPWD);
    $data->Connect();
	$q = "INSERT INTO areaidiomas VALUES (NULL, '$fecharareaidi', '$ididi',  '$nomareaidi', '$resolucionareaidi')";
    $data->ExecuteQuery($q);
	echo '<script>javascript:window.close();</script>';
?>