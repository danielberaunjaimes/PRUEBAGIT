<?php
	require("../utiles/config.php");
	require("../utiles/mysqldatabase.php");
	$promo = $_GET['promo'];
	$data = new MySqlDatabase(DATASERVER, DATACATALOG, USERNAME, USERPWD);
	$data->Connect();
?>
<html>
<body>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" name="form1" id="form1" enctype="multipart/form-data">
 <table>
 <tr>
 <td>	
	<select name="tipo1" id="tipo1" style="width: 110px">
		<?php       
			$q = "SELECT * FROM tipo ";
	    	$data->ExecuteRowFetcher($q);
	    	while($data->Row != 0)
	    	{
	    ?>	
		<option value="<?php echo $data->Row['idtipo'];?>" selected> 
			<?php echo $data->Row['nomtipo'];?> 
		</option>
        <?php
				$data->FetchRow();
	    	}
		?>
 	</select>
	<script type="text/javascript">
		function carga(nombre)
		{
			var nombre = form1.tipo1.value;
			return nombre()
		}
		alert (nombre)
	</script>
	</td>
	<?php
		$aux = "<script> document.write(nombre) </script>";
		echo $aux;
		
		//form1.tipo1.value;
		?>
    	<td colspan="3" class="th_2">
		<?php
			if ($aux=2)
			{
				echo "estas en el primer modulo administrativo";		
	    	}
			else
			{
				if ($aux=1)
				{
					echo "estas en el primer modulo docente";
				}
				else
				{
					echo "no se encontro ningun valor";
				}
			}
		?>						  
		</td>	
  </td>
  </tr>
  </table>
</form>
</body>
</html>