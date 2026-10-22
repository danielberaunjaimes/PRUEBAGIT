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
	
	$pdf->Image('../imagen/unas.jpg',10,12);
	$pdf->SetFont('Arial','B',20);
	$pdf->Cell(0,10,"ADUNAS - REPORTE DE SOCIO",0,0,'C');
	$pdf->Ln(15);
	$pdf->SetFont('Arial','',10);
	$pdf->SetFillColor(200,220,225);
	$pdf->Ln();
	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(10,5,"N°",1,0,'L',1);
	$pdf->Cell(20,5,"nombre",1,0,'L',1);
	$pdf->Cell(0,5,"APELLIDOS Y NOMBRES",1,0,'L',1);
	$i=0;
	$sql=mysql_query("SELECT * FROM remuneracion", $link);
	while($row=mysql_fetch_array($sql))
	{
		$i++;
		$fecharremu=$row['fecharremu'];
		$nomremu=$row['nomremu'];
		$montoremu=$row['montoremu'];
		$nomben = strtoupper($nomremu);
			
		$pdf->SetFont('Arial','',8);
		$pdf->Cell(10,5,"$i",1,0,'L');
		$pdf->Cell(20,5,"$fecharremu",1,0,'L');
		$pdf->Cell(0,5,"$nomremu",1,0,'L');
		$pdf->Cell(0,5,"$montoremu",1,0,'L');
	
	}
	
	//Fin Programa Sub Programa
	$pdf->Output("ORDEN_COMPRA-$cod_orden.pdf","D");
	//$pdf->Output()
//}
?> 