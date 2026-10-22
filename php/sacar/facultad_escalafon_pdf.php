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
	$sql=mysql_query("SELECT * FROM facultad WHERE idfacu = $promo", $link);
	while($row=mysql_fetch_array($sql))
	{
		$idfacu=$row['idfacu'];
		$fecharfacu=$row['fecharfacu'];
		$nomfacu=$row['nomfacu'];
		$resolucionfacu=$row['resolucionfacu'];
		$nomfacu = strtoupper($nomfacu);
		$resolucionfacu = strtoupper($resolucionfacu);
	}
	
	$pdf->Image('../imagenes/unas.jpg',10,12);
	$pdf->SetFont('Arial','B',17);
	$pdf->Cell(0,0,"RECURSOS HUMANOS - FACULTAD ",0,0,0);
	$pdf->Ln(25);
	$pdf->SetFont('Arial','',10);
	$pdf->SetFillColor(200,220,225);
	$pdf->Ln();
	
	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(40,5,"CODIGO",1,0,'L',1);
	$pdf->SetFont('Arial','',10);
	$pdf->Cell(60,5,"$idfacu",1,0,'L',0);
	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(40,5,"FECHA DE REGISTRO",1,0,'L',1);
	$pdf->SetFont('Arial','',10);
	$pdf->Cell(0,5,"$fecharfacu",1,0,'L',0);
	$pdf->Ln();
	
	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(40,5,"NOMBRE FACULTAD",1,0,'L',1);
	$pdf->SetFont('Arial','',10);
	$pdf->Cell(0,5,"$nomfacu",1,0,'L',0);
	$pdf->Ln();
	
	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(40,5,"RESOLUCION",1,0,'L',1);
	$pdf->SetFont('Arial','',10);
	$pdf->Cell(0,5,"$resolucionfacu",1,0,'L',0);
	$pdf->Ln();
	
	$sql=mysql_query("SELECT facultad.idfacu, escalafon.idfacu, escalafon.nomesc, escalafon.resolucionesc FROM facultad INNER JOIN escalafon ON facultad.idfacu = escalafon.idfacu WHERE facultad.idfacu = $promo", $link);
	while($row=mysql_fetch_array($sql))
	{
		$nomesc=$row['nomesc'];
		$resolucionesc=$row['resolucionesc'];
		$nomesc = strtoupper($nomesc);
		$resolucionesc = strtoupper($resolucionesc);
	
	
	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(40,5,"DOCUMENTO",1,0,'L',1);
	$pdf->SetFont('Arial','',10);
	$pdf->Cell(60,5,"$nomesc",1,0,'L',0);
	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(40,5,"RESOLUCION",1,0,'L',1);
	$pdf->SetFont('Arial','',10);
	$pdf->Cell(0,5,"$resolucionesc",1,0,'L',0);
	$pdf->Ln();
	
	}
	
	//Fin Programa Sub Programa
	$pdf->Output("ORDEN_COMPRA-$cod_orden.pdf","D");
	//$pdf->Output()
//}
?> 