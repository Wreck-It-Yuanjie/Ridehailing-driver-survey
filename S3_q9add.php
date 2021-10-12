<?php
session_start();
// RESULT SELECTED IN QUESTION //

$s3q9 = $_POST['s3q9'];
$_SESSION['s3q9'] = $s3q9;
// END OF RESULT IMPORT //

// MYSQL CONNECTION //

include('RDconnect.php');

// SAVE QUIZ DATA


$reponse = $bdd->prepare('insert into S3_q9 (s3q9,user,date) values(:s3q9,:user,CURRENT_TIMESTAMP)');



$user = $_COOKIE['user'];





$reponse->execute(array(
	's3q9' => $s3q9,
	'user' =>$user,
	));





// END OF MYSQL CONNECTION //




setcookie('progress', 'S3_q10.php', time() + 365*24*3600);
header('Location: questions.php');





