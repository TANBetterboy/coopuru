<?php
session_start();
require_once('connection.php');
if (!isset($_SESSION['user_login'])) {
	$_SESSION['error'] = 'กรุณาเข้าสู่ระบบ!';
	header('location: signin.php');
}

if (isset($_SESSION['user_login'])) {
	$user_id = $_SESSION['user_login'];
	$stmt = $db->query("SELECT * FROM users WHERE id = $user_id");
	$stmt->execute();
	$row = $stmt->fetch(PDO::FETCH_ASSOC);
	
	$stmt1 = $db->query("SELECT * FROM sp03 WHERE user_id = $user_id");
    $stmt1->execute();
    $row1 = $stmt1->fetch(PDO::FETCH_ASSOC);

    $stmt2 = $db->query("SELECT * FROM sp031 WHERE user_id = $user_id");
    $stmt2->execute();
    $row2 = $stmt2->fetch(PDO::FETCH_ASSOC);

    $stmt3 = $db->query("SELECT * FROM enterprise WHERE user_id = $user_id");
    $stmt3->execute();
    $row3 = $stmt3->fetch(PDO::FETCH_ASSOC);

    $stmt4 = $db->query("SELECT * FROM sp03e WHERE user_id = $user_id");
    $stmt4->execute();
    $row4 = $stmt4->fetch(PDO::FETCH_ASSOC);

    $stmt5 = $db->query("SELECT * FROM sp03l WHERE user_id = $user_id");
    $stmt5->execute();
    $row5 = $stmt5->fetch(PDO::FETCH_ASSOC);
}
// Require composer autoload
require_once __DIR__ . '/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf([
	'default_font_size' => 14,
	'default_font' => 'sarabun'
]);


// Add First page
$mpdf->AddPage();
$pagecount = $mpdf->setSourceFile('pdf/sp03.pdf');
$tplId = $mpdf->importPage($pagecount);
$mpdf->useTemplate($tplId);

$html01 = '<div style="position:absolute;top:260px;left:220px;width:425px;">'.$row3['name0'].'</div>';
$html02 = '<div style="position:absolute;top:285px;left:255px;width:450px;">'.$row3['address0'].'</div>';
$html03 = '<div style="position:absolute;top:340px;left:350px">'.$row3['work'].'</div>';
$html04 = '<div style="position:absolute;top:340px;left:550px">'.$row3['workuntil'].'</div>';


$html = '<div style="position:absolute;top:405px;left:255px">'.$row['fullname'].'</div>';
$html1 = '<div style="position:absolute;top:430px;left:255px">'.$row['fullnameeng'].'</div>';
$html2 = '<div style="position:absolute;top:455px;left:260px">'.$row['studentid'].'</div>';
$html3 = '<div style="position:absolute;top:455px;left:495px;width:250px;">'.$row['course'].'</div>';
$html4 = '<div style="position:absolute;top:485px;left:180px">'.$row['branch'].'</div>';
$html5 = '<div style="position:absolute;top:485px;left:475px">'.$row['faculty'].'</div>';
$html6 = '<div style="position:absolute;top:512px;left:220px">'.$row['yearclass'].'</div>';
$html7 = '<div style="position:absolute;top:512px;left:390px">'.$row['teacher'].'</div>';
$html8 = '<div style="position:absolute;top:542px;left:475px">'.$row['gpa'].'</div>';
$html9 = '<div style="position:absolute;top:572px;left:390px">'.$row['gpax'].'</div>';


