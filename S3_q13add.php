<?php
session_start();
// RESULT SELECTED IN QUESTION //

$s3q13 = $_POST['s3q13'];
$_SESSION['s3q13'] = $s3q13;
// END OF RESULT IMPORT //

// MYSQL CONNECTION //

include('RDconnect.php');

// SAVE QUIZ DATA


$reponse = $bdd->prepare('insert into S3_q13 (s3q13,user,date) values(:s3q13,:user,CURRENT_TIMESTAMP)');



$user = $_COOKIE['user'];





$reponse->execute(array(
	's3q13' => $s3q13,
	'user' =>$user,
	));





// END OF MYSQL CONNECTION //




setcookie('progress', 'S2_RESP_q1.php', time() + 365*24*3600);
header('Location: questions.php');





