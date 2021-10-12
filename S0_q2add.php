<?php
session_start();
// RESULT SELECTED IN QUESTION //

$s0q2 = $_POST['s0q2'];
$_SESSION['s0q2'] = $s0q2;
// END OF RESULT IMPORT //

// MYSQL CONNECTION //

include('RDconnect.php');

// SAVE QUIZ DATA


$reponse = $bdd->prepare('insert into S0_q2 (s0q2,user,date) values(:s0q2,:user,CURRENT_TIMESTAMP)');



$user = $_COOKIE['user'];





$reponse->execute(array(
	's0q2' => $s0q2,
	'user' =>$user,
	));





// END OF MYSQL CONNECTION //




setcookie('progress', 'S0_q3.php', time() + 365*24*3600);
header('Location: questions.php');





