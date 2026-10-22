<?php
	session_start();
	require("../utiles/config.php");
	require("../utiles/mysqldatabase.php");
	$fecharfacu = $_POST['fecharfacu1'];
	$nomfacu = $_POST['nomfacu1'];
	$resolucionfacu = $_POST['resolucionfacu1'];
	$promo = $_GET['promo'];
	$nomfacu = strtoupper($nomfacu);
	$resolucionfacu = strtoupper($resolucionfacu);
	$data = new MySqlDatabase(DATASERVER, DATACATALOG, USERNAME, USERPWD);
    $data->Connect();
	$q = "UPDATE facultad SET fecharfacu='".$fecharfacu."', nomfacu='".$nomfacu. "', resolucionfacu='".$resolucionfacu."' WHERE idfacu = $promo";
    $data->ExecuteQuery($q);
	echo '<script>javascript:window.close();</script>';
?>