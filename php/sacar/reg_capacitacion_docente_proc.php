<?php
	session_start();
	require("../utiles/config.php");
	require("../utiles/mysqldatabase.php");
	$fecharcap = $_POST["fecharcap1"];
	$idfacu = $_POST["idfacu1"];
	$nomcap = $_POST["nomcap1"];
	$resolucioncap = $_POST["resolucioncap1"];
 	$nomcap = strtoupper($nomcap);
	$resolucioncap = strtoupper($resolucioncap);
	$data = new MySqlDatabase(DATASERVER, DATACATALOG, USERNAME, USERPWD);
    $data->Connect();
	$q = "INSERT INTO capacitaciondoc VALUES (NULL, '$fecharcap', '$idfacu',  '$nomcap', '$resolucioncap')";
    $data->ExecuteQuery($q);
	echo '<script>javascript:window.close();</script>';
?>