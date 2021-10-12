<?php
session_start();
include('RDconnect.php');

$s0q3 = $_POST['s0q3'];
$_SESSION['s0q3'] = $s0q3;

echo $s0q3;


// END OF RESULT IMPORT //

// MYSQL CONNECTION //

// SAVE QUIZ DATA


$reponse = $bdd->prepare('insert into S0_q3 (user,date,s0q3) values(:user,CURRENT_TIMESTAMP,:s0q3)');



$user = $_COOKIE['user'];





$reponse->execute(array(
	's0q3' =>$s0q3,
	'user' =>$user,
	));





// END OF MYSQL CONNECTION //

setcookie('progress', 'S1_q1.php', time() + 365*24*3600);
header('Location: questions.php');