// $html10 = '<div style="position:absolute;top:528px;left:190px">'.$row1['cardno'].'</div>';
$html11 = '<div style="position:absolute;top:625px;left:170px">'.$row1['at0'].'</div>';
$html12 = '<div style="position:absolute;top:625px;left:430px">'.$row1['date0'].'</div>';
$html13 = '<div style="position:absolute;top:625px;left:590px;width:150px;">'.$row1['race'].'</div>';
$html14 = '<div style="position:absolute;top:655px;left:170px;width:150px;">'.$row1['nation'].'</div>';
$html15 = '<div style="position:absolute;top:655px;left:340px">'.$row1['religion'].'</div>';
$html16 = '<div style="position:absolute;top:655px;left:550px">'.$row1['birth'].'</div>';
$html17 = '<div style="position:absolute;top:683px;left:110px;width:50px;">'.$row1['age'].'</div>';
$html18 = '<div style="position:absolute;top:683px;left:240px">'.$row1['gender'].'</div>';
$html19 = '<div style="position:absolute;top:683px;left:410px;width:50px;">'.$row1['height'].'</div>';
$html20 = '<div style="position:absolute;top:683px;left:590px;width:50px;">'.$row1['weight0'].'</div>';
$html21 = '<div style="position:absolute;top:710px;left:330px">'.$row1['disease'].'</div>';
$html22 = '<div style="position:absolute;top:740px;left:300px;width:350px;">'.$row1['address00'].'</div>';
$html23 = '<div style="position:absolute;top:790px;left:185px">'.$row1['phone'].'</div>';
$html24 = '<div style="position:absolute;top:790px;left:430px">'.$row1['mphone'].'</div>';
$html25 = '<div style="position:absolute;top:790px;left:590px">'.$row1['fax'].'</div>';
$html26 = '<div style="position:absolute;top:818px;left:230px">'.$row1['email'].'</div>';

$html27 = '<div style="position:absolute;top:890px;left:430px">'.$row2['name1'].'</div>';
$html28 = '<div style="position:absolute;top:920px;left:160px">'.$row2['job1'].'</div>';
$html29 = '<div style="position:absolute;top:920px;left:430px">'.$row2['placework1'].'</div>';
$html30 = '<div style="position:absolute;top:950px;left:150px">'.$row2['address1'].'</div>';
$html31 = '<div style="position:absolute;top:980px;left:190px">'.$row2['phone1'].'</div>';
$html32 = '<div style="position:absolute;top:980px;left:490px">'.$row2['mphone1'].'</div>';
$html33 = '<div style="position:absolute;top:1005px;left:170px">'.$row2['fax1'].'</div>';
$html34 = '<div style="position:absolute;top:1005px;left:460px">'.$row2['email1'].'</div>';

$html00 = 'upload/user/'.$row['image'].'';


$mpdf->WriteHTML($html01);
$mpdf->WriteHTML($html02);
$mpdf->WriteHTML($html03);
$mpdf->WriteHTML($html04);


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

// $mpdf->WriteHTML($html10);
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

$mpdf->Image($html00, 169.4, 28, 24.3, 26.5, 'jpg,png', '', true, false);
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

$mpdf->AddPage();
$pagecount = $mpdf->setSourceFile('pdf/sp03_1.pdf');
$tplId = $mpdf->importPage($pagecount);
$mpdf->useTemplate($tplId);

$html35 = '<div style="position:absolute;top:115px;left:110px">'.$row2['name2'].'</div>';
$html36 = '<div style="position:absolute;top:170px;left:115px">'.$row2['name3'].'</div>';
$html37 = '<div style="position:absolute;top:115px;left:400px;width:350px;">'.$row2['age2'].'</div>';
$html38 = '<div style="position:absolute;top:170px;left:410px;width:350px;">'.$row2['age3'].'</div>';
$html39 = '<div style="position:absolute;top:115px;left:500px">'.$row2['job2'].'</div>';
$html40 = '<div style="position:absolute;top:170px;left:510px">'.$row2['job3'].'</div>';
$html41 = '<div style="position:absolute;top:140px;left:100px">'.$row2['address2'].'</div>';
$html42 = '<div style="position:absolute;top:200px;left:100px">'.$row2['address3'].'</div>';
$html43 = '<div style="position:absolute;top:140px;left:580px">'.$row2['phone2'].'</div>';
$html44 = '<div style="position:absolute;top:200px;left:580px">'.$row2['phone3'].'</div>';
$html45 = '<div style="position:absolute;top:228px;left:220px">'.$row2['norelative'].'</div>';
$html46 = '<div style="position:absolute;top:228px;left:430px">'.$row2['noyou'].'</div>';
$html47 = '<div style="position:absolute;top:280px;left:80px">'.$row2['name4'].'</div>';
$html48 = '<div style="position:absolute;top:310px;left:80px">'.$row2['name5'].'</div>';
$html49 = '<div style="position:absolute;top:340px;left:80px">'.$row2['name6'].'</div>';

