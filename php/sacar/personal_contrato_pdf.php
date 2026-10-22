<?php
	require('font/fpdf.php');
	include("class/class.php"); 
	$promo = $_GET['promo'];
	class PDF extends FPDF
	{
		//Cabecera de página
		function Header()
		{
		    //Logo
		    //Arial bold 15
		    $this->SetFont('Arial','B',19);
		    //Movernos a la derecha
		    $this->Ln(20);
		}
		//Pie de página
		function Footer()
		{
    		//Posición: a 1,5 cm del final
    		$this->SetY(-15);
    		//Arial italic 8
    		$this->SetFont('Arial','I',8);
    		//Número de página
    		$this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
		}
	}
	//Creación del objeto de la clase heredada
	$pdf=new PDF();
	$pdf->AliasNbPages();
	$pdf->AddPage();
	$pro = new DB_mysql;
	$link = $pro->conectar();
	$sql=mysql_query("SELECT * FROM personal WHERE id = $promo", $link);
	while($row=mysql_fetch_array($sql))
	{
		$id = $row["id"];
		$tipo=$row['tipo'];
		$fecha=$row['fecha'];
		$apellidos=$row['apellidos'];
		$nombres=$row['nombres'];
		$direccion=$row['direccion'];
		$dni = $row['dni'];
		$ruc = $row['ruc'];
		$lug_nac = $row['lug_nac'];
		$formacion = $row['formacion'];
		$profesion = $row['profesion'];
		$funcion = $row['funcion'];	
		$procedencia = $row['procedencia'];
		$genero = $row['genero'];
		$telefono=$row['telefono'];
		$email=$row['email'];
		$nota = $row['nota'];
		$usuario=$row['usuario'];
		$clave=$row['clave'];
		$apellidos = strtoupper($apellidos);
		$nombres = strtoupper($nombres);
		$email = strtolower($email);
	}
 	$pdf->Image('../imagenes/unas.jpg',10,23);
	$pdf->SetFont('Arial','B',17);
	$pdf->Cell(0,0,"                  UNIVERSIDAD NACIONAL AGRARIA DE LA SELVA",0,0);
	$pdf->Ln(6);
	$pdf->Cell(0,0,"                                                   Tingo Maria",0,0);
	$pdf->Ln(6);
	$pdf->Cell(0,0,"                            OFICINA DE RECURSOS HUMANOS",0,0);
	$pdf->Ln(10);
	$pdf->Cell(0,0,"                  -------------------------------------------------------------------------",0,0);
	$pdf->Ln(10);
	$pdf->SetFont('Arial','',10);
	$pdf->SetFillColor(200,220,225);
	$pdf->Ln();
	$pdf->SetFont('Arial','B',13);
	$pdf->Cell(0,0,"CONTRATO DE TRABAJO A PLAZO DETERMINADO Nº $id ORH - UNASTM",0,0);
	$pdf->Ln(10);
	$pdf->SetFont('Arial','',11);
	$pdf->Cell(0,0,"Conste por el presente documento, el contrato de trabajo con plazo determinado que celebran de una",0,'j');
	$pdf->Ln(8);
	$pdf->Cell(0,0,"parte la Universidad Nacional Agraria de la Selva representada por su Vicerrector Administrativo de la",0,'j');
	$pdf->Ln(8);
	$pdf->Cell(0,0,"la Universidad Nacional Agraria de la Selva ******************* con DNI Nº ************ con domicilio",0,'j');
	$pdf->Ln(8);
	$pdf->Cell(0,0,"****************************** en esta ciudad, a quien en adelante se le denominara LA UNIVERDIAD, ",0,'j');
	$pdf->Ln(8);
	$pdf->Cell(0,0," y de otra parte el Sr(a). $apellidos, $nombres con DNI Nº $dni con domicilio en ",0,'j');
	$pdf->Ln(8);
	$pdf->Cell(0,0,"$direccion Tingo Maria en que adelante se le denominara como EL TRABAJADOR ",0,'j');
	$pdf->Ln(8);
	$pdf->Cell(0,0,"bajo los terminos y ondiciones siguientes.",0,'j');
	$pdf->Ln(12);
	$pdf->Cell(0,0,"PRIMERO : La Universidad requiere los servicios temporales para realizar labores de $funcion",0,'j');
	$pdf->Ln(8);
	$pdf->Cell(0,0,"SEGUNDO : La vigencia del siguiente contrato es a partir del $fecha al *********** del presente año",0,'j');
	$pdf->Ln(8);
	$pdf->Cell(0,0,"TERCERO : La remuneracion mensual que percibira el trabajador de comun acuerdo entre las partes es de",0,'j');
	$pdf->Ln(8);
	$pdf->Cell(0,0,"                    ********** Nuevos soles, correspondiente al nivel Remunerativo de servidor A (STA)",0,'j');
	$pdf->Ln(8);
	$pdf->Cell(0,0,"CUARTO : El horario de trabajo sera fijado por la Universidad deacuerdo a la jornada laboral establecida.",0,'j');
	$pdf->Ln(8); 
	$pdf->Cell(0,0,"                   En caso de observarce bajo rendimiento en el desempeño de sus funciones y tener faltas",0,'j');
	$pdf->Ln(8); 
	$pdf->Cell(0,0,"                   injustificadas con mas de tres dias, se procedera a rescindir el contrato.",0,'j');
	$pdf->Ln(8); 
	$pdf->Cell(0,0,"QUINTO : De conformidad con lo previsto por el articulo 70 de ka ley Nº 23733 Universitaria, el presente",0,'j');
	$pdf->Ln(8); 
	$pdf->Cell(0,0,"               contrato se rige por el Decreto Legislativo Nº 276, su reglamento y demas formas establecidas",0,'j');
	$pdf->Ln(8); 
	$pdf->Cell(0,0,"               para los servidores publicos en cuanto sean aplicables.",0,'j');
	$pdf->Ln(8);
	$pdf->Cell(0,0,"SEXTO : A la firma del presente documento en Trabajador declara encontrarse afiliado a AFP HORIZONTE",0,'j');
	$pdf->Ln(10);
	$pdf->Cell(0,0,"Las partes contratadas manifiestan que este contrato lo celebran con conocimento de su contenido, con",0,'j');
	$pdf->Ln(8);
	$pdf->Cell(0,0,"amplia voluntad y libertad y en fe de lo cual firman en vias de regularizacion en original y copia, a",0,'j');
	$pdf->Ln(8);
	$pdf->Cell(0,0,"los dias del mes de $fecha.",0,0);
	$pdf->Ln(13);
	$pdf->Cell(0,0,"-----------------------------------------------                                   ---------------------------------------",0,0);
	$pdf->Ln(3);
	$pdf->Cell(0,0,"*************************************                                        $apellidos, $nombres",0,0);
	$pdf->Ln(6);
	$pdf->Cell(0,0,"   Vicerrector Administrativo                                                     Trabajador",0,0);
	$pdf->Ln(20);
	//$pdf->Ln(13);	
	//Fin Programa Sub Programa
	$pdf->Output("ORDEN_COMPRA-$cod_orden.pdf","D");
	//$pdf->Output()
//}
?> 