<?php
// RESULT SELECTED IN QUESTION //
session_start();
$dailystoptimebinary = $_POST['dailystoptimebinary'];
$dailystopworkingtime = $_POST['dailystopworkingtime'];

if(empty($dailystoptimebinary)){
	$dailystoptimebinary = "";
}

if(empty($dailystopworkingtime)){
	$dailystopworkingtime = "";
}

// END OF RESULT IMPORT //

// MYSQL CONNECTION //

include('RDconnect.php');

// SAVE QUIZ DATA


$reponse = $bdd->prepare('insert into S1_q3 (dailystoptimebinary, dailystopworkingtime, user,date) values(:dailystoptimebinary, :dailystopworkingtime, :user, CURRENT_TIMESTAMP)');



$user = $_COOKIE['user'];



$reponse->execute(array(
	'dailystoptimebinary' => $dailystoptimebinary,
	'dailystopworkingtime' => $dailystopworkingtime,
	'user' =>$user,
	));





// END OF MYSQL CONNECTION //


setcookie('progress', 'S1_q5.php', time() + 365*24*3600);
header('Location: questions.php');



