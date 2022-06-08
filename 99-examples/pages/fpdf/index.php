<?php
require ("fpdf/fpdf.php");
$pdf = new FPDF('L', 'mm', 'A4');
$pdf->addPage();
$pdf->setFont ("Arial" , 'B' , 16);

$conn = mysqli_connect('localhost', 'root', '', /*'db_name'*/);
$sqlView = "SELECT * From mycontacts";
$Execute = mysqli_query($conn, $sqlView);
$DataRows = mysqli_fetch_array($Execute, MYSQLI_ASSOC);
while ($DataRows = mysqli_fetch_array($Execute, MYSQLI_ASSOC) ) {
$Id = $DataRows['id'];
$FullName = $DataRows['name'] . " " . $DataRows['surname'];
$Email = $DataRows['email'];
$Gender = $DataRows['gender'];
$Mobile = $DataRows['mobile'];
$Birthday = $DataRows['birthday'];
			$pdf->cell (175, 7 , $FullName , 1 , 0 , 'L');
			$pdf->cell (7, 7 , $Gender , 1 , 0 , 'C');
			$pdf->cell (45, 7 , $Mobile , 1 , 0 , 'C');
			$pdf->cell (50, 7 , $Birthday , 1 , 1 , 'C');
}
$pdf->output();

		

// require ("fpdf/fpdf.php"); // path to fpdf.php
// $pdf = new FPDF ('L' , 'mm' , 'A4');;
// $pdf->addPage(); // make another page
// $pdf->setFont ("Arial" , 'B' , 16);
// $pdf->cell (50, 7 , $Birthday , 1 , 1 , 'C');
// $pdf->output();

?>