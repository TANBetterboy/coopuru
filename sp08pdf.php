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

	$stmt1 = $db->query("SELECT * FROM sp08 WHERE user_id = $id");
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

$pagecount = $mpdf->setSourceFile('pdf/sp08.pdf');
$tplId = $mpdf->importPage($pagecount);
$mpdf->useTemplate($tplId);

$html = '<div style="position:absolute;top:240px;left:190px">'.$row['fullname'].'</div>';
$html1 = '<div style="position:absolute;top:270px;left:160px">'.$row['studentid'].'</div>';
$html3 = '<div style="position:absolute;top:270px;left:380px">'.$row['faculty'].'</div>';
$html4 = '<div style="position:absolute;top:298px;left:160px">'.$row['branch'].'</div>';
$html5 = '<div style="position:absolute;top:355px;left:190px">'.$row['preschoolyear'].'</div>';
$html6 = '<div style="position:absolute;top:355px;left:380px">'.$row['schoolyear'].'</div>';

$html7 = '<div style="position:absolute;top:325px;left:290px">'.$row2['name0'].'</div>';



$html8 = '<div style="position:absolute;top:510px;left:120px">'.$row1['title1'].'</div>';
$html9 = '<div style="position:absolute;top:540px;left:120px">'.$row1['title2'].'</div>';
$html10 = '<div style="position:absolute;top:570px;left:120px">'.$row1['title3'].'</div>';
$html11 = '<div style="position:absolute;top:598px;left:120px">'.$row1['title4'].'</div>';
$html12 = '<div style="position:absolute;top:627px;left:120px">'.$row1['title5'].'</div>';
$html13 = '<div style="position:absolute;top:653px;left:120px">'.$row1['title6'].'</div>';
$html14 = '<div style="position:absolute;top:680px;left:120px">'.$row1['title7'].'</div>';
$html15 = '<div style="position:absolute;top:710px;left:120px">'.$row1['title8'].'</div>';
$html16 = '<div style="position:absolute;top:740px;left:120px">'.$row1['title9'].'</div>';
$html17 = '<div style="position:absolute;top:770px;left:120px">'.$row1['title10'].'</div>';
$html18 = '<div style="position:absolute;top:800px;left:120px">'.$row1['title11'].'</div>';
$html19 = '<div style="position:absolute;top:828px;left:120px">'.$row1['title12'].'</div>';

$html20 = '<div style="position:absolute;top:510px;left:440px;width:350px;">'.$row1['date1'].'</div>';
$html21 = '<div style="position:absolute;top:540px;left:440px;width:350px;">'.$row1['date2'].'</div>';
$html22 = '<div style="position:absolute;top:570px;left:440px;width:350px;">'.$row1['date3'].'</div>';
$html23 = '<div style="position:absolute;top:598px;left:440px;width:350px;">'.$row1['date4'].'</div>';
$html24 = '<div style="position:absolute;top:627px;left:440px;width:350px;">'.$row1['date5'].'</div>';
$html25 = '<div style="position:absolute;top:653px;left:440px;width:350px;">'.$row1['date6'].'</div>';
$html26 = '<div style="position:absolute;top:680px;left:440px;width:350px;">'.$row1['date7'].'</div>';
$html27 = '<div style="position:absolute;top:710px;left:440px;width:350px;">'.$row1['date8'].'</div>';
$html28 = '<div style="position:absolute;top:740px;left:440px;width:350px;">'.$row1['date9'].'</div>';
$html29 = '<div style="position:absolute;top:770px;left:440px;width:350px;">'.$row1['date10'].'</div>';
$html30 = '<div style="position:absolute;top:800px;left:440px;width:350px;">'.$row1['date11'].'</div>';
$html31 = '<div style="position:absolute;top:828px;left:440px;width:350px;">'.$row1['date12'].'</div>';

$mpdf->WriteHTML($html);
$mpdf->WriteHTML($html1);
// $mpdf->WriteHTML($html2);
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

$mpdf->Output();
// $mpdf->Output('สก_01.pdf', 'D');


