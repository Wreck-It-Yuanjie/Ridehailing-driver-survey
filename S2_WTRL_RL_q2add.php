<?php

session_start();
include('RDconnect.php');

// ## Relocation
$relocationchoice0= $_POST['sp2relocation'];


if( empty($relocationchoice0)){
	$relocationchoice0 = 0;
}


$_SESSION['sp2relocation']= $relocationchoice0;

## Worktime choice
$worktimechoice0= $_POST['sp2worktime2'];

if( empty($worktimechoice0)){
	$worktimechoice0 = 0;
}


$_SESSION['sp2worktime2']= $worktimechoice0;


// END OF RESULT IMPORT //

// MYSQL CONNECTION //


// SAVE QUIZ DATA

if ($_SESSION['sp2modechoice0_worktime'] == "Yes"){
	$reponse = $bdd->prepare('insert into S2_WTRL_RL_q2 (choice_worktime, choice_relocation, p, sp, user, date) values(:choice_worktime, :choice_relocation, :p, :sp, :user, CURRENT_TIMESTAMP)');



	$user = $_COOKIE['user'];




	$reponse->execute(array(
		'choice_worktime' => $_SESSION['sp2modechoice0_worktime'],
		'choice_relocation' => $_SESSION['sp2relocation'],
		'p' => $_SESSION['userlvl_worktime'],
		'sp' => 2,
		'user' => $user,
		));
}
else{
	$reponse = $bdd->prepare('insert into S2_WTRL_WT_q2 (choice_worktime, choice_worktime2, p, sp, user, date) values(:choice_worktime, :choice_worktime2, :p, :sp, :user, CURRENT_TIMESTAMP)');



	$user = $_COOKIE['user'];




	$reponse->execute(array(
		'choice_worktime' => $_SESSION['sp2modechoice0_worktime'],
		'choice_worktime2' => $_SESSION['sp2worktime2'],
		'p' => $_SESSION['userlvl_worktime'],
		'sp' => 2,
		'user' => $user,
		));
}



// END OF MYSQL CONNECTION //

setcookie('progress', 'S2_WTRL_q3.php', time() + 365*24*3600);
header('Location: questions.php');

?>




