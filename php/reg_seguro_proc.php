<?php
	session_start();
	require("../utiles/config.php");
	require("../utiles/mysqldatabase.php");
	$fecharseg = $_POST["fecharseg1"];
	$nomseg = $_POST["nomseg1"];
	$tasaseg = $_POST["tasaseg1"];
	$resolucionseg = $_POST["resolucionseg1"];
 	$nomseg= strtoupper($nomseg);
	$resolucionseg = strtoupper($resolucionseg);
	$data = new MySqlDatabase(DATASERVER, DATACATALOG, USERNAME, USERPWD);
    $data->Connect();
	$q = "INSERT INTO seguro VALUES (NULL, '$fecharseg',  '$nomseg', '$tasaseg', '$resolucionseg')";
    $data->ExecuteQuery($q);
	echo '<script>javascript:window.close();</script>';
?>