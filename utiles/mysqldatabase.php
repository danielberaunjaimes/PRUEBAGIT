<?php
	class MySqlDatabase
	{
		var $Host; 
		var $Catalog; 
		var $SqlUser;
		var $SqlUserPassword;  
		var $connectionID = 0;
		var $queryID = 0;
		var $Row;
		var $errorNumber = 0;
		function MySqlDatabase($h, $c, $sqlu, $sqlup)
		{
			$this->Host = $h;
			$this->Catalog = $c;
			$this->SqlUser = $sqlu;
			$this->SqlUserPassword = $sqlup;
		}
		function GetLastError()
		{
			switch($this->errorNumber)
			{
				case 0: return "No error.";
				case 1: return "No connection available";
				case 2: return "Connection failure.";
				case 3: return "Error on query";
			}
		}
		function Connect()
		{
			$this->connectionID = mysql_connect($this->Host, $this->SqlUser, $this->SqlUserPassword);
			if ($this->connectionID)
			{
				mysql_select_db($this->Catalog, $this->connectionID);
				return $this->connectionID;
			}
			$this->errorNumber = 1;
			return 0;
		}
		function ExecuteScalar($query)
		{
			$this->queryID = mysql_query($query, $this->connectionID);
			if ($this->queryID)
			{
				$row = mysql_fetch_array($this->queryID);
				if($row != 0)
					return $row[0];
				$this->errorNumber = 2;
				return null;
			}
			$this->errorNumber = 3;
			return null;
		}
		function ExecuteQuery($query)
		{
			$this->queryID = mysql_query($query, $this->connectionID);
			if ($this->queryID)
				return 1;
			else
				return 0;
		}
		function GetIdentity()	
		{
			return mysql_insert_id($this->connectionID);
		}
		function ExecuteRowFetcher($query)
		{	
			$this->queryID = mysql_query($query, $this->connectionID);
			//$row = mysql_fetch_array($this->queryID);
			$this->FetchRow();
		}
		function FetchRow()
		{
			$this->Row = mysql_fetch_array($this->queryID);
		}
		function Close()
		{
			if ($this->connectionID)
			mysql_close($this->connectionID);
		}
	}
?>