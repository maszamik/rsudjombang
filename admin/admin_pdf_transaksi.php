<?php
    require('../assets/fpdf185/fpdf.php');
    // require('admin_function_pdf.php');

    // Database Connection
    $conn = new mysqli('localhost', 'root', '', 'disty_mikhoste');

    //Check for connection error
    if($conn->connect_error){
    die("Error in DB connection: ".$conn->connect_errno." : ".$conn->connect_error);
    }

    class PDF extends FPDF
    {
    // Page header
    function Header()
    {
        // Logo        
        $this->Image('assets\img\logo\logo-rs.png',10,6,50);
        // Arial bold 15
        $this->SetFont('Arial','B',20);
        // Move to the right
        $this->Cell(80);
        // Title
        $this->Cell(30,10,'Laporan Transaksi',0,0,'C');
        // Line break
        $this->Ln(20);
    }

    // Page footer
    function Footer()
    {
        // Position at 1.5 cm from bottom
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Arial','I',8);
        // Page number
        $this->Cell(0,10,'Page '.$this->PageNo(),0,0,'C');
    }
    }
    // Select data from MySQL database
    // SELECT * FROM `reservasi` ORDER BY reservasi_id

    $select ="SELECT * FROM transaksi WHERE status_bayar = 'Sudah Bayar'";
    $sum = "SELECT SUM(total_bayar) AS TotalTransaction FROM transaksi WHERE status_bayar = 'Sudah Bayar'";
    $result = $conn->query($select);
    $sum_result = $conn->query($sum);

    $pdf = new PDF();
    $pdf->AddPage();
    $pdf->SetFont('Arial','B',10);
    $pdf->Cell(10,10,'No',1);
    $pdf->Cell(30,10,'No Invoice',1);
    $pdf->Cell(30,10,'Tgl Transaksi',1);
    $pdf->Cell(30,10,'Bsr Transaksi',1);
    $pdf->Cell(40,10,'Metode Transaksi',1);
    $pdf->Cell(50,10,'Keterangan',1);
    $pdf->Ln();
    
    $count=0;

    while($row = $result->fetch_object()){

        $count=$count+1;
        $noinv = $row->no_invoice;
        $total = $row->total_bayar;
        $date = $row->tgl_bayar;
        $method = $row->metode_bayar;
        $status = $row->keterangan;

        // foreach($header as $heading) {
        //     $pdf->Cell(40,12,$display_heading[$heading['Field']],1);
        //     }
        $pdf->Cell(10,10,$count,1);
        $pdf->Cell(30,10,$noinv,1);
        $pdf->Cell(30,10,$date,1);
        $pdf->Cell(30,10,"Rp.".$total,1);
        $pdf->Cell(40,10,$method,1);
        $pdf->Cell(50,10,$status,1);
        $pdf->Ln();
    }
    $pdf->Ln();
    $pdf->Ln();
    $rows = $sum_result -> fetch_object();
    $totaltransaction = $rows->TotalTransaction;
    // $pdf->Cell(10,10,"",0);
    // $pdf->Cell(30,10,"",0);
    // $pdf->Cell(35,10,"",0);
    // $pdf->Cell(35,10,"",0);
    $pdf->Cell(140,10,"Total Pemasukan",1);
    $pdf->Cell(50,10,"Rp.".$totaltransaction,1);
    

    $pdf->Output();
?>