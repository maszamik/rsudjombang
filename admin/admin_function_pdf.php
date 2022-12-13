<?php
    //include connection file
    include_once("../koneksi.php");
    include_once('../assets/fpdf185/fpdf.php');
    
    class PDF extends FPDF
    {
    // Page header
    function Header()
    {
        // Logo
        $this->Image('..\assets\img\logo\logo-rs.png',10,-1,70);
        $this->SetFont('Arial','B',13);
        // Move to the right
        $this->Cell(80);
        // Title
        $this->Cell(80,10,'Employee List',1,0,'C');
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
        $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
    }
    }
    
    $db = new $conn;
    // $connString =  $db->getConnstring();
    $display_heading = array('reservasi_id'=>'ID', 'user_id'=> 'Name', 'tgl_reservasi'=> 'Age','status_reservasi'=> 'Salary',);
    
    $result = mysqli_query($conn, "SELECT * FROM reservasi")
                            or die("database error:". mysqli_error($connString));
    $header = mysqli_query($conn, "SHOW reservasi_id, user_id, tgl_reservasi, status_reservasi FROM reservasi");
    
    $pdf = new PDF();
    //header
    $pdf->AddPage();
    //foter page
    $pdf->AliasNbPages();
    $pdf->SetFont('Arial','B',12);
    foreach($header as $heading) {
        $pdf->Cell(40,12,$display_heading[$heading['Field']],1);
        }
    foreach($result as $row) {
        $pdf->Ln();
        foreach($row as $column)
        $pdf->Cell(40,12,$column,1);
    }
    $pdf->Output();
?>
