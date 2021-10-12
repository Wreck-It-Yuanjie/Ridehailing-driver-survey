<?php
session_start();
include('RDconnect.php');

$s3q1 = $_POST['s3q1'];
$_SESSION['s3q1'] = $s3q1;

echo $s3q1;


// END OF RESULT IMPORT //

// MYSQL CONNECTION //

// SAVE QUIZ DATA


$reponse = $bdd->prepare('insert into S3_q1 (user,date,s3q1) values(:user,CURRENT_TIMESTAMP,:s3q1)');



$user = $_COOKIE['user'];





$reponse->execute(array(
	's3q1' =>$s3q1,
	'user' =>$user,
	));





// END OF MYSQL CONNECTION //

setcookie('progress', 'S3_q2.php', time() + 365*24*3600);
header('Location: questions.php');





