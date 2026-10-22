<?php
	session_start();
	require("../utiles/config.php");
	require("../utiles/mysqldatabase.php");
	$fecharareaidi = $_POST['fecharareaidi1'];
	$nomareaidi = $_POST['nomareaidi1'];
	$resolucionareaidi = $_POST['resolucionareaidi1'];
	$promo = $_GET['promo'];
	$nomareaidi = strtoupper($nomareaidi);
	$resolucionareaidi = strtoupper($resolucionareaidi);
	$data = new MySqlDatabase(DATASERVER, DATACATALOG, USERNAME, USERPWD);
    $data->Connect();
	$q = "UPDATE areaidiomas SET fecharareaidi='".$fecharareaidi."', nomareaidi='".$nomareaidi."', resolucionareaidi='".$resolucionareaidi."' WHERE idareaidi = $promo";
    $data->ExecuteQuery($q);
	echo '<script>javascript:window.close();</script>';
?>