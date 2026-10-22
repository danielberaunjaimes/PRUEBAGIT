<?php 
class DB_mysql
{
	/***************************************/
	/*  variables de conexión              */
	/***************************************/
	var $BaseDatos="registroplanilla";
	var $Servidor="localhost";
	var $Usuario="root";
	var $Clave="123";
	
	/*var $BaseDatos="a9320273_rrhh";
	var $Servidor="mysql3.000webhost.com";
	var $Usuario="a9320273_rrhh";
	var $Clave="7582rrhh7582";*/
	
	/****************************************/
	/* identificador de conexión y consulta */
	/****************************************/
	var $Conexion_ID = 0;
	var $Consulta_ID = 0;
	var $desConexion_ID = 0;	
	
	/****************************************/
	/* número de error y texto error        */
	/****************************************/
	var $Errno = 0;
	var $Error = "";
	
	/***************************************/
	/* Funcion abrir conexion con BD MYSQL */
	/***************************************/	
	function conectar()
	{
		if ($bd != "") $this->BaseDatos = $bd;
		if ($host != "") $this->Servidor = $host;
		if ($user != "") $this->Usuario = $user;
		if ($pass != "") $this->Clave = $pass; 
		// Conectamos al servidor
		$this->Conexion_ID =mysql_connect($this->Servidor, $this->Usuario, $this->Clave);
		if (!$this->Conexion_ID)
		{
			$this->Error = "Ha fallado la conexión.";
			return 0;
		}
		//seleccionamos la base de datos
		if (!@mysql_select_db($this->BaseDatos, $this->Conexion_ID))
		{
			$this->Error = "Imposible abrir ".$this->BaseDatos ;
			return 0;
		}
		/* Si hemos tenido éxito conectando devuelve 
		el identificador de la conexión, sino devuelve 0 */
		return $this->Conexion_ID;
	}

	/****************************************/
	/* Funcion cerrar conexion con BD MYSQL */
	/****************************************/ 
	function cerrar()
	{
		$this->desConexion_ID=mysql_close($this->Conexion_ID);
		if (!$this->desConexion_ID)
		{
			$this->Error = "fallo la desconexión.";
			return 0;
		}
		return $this->desConexion_ID;
	}
}
?>