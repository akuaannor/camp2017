<?php
require('../fpdf/fpdf.php');
include_once('../includes/register.php');
// Begin configuration
// Page footer
if (isset($_GET['Surname']) && (isset($_GET['firstname']))) {
     $Surname= $_GET['Surname'];
     $firstname= $_GET['firstname']; 
  }else {
    $Fullname = "NO NAME";
  }
class PDF extends FPDF
{

function Footer()
{
    // Go to 1.5 cm from bottom
    $this->SetY(-15);
    // Select Arial italic 8
    $this->SetFont('Arial','I',8);
    // Print centered page number
    $this->Cell(0,10,'Page '.$this->PageNo(),0,0,'C');
}
}

$textColour = array( 0, 0, 0 );
$headerColour = array( 100, 100, 100 );
$reportName = "2017 CAMP RECEIPT";
$reportNameYPos = 60;
$logoFile = "../images/icgc-logo2.png";
$logoXPos = 50;
$logoYPos = 28;
$logoWidth = 110;

$chartYLabel = $Surname;
$chartXLabel = $firstname;
// End configuration
$pdf = new FPDF( 'P', 'mm', 'A4' );
$pdf->SetTextColor( $textColour[0], $textColour[1], $textColour[2] );
$pdf->AddPage();
$pdf->SetTextColor( $headerColour[0], $headerColour[1], $headerColour[2] );
$pdf->SetFont( 'Arial', '', 17 );
$pdf->Cell( 0, 15, $reportName, 0, 0, 'C' );
$pdf->Image( $logoFile, $logoXPos, $logoYPos, $logoWidth );
$pdf->SetFont( 'Times', '', 24 );
$pdf->Ln( $reportNameYPos );
$pdf->Cell( 0, 15, 'OMEGA GENERATION', 0, 0, 'C' );
$pdf->Ln( 20 );
$pdf->SetTextColor( $textColour[0], $textColour[1], $textColour[2] );
$pdf->SetFont( 'Times', '', 14 );
$pdf->Write( 8, "I, ".ucfirst($Surname)." ".ucfirst($firstname)." having read and agreed to the terms and conditions of the 2017 Omega Generation camp, promise to be a good person and learn well from this experience" );
$pdf->Ln( 12 );
$pdf->SetFont( 'Times', '', 13 );
$pdf->Write( 7, "The annual Youth Camp is a Christian environment designed purposely for the younger generation be separated from the rest of the Society to enable them have a memorable encounter with God and to enhance their spiritual growth.It is an enjoyable experience which has, over the years, impacted the lives of many young people positively.
To enhance this unique experience, there are rules and regulations formulated for strict enforcement. " );
$pdf->Ln( 10 );
$pdf->Write( 6, "I'll be bigger, better and greater in 2017" );
$pdf->Ln( 56 );
$pdf->Cell( 0, 15, 'PARENT/GUARDIAN\'S SIGNATURE', 0, 0, 'R' );
$pdf->Ln( 10 );
$pdf->Cell( 0, 15, '...........................................................', 0, 0, 'R' );
$pdf->Output();
$pdf->Output( $firstname, "D" );
?>