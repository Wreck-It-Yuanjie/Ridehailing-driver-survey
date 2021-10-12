<?php
session_start();
// RESULT SELECTED IN QUESTION //

$q2 = $_POST['q2'];

$_SESSION['q2'] = $q2;
// END OF RESULT IMPORT //

// MYSQL CONNECTION //

include('RDconnect.php');

// SAVE QUIZ DATA


$reponse = $bdd->prepare('insert into S1_q1 (s1q1,user,date) values(:s1q1,:user,CURRENT_TIMESTAMP)');



$user = $_COOKIE['user'];





$reponse->execute(array(
	's1q1' => $q2,
	'user' => $user,
	));





// END OF MYSQL CONNECTION //




#setcookie('progress', 'q3.php', time() + 365*24*3600);
#header('Location: questions.php');

if(empty($q2)){
	setcookie('progress', 'S1_q1.php', time() + 365*24*3600);
	header('Location: questions.php');
	}else{
	setcookie('progress', 'S3_q8.php', time() + 365*24*3600);
	header('Location: questions.php');
	}



