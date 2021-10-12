<?php

session_start();
include('RDconnect.php');


$modechoice0 = $_POST['sp5modechoice0_worktime'];


if( empty($modechoice0)){
	$modechoice0 = 0;
}


$_SESSION['sp5modechoice0_worktime']= $modechoice0;


// END OF RESULT IMPORT //

// MYSQL CONNECTION //


// SAVE QUIZ DATA


$reponse = $bdd->prepare('insert into S2_WTRL_q5 (choice_worktime, p, sp, user, date) values( :choice_worktime, :p, :sp, :user, CURRENT_TIMESTAMP)');



$user = $_COOKIE['user'];




$reponse->execute(array(
	'choice_worktime' => $_SESSION['sp5modechoice0_worktime'],
	'p' => $_SESSION['userlvl_worktime'],
	'sp' => 5,
	'user' => $user,
	));





// END OF MYSQL CONNECTION //

setcookie('progress', 'S2_WTRL_RL_q5.php', time() + 365*24*3600);
header('Location: questions.php');





