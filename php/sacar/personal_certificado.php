<link href="../css/estilos.css" rel="stylesheet" type="text/css" />
	<style type="text/css">
		<!--
.Estilo4 {font-size: 12px}
		-->
	</style>
 	<form id="form1" name="form1" method="get" action="buscar_personal_proc.php">
		<table width="540" height="33" border="0" cellpadding="0" cellspacing="0" class="tabla1">
        	<tr>
          		<td width="135" height="23" bgcolor="#EDEDED">&nbsp;&nbsp;<strong>Buscar Personal </strong></td>
          		<td bgcolor="#EDEDED">
					<p>
            			<label>
            			<input name="busqueda" type="text" id="busqueda" />
            			</label>
          			</p>			  </td>
          		<td width="154" align="center" valign="middle" bgcolor="#EDEDED">
					<div align="center">
              			<input name="btnbuscar" type="submit" class="texto" id="btnbuscar" value="Busqueda Personal"/>
          			</div>				</td>
        	</tr>
      	</table>
	</form>
    <div id="socios">
	<div class="Estilo4">
	<p>
	REPORTE DE CONSTANCIA DE TRABAJO DEL PERSONAL
	</p>
	</div>
<div class="marco">
	<div class="titulo">
		<p>
			TOTAL DE PERSONAL REGISTRADOS
		</p>
	</div>
	<div class="izq">
		<table width="780" border="0" cellpadding="0" >
        	<tr>
           	 	<td width="70" align="center" class="th_1">&nbsp;DNI </td>
				<td width="70" align="center" class="th_1">&nbsp;Fecha Reg </td>
                <td width="155" align="center" class="th_1">&nbsp;Apellidos</td>
                <td width="120" align="center" class="th_1">&nbsp;Nombres</td>
                <td width="65" align="center" class="th_1">&nbsp;Facultad</td>
                <td width="155" align="center" class="th_1">&nbsp;Email</td>
                <td colspan="40" align="center" class="th_1">&nbsp;Opcion</td>
           	</tr>
            <?php
				$q = "SELECT * FROM personal ORDER BY dni";
		    	$data->ExecuteRowFetcher($q);
		    	while($data->Row != 0)
				{
			?>
            <tr>
				<td style=" border-bottom:solid 0px #000000;" class="th_2">
					<div align="center" class="Estilo4"> 
						<?php echo ($data->Row['dni']) ?>					
					</div>			  
				</td>
            	<td style=" border-bottom:solid 0px #000000;" class="th_2">
					<div align="center" class="Estilo4"> 
						<?php echo ($data->Row['fechareg']) ?>					
					</div>			  
				</td>
                <td style=" border-bottom:solid 0px #000000;" class="th_2">
					<div align="center" class="Estilo4"> 
						<?php echo ($data->Row['apellidos']) ?>					
					</div>			  
				</td>
                <td style=" border-bottom:solid 0px #000000;" class="th_2">
					<div align="center" class="Estilo4"> 
						<?php echo ($data->Row['nombres']) ?>					
					</div>			  
				</td>
                <td style=" border-bottom:solid 0px #000000;" class="th_2">
					<div align="center" class="Estilo4"> 
						<?php echo ($data->Row['facultad']) ?>					
					</div>			  
				</td>
                <td style=" border-bottom:solid 0px #000000;" class="th_2">
					<div align="center" class="Estilo4">
                    	<?php echo ($data->Row['email']) ?>					
					</div>			  
				</td>
                <td class="th_2" width="33">
					<div align="center" class="Estilo4">
						<a href="personal_certificado_pdf.php?promo=<?php echo $data->Row['dni']; ?>"> 
							<img src="../imagenes/acrobat.gif" width="16" height="16" border="0" />						
						</a>					
					</div>				
				</td>
                <td width="29" class="th_2">
					<div align="center" class="Estilo4">
						<a href="ver_personal.php?promo=<?php echo $data->Row['dni'];?>" onclick="return hs.htmlExpand(this, { objectType: 'iframe' } )"> 
							<img src="../imagenes/b_select.png" width="16" height="16" border="0" />						
						</a>					
					</div>				
				</td>
           	</tr>
            <?php
					$data->FetchRow();
				}			
			?>
    	</table> 
	</div> 
</div>