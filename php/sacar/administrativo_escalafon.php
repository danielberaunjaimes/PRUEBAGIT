<?php /*
	require("../utiles/config.php");
	require("../utiles/mysqldatabase.php");
	$data = new MySqlDatabase(DATASERVER, DATACATALOG, USERNAME, USERPWD);
	$data->Connect();
*/?>
<link href="../css/estilos.css" rel="stylesheet" type="text/css" />
<style type="text/css">
	<!--
		.Estilo1 
		{
			color: #FF0000;
			font-weight: bold;
		}
	-->
</style>
<br />
<div id="socios">
<div class="marco">
  <div class="titulo">
    <p>TOTAL DE OFICINAS REGISTRADAS </p>
  </div>
  <div class="izq">
    <table width="801" border="0" cellpadding="0" >
      <tr>
        <td width="58" class="th_1">&nbsp;Codigo </td>
        <td width="99" class="th_1">Fecha Reg </td>
        <td width="265" class="th_1">&nbsp;Nombre Administrativo </td>
        <td width="185" class="th_1">&nbsp;Resolucion</td>
        <td width="106" class="th_1">&nbsp;Registrar Area </td>
        <td colspan="58" class="th_1">&nbsp;Opcion</td>
      </tr>
      <?php
				$q = "SELECT * FROM administrativo ORDER BY idadm";
		    	$data->ExecuteRowFetcher($q);
		    	while($data->Row != 0)
				{
			?>
      <tr>
        <td style=" border-bottom:solid 0px #000000;" class="th_2">
			<div align="center"> 
				<?php echo ($data->Row['idadm']) ?>			</div>		</td>
        <td style=" border-bottom:solid 0px #000000;" class="th_2">
			<div align="center"> 
				<?php echo ($data->Row['fecharadm']) ?>			</div>		</td>
        <td style=" border-bottom:solid 0px #000000;" class="th_2">
			<div align="left"> 	
				<?php echo ($data->Row['nomadm']) ?>			</div>		</td>
        <td style=" border-bottom:solid 0px #000000;" class="th_2">
			<div align="left"> 
				<?php echo ($data->Row['resolucionadm']) ?>			</div>		</td>
        <td class="th_2" width="106">
			<a href="javascript:startPop('reg_escalafon_administrativo.php?promo=<?php echo $data->Row['idadm']; ?>','475','240','320','190');"> seleccionar			</a>		</td>
        <td class="th_2" width="37">
			<a href="administrativo_escalafon_pdf.php?promo=<?php echo $data->Row['idadm']; ?>"> 
				<img src="../imagenes/acrobat.gif" width="16" height="16" border="0" />			</a>		</td>
        <td width="35" class="th_2">
			<a href="ver_administrativo_escalafon.php?promo=<?php echo $data->Row['idadm'];?>" onclick="return hs.htmlExpand(this,{objectType: 'iframe'})"> 
				<img src="../imagenes/b_select.png" width="16" height="16" border="0" />			</a> 
		</td>
      </tr>
      <?php
			$data->FetchRow();
			}			
			?>
    </table>
  </div>
</div>
