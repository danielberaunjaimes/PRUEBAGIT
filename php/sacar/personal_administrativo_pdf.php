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
	$sql=mysql_query("SELECT * FROM personal WHERE dniper = $promo", $link);
	while($row=mysql_fetch_array($sql))
	{
		$dniper=$row['dniper'];
		$fecharper=$row['fecharper'];
		$apellidosper=$row['apellidosper'];
		$nombresper=$row['nombresper'];
		$direccionper=$row['direccionper'];
		$contratoper = $row['contratoper'];
		$resolucionper = $row['resolucionper'];
		$nivelper = $row['nivelper'];
		$dependenciaper = $row['dependenciaper'];	
		$tituloper = $row['tituloper'];
		$remuneracionper = $row['remuneracionper'];
		$generoper = $row['generoper'];
		$telefonoper =$row['telefonoper'];
		$emailper=$row['emailper'];
		$apellidosper = strtoupper($apellidosper);
		$nombresper = strtoupper($nombresper);
		$emailper = strtolower($emailper);
		$direccionper = strtoupper($direccionper);
	}
	
	$pdf->Image('../imagenes/unas.jpg',10,12);
	$pdf->SetFont('Arial','B',17);
	$pdf->Cell(0,0,"RECURSOS HUMANOS - REPORTE DE PERSONAL",0,0,0);
	$pdf->Ln(25);
	$pdf->SetFont('Arial','',10);
	$pdf->SetFillColor(200,220,225);
	$pdf->Ln();
	
	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(40,5,"DNI",1,0,'L',1);
	$pdf->SetFont('Arial','',10);
	$pdf->Cell(60,5,"$dniper",1,0,'L',0);
	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(40,5,"FECHA DE REGISTRO",1,0,'L',1);
	$pdf->SetFont('Arial','',10);
	$pdf->Cell(0,5,"$fecharper",1,0,'L',0);
	$pdf->Ln();
	
	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(40,5,"APELLIDOS",1,0,'L',1);
	$pdf->SetFont('Arial','',10);
	$pdf->Cell(0,5,"$apellidosper",1,0,'L',0);
	$pdf->Ln();
		
	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(40,5,"NOMBRES",1,0,'L',1);
	$pdf->SetFont('Arial','',10);
	$pdf->Cell(0,5,"$nombresper",1,0,'L',0);
	$pdf->Ln();
	
	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(40,5,"DIRECCION",1,0,'L',1);
	$pdf->SetFont('Arial','',10);
	$pdf->Cell(0,5,"$direccionper",1,0,'L',0);
	$pdf->Ln();
	
	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(40,5,"CONTRATO",1,0,'L',1);
	$pdf->SetFont('Arial','',10);
	$pdf->Cell(60,5,"$contratoper",1,0,'L',0);
	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(40,5,"RESOLUCION",1,0,'L',1);
	$pdf->SetFont('Arial','',10);
	$pdf->Cell(0,5,"$resolucionper",1,0,'L',0);
	$pdf->Ln();
	
	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(40,5,"NIVEL",1,0,'L',1);
	$pdf->SetFont('Arial','',10);
	$pdf->Cell(60,5,"$nivelper",1,0,'L',0);
	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(40,5,"DEPENDENCIA",1,0,'L',1);
	$pdf->SetFont('Arial','',10);
	$pdf->Cell(0,5,"$dependenciaper",1,0,'L',0);
	$pdf->Ln();
	
	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(40,5,"TITULO",1,0,'L',1);
	$pdf->SetFont('Arial','',10);
	$pdf->Cell(60,5,"$tituloper",1,0,'L',0);
	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(40,5,"REMUNERACION",1,0,'L',1);
	$pdf->SetFont('Arial','',10);
	$pdf->Cell(0,5,"$remuneracionper",1,0,'L',0);
	$pdf->Ln();
	
	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(40,5,"GENERO",1,0,'L',1);
	$pdf->SetFont('Arial','',10);
	$pdf->Cell(60,5,"$generoper",1,0,'L',0);
	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(40,5,"TELEFONO",1,0,'L',1);
	$pdf->SetFont('Arial','',10);
	$pdf->Cell(0,5,"$telefonoper",1,0,'L',0);
	$pdf->Ln();
	
	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(40,5,"EMAIL",1,0,'L',1);
	$pdf->SetFont('Arial','',10);
	$pdf->Cell(0,5,"$emailper",1,0,'L',0);
	$pdf->Ln();

	//Fin Programa Sub Programa
	$pdf->Output("ORDEN_COMPRA-$cod_orden.pdf","D");
	//$pdf->Output()
//}
?> 