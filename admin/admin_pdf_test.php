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
        $this->Cell(30,10,'Laporan Reservasi',0,0,'C');
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

    $select ="SELECT * FROM reservasi AS r 
                LEFT JOIN user AS u ON r.user_id = u.user_id
                LEFT JOIN user_dokter AS d ON r.user_id = d.user_id 
                LEFT JOIN poli as p ON r.poli_id = p.poli_id";
    $result = $conn->query($select);
    $pdf = new PDF();
    $pdf->AddPage();
    $pdf->SetFont('Arial','B',10);
    $pdf->Cell(15,10,'No',1);
    $pdf->Cell(70,10,'Nama Lengkap',1);
    $pdf->Cell(30,10,'Nama Poli',1);
    $pdf->Cell(40,10,'Tgl Reservasi',1);
    $pdf->Cell(60,10,'Status Reservasi',1);
    $pdf->Ln();
    
    $count=0;
    // $display_heading = array('reservasi_id'=>'ID', 'user_id'=> 'Name', 'tgl_reservasi'=> 'Age','status_reservasi'=> 'Salary',);
    // $header = mysqli_query($conn, "SHOW reservasi_id, user_id, tgl_reservasi, status_reservasi FROM reservasi");

    while($row = $result->fetch_object()){
        $count=$count+1;
        $id = $row->reservasi_id;
        $name = $row->nama_lengkap;
        // $name = $row->nama_dokter;
        $poli = $row->nama_poli;
        $date = $row->tgl_reservasi;
        $status = $row->status_reservasi;
        // foreach($header as $heading) {
        //     $pdf->Cell(40,12,$display_heading[$heading['Field']],1);
        //     }
        $pdf->Cell(15,10,$count,1);
        $pdf->Cell(70,10,$name,1);
        $pdf->Cell(30,10,$poli,1);
        $pdf->Cell(40,10,$date,1);
        $pdf->Cell(60,10,$status,1);
        $pdf->Ln();
    }
    $pdf->Output();
?>