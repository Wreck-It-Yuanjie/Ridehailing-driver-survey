<?php

session_start();
include('RDconnect.php');

// ## Relocation
$relocationchoice0= $_POST['sp1relocation'];


if( empty($relocationchoice0)){
	$relocationchoice0 = 0;
}


$_SESSION['sp1relocation']= $relocationchoice0;

## Worktime choice
$worktimechoice0= $_POST['sp1worktime2'];

if( empty($worktimechoice0)){
	$worktimechoice0 = 0;
}


$_SESSION['sp1worktime2']= $worktimechoice0;


// END OF RESULT IMPORT //

// MYSQL CONNECTION //


// SAVE QUIZ DATA

if ($_SESSION['sp1modechoice0_worktime'] == "Yes"){
	$reponse = $bdd->prepare('insert into S2_WTRL_RL_q1 (choice_worktime, choice_relocation, p, sp, user, date) values(:choice_worktime, :choice_relocation, :p, :sp, :user, CURRENT_TIMESTAMP)');



	$user = $_COOKIE['user'];




	$reponse->execute(array(
		'choice_worktime' => $_SESSION['sp1modechoice0_worktime'],
		'choice_relocation' => $_SESSION['sp1relocation'],
		'p' => $_SESSION['userlvl_worktime'],
		'sp' => 1,
		'user' => $user,
		));
}
else{
	$reponse = $bdd->prepare('insert into S2_WTRL_WT_q1 (choice_worktime, choice_worktime2, p, sp, user, date) values(:choice_worktime, :choice_worktime2, :p, :sp, :user, CURRENT_TIMESTAMP)');



	$user = $_COOKIE['user'];




	$reponse->execute(array(
		'choice_worktime' => $_SESSION['sp1modechoice0_worktime'],
		'choice_worktime2' => $_SESSION['sp1worktime2'],
		'p' => $_SESSION['userlvl_worktime'],
		'sp' => 1,
		'user' => $user,
		));
}



// END OF MYSQL CONNECTION //

setcookie('progress', 'S2_WTRL_q2.php', time() + 365*24*3600);
header('Location: questions.php');

?>




