<?php
session_start();
// RESULT SELECTED IN QUESTION //

$s3q10_1 = $_POST['s3q10_1'];
$_SESSION['s3q10_1'] = $s3q10_1;

$s3q10_2 = $_POST['s3q10_2'];
$_SESSION['s3q10_2'] = $s3q10_2;

// END OF RESULT IMPORT //

// MYSQL CONNECTION //

include('RDconnect.php');

// SAVE QUIZ DATA


$reponse = $bdd->prepare('insert into S3_q10 (s3q10_1, s3q10_2, user,date) values(:s3q10_1, :s3q10_2, :user,CURRENT_TIMESTAMP)');



$user = $_COOKIE['user'];





$reponse->execute(array(
	's3q10_1' => $s3q10_1,
	's3q10_2' => $s3q10_2,
	'user' =>$user,
	));





// END OF MYSQL CONNECTION //




setcookie('progress', 'S3_q11.php', time() + 365*24*3600);
header('Location: questions.php');




