<?php
	session_start();
	require("../utiles/config.php");
	require("../utiles/mysqldatabase.php");
	$fecharremu = $_POST['fecharremu1'];
	$nomremu = $_POST['nomremu1'];
	$montoremu = $_POST['montoremu1'];
	$resolucionremu = $_POST['resolucionremu1'];
	$promo = $_GET['promo'];
	$nomremu = strtoupper($nomremu);
	$resolucionremu = strtoupper($resolucionremu);
	$data = new MySqlDatabase(DATASERVER, DATACATALOG, USERNAME, USERPWD);
    $data->Connect();
	$q = "UPDATE remuneracion SET fecharremu='".$fecharremu."', nomremu='".$nomremu."', montoremu='".$montoremu."', resolucionremu='".$resolucionremu."' WHERE idremu = $promo";
    $data->ExecuteQuery($q);
	echo '<script>javascript:window.close();</script>';
?>