<?php
session_start();
// RESULT SELECTED IN QUESTION //

$s3q6 = $_POST['s3q6'];
$_SESSION['s3q6'] = $s3q6;
// END OF RESULT IMPORT //

// MYSQL CONNECTION //

include('RDconnect.php');

// SAVE QUIZ DATA


$reponse = $bdd->prepare('insert into S3_q6 (s3q6,user,date) values(:s3q6,:user,CURRENT_TIMESTAMP)');



$user = $_COOKIE['user'];





$reponse->execute(array(
	's3q6' => $s3q6,
	'user' =>$user,
	));





// END OF MYSQL CONNECTION //




setcookie('progress', 'S3_q7.php', time() + 365*24*3600);
header('Location: questions.php');





