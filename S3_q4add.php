<?php
session_start();
// RESULT SELECTED IN QUESTION //

$s3q4 = $_POST['s3q4'];
$_SESSION['s3q4'] = $s3q4;
// END OF RESULT IMPORT //

// MYSQL CONNECTION //

include('RDconnect.php');

// SAVE QUIZ DATA


$reponse = $bdd->prepare('insert into S3_q4 (s3q4,user,date) values(:s3q4,:user,CURRENT_TIMESTAMP)');



$user = $_COOKIE['user'];





$reponse->execute(array(
	's3q4' => $s3q4,
	'user' =>$user,
	));





// END OF MYSQL CONNECTION //




setcookie('progress', 'S3_q5.php', time() + 365*24*3600);
header('Location: questions.php');





