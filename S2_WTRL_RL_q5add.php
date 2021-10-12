<?php

session_start();
include('RDconnect.php');

// ## Relocation
$relocationchoice0= $_POST['sp5relocation'];


if( empty($relocationchoice0)){
	$relocationchoice0 = 0;
}


$_SESSION['sp5relocation']= $relocationchoice0;

## Worktime choice
$worktimechoice0= $_POST['sp5worktime2'];

if( empty($worktimechoice0)){
	$worktimechoice0 = 0;
}


$_SESSION['sp5worktime2']= $worktimechoice0;


// END OF RESULT IMPORT //

// MYSQL CONNECTION //


// SAVE QUIZ DATA

if ($_SESSION['sp5modechoice0_worktime'] == "Yes"){
	$reponse = $bdd->prepare('insert into S2_WTRL_RL_q5 (choice_worktime, choice_relocation, p, sp, user, date) values(:choice_worktime, :choice_relocation, :p, :sp, :user, CURRENT_TIMESTAMP)');



	$user = $_COOKIE['user'];




	$reponse->execute(array(
		'choice_worktime' => $_SESSION['sp5modechoice0_worktime'],
		'choice_relocation' => $_SESSION['sp5relocation'],
		'p' => $_SESSION['userlvl_worktime'],
		'sp' => 5,
		'user' => $user,
		));
}
else{
	$reponse = $bdd->prepare('insert into S2_WTRL_WT_q5 (choice_worktime, choice_worktime2, p, sp, user, date) values(:choice_worktime, :choice_worktime2, :p, :sp, :user, CURRENT_TIMESTAMP)');



	$user = $_COOKIE['user'];




	$reponse->execute(array(
		'choice_worktime' => $_SESSION['sp5modechoice0_worktime'],
		'choice_worktime2' => $_SESSION['sp5worktime2'],
		'p' => $_SESSION['userlvl_worktime'],
		'sp' => 5,
		'user' => $user,
		));
}



// END OF MYSQL CONNECTION //

setcookie('progress', 'S2_WTRL_q6.php', time() + 365*24*3600);
header('Location: questions.php');

?>