$html50 = '<div style="position:absolute;top:453px;left:180px;width:150px;">'.$row4['school1'].'</div>';
$html51 = '<div style="position:absolute;top:480px;left:180px;width:150px;">'.$row4['school2'].'</div>';
$html52 = '<div style="position:absolute;top:505px;left:180px;width:150px;">'.$row4['school3'].'</div>';
$html53 = '<div style="position:absolute;top:530px;left:180px;width:150px;">'.$row4['school4'].'</div>';
$html54 = '<div style="position:absolute;top:555px;left:180px;width:150px;">'.$row4['school5'].'</div>';
$html55 = '<div style="position:absolute;top:453px;left:330px;width:150px;">'.$row4['year_att1'].'</div>';
$html56 = '<div style="position:absolute;top:480px;left:330px;width:150px;">'.$row4['year_att2'].'</div>';
$html57 = '<div style="position:absolute;top:505px;left:330px;width:150px;">'.$row4['year_att3'].'</div>';
$html58 = '<div style="position:absolute;top:530px;left:330px;width:150px;">'.$row4['year_att4'].'</div>';
$html59 = '<div style="position:absolute;top:555px;left:330px;width:150px;">'.$row4['year_att5'].'</div>';
$html60 = '<div style="position:absolute;top:453px;left:430px;width:150px;">'.$row4['year_grad1'].'</div>';
$html61 = '<div style="position:absolute;top:480px;left:430px;width:150px;">'.$row4['year_grad2'].'</div>';
$html62 = '<div style="position:absolute;top:505px;left:430px;width:150px;">'.$row4['year_grad3'].'</div>';
$html63 = '<div style="position:absolute;top:530px;left:430px;width:150px;">'.$row4['year_grad4'].'</div>';
$html64 = '<div style="position:absolute;top:555px;left:430px;width:150px;">'.$row4['year_grad5'].'</div>';
$html65 = '<div style="position:absolute;top:453px;left:530px">'.$row4['certificate1'].'</div>';
$html66 = '<div style="position:absolute;top:480px;left:530px">'.$row4['certificate2'].'</div>';
$html67 = '<div style="position:absolute;top:505px;left:530px">'.$row4['certificate3'].'</div>';
$html68 = '<div style="position:absolute;top:530px;left:530px">'.$row4['certificate4'].'</div>';
$html69 = '<div style="position:absolute;top:555px;left:530px">'.$row4['certificate5'].'</div>';
$html70 = '<div style="position:absolute;top:453px;left:640px;width:150px;">'.$row4['major1'].'</div>';
$html71 = '<div style="position:absolute;top:480px;left:640px;width:150px;">'.$row4['major2'].'</div>';
$html72 = '<div style="position:absolute;top:505px;left:640px;width:150px;">'.$row4['major3'].'</div>';
$html73 = '<div style="position:absolute;top:530px;left:640px;width:150px;">'.$row4['major4'].'</div>';
$html74 = '<div style="position:absolute;top:555px;left:640px;width:150px;">'.$row4['major5'].'</div>';

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
$mpdf->WriteHTML($html46);
$mpdf->WriteHTML($html47);
$mpdf->WriteHTML($html48);
$mpdf->WriteHTML($html49);
$mpdf->WriteHTML($html50);
$mpdf->WriteHTML($html51);
$mpdf->WriteHTML($html52);
$mpdf->WriteHTML($html53);
$mpdf->WriteHTML($html54);
$mpdf->WriteHTML($html55);
$mpdf->WriteHTML($html56);
$mpdf->WriteHTML($html57);
$mpdf->WriteHTML($html58);
$mpdf->WriteHTML($html59);
$mpdf->WriteHTML($html60);
$mpdf->WriteHTML($html61);
$mpdf->WriteHTML($html62);
$mpdf->WriteHTML($html63);
$mpdf->WriteHTML($html64);
$mpdf->WriteHTML($html65);
$mpdf->WriteHTML($html66);
$mpdf->WriteHTML($html67);
$mpdf->WriteHTML($html68);
$mpdf->WriteHTML($html69);
$mpdf->WriteHTML($html70);
$mpdf->WriteHTML($html71);
$mpdf->WriteHTML($html72);
$mpdf->WriteHTML($html73);
$mpdf->WriteHTML($html74);

$mpdf->Output();
// $mpdf->Output('สก_01.pdf', 'D');


