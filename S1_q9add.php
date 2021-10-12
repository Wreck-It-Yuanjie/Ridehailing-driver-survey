<?php
// RESULT SELECTED IN QUESTION //

$q9 = $_POST['q9'];

$q10 = $_POST['q10'];

// END OF RESULT IMPORT //

// MYSQL CONNECTION //

session_start();

$_SESSION['q9'] = $q9;

$_SESSION['q10'] = $q10;


include('RDconnect.php');

// SAVE QUIZ DATA


$reponse = $bdd->prepare('insert into S1_q9 (s1q9,s1q10,user,date) values(:s1q9,:s1q10,:user,CURRENT_TIMESTAMP)');

//setcookie('user',$ruser, time() - 365*24*3600);

$user = $_COOKIE['user'];





$reponse->execute(array(
	's1q9' => $q9,
	's1q10' => $q10,
	'user' =>$user,
	));





// END OF MYSQL CONNECTION //

if ($q9==""){
setcookie('progress', 'S1_q9.php', time() + 365*24*3600);
header('Location: questions.php');
}else{
setcookie('progress', 'S3_q1.php', time() + 365*24*3600);
header('Location: questions.php');
}




