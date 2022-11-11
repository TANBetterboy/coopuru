<?php
session_start();
require_once('connection.php');
if (!isset($_SESSION['user_login'])) {
	$_SESSION['error'] = 'กรุณาเข้าสู่ระบบ!';
	header('location: signin.php');
}

if (isset($_SESSION['user_login'])) {
	$user_id = $_SESSION['user_login'];
	$id=intval($_GET['id']);
	$stmt = $db->query("SELECT * FROM users WHERE id = $id");
	$stmt->execute();
	$row = $stmt->fetch(PDO::FETCH_ASSOC);
	
	$stmt1 = $db->query("SELECT * FROM sp09 WHERE user_id = $id");
	$stmt1->execute();
	$row1 = $stmt1->fetch(PDO::FETCH_ASSOC);

	$stmt2 = $db->query("SELECT * FROM enterprise WHERE user_id = $id");
	$stmt2->execute();
	$row2 = $stmt2->fetch(PDO::FETCH_ASSOC);

	$stmt3 = $db->query("SELECT * FROM sp03 WHERE user_id = $id");
	$stmt3->execute();
	$row3 = $stmt3->fetch(PDO::FETCH_ASSOC);
}
// Require composer autoload
require_once __DIR__ . '/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf([
	'default_font_size' => 14,
	'default_font' => 'sarabun'
]);

$pagecount = $mpdf->setSourceFile('pdf/sp09.pdf');
$tplId = $mpdf->importPage($pagecount);
$mpdf->useTemplate($tplId);



$html = '<div style="position:absolute;top:555px;left:190px">'.$row['fullname'].'</div>';
$html1 = '<div style="position:absolute;top:555px;left:520px">'.$row['studentid'].'</div>';
$html2 = '<div style="position:absolute;top:580px;left:120px">'.$row['faculty'].'</div>';
$html3 = '<div style="position:absolute;top:580px;left:370px">'.$row['branch'].'</div>';

$html4 = '<div style="position:absolute;top:605px;left:300px">'.$row2['name0'].'</div>';

$html16 = '<div style="position:absolute;top:630px;left:190px">'.$row['semester'].'</div>';
$html17 = '<div style="position:absolute;top:630px;left:350px">'.$row['schoolyear'].'</div>';

$html5 = '<div style="position:absolute;top:653px;left:90px;width:50px;">'.$row['housenumber'].'</div>';
$html18 = '<div style="position:absolute;top:653px;left:190px">'.$row['alley'].'</div>';
$html6 = '<div style="position:absolute;top:653px;left:370px">'.$row['road'].'</div>';
$html7 = '<div style="position:absolute;top:653px;left:610px">'.$row['subdistrict'].'</div>';
$html8 = '<div style="position:absolute;top:677px;left:120px">'.$row['district'].'</div>';
$html9 = '<div style="position:absolute;top:677px;left:350px">'.$row['province'].'</div>';
$html10 = '<div style="position:absolute;top:677px;left:580px">'.$row['postalcode'].'</div>';
$html11 = '<div style="position:absolute;top:702px;left:120px">'.$row['phone'].'</div>';
$html19 = '<div style="position:absolute;top:702px;left:320px">'.$row3['fax'].'</div>';
$html12 = '<div style="position:absolute;top:702px;left:510px">'.$row['email'].'</div>';

$html13 = '<div style="position:absolute;top:777px;left:170px">'.$row1['title'].'</div>';
$html14 = '<div style="position:absolute;top:802px;left:170px">'.$row1['titleeng'].'</div>';

$html15 = '<div style="position:absolute;top:877px;left:100px;width:600px;">'.$row1['detail'].'</div>';


$mpdf->WriteHTML($html);
$mpdf->WriteHTML($html1);
$mpdf->WriteHTML($html2);
$mpdf->WriteHTML($html3);
$mpdf->WriteHTML($html4);
$mpdf->WriteHTML($html5);
$mpdf->WriteHTML($html6);
$mpdf->WriteHTML($html7);
$mpdf->WriteHTML($html8);
$mpdf->WriteHTML($html9);
$mpdf->WriteHTML($html10);
$mpdf->WriteHTML($html11);
$mpdf->WriteHTML($html12);
$mpdf->WriteHTML($html13);
$mpdf->WriteHTML($html14);
$mpdf->WriteHTML($html15);
$mpdf->WriteHTML($html16);
$mpdf->WriteHTML($html17);
$mpdf->WriteHTML($html18);
$mpdf->WriteHTML($html19);

$mpdf->Output();
// $mpdf->Output('สก_01.pdf', 'D');


