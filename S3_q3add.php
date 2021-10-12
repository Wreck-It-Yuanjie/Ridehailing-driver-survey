<?php

// RESULT SELECTED IN QUESTION //

$s3q3 = $_POST['s3q3'];


// END OF RESULT IMPORT //

// MYSQL CONNECTION //

session_start();

$_SESSION['s3q3'] = $s3q3;

include('RDconnect.php');

// SAVE QUIZ DATA


$reponse = $bdd->prepare('insert into S3_q3 (s3q3,user,date) values(:s3q3,:user,CURRENT_TIMESTAMP)');



$user = $_COOKIE['user'];





$reponse->execute(array(
	's3q3' => $s3q3,
	'user' =>$user,
	));





// END OF MYSQL CONNECTION //

setcookie('progress', 'S3_q4.php', time() + 365*24*3600);
header('Location: questions.php');





