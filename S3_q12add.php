<?php
session_start();
// RESULT SELECTED IN QUESTION //

$s3q12 = $_POST['s3q12'];
$_SESSION['s3q12'] = $s3q12;
// END OF RESULT IMPORT //

// MYSQL CONNECTION //

include('RDconnect.php');

// SAVE QUIZ DATA


$reponse = $bdd->prepare('insert into S3_q12 (s3q12,user,date) values(:s3q12,:user,CURRENT_TIMESTAMP)');



$user = $_COOKIE['user'];





$reponse->execute(array(
	's3q12' => $s3q12,
	'user' =>$user,
	));





// END OF MYSQL CONNECTION //




setcookie('progress', 'S3_q13.php', time() + 365*24*3600);
header('Location: questions.php');





