<?php
session_start();
// RESULT SELECTED IN QUESTION //

$s3q11 = $_POST['s3q11'];
$_SESSION['s3q11'] = $s3q11;
// END OF RESULT IMPORT //

// MYSQL CONNECTION //

include('RDconnect.php');

// SAVE QUIZ DATA


$reponse = $bdd->prepare('insert into S3_q11 (s3q11,user,date) values(:s3q11,:user,CURRENT_TIMESTAMP)');



$user = $_COOKIE['user'];





$reponse->execute(array(
	's3q11' => $s3q11,
	'user' =>$user,
	));





// END OF MYSQL CONNECTION //




setcookie('progress', 'S3_q12.php', time() + 365*24*3600);
header('Location: questions.php');





