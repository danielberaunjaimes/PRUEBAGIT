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
		var nombre = form1.tipo1.value;
		alert(nombre)
	</script>
	</td>
	<?php
		$aux = "<script> document.write(nombre) </script>";
		echo $aux;
		$aux1 = 2
		//form1.tipo1.value;
		?>
    	<td colspan="3" class="th_2">
		<?php
			if ($aux=$aux1)
			{
		?>
			<select name="area" id="area" style="width: 365px">
            	<?php       
					$q = "SELECT tipo.idtipo, nivel.idtipo, nivel.idnivel, nivel.nomnivel FROM tipo INNER JOIN nivel ON tipo.idtipo = nivel.idtipo WHERE tipo.idtipo = 1;";
						$data->ExecuteRowFetcher($q);
	    				while($data->Row != 0)
	    				{
	    		?>
                    	 	<option value="<?php echo $data->Row['idnivel'];?>" selected>
								<?php echo $data->Row['nomnivel'];?>								
							</option>
               	<?php
	    					$data->FetchRow();
	    				}
				?>
         	</select>
		<?php
	    	}
		?>						  
		</td>	
  </td>
  </tr>
  </table>
</form>
</body>
</html>