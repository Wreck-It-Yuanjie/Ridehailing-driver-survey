<?php
session_start();
// RESULT SELECTED IN QUESTION //

$s3q7 = $_POST['s3q7'];
$_SESSION['s3q7'] = $s3q7;
// END OF RESULT IMPORT //

// MYSQL CONNECTION //

include('RDconnect.php');

// SAVE QUIZ DATA


$reponse = $bdd->prepare('insert into S3_q7 (s3q7,user,date) values(:s3q7,:user,CURRENT_TIMESTAMP)');



$user = $_COOKIE['user'];





$reponse->execute(array(
	's3q7' => $s3q7,
	'user' =>$user,
	));





// END OF MYSQL CONNECTION //




setcookie('progress', 'S3_q9.php', time() + 365*24*3600);
header('Location: questions.php');





