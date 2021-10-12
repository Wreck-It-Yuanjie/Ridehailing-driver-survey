<?php
session_start();
// RESULT SELECTED IN QUESTION //

$dailyhoursbinary = $_POST['dailyhoursbinary'];
$_SESSION['dailyhoursbinary'] = $dailyhoursbinary;

$dailyhours = $_POST['dailyhours'];
$_SESSION['dailyhours'] = $dailyhours;
// END OF RESULT IMPORT //

// MYSQL CONNECTION //

if( empty($dailyhours)){
	$dailyhours = "";
}

include('RDconnect.php');

// SAVE QUIZ DATA


$reponse = $bdd->prepare('insert into S1_q5 (dailyhoursbinary,dailyhours,user,date) values(:dailyhoursbinary,:dailyhours,:user,CURRENT_TIMESTAMP)');



$user = $_COOKIE['user'];





$reponse->execute(array(
	'dailyhoursbinary' => $dailyhoursbinary,
	'dailyhours' => $dailyhours,
	'user' =>$user,
	));





// END OF MYSQL CONNECTION //




setcookie('progress', 'S1_q7.php', time() + 365*24*3600);
header('Location: questions.php');





