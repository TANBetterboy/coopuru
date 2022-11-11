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
	
	$stmt1 = $db->query("SELECT * FROM sp07 WHERE user_id = $id");
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


// Add First page
$mpdf->AddPage();
$pagecount = $mpdf->setSourceFile('pdf/sp07.pdf');
$tplId = $mpdf->importPage($pagecount);
$mpdf->useTemplate($tplId);


$html = '<div style="position:absolute;top:293px;left:240px">'.$row2['name0'].'</div>';
$html1 = '<div style="position:absolute;top:317px;left:250px">'.$row2['nameeng0'].'</div>';
$html2 = '<div style="position:absolute;top:340px;left:90px;width:50px;">'.$row2['housenumber0'].'</div>';
$html3 = '<div style="position:absolute;top:340px;left:160px;width:50px;">'.$row2['alley0'].'</div>';
$html4 = '<div style="position:absolute;top:340px;left:290px;width:50px;">'.$row2['road0'].'</div>';
$html5 = '<div style="position:absolute;top:340px;left:450px;width:50px;">'.$row2['subdistrict0'].'</div>';
$html6 = '<div style="position:absolute;top:340px;left:620px">'.$row2['district0'].'</div>';
$html7 = '<div style="position:absolute;top:365px;left:100px">'.$row2['province0'].'</div>';
$html8 = '<div style="position:absolute;top:365px;left:260px">'.$row2['postalcode0'].'</div>';
$html9 = '<div style="position:absolute;top:365px;left:370px">'.$row2['phone0'].'</div>';
$html10 = '<div style="position:absolute;top:365px;left:510px">'.$row2['fax0'].'</div>';
$html11 = '<div style="position:absolute;top:365px;left:610px">'.$row2['email0'].'</div>';

$html12 = '<div style="position:absolute;top:445px;left:220px">'.$row1['name1'].'</div>';
$html13 = '<div style="position:absolute;top:445px;left:570px">'.$row1['rank1'].'</div>';
$html14 = '<div style="position:absolute;top:470px;left:110px;width:100px;">'.$row1['phone1'].'</div>';
$html15 = '<div style="position:absolute;top:470px;left:320px">'.$row1['fax1'].'</div>';
$html16 = '<div style="position:absolute;top:470px;left:480px">'.$row1['email1'].'</div>';

$html17 = '<div style="position:absolute;top:540px;left:180px">'.$row1['name2'].'</div>';
$html18 = '<div style="position:absolute;top:565px;left:180px">'.$row1['rank2'].'</div>';
$html19 = '<div style="position:absolute;top:565px;left:490px">'.$row1['department2'].'</div>';
$html20 = '<div style="position:absolute;top:590px;left:160px;width:100px;">'.$row1['phone2'].'</div>';
$html21 = '<div style="position:absolute;top:590px;left:330px;width:100px;">'.$row1['fax2'].'</div>';
$html22 = '<div style="position:absolute;top:590px;left:490px">'.$row1['email2'].'</div>';

$html23 = '<div style="position:absolute;top:665px;left:180px;width:200px;">'.$row1['name3'].'</div>';
$html24 = '<div style="position:absolute;top:690px;left:180px">'.$row1['rank3'].'</div>';
$html25 = '<div style="position:absolute;top:690px;left:430px">'.$row1['department3'].'</div>';
$html26 = '<div style="position:absolute;top:715px;left:160px;width:100px;">'.$row1['phone3'].'</div>';
$html27 = '<div style="position:absolute;top:715px;left:370px;width:100px;">'.$row1['fax3'].'</div>';
$html28 = '<div style="position:absolute;top:715px;left:550px">'.$row1['email3'].'</div>';



$html29 = '<div style="position:absolute;top:787px;left:180px">'.$row['fullname'].'</div>';
$html30 = '<div style="position:absolute;top:810px;left:180px">'.$row['studentid'].'</div>';
$html31 = '<div style="position:absolute;top:810px;left:450px">'.$row['faculty'].'</div>';
$html32 = '<div style="position:absolute;top:835px;left:200px">'.$row['branch'].'</div>';
$html33 = '<div style="position:absolute;top:858px;left:350px">'.$row1['jobposition4'].'</div>';
$html34 = '<div style="position:absolute;top:885px;left:360px">'.$row1['jobdescription4'].'</div>';

$html35 = '<div style="position:absolute;top:955px;left:180px">'.$row1['name5'].'</div>';
$html36 = '<div style="position:absolute;top:983px;left:150px">'.$row1['housenumber5'].'</div>';
$html37 = '<div style="position:absolute;top:983px;left:250px">'.$row1['alley5'].'</div>';
$html38 = '<div style="position:absolute;top:983px;left:420px">'.$row1['road5'].'</div>';
$html39 = '<div style="position:absolute;top:983px;left:600px">'.$row1['subdistrict5'].'</div>';
$html40 = '<div style="position:absolute;top:1005px;left:180px">'.$row1['district5'].'</div>';
$html41 = '<div style="position:absolute;top:1005px;left:330px">'.$row1['province5'].'</div>';
$html42 = '<div style="position:absolute;top:1005px;left:580px">'.$row1['postalcode5'].'</div>';
$html43 = '<div style="position:absolute;top:1031px;left:180px;width:100px;">'.$row1['phone5'].'</div>';
$html44 = '<div style="position:absolute;top:1031px;left:350px;width:100px;">'.$row1['fax5'].'</div>';
$html45 = '<div style="position:absolute;top:1031px;left:530px">'.$row1['email5'].'</div>';

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
$mpdf->WriteHTML($html34);
$mpdf->WriteHTML($html35);
$mpdf->WriteHTML($html36);
$mpdf->WriteHTML($html37);
$mpdf->WriteHTML($html38);
$mpdf->WriteHTML($html39);
$mpdf->WriteHTML($html40);
$mpdf->WriteHTML($html41);
$mpdf->WriteHTML($html42);
$mpdf->WriteHTML($html43);
$mpdf->WriteHTML($html44);
$mpdf->WriteHTML($html45);
$mpdf->AddPage();
$pagecount = $mpdf->setSourceFile('pdf/sp07_1.pdf');
$tplId = $mpdf->importPage($pagecount);
$mpdf->useTemplate($tplId);


$html11 = 'upload/map/'.$row1['image'].'';
$mpdf->Image($html11, 22.7, 57.7, 162, 102.5, 'jpg', '', true, false);

$mpdf->Output();
// $mpdf->Output('สก_01.pdf', 'D');


