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
	
	$stmt1 = $db->query("SELECT * FROM sp04 WHERE user_id = $id");
	$stmt1->execute();
	$row1 = $stmt1->fetch(PDO::FETCH_ASSOC);

	$stmt2 = $db->query("SELECT * FROM enterprise WHERE user_id = $id");
	$stmt2->execute();
	$row2 = $stmt2->fetch(PDO::FETCH_ASSOC);
}
// Require composer autoload
require_once __DIR__ . '/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf([
	'default_font_size' => 14,
	'default_font' => 'sarabun'
]);

$pagecount = $mpdf->setSourceFile('pdf/sp04.pdf');
$tplId = $mpdf->importPage($pagecount);
$mpdf->useTemplate($tplId);

$html = '<div style="position:absolute;top:205px;left:190px">'.$row['fullname'].'</div>';
$html1 = '<div style="position:absolute;top:205px;left:490px">'.$row['studentid'].'</div>';
$html2 = '<div style="position:absolute;top:228px;left:150px">'.$row['faculty'].'</div>';
$html3 = '<div style="position:absolute;top:228px;left:430px">'.$row['branch'].'</div>';
$html4 = '<div style="position:absolute;top:248px;left:120px;width:50px;">'.$row['housenumber'].'</div>';
$html5 = '<div style="position:absolute;top:248px;left:240px">'.$row['village'].'</div>';
$html6 = '<div style="position:absolute;top:248px;left:440px">'.$row['alley'].'</div>';
$html7 = '<div style="position:absolute;top:270px;left:100px">'.$row['road'].'</div>';
$html8 = '<div style="position:absolute;top:270px;left:310px">'.$row['subdistrict'].'</div>';
$html9 = '<div style="position:absolute;top:270px;left:490px">'.$row['district'].'</div>';
$html10 = '<div style="position:absolute;top:290px;left:100px">'.$row['province'].'</div>';
$html11 = '<div style="position:absolute;top:290px;left:360px;width:50px;">'.$row['postalcode'].'</div>';
$html12 = '<div style="position:absolute;top:290px;left:470px">'.$row['phone'].'</div>';
$html13 = '<div style="position:absolute;top:310px;left:240px">'.$row['preschoolyear'].'</div>';
$html14 = '<div style="position:absolute;top:310px;left:350px">'.$row['schoolyear'].'</div>';

$html15 = '<div style="position:absolute;top:355px;left:320px">'.$row2['name0'].'</div>';
$html16 = '<div style="position:absolute;top:375px;left:340px;width:320px;">'.$row2['address0'].'</div>';
$html17 = '<div style="position:absolute;top:425px;left:370px">'.$row2['phone0'].'</div>';
$html18 = '<div style="position:absolute;top:425px;left:530px">'.$row2['email0'].'</div>';
$html19 = '<div style="position:absolute;top:447px;left:430px">'.$row2['takename'].'</div>';

$html20 = '<div style="position:absolute;top:490px;left:230px">'.$row1['name1'].'</div>';
$html21 = '<div style="position:absolute;top:535px;left:230px">'.$row1['name2'].'</div>';
$html22 = '<div style="position:absolute;top:580px;left:230px">'.$row1['name3'].'</div>';
$html23 = '<div style="position:absolute;top:490px;left:510px">'.$row1['studentid1'].'</div>';
$html24 = '<div style="position:absolute;top:535px;left:510px">'.$row1['studentid2'].'</div>';
$html25 = '<div style="position:absolute;top:580px;left:510px">'.$row1['studentid3'].'</div>';
$html26 = '<div style="position:absolute;top:510px;left:190px">'.$row1['branch1'].'</div>';
$html27 = '<div style="position:absolute;top:555px;left:190px">'.$row1['branch2'].'</div>';
$html28 = '<div style="position:absolute;top:600px;left:190px">'.$row1['branch3'].'</div>';
$html29 = '<div style="position:absolute;top:510px;left:350px">'.$row1['faculty1'].'</div>';
$html30 = '<div style="position:absolute;top:555px;left:350px">'.$row1['faculty2'].'</div>';
$html31 = '<div style="position:absolute;top:600px;left:350px">'.$row1['faculty3'].'</div>';

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
$mpdf->WriteHTML($html20);
$mpdf->WriteHTML($html21);
$mpdf->WriteHTML($html22);
$mpdf->WriteHTML($html23);
$mpdf->WriteHTML($html24);
$mpdf->WriteHTML($html25);
$mpdf->WriteHTML($html26);
$mpdf->WriteHTML($html26);
$mpdf->WriteHTML($html27);
$mpdf->WriteHTML($html28);
$mpdf->WriteHTML($html29);
$mpdf->WriteHTML($html30);
$mpdf->WriteHTML($html31);

$mpdf->Output();
// $mpdf->Output('สก_01.pdf', 'D');


