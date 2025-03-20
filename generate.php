<?php
use Classes\GeneratePDF;
session_start(); 
include('db_config.php');

require_once 'vendor/autoload.php';
$signature=$_POST['signature'];
$exp=$_POST['exp'];

$fName=$_POST['fName'];//
$lName=$_POST['lName'];//
$DOB=$_POST['DOB'];//
$bName=$_POST['bName'];//
$POB=$_POST['POB'];//
$Nationality=$_POST['Nationality'];//
$ecolor=$_POST['ecolor'];//
$bsize=$_POST['bsize'];//

$gender=$_POST['gender'];//redio buttom values: male,female,else 1 . values in pdf respectivly: Check13, Check14, Check15

$Address=$_POST['Address'];//

$lifeState=$_POST['lifeState'];//select tag, values: verheiratet, geschieden, ledig, sonstiges 2 . values in pdf respectivly: Check4, Check5, Check6, Check7, Check8


$Ersteinreise=$_POST['Ersteinreise'];//select tag, values: ohne, schengener, nationalem, gultigen 3 . values in pdf respectivly: Check9,Check10,Check11,Check12

$DOE=$_POST['DOE'];//
$EhegattefName=$_POST['EhegattefName'];//
$EhegattelName=$_POST['EhegattelName'];//
$regionCountry=$_POST['EhegatteDOB'];//
$EhegatteBName=$_POST['EhegatteBName'];//
$EhegattePOB=$_POST['EhegattePOB'];//
$EhegatteNationality=$_POST['EhegatteNationality'];//
$eye_color=$_POST['eye_color'];//
$BS=$_POST['BS'];//
$EhegatteAddress=$_POST['EhegatteAddress'];//

$residential=$_POST['residential'];//select tag, values: aufenthaltserlaubnis, niederlassungserlaubnis, aufenthaltskarte, laufenendes, duldung 4.values in pdf respectivly: Check16,Check17,Check18,Check19,Check20

$Beabsichtigte=$_POST['Beabsichtigte'];//

$violating=$_POST['violating'];//redio buttom, values: ja , nein 5.values in pdf respectivly: Check21,Check22

$Federal=$_POST['Federal'];//redio buttom, values: Federal , abroad 6.values in pdf respectivly: Check23,Check24

$Reason=$_POST['Reason'];//
$penaltyAmount=$_POST['penaltyAmount'];//

$investigation=$_POST['investigation'];//redio buttom, values: ja , nein 7.values in pdf respectivly: Check25,Check26

$FederalReb=$_POST['FederalReb'];//redio buttom, values: Republic , abroad 8.values in pdf respectivly: Check27,Check28

$investigationReason=$_POST['investigationReason'];//
$authority=$_POST['authority'];//
$livelihoods=$_POST['livelihoods'];//

$publicbenefits=$_POST['publicbenefits'];//select tag, values: SGBII, SGB, AsylbLG, Wohngeld, KEINE 9.values in pdf respectivly: Check29,Check30,Check31,Check32,Check33

$school=$_POST['school'];//select tag, values: Grundschule, Oberschule, Ausbildung 10.values in pdf respectivly: Check34,Check35,Check36

$alsauthority=$_POST['alsauthority'];//

$Sprachkursniveau=$_POST['Sprachkursniveau'];//select tag, values: A1, A2, B1, B2 C1, C2 11.values in pdf respectivly: Check37,Check38,Check39,Check40,Check41,Check42

$Schulabschlusses=$_POST['Schulabschlusses'];//
$Studienabschlusses=$_POST['Studienabschlusses'];//
$rationskurs=$_POST['rationskurs'];//redio buttom, values: ja , nein 12.values in pdf respectivly: Check43,Check44
$rationskurs=$_POST['rationskurserfol'];//redio buttom, values: ja , nein 13.values in pdf respectivly: Check45,Check46
$diseasecmnt=$_POST['diseasecmnt'];//

$data=[
    'field1' => $lName,
    'field2' => $fName,
    'field3' => $bName,
    'field4' => $POB,
    'field5' => $Nationality,
    'field6' => $ecolor,
    'field71' => $Address,
    'field12' => $EhegattelName,
    'field13' => $EhegattefName,
    'field14' => $EhegatteBName,
    'field18' => $EhegattePOB,
    'field19' => $EhegatteNationality,
    'field20' => $EhegatteAddress,
    'field21' => $Beabsichtigte,
    'field22' => $Reason,
    'field23' => $penaltyAmount,
    'field24' => $investigationReason,
    'field25' => $authority,
    'field26' => $livelihoods,
    'Text-DITSVI8wmT' => $alsauthority,
    'field27' => $Schulabschlusses,
    'field28' => $Studienabschlusses,
    'field29' => $Studienabschlusses,
    'field30' => $_SESSION['email'],
    'field31' => $_SESSION['phoneNumber'],
    'field32' => $diseasecmnt,

   

];
$name=$fName.' '.$lName;
$sig=$Address.' ,'.$signature;
$data2=[
    'f1' => $name,
    'f2' => $DOB,
    'f3' => $lifeState,
    'f4' => $Address,
    'f7' => $exp,
    'f5' => $sig,
];


$pdfGenerator = new GeneratePDF();
$clientID = $_SESSION['clientID'];
$FN = $_SESSION['FN'];
$LN = $_SESSION['LN'];
$subDate = date('Y-m-d'); // current date
$filename = $pdfGenerator->generate($data, $FN, $LN, $clientID);



$pdfGenerator = new GeneratePDF();
$volpath = $pdfGenerator->generatevolmacht($data2, $FN, $LN, $clientID);

$status="paused";
$paid="not paid";
$sql = "INSERT INTO `appllications`(`applicationPath`, `vollmachtPath`, `serviceName`, `clientID`, `status`, `paid`, `submitionDate`) VALUES (?, ?,?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sssssss", $filename, $volpath, $_SESSION['application'], $clientID, $status, $paid, $subDate);
$stmt->execute();


?>
