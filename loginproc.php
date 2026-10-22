<?
	session_start();
	require("utiles/config.php");
	require("utiles/mysqldatabase.php");
	$usuario = $_POST['txt1'];
	$clave = $_POST['txt2'];
	$data = new MySqlDatabase(DATASERVER, DATACATALOG, USERNAME, USERPWD);
    $data->Connect();
	$q = "SELECT * FROM usuarios where usuario='$usuario' AND clave='$clave'";
    $data->ExecuteRowFetcher($q);
    while($data->Row != 0)
    {
    	$_SESSION['id'] = $data->Row[0];
    	$_SESSION['nombre'] = $data->Row[3].", ".$data->Row[4];
    	$_SESSION['rol'] = $data->Row[2];
    	$data->FetchRow(); // solo deberia haber un resultado
    }
    if ($_SESSION['rol'] == "Estudiante")
    	echo '<script>window.location="php/home.php";</script>';
	else
    {
    	session_destroy();
    	echo '<script>window.location="index.php?error=error";</script>';
    }
?>