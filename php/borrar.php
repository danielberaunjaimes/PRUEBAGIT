	<?php
	require("../utiles/config.php");
	require("../utiles/mysqldatabase.php");
	$promo = $_GET['promo'];
	$data = new MySqlDatabase(DATASERVER, DATACATALOG, USERNAME, USERPWD);
	$data->Connect();
	?>
<html>
	<head>
		<link href="../css/estilos.css" rel="stylesheet" type="text/css" />
		<link type="text/css" rel="stylesheet" href="../calendario/estilo.css" media="screen"></LINK>
		<SCRIPT type="text/javascript" src="../calendario/java.js?random=20060118"></script>
		<title>INGRESAR PERSONAL</title>
		<script language="javascript">
		</script>
		<style type="text/css">
		<!--
			.Estilo2 {color: #FF0000}
			body 
			{
				background-color: #FFFFFF;
				background-image: url();
			}
			.Estilo4 {font-family: "Agency FB"}
			.Estilo11 {font-family: Arial, Helvetica, sans-serif; font-size: 14px; }
			.Estilo17 {font-size: 14px}
			.Estilo18 {font-family: Arial, Helvetica, sans-serif; }
			.Estilo22 {font-family: "Agency FB"; font-size: 18px; font-weight: bold; }
			.Estilo25 {font-size: 18px}
			.Estilo37 
			{
				font-family: Arial, Helvetica, sans-serif;
				font-size: 18px;
				color: #FF0000;
				font-weight: bold;
			}
			.Estilo38 {
				font-size: 18px;
				color: #FF0000;
				font-weight: bold;
			}
			.Estilo40 {color: #FF0000; font-weight: bold; }
			.Estilo42 {font-size: 18px; font-family: Arial, Helvetica, sans-serif; font-weight: bold; }
			.Estilo44 {font-size: 18px; font-weight: bold; }
		-->
		</style>
	</head>
	<body>
	<form action="reg_personal_docente_proc.php" method="post" name="form1">
	  	<table width="589" border="0" align="center">
        	<tr class="th_5">
          		<td colspan="3">&nbsp;</td>
        	</tr>
        	<tr>
          		<td rowspan="4" width="6%" class="th_5">&nbsp;</td>
       		  	<td width="88%">
					<table width="100%" border="0">
               		  <tr class="th_1">
               			<td width="16%">DNI</td>
                  			<td width="24%" class="th_2"><input name="dni1" type="text" id="dni1" size="15" /></td>
                  			<td width="30%">FECHA REGISTRO <img src="imagenes/Calendar.gif" width="20" height="21" onClick="displayCalendar(document.forms[0].fechareg1,'yyyy-mm-dd',this)" border="0" align="absmiddle"/></td>
               			<td width="30%" class="th_2"><input name="fechareg1" type="text" id="fechareg1" size="15" />           			    </td>
               		  </tr>
              		</table>			  </td>
          		<td rowspan="4" width="6%" class="th_5">&nbsp;</td>
        	</tr>
        	<tr>
          		<td>
					<table width="100%" border="0">
                		<tr class="th_1">
                    		<td><div align="center">APELLIDOS</div></td>
                    		<td class="th_2"><div align="left"><input name="apellidos1" type="text" id="apellidos1" size="47" />
                    		</div></td>
        	          	</tr>
        	          	<tr class="th_1">
        	            	<td><div align="center">NOMBRES</div></td>
        	            	<td class="th_2"><div align="left"><input name="nombres1" type="text" id="nombres1" size="47" />
        	            	</div></td>	
        	          	</tr>
        	          	<tr class="th_1">
       		        	  <td width="32%"><div align="center">DIRECCION</div></td>
                    		<td width="68%" class="th_2"><div align="left"><input name="direccion1" type="text" id="direccion1" size="47" />
                   		  </div></td>
                  		</tr>
                	</table>				</td>
       	 	</tr>
        	<tr>
       	  		<td>
					<table width="104%" border="0">
                  		<tr class="th_1">
                    		<td width="18%"><div align="left">CONTRATO</div></td>
                    		<td width="27%" class="th_2"><strong>
                    		  	<select name="contrato1" class="Estilo11" id="contrato1" style="width: 115px">
                                	<option>NOMBRADO</option>
                                	<option>PERMANENTE</option>
                                	<option>EVENTUAL</option>
                              	</select>
                   		  </strong></td>
                    		<td width="25%"><div align="left">FECHA CESE <img src="imagenes/Calendar.gif" width="20" height="21" onClick="displayCalendar(document.forms[0].fecharfin1,'yyyy-mm-dd',this)" border="0" align="absmiddle"/></div></td>
                    		<td width="30%" class="th_2">
							<input name="fecharfin1" type="text" id="fecharfin1" size="15" /></td>
                  		</tr>
                  		<tr class="th_1">
                  		  <td><div align="left">RESOLUCION</div></td>
                  		  <td class="th_2"><strong>
                  		    <input name="resolucion1" type="text" id="resolucion1" size="15" />
                  		  </strong></td>
                  		  <td><div align="left">TIPO</div></td>
                  		  <td class="th_2">
						  <select name="tipo1" size="1" id="tipo1" onChange="redirect(this.options.selectedIndex)" style="width: 115px">
							<option selected>---Select1---</option>
							<option>DOCENTE</option>
							<option>ADMINISTRATIVO</option>
						  </select>						 </td>
               		  </tr>
                  		<tr class="th_1">
                    		<td><div align="left">NIVEL</div></td>
                    		<td class="th_2">
							<select name="nivel1" size="1" id="nivel1" onChange="redirect1(this.options.selectedIndex)" style="width: 115px">
								<option value=" " selected> </option>
								<option value=" " selected>---Select2---</option>
							</select>							</td>
							<script>
								var groups=document.form1.tipo1.options.length
								var group=new Array(groups)
								for (i=0; i<groups; i++)
								group[i]=new Array()

								group[0][0]=new Option("---Select2---"," ");

								group[1][0]=new Option("PRINCIPAL"," ");
								group[1][1]=new Option("ASOCIADO","47");
								group[1][2]=new Option("AUXILIAR","46");
								group[1][3]=new Option("JEFE DE PRACTICAS","45");

								group[2][0]=new Option("FUNCIONARIO"," ");
								group[2][1]=new Option("PROFESIONAL","115");
								group[2][2]=new Option("TECNICO","116"); 
								group[2][3]=new Option("SECRETARIA","116"); 

								var temp=document.form1.nivel1
	
								function redirect(x)
								{
									for (m=temp.options.length-1;m>0;m--)
									temp.options[m]=null
									for (i=0;i<group[x].length;i++)
									{
										temp.options[i]=new Option(group[x][i].text,group[x][i].value)
									}
									temp.options[0].selected=true
									redirect1(0)
								}


							</script>
						
                    		<td><div align="left">ASIGNACION</div></td>
                    		<td class="th_2"><select name="dependencia1" size="1" id="dependencia1" style="width: 115px" >
                              <option>FACULTAD</option>
                              <option>ADMINISTRATIVO</option>
                            </select></td>
                  		</tr>
                  		<tr class="th_1">
                  		  <td><div align="left">DEPENDENCIA</div></td>
                  		  <td colspan="3" class="th_2">
						  <select name="select" id="select" style="width: 380px">
                            <?php       
									$q = "SELECT facultad.idfacu, facultad.nomfacu, eap.ideap, eap.idfacu, eap.nomeap FROM facultad INNER JOIN eap ON facultad.idfacu = eap.idfacu WHERE facultad.nomfacu = $nombre";
	    							$data->ExecuteRowFetcher($q);
	    							while($data->Row != 0)
	    							{
	    						?>
                            <option value="<?php echo $data->Row['ideap'];?>" selected> <?php echo $data->Row['nomeap'];?> </option>
                            <?php
	    								$data->FetchRow();
	    							}
								?>
                          </select></td>
               		  </tr>
					  
                  		<tr class="th_1">
                  		  <td><div align="left">AREA</div></td>
                  		  <td colspan="3" class="th_2">
						  <select name="area" id="area" style="width: 380px">
                   				<?php       
									$q = "SELECT facultad.idfacu, facultad.nomfacu, eap.ideap, eap.idfacu, eap.nomeap FROM facultad INNER JOIN eap ON facultad.idfacu = eap.idfacu WHERE facultad.nomfacu = $nombre";
	    							$data->ExecuteRowFetcher($q);
	    							while($data->Row != 0)
	    							{
	    						?>
                         	 	<option value="<?php echo $data->Row['ideap'];?>" selected>
									<?php echo $data->Row['nomeap'];?>								</option>
                          		<?php
	    								$data->FetchRow();
	    							}
								?>
                        	</select>						  </td>
               		  </tr>
                  		<tr class="th_1">
                    		<td><div align="left">TITULO</div></td>
                    		<td class="th_2"><span class="Estilo22">
                    		  <select name="titulo1" class="Estilo11" id="titulo1" style="width: 115px">
                                <option>PhD</option>
                                <option>Dr</option>
                                <option>Blgo</option>
                                <option>Mg</option>
                                <option>CPC</option>
                                <option>Ing</option>
                                <option>Abgdo</option>
                                <option>Bach</option>
                                <option>Sec</option>
                                <option>Tec</option>
                              </select>
                    		</span></td>
                    		<td><div align="left">ESPECIALIDAD</div></td>
                    		<td class="th_2"><span class="Estilo42">
                    		  <input name="especialidad1" type="text" id="especialidad1" size="15">
                    		</span></td>
                  		</tr>
                  		<tr class="th_1">
                  		  <td><div align="left">REMUNERACION</div></td>
                  		  <td class="th_2"><span class="Estilo38">
                  		    <select name="remuneracion1" id="remuneracion1" style="width: 115px">
                              <?php       
									$q = "SELECT * FROM remuneracion ORDER BY idremu";
	    							$data->ExecuteRowFetcher($q);
	    							while($data->Row != 0)
	    							{
	    						?>
                              <option value="<?php echo $data->Row['iremu'];?>" selected> <?php echo $data->Row['nomremu'];?> </option>
                              <?php
										$data->FetchRow();
	    							}
								?>
                            </select>
                  		  </span></td>
                  		  <td><div align="left">FONDO PENSIONES </div></td>
                  		  <td class="th_2"><span class="Estilo38">
                  		    <select name="pensiones1" id="pensiones1" style="width: 115px">
                              <?php       
									$q = "SELECT * FROM remuneracion ORDER BY idremu";
	    							$data->ExecuteRowFetcher($q);
	    							while($data->Row != 0)
	    							{
	    						?>
                              <option value="<?php echo $data->Row['iremu'];?>" selected> <?php echo $data->Row['nomremu'];?> </option>
                              <?php
										$data->FetchRow();
	    							}
								?>
                            </select>
                  		  </span></td>
               		  </tr>
                  		<tr class="th_1">
                    		<td><div align="left">GENERO</div></td>
                    		<td class="th_2"><span class="Estilo2">
                    		  <select name="genero1" id="genero1" style="width: 115px">
                                <option> Varon </option>
                                <option> Mujer </option>
                              </select>
                    		</span></td>
                    		<td><div align="left">TELEFONO</div></td>
                    		<td class="th_2"><span class="Estilo42">
                    		  <input name="telefono1" type="text" id="telefono1" size="15">
                    		</span></td>
                  		</tr>
                  		<tr class="th_1">
                    		<td><div align="left">E-MAIL</div></td>
                    		<td colspan="3" class="th_2"><div align="left"><span class="Estilo44">
                    		  <input name="email1" type="text" id="email1" size="59">
                    		</span></div></td>
                   		</tr>
               	</table>				</td>
      	  	</tr>
        	<tr class="th_1">
          		<td><div align="center"><strong>
          		  <input name="limpiar" type="reset" id="limpiar" value="Limpiar">
          		</strong><strong>
          		<input name="registrar" type="submit" id="registrar" value="Registrar">
          		</strong></div></td>
        	</tr>
        	<tr>
          		<td colspan="3" class="th_5">&nbsp;</td>
        	</tr>
  	  </table>
    s
	</form>
	</body>
</html>
