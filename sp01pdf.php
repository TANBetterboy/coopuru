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
	$stmt1 = $db->query("SELECT * FROM sp01 WHERE user_id = $id");
    $stmt1->execute();
    $row1 = $stmt1->fetch(PDO::FETCH_ASSOC);
}
// Require composer autoload
require_once __DIR__ . '/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf([
	'default_font_size' => 16,
	'default_font' => 'sarabun'
]);

$pagecount = $mpdf->setSourceFile('pdf/sp01.pdf');
$tplId = $mpdf->importPage($pagecount);
$mpdf->useTemplate($tplId);
/////color:blue;
$html = '<div style="position:absolute;top:180px;left:210px">'.$row['fullname'].'</div>';
$html1 = '<div style="position:absolute;top:180px;left:570px">'.$row['studentid'].'</div>';

$html2 = '<div style="position:absolute;top:205px;left:150px">'.$row['fullnameeng'].'</div>';
$html3 = '<div style="position:absolute;top:205px;left:650px">'.$row['yearclass'].'</div>';

$html4 = '<div style="position:absolute;top:233px;left:170px">'.$row['branch'].'</div>';
$html5 = '<div style="position:absolute;top:233px;left:420px">'.$row['faculty'].'</div>';

$html6 = '<div style="position:absolute;top:260px;left:230px">'.$row['gpa'].'</div>';
$html7 = '<div style="position:absolute;top:260px;left:570px">'.$row['gpax'].'</div>';

$html8 = '<div style="position:absolute;top:288px;left:390px">'.$row['preschoolyear'].'</div>';
$html9 = '<div style="position:absolute;top:288px;left:580px">'.$row['schoolyear'].'</div>';

$html10 = '<div style="position:absolute;top:312px;left:115px;width:200px;">'.$row['housenumber'].'</div>';
$html11 = '<div style="position:absolute;top:312px;left:210px">'.$row['road'].'</div>';
$html12 = '<div style="position:absolute;top:312px;left:360px">'.$row['subdistrict'].'</div>';
$html13 = '<div style="position:absolute;top:312px;left:510px">'.$row['district'].'</div>';
$html14 = '<div style="position:absolute;top:312px;left:630px">'.$row['province'].'</div>';
$html15 = '<div style="position:absolute;top:338px;left:140px">'.$row['postalcode'].'</div>';
$html16 = '<div style="position:absolute;top:338px;left:280px">'.$row['phone'].'</div>';
$html17 = '<div style="position:absolute;top:338px;left:470px">'.$row['email'].'</div>';

///////////////////////////////////////////////////////////////////////////////////////////////
$html18 = '<div style="position:absolute;top:390px;left:115px;width:200px;">'.$row1['housenumber1'].'</div>';
$html19 = '<div style="position:absolute;top:390px;left:225px">'.$row1['road1'].'</div>';
$html20 = '<div style="position:absolute;top:390px;left:385px">'.$row1['subdistrict1'].'</div>';
$html21 = '<div style="position:absolute;top:390px;left:525px">'.$row1['district1'].'</div>';
$html22 = '<div style="position:absolute;top:390px;left:655px">'.$row1['province1'].'</div>';
$html23 = '<div style="position:absolute;top:415px;left:140px">'.$row1['postalcode1'].'</div>';
$html24 = '<div style="position:absolute;top:415px;left:280px">'.$row1['phone1'].'</div>';
$html25 = '<div style="position:absolute;top:415px;left:490px">'.$row1['email1'].'</div>';

$html26 = '<div style="position:absolute;top:470px;left:145px">'.$row1['name2'].'</div>';
$html27 = '<div style="position:absolute;top:470px;left:550px;width:200px;">'.$row1['relation2'].'</div>';
$html28 = '<div style="position:absolute;top:495px;left:115px;width:200px;">'.$row1['housenumber2'].'</div>';
$html29 = '<div style="position:absolute;top:495px;left:210px">'.$row1['road2'].'</div>';
$html30 = '<div style="position:absolute;top:495px;left:370px">'.$row1['subdistrict2'].'</div>';
$html31 = '<div style="position:absolute;top:495px;left:510px">'.$row1['district2'].'</div>';
$html32 = '<div style="position:absolute;top:495px;left:640px">'.$row1['province2'].'</div>';
$html33 = '<div style="position:absolute;top:520px;left:145px">'.$row1['postalcode2'].'</div>';
$html34 = '<div style="position:absolute;top:520px;left:250px">'.$row1['phone2'].'</div>';
$html35 = '<div style="position:absolute;top:520px;left:470px">'.$row1['email2'].'</div>';

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
$mpdf->WriteHTML($html27);
$mpdf->WriteHTML($html28);
$mpdf->WriteHTML($html29);
$mpdf->WriteHTML($html30);
$mpdf->WriteHTML($html31);
$mpdf->WriteHTML($html32);
$mpdf->WriteHTML($html33);
$mpdf->WriteHTML($html34);
$mpdf->WriteHTML($html35);


$mpdf->Output();
// $mpdf->Output('สก_01.pdf', 'D');


