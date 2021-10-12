<?php

session_start();
include('RDconnect.php');

// ## Relocation
$relocationchoice0= $_POST['sp6relocation'];


if( empty($relocationchoice0)){
	$relocationchoice0 = 0;
}


$_SESSION['sp6relocation']= $relocationchoice0;

## Worktime choice
$worktimechoice0= $_POST['sp6worktime2'];

if( empty($worktimechoice0)){
	$worktimechoice0 = 0;
}

$_SESSION['sp6worktime2']= $worktimechoice0;


// END OF RESULT IMPORT //

// MYSQL CONNECTION //


// SAVE QUIZ DATA

if ($_SESSION['sp6modechoice0_worktime'] == "Yes"){
	$reponse = $bdd->prepare('insert into S2_WTRL_RL_q6 (choice_worktime, choice_relocation, p, sp, user, date) values(:choice_worktime, :choice_relocation, :p, :sp, :user, CURRENT_TIMESTAMP)');



	$user = $_COOKIE['user'];




	$reponse->execute(array(
		'choice_worktime' => $_SESSION['sp6modechoice0_worktime'],
		'choice_relocation' => $_SESSION['sp6relocation'],
		'p' => $_SESSION['userlvl_worktime'],
		'sp' => 6,
		'user' => $user,
		));
}
else{
	$reponse = $bdd->prepare('insert into S2_WTRL_WT_q6 (choice_worktime, choice_worktime2, p, sp, user, date) values(:choice_worktime, :choice_worktime2, :p, :sp, :user, CURRENT_TIMESTAMP)');



	$user = $_COOKIE['user'];




	$reponse->execute(array(
		'choice_worktime' => $_SESSION['sp6modechoice0_worktime'],
		'choice_worktime2' => $_SESSION['sp6worktime2'],
		'p' => $_SESSION['userlvl_worktime'],
		'sp' => 6,
		'user' => $user,
		));
}



// END OF MYSQL CONNECTION //

setcookie('progress', 'comment.php', time() + 365*24*3600);
header('Location: questions.php');

?>




