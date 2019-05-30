<?php
App::import('Vendor', 'fpdf/fpdf');

class PDF extends FPDF {

    public $titulo = "Gabinete da Superintendência";
    public $subtitulo = "Relatório de Demandas de Alevinos/2015";

    function Header() {

        $this->Image('../webroot/img/logo.jpg', 10, 10, 40);
        $this->SetFont('Arial', 'B', 15);
        $this->Cell(40);
        $this->Cell(30, 7, ("3ª SUPERINTENDÊNCIA REGIONAL"));
        $this->Ln();
        $this->Cell(40);
        $this->Cell(30, 4, ($this->titulo));
        $this->Ln(10);
        $this->SetFont('Arial', '', 7);
        $this->Cell(50, 4, ($this->subtitulo), 0, "C");
        $this->Ln(5);
    }

    function Footer() {
        $this->SetY(-15);
        $this->Cell(0, 10, ( "RUA Presidente Dutra, 160 - Centro"));
        $this->Ln(2.5);
        $this->Cell(0, 10, "56600-000, Petrolina/PE");
        $this->Ln(2.5);
        $this->Cell(0, 10, "Fone: 87-3866-7705");

        $this->SetFont('Arial', 'I', 8);
        $this->AliasNbPages();
        $this->Cell(0, 10, ( 'Página ' ) . $this->PageNo() . ' de {nb}', 0, 0, 'R');
        $this->Ln(2.5);
        $this->SetFont('Arial', '', 6);
        $this->Cell(0, 10, 'Data: '. date('d-m-Y'));
    }
