  <?php

App::import('Vendor', 'PDF' );

ob_start();
$pdf = new PDF('L','mm','A4');
$pdf->AddPage();
$pdf->SetFont("Arial", 'B', 16);


$pdf->Cell(280,10,utf8_decode('Relatório de Demandas de Alevinos'),1 ,1,'C');

$pdf->SetFont("Arial", 'B', 10);

$pdf->Cell(120,8, utf8_decode('Procedência'),1,0,'C');
$pdf->Cell(20,8, 'Entrada',1,0,'C');
$pdf->Cell(30,8, utf8_decode('Município'),1,0,'C');
//$pdf->Cell(30,8, utf8_decode('Providência'),1,0,'C');
$pdf->Cell(20,8, utf8_decode('Data Prov'),1,0,'C');
$pdf->Cell(90,8, utf8_decode('Assunto'),1,1,'C');


foreach ($documentos as $doc){

    $pdf->SetFont("Arial", '', 7);

    $pdf->Cell(120,8, utf8_decode($doc['Documento']['procedencia']),1,0,'J');
    $pdf->Cell(20,8, utf8_decode($this->Time->format('d-m-Y', $doc['Documento']['data_entrada'])),1,0,'C');
    $pdf->Cell(30,8, utf8_decode($doc['Municipio']['nome']),1,0,'C');
    //$pdf->Cell(30,8, utf8_decode($doc['Documento']['providencia']),1,0,'C');
    $pdf->Cell(20,8, utf8_decode($this->Time->format('d-m-Y', $doc['Documento']['data_providencia'])),1,0,'C');
    $pdf->MultiCell(90,8, utf8_decode($doc['Documento']['assunto']),1,'J');
//    var_dump($doc) or die();

}
ob_clean();
$pdf->Output('doc.pdf', 'I');
$pdf->Output('doc.pdf', 'D');

?>
