<?php
session_start();
// RESULT SELECTED IN QUESTION //

$dailyincomebinary = $_POST['dailyincomebinary'];
$_SESSION['dailyincomebinary'] = $dailyincomebinary;

$dailyincome = $_POST['dailyincome'];
$_SESSION['dailyincome'] = $dailyincome;

if( empty($dailyincome)){
	$dailyincome = "";
}
// END OF RESULT IMPORT //

// MYSQL CONNECTION //

include('RDconnect.php');

// SAVE QUIZ DATA


$reponse = $bdd->prepare('insert into S1_q7 (dailyincomebinary,dailyincome,user,date) values(:dailyincomebinary,:dailyincome,:user,CURRENT_TIMESTAMP)');



$user = $_COOKIE['user'];





$reponse->execute(array(
	'dailyincomebinary' => $dailyincomebinary,
	'dailyincome' => $dailyincome,
	'user' =>$user,
	));





// END OF MYSQL CONNECTION //




setcookie('progress', 'S1_q9.php', time() + 365*24*3600);
header('Location: questions.php');





