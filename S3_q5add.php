<?php
session_start();
// RESULT SELECTED IN QUESTION //

$s3q5 = $_POST['s3q5'];
$_SESSION['s3q5'] = $s3q5;
// END OF RESULT IMPORT //

// MYSQL CONNECTION //

include('RDconnect.php');

// SAVE QUIZ DATA


$reponse = $bdd->prepare('insert into S3_q5 (s3q5,user,date) values(:s3q5,:user,CURRENT_TIMESTAMP)');



$user = $_COOKIE['user'];





$reponse->execute(array(
	's3q5' => $s3q5,
	'user' =>$user,
	));





// END OF MYSQL CONNECTION //




setcookie('progress', 'S3_q6.php', time() + 365*24*3600);
header('Location: questions.php');





