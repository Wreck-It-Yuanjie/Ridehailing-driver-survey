<?php
// RESULT SELECTED IN QUESTION //
session_start();
$dailystarttimebinary = $_POST['dailystarttimebinary'];
$dailystartworkingtime = $_POST['dailystartworkingtime'];

if(empty($dailystarttimebinary)){
	$dailystarttimebinary = "";
}

if(empty($dailystartworkingtime)){
	$dailystartworkingtime = "";
}


// END OF RESULT IMPORT //

// MYSQL CONNECTION //

include('RDconnect.php');

// SAVE QUIZ DATA


$reponse = $bdd->prepare('insert into S1_q2 (dailystarttimebinary, dailystartworkingtime,user,date) values(:dailystarttimebinary, :dailystartworkingtime, :user, CURRENT_TIMESTAMP)');



$user = $_COOKIE['user'];



$reponse->execute(array(
	'dailystarttimebinary' => $dailystarttimebinary,
	'dailystartworkingtime' => $dailystartworkingtime,
	'user' =>$user,
	));





// END OF MYSQL CONNECTION //


setcookie('progress', 'S1_q3.php', time() + 365*24*3600);
header('Location: questions.php');



