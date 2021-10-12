<?php
session_start();
// RESULT SELECTED IN QUESTION //

$s3q8 = $_POST['s3q8'];
$s3q8_Anotherspecify = $_POST['s3q8_Anotherspecify'];

$_SESSION['s3q8'] = $s3q8;
$_SESSION['s3q8_Anotherspecify'] = $s3q8_Anotherspecify;

if( empty($s3q8_Anotherspecify)){
	$s3q8_Anotherspecify = "";
}

// END OF RESULT IMPORT //

// MYSQL CONNECTION //

include('RDconnect.php');

// SAVE QUIZ DATA


$reponse = $bdd->prepare('insert into S3_q8 (s3q8,s3q8_Anotherspecify,user,date) values(:s3q8,:s3q8_Anotherspecify,:user,CURRENT_TIMESTAMP)');



$user = $_COOKIE['user'];





$reponse->execute(array(
	's3q8' => $s3q8,
	's3q8_Anotherspecify' => $s3q8_Anotherspecify,
	'user' =>$user,
	));





// END OF MYSQL CONNECTION //




setcookie('progress', 'S1_q2.php', time() + 365*24*3600);
header('Location: questions.php');





