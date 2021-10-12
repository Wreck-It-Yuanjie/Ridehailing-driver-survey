<?php

session_start();



$att1 = $_POST['att1'];
$_SESSION['att1']= $att1;


include('RDconnect.php');
// END OF RESULT IMPORT //

// MYSQL CONNECTION //
$reponse = $bdd->prepare('insert into Attention (att1,user,date) values(:att1,:user,CURRENT_TIMESTAMP)');



$user = $_COOKIE['user'];





$reponse->execute(array(
	'att1' => $att1,
	'user' =>$user,
	));

// SAVE QUIZ DATA





// END OF MYSQL CONNECTION //
setcookie('progress', 'S2_WTRL_q4.php', time() + 365*24*3600);
header('Location: questions.php');





