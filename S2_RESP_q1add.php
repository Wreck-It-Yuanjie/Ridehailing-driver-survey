<?php

session_start();
include('RDconnect.php');


$modechoice0 = $_POST['sp1modechoice0'];


if( empty($modechoice0)){
	$modechoice0 = 0;
}


$_SESSION['sp1modechoice0']= $modechoice0;


// END OF RESULT IMPORT //

// MYSQL CONNECTION //


// SAVE QUIZ DATA


$reponse = $bdd->prepare('insert into S2_RESP_q1 (choice, p, sp, user, date) values(:choice, :p, :sp, :user, CURRENT_TIMESTAMP)');



$user = $_COOKIE['user'];




$reponse->execute(array(
	'choice' => $_SESSION['sp1modechoice0'],
	'p' => $_SESSION['userlvl'],
	'sp' => 1,
	'user' => $user,
	));





// END OF MYSQL CONNECTION //

setcookie('progress', 'S2_RESP_q2.php', time() + 365*24*3600);
header('Location: questions.php');





