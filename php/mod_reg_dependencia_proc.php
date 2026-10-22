<?php
	session_start();
	require("../utiles/config.php");
	require("../utiles/mysqldatabase.php");
	$fechardepe = $_POST['fechardepe1'];
	$nomdepe = $_POST['nomdepe1'];
	$resoluciondepe = $_POST['resoluciondepe1'];
	$promo = $_GET['promo'];
	$nomdepe = strtoupper($nomdepe);
	$resoluciondepe = strtoupper($resoluciondepe);
	$data = new MySqlDatabase(DATASERVER, DATACATALOG, USERNAME, USERPWD);
    $data->Connect();
	$q = "UPDATE dependencia SET fechardepe='".$fechardepe ."', nomdepe='".$nomdepe ."', resoluciondepe='". $resoluciondepe ."' WHERE iddepe = $promo";
    $data->ExecuteQuery($q);
	echo '<script>javascript:window.close();</script>';
?>