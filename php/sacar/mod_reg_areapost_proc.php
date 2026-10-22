<?php
	session_start();
	require("../utiles/config.php");
	require("../utiles/mysqldatabase.php");
	$fecharareapost = $_POST['fecharareapost1'];
	$nomareapost = $_POST['nomareapost1'];
	$resolucionareapost = $_POST['resolucionareapost1'];
	$promo = $_GET['promo'];
	$nomareapost = strtoupper($nomareapost);
	$resolucionareapost = strtoupper($resolucionareapost);
	$data = new MySqlDatabase(DATASERVER, DATACATALOG, USERNAME, USERPWD);
    $data->Connect();
	$q = "UPDATE areapost SET fecharareapost='".$fecharareapost."', nomareapost='".$nomareapost."', resolucionareapost='".$resolucionareapost."' WHERE idareapost = $promo";
    $data->ExecuteQuery($q);
	echo '<script>javascript:window.close();</script>';
?>