<?php
	session_start();
	require("../utiles/config.php");
	require("../utiles/mysqldatabase.php");
	$fecharbene = $_POST['fecharbene1'];
	$nombene = $_POST['nombene1'];
	$resolucionbene = $_POST['resolucionbene1'];
	$promo = $_GET['promo'];
	$nombene = strtoupper($nombene);
	$resolucionbene = strtoupper($resolucionbene);
	$data = new MySqlDatabase(DATASERVER, DATACATALOG, USERNAME, USERPWD);
    $data->Connect();
	$q = "UPDATE beneficiosadm SET fecharbene='".$fecharbene."', nombene='".$nombene."', resolucionbene='".$resolucionbene."' WHERE idbene = $promo";
    $data->ExecuteQuery($q);
	echo '<script>javascript:window.close();</script>';
?>